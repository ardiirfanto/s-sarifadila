<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerHandleController extends Controller
{
    public function store($data)
    {
        dump($data);
    }

    function calculateAnswerMark($nisn, $quiz_id)
    {
        $answers = DB::table('answers');
        if (!empty($nisn)) {
            $answers->where('siswa_code_id', $nisn);
        }
        $rs = $answers->where("question_id", "=", $quiz_id)->select("answers.siswa_code_id", "answers.question_id", "answers.option_id")->get()->map(function ($answer) use ($quiz_id) {
            $option = DB::table('options')->select("id", "question_id", "option", "nilai")->where('id', $answer->option_id);
            $answer->question = DB::table('questions')->select("id", "quiz_id")->where('id', $answer->question_id)->first() ?? '';
            $answer->nilai = $option->pluck('nilai')->first() ?? '';
            $answer->option = $option->first() ?? [];
            return $answer;
        });
        $final = [];
        $idx = 0;
        $rs->groupBy('siswa_code_id')->map(function ($answer) use (&$final, &$idx) {
            foreach ($answer as $keys => $value) {
                if (!isset($final[$idx]['finalMark'])) {
                    $final[$idx]['finalMark'] = 0;
                    $final[$idx]['answer'] = [];
                }
                $final[$idx]['finalMark'] += (int)$value->nilai;
            }
            $final[$idx]['answer'] = $answer->toArray();
            $idx++;
        });
        if (!empty($nisn)) {
            return $final[0]['finalMark'] ?? 0;
        }
        // dd($final);
        return $final;
    }

    function saveQuizAnswer(Request $request)
    {
        $data = json_decode($request->input("jawaban"), true);
        $nisn = array_pop($data);
        collect($data)->map(function ($item) use ($nisn) {
            DB::table('answers')->insert([
                'siswa_code_id' => $nisn['nisn'],
                'question_id' => $item['question_id'],
                'option_id' => $item['option_id'],
                'code' => session()->get('code'),
            ]);
        });
        $finalResult = 0;
        $code = session()->get('code');
        $quiz_id = DB::table('codes')->where('code', $code)->join('questions', "questions.quiz_id", "=", 'codes.quiz_id')->get('questions.id as quiz_id');
        foreach ($quiz_id as $key => $value) {
            $finalResult += $this->calculateAnswerMark($nisn['nisn'], $value->quiz_id);
        }

        Score::create([
            'nama' => session()->get('name'),
            'nisn' => $nisn['nisn'],
            'code' => session()->get('code'),
            'nilai' => $finalResult
        ]);

        return response()->json($finalResult);
    }
}
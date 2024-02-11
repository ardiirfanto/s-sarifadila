<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerHandleController extends Controller
{
    public function store($data)
    {
        dump($data);
    }
    function calculateAnswerMark(Request $request)
    {
        $siswa_code_id = $request->input('siswa_code_id');
        $answers = DB::table('answers');
        if (!empty($siswa_code_id)) {
            $answers->where('siswa_code_id', $siswa_code_id);
        }
        $rs =  $answers->select("answers.siswa_code_id", "answers.question_id", "answers.option_id")->get()->map(function ($answer) {
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
        dd($final);
    }

    function saveStudentsAnswer (Request $request){
        $data = $request->all();
        dd($data);
    }
}

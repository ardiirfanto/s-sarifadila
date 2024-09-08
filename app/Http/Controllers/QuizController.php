<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Code;
use App\Models\Question;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    function view_soal($code)
    {
        try {
            $nisn = Auth::user()->nisn;

            $arr_color = [
                "primary",
                "danger",
                "success",
                "warning",
            ];

            // Cari ID code dg berdasarkan kode
            $getCodeId = Code::where('code', $code)->first()->id;
            // Cari quiz yang berkaitan dengan kode tersebut
            $getQuiz = Code::find($getCodeId)->quiz;
            // Dapatkan ID Quiz
            $getQuizId = $getQuiz->id;

            $countQuestion = Question::where('quiz_id', $getQuizId)->count();
            $countAnswer = Answer::where(['code' => $code, 'siswa_code_id' => $nisn])->count();

            if ($countAnswer >= $countQuestion) {
                echo view('quiz.components.selesai', ['code' => $code]);
                exit;
            }

            // Tampilkan pertanyaan dan pilgan berdasarkan relasi dari ID Quiz diatas
            $getQuestion = Question::with('options')
                ->where('quiz_id', $getQuizId)
                ->whereNotIn('id', Answer::where('siswa_code_id', $nisn)->get('question_id')->toArray())
                ->first();

            shuffle($arr_color);
            $params = [
                'soal' => $getQuestion,
                'colors' => $arr_color
            ];

            // echo json_encode($params);
            // exit;

            echo view('quiz.components.soal_quiz', $params);

            // $trackingCode = Answer::where('siswa_code_id', 'LIKE', '%' . $nisn . '%')
            //     ->where('code', 'LIKE', '%' . $code . '%')->exists();
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    function store_answer(Request $req)
    {
        $nisn = Auth::user()->nisn;

        $post = [
            "siswa_code_id" => $nisn,
            "option_id" => $req->answer,
            "question_id" => $req->question,
            "code" => $req->code,
        ];

        $where = [
            "siswa_code_id" => $nisn,
            "question_id" => $req->question,
        ];

        $store = Answer::updateOrCreate($where, $post);
        if ($store) {
            echo 1;
        } else {
            echo 0;
        }
    }

    function view_nilai($code)
    {
        $finalResult = 0;
        $nisn = Auth::user()->nisn;
        $quiz_id = DB::table('codes')->where('code', $code)->join('questions', "questions.quiz_id", "=", 'codes.quiz_id')->get('questions.id as quiz_id');
        foreach ($quiz_id as $key => $value) {
            $finalResult += $this->calculateAnswerMark($nisn, $value->quiz_id);
        }

        Score::create([
            'nama' => session()->get('name'),
            'nisn' => $nisn,
            'code' => $code,
            'nilai' => $finalResult
        ]);

        $params = [
            "nilai" => $finalResult
        ];

        return view("quiz.hasil_quiz", $params);
    }

    private function calculateAnswerMark($nisn, $quiz_id)
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
}

<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Code;
use App\Models\Question;
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

            $countQuestion = Question::where('quiz_id',$getQuizId)->count();
            $countAnswer = Answer::where(['code' => $code,'siswa_code_id' => $nisn])->count();

            if($countAnswer >= $countQuestion){
                echo view('quiz.components.selesai',['code' => $code]);
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

            echo view('quiz.components.soal', $params);

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

        $store = Answer::updateOrCreate($where,$post);
        if ($store) {
            echo 1;
        } else {
            echo 0;
        }
    }
}

@extends('layouts.default')
@section('title')
    <div id="timer"></div>
@endsection
@section('content')
<style>
.card-gradient-bg {
  background: #0cebeb;
  background: -webkit-gradient(linear, left top, right top, from(#29ffc6), color-stop(#20e3b2), to(#0cebeb));
  background: linear-gradient(to right, #9b59b6, #8e44ad, #6c3483);
}
    </style>
    <div class="sm:w-3/4 xl:w-1/2 w-full mt-8">
        {{-- <form class="bg-white shadow-lg px-5 py-8" id="submit">
            <ul class="list-decimal p-0">
                @foreach ($getQuestion as $item)
                    <li class="mt-8">{{ $loop->iteration . ' - ' . $item->pertanyaan }}</li>
                    @if ($item->gambar)
                        <img src="{{ url('storage/soal/gambar/' . $item->gambar) }}" class="w-96" alt="">
                    @endif
                    <ul id="option_parent" class="opt-{{ $loop->iteration }} mt-3">
                        @foreach ($item->options as $key => $row)
                            <li wire:key='{{ $row->id }}'>
                                <div class="flex items-center mb-4 gap-4">
                                    <input data-question-id="{{ $row->question_id }}" role="button" type="radio"
                                        id="idans{{ $key + 1 }}" name="nameans{{ $row->question_id }}"
                                        value="{{ $row->id }}" class="radioBtn">
                                    <label for="{{ $row->option }}">{{ $row->option }}</label>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>
            <div class="flex justify-end mb-5">
                <button id="btn-submit" onclick="submitAnswer(this)" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Kirim
                </button>
            </div>
            <input type="hidden" name="nisn" id="nisn" value="{{ session('nisn') }}">
        </form> --}}
        <div class="py-3 px-1.5 ">
        <div class="card card-gradient-bg">
                <div class="card-body">
                    <input type="hidden" id="code" name="code" value="{{ $quiz_code }}">
                    <div id="soal" class="pt-20 text-white">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('js/bg-music-quiz.js') }}"></script>
    <script>
        let submitted = false;
        $(document).ready(function() {
            timer();
            loadSoal();
        });

        function validateAnswer(input) {
            var value = input.value;
            var nilai = input.getAttribute("data-nilai");
            var label = document.getElementById("label" + value);
            var labelClass = document.querySelectorAll(".label");

            labelClass.forEach(function(el) {
                el.classList.remove("bg-success")
                el.classList.remove("bg-danger")
            })
            if (nilai > 0) {
                soundCorrect()
                label.classList.add("bg-success")
            } else {
                soundWrong()
                label.classList.add("bg-danger")
            }
            saveAnswer()
        }

        function saveAnswer() {
            var question = $("#question").val();
            var code = $("#code").val();
            var answer = $('input[name="answer"]:checked').val();


            $.ajax({
                url: "{{ route('ajax.store_answer') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "answer": answer,
                    "question": question,
                    "code": code,
                }
            }).then(function(res) {
                console.log(res);
                loadSoal()
            }).catch(function(err) {
                console.log(err);
            })
        }

        function loadSoal() {
            $.ajax({
                url: "{{ url('ajax/soal/' . $quiz_code) }}",
                type: "GET",
            }).then(function(res) {
                // console.log(res);
                // $('#nilai').text(JSON.stringify(res));
                // $('#modalToggle').click()
                $("#soal").html(res);
            }).catch(function(err) {
                console.log(err);
            })
        }

        function timer() {

            var detik = {{ $time['detik'] }};
            var menit = {{ $time['menit'] }};
            var jam = {{ $time['jam'] }};

            function hitung() {
                if (menit > 0 || jam > 0 || detik > 0) {
                    setTimeout(hitung, 1000);
                };

                if (menit < 10 && jam == 0) {
                    var peringatan = 'style="color:red"';
                };

                $('#timer').html(
                    '<h6 align="center"' + peringatan + '><b>' + jam + ' jam : ' + menit +
                    ' menit : ' + detik + ' detik</b></h6>'
                );

                detik--;

                if (detik < 0) {
                    detik = 59;
                    menit--;
                    if (menit < 0) {
                        menit = 59;
                        jam--;

                        if (jam < 0) {
                            autochecked()
                            submitAnswer($('#btn-submit'))
                        }
                    }
                }
            }
            hitung();
        }

        function autochecked() {
            var arr_q_id = [];
            var opt_arr = $('.list-decimal #option_parent').length;
            for (i = 1; i <= opt_arr; i++) {
                $(".opt-" + i + " li input[type='radio']").each(function() {
                    var q_id = $(this).data('question-id')
                    if (!arr_q_id.includes(q_id)) {
                        arr_q_id.push(q_id)
                    }
                })
            }
            arr_q_id.forEach(val => {
                var input_radio = $("input[name='nameans" + val + "']")
                var input_length = input_radio.length
                var index_rand = Math.floor(Math.random() * input_length) + 1;
                if (!input_radio.is(':checked')) {
                    var val_input = $("input[name='nameans" + val + "'][id='idans" + index_rand + "']")
                    val_input.attr('checked', 'checked')
                    // console.log("nameans"+val)
                    // console.log("idans"+index_rand)
                    // console.log(val_input.val())

                }
            });
        }

        async function submitAnswer(elem) {
            if (submitted) {
                $('#modalToggle').click()
                return
            }
            $(elem).attr('disabled', 'disabled');
            $(elem).html(
                `<svg width="24" height="24" stroke="#fff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><style>.spinner_V8m1{transform-origin:center;animation:spinner_zKoa 2s linear infinite}.spinner_V8m1 circle{stroke-linecap:round;animation:spinner_YpZS 1.5s ease-in-out infinite}@keyframes spinner_zKoa{100%{transform:rotate(360deg)}}@keyframes spinner_YpZS{0%{stroke-dasharray:0 150;stroke-dashoffset:0}47.5%{stroke-dasharray:42 150;stroke-dashoffset:-16}95%,100%{stroke-dasharray:42 150;stroke-dashoffset:-59}}</style><g class="spinner_V8m1"><circle cx="12" cy="12" r="9.5" fill="none" stroke-width="3"></circle></g></svg>`
            );

            let jawaban = [];
            $('#option_parent li input[type="radio"]:checked').each(function() {
                jawaban.push({
                    "option_id": $(this).val(),
                    "question_id": $(this).attr('data-question-id')
                })
            })

            if (jawaban.length <= 0) {
                $(elem).html('Kirim');
                alert('Harap Isikan Kuis');
                $(elem).removeAttr('disabled');
                return;
            }

            jawaban.push({
                "nisn": $('#nisn').val()
            })

            $.ajax({
                url: "{{ route('quiz.submit') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "jawaban": JSON.stringify(jawaban)
                }
            }).then(function(res) {
                // console.log(res);
                // $('#nilai').text(JSON.stringify(res));
                // $('#modalToggle').click()
                // $(elem).html('Lihat Nilai');
                // $(elem).removeAttr('disabled');
                submitted = true;
                window.location.href = `/hasil/${JSON.stringify(res)}`
            }).catch(function(err) {
                console.log(err);
                $(elem).html('Kirim');
                alert('Terjadi kesalahan');
                $(elem).removeAttr('disabled');
                submitted = true;
            })
        };
    </script>
@endpush

<div class="sm:w-3/4 xl:w-1/2 w-full">

    {{-- <div>
        <!-- Modal toggle -->
        <button id="modalToggle" style="display: none" data-modal-target="authentication-modal"
            data-modal-toggle="authentication-modal"
            class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-6 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">
            Quiz
        </button>

        <!-- Main modal -->
        <div wire:ignore.self id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Hasil Quiz
                        </h3>
                        <button type="button"
                            class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        @if (session('status'))
                            <div class="flex items-center p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Warning!</span> {{ session('status') }}
                                </div>
                            </div>
                        @endif
                        <form class="space-y-4" wire:submit='submit'>
                            <div class="min-h-[200px]">
                                <h2 class="text-lg font-semibold text-center">Nilai Kamu</h2>
                                <div
                                    class="border-2 border-gray-200 border-dashed rounded-lg min-h-[100px] flex justify-center items-center">
                                    <h1 id="nilai" class="text-center text-lg font-bold" style="font-size: 20pt;">
                                        120</h1>
                                </div>

                                <div class="grid grid-cols-2 gap-2">
                                <div class="grid grid-cols-subgrid"><button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Masuk</button>
                                </div>
                                <div class="grid grid-cols-subgrid"><button type="submit"
                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <form class="bg-white shadow-lg px-5 py-8" id="submit">
        <h3 class="text-xl font-semibold">Quiz</h3>
        <ul class="list-decimal ms-4">
            @foreach ($data as $item)
                <li class="mt-8">{{ $item->pertanyaan }}</li>
                @if ($item->gambar)
                    <img src="{{ url('storage/soal/gambar/' . $item->gambar) }}" class="w-96" alt="">
                @endif
                <ul id="option_parent" class="mt-3">
                    @foreach ($item->options as $row)
                        <li wire:key='{{ $row->id }}'>
                            <div class="flex items-center mb-4 gap-4">
                                <input data-question-id ="{{ $row->question_id }}" role="button" type="radio"
                                    id="{{ $row->option }}" name="{{ $item->pertanyaan }}" value="{{ $row->id }}"
                                    class="radioBtn">
                                <label for="{{ $row->option }}">{{ $row->option }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </ul>
        <div class="flex justify-end">
            <button onclick="submitAnswer(this)" type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
        </div>
        <input type="hidden" name="nisn" id="nisn" value="{{ session('nisn') }}">
    </form>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let submitted = false;
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
                // submitted = true;
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
</div>

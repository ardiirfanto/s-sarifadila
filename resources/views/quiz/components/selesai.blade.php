<div class="row bg-transparent">
    <div class="col-12">
        <div>
            <lottie-player src="{{ asset('jsons/medal.json') }}" background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop autoplay>
            </lottie-player>
        </div>
        <div class="text-xl text-center">
            Kamu sudah selesai mengerjakan Quiz. Silahkan lihat Nilai Kamu!
        </div>
        <div class="d-flex mt-10 justify-center">
            <a href="{{ route('quiz_nilai', ['code' => $code]) }}" class="btn btn-success">
                Lihat Nilai
            </a>
        </div>
    </div>
</div>

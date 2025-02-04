<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('js/background-music.js') }}"></script> Efek Sound Background --}}
{{-- <script>
    const audio = new Audio()
    audio.src = './assets/click.mp3'
    let baseUrl = {{ Js::from(url('/')) }};
    let link

    $(".clickSound").click(function(){
        const link = $(this).attr("data-link")
        audio.play()

        setTimeout(() => {
            window.location.href = `${baseUrl}/${link}`
        }, 1000);
    })
</script> --}}

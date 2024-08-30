document.addEventListener("DOMContentLoaded", function (event) {
    event.preventDefault()

    var audio = new Audio()
    const indexRand = Math.floor(Math.random() * 4);
    audio.src = './../assets/music/win.mp3'
    audio.volume = 1
    audio.autoplay = true
    audio.loop = false
    audio.play()
});

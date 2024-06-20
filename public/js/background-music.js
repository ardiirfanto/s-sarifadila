document.addEventListener("DOMContentLoaded", function (event) {
    event.preventDefault()
    const musicArr = [
        'bgmusic1.m4a',
        'bgmusic2.m4a',
        'bgmusic3.m4a',
        'bgmusic4.m4a',
    ];

    var audio = new Audio()
    const indexRand = Math.floor(Math.random() * 4);
    audio.src = './../assets/music/' + musicArr[indexRand]
    audio.volume = 0.1
    audio.autoplay = true
    audio.loop = true
    audio.play()
});

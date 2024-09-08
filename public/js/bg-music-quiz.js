function soundCorrect() {
    const audio = new Audio()
    audio.src = '../assets/music/correct.mp3'
    audio.play()
    console.log("Correct")
}
function soundWrong() {
    const audio = new Audio()
    audio.src = '../assets/music/wrong.mp3'
    audio.play()
    console.log("Wrong")
}

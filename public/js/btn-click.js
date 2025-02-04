
const audio = new Audio()
audio.src = './assets/tuing.mp3'

function animateBtn(idComp) {
    soundBtn()
    var element = document.getElementById(idComp)
    element.classList.add('btn-animate')
    setTimeout(() => {}, 1000);
}

function animateBtnPelajaran(idComp, href) {
    soundBtn()
    var element = document.getElementById(idComp)
    element.classList.add('btn-animate')
    setTimeout(() => {
        window.location.href = href
    }, 1000);
    setTimeout(function () {
        clearAnimateBtn(element)
    }, 1500);
}

function clearAnimateBtn(element) {
    // listId.forEach(element => {
    element.classList.remove('btn-animate')
    // });
}

function soundBtn() {
    audio.play()
}

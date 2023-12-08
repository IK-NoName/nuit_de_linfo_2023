
function moveQuestionRight() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveRight');
}

function moveQuestionLeft() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveLeft');
}

function cauchemar_button() {
    var cauchemar_button = document.querySelector(".cauchemar");
    cauchemar_button.classList.add('moveRandom');
}

let buttonV = document.querySelector(".oui");
let buttonX = document.querySelector(".non");
let buttonCauch = document.querySelector(".cauchemar");

buttonV.addEventListener("click", moveQuestionRight);
buttonX.addEventListener("click", moveQuestionLeft);
buttonCauch.addEventListener("mouseenter",cauchemar_button);


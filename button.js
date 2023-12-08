
function moveQuestionRight() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveLeft');
}

function moveQuestionLeft() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveRight');
}

function cauchemar_button() {
    var cauchemar_button = document.querySelector(".cauchemar");
    cauchemar_button.classList.add('moveRandom');
}

function get_random_position(){
    let res = [ (Math.random() * 1920).toFixed(0) , (Math.random() * 1080).toFixed(0)]
    return res;
}

function randomize_position(){
    document.getElementById('button').style.left="".concat(get_random_position()[0]).concat("px");
    console.log("".concat(get_random_position()[0]).concat("px"))
    button.style.left = get_random_position()[0];
    button.style.top = get_random_position()[1];
}


let buttonV = document.querySelector(".oui");
let buttonX = document.querySelector(".non");
let buttonCauch = document.querySelector(".cauchemar");

buttonV.addEventListener("click", moveQuestionRight);
buttonX.addEventListener("click", moveQuestionLeft);
buttonCauch.addEventListener("mouseenter",randomize_position);


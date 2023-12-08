
async function moveQuestionRight() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveRight');
    await setTimeout(function (){
        questionDiv.classList.remove('moveRight');
        update_user_stats(current_element, 1);
        set_question(questions_array);
    },600)

}

async function moveQuestionLeft() {
    var questionDiv = document.querySelector(".question");
    questionDiv.classList.add('moveLeft');
    await setTimeout(function (){
        questionDiv.classList.remove('moveLeft');
        update_user_stats(current_element, 0);
        set_question(questions_array);
    },600);


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

async function get_questions()
{
    let res = null;
    await axios.get("Server/main.php?request=get_questions").then((response) => {
        res = response.data;
    })
    return res;
}

function set_question(question_array)
{
    let rnd = Math.round(Math.random() * question_array.length - 1);
    current_element = question_array[rnd];
    question_array = question_array.splice(rnd, 1);
    console.log(current_element);
    question_text.innerText = current_element.text;
}

function update_user_stats(element, answer)
{
    let data = new FormData();
    data.append("request", "get_question_stats");
    data.append("id_question", element.id);
    axios.get("Server/main.php?request=get_question_stats&id_question="+element.id).then((response) => {
        console.log(response.data)
        let data = new FormData();
        data.append("request", "post_user_stat");
        data.append("response", answer);
        data.append("id_question", response.data.id_question);
        data.append("id_stat", response.data.id_stat);
        data.append("value", response.data.value)
        axios.post("Server/main.php", data).then((response) => {
            console.log(response);
        })
    })
}

var questions_array = await get_questions();
var current_element = null;
let buttonV = document.querySelector(".oui");
let buttonX = document.querySelector(".non");
let buttonCauch = document.querySelector("#cauchemard");
let question_text = document.querySelector(".questiontext");

buttonV.addEventListener("click", moveQuestionRight);
buttonX.addEventListener("click", moveQuestionLeft);
buttonCauch.addEventListener("mouseenter",randomize_position);


set_question(questions_array);





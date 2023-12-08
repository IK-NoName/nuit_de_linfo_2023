
//CAUCHEMAR

let btnNonCauchemar = document.querySelector("#nonCauchemar")
let btnOuiCauchemar = document.querySelector("#ouiCauchemar")

btnNonCauchemar.addEventListener("click", moveQuestionRightCauchemar); 
btnOuiCauchemar.addEventListener("click", moveQuestionLeftCauchemar);

 function moveQuestionRightCauchemar() {
    reponseUtilisateur = confirm("Etes-vous sur de vous ?")
    console.log("1")
    if (reponseUtilisateur) {
        reponseUtilisateur2 = confirm("Vraiment sur ?")
        console.log("2")
        if (reponseUtilisateur2) {
            reponseUtilisateur3 = confirm("En vrai pas sur que tu sois sur.")
            console.log("3")
            if (reponseUtilisateur3) {
                reponseUtilisateur4 = confirm("Bon bah si t'es sur.")
                console.log("4")
                var questionDiv = document.querySelector(".question");
                questionDiv.classList.add('moveRight');
            }
        }else{
            alert("Fallait être sûr, c'est ciao !")
            window.location.href = "https://music.youtube.com/watch?v=3BFTio5296w"
        }

    } else {
        alert("Bon bah si t'es pas sur.")
        window.location.href = "https://puginarug.com/"
    }
} 

function moveQuestionLeftCauchemar() {
    reponseUtilisateur = confirm("Etes-vous sur de vous ?")
    console.log("1")
    if (reponseUtilisateur) {
        reponseUtilisateur2 = confirm("Vraiment sur ?")
        console.log("2")
        if (reponseUtilisateur2) {
            reponseUtilisateur3 = confirm("En vrai pas sur que tu sois sur.")
            console.log("3")
            if (reponseUtilisateur3) {
                reponseUtilisateur4 = confirm("Bon bah si t'es sur.")
                console.log("4")
                var questionDiv = document.querySelector(".question");
                questionDiv.style.transform = "translateX(" + Math.random + ")";
            }
        }else{
            alert("Fallait être sûr, c'est ciao !")
            window.location.href = "https://music.youtube.com/watch?v=3BFTio5296w"
        }

    } else {
        alert("Bon bah si t'es pas sur.")
        window.location.href = "https://puginarug.com/"
    }
}

setInterval(() => {
    container = document.querySelector(".container")
    container.classList.add("spin")
}, 1600);


setInterval(() => {
    container = document.querySelector(".container")
    container.classList.remove("spin")
}, 3200);
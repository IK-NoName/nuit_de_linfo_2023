const body = document.querySelector("body");
let form = body.querySelector("form");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    let data = new FormData(form);
    data.append("request", "login");
    for(let el of data)
    {
        console.log(el)
    }
    axios.post("Server/main.php", data).then((response) => {
        console.log(response.data)
    })
})
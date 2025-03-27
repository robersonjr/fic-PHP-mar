// variaveis
const nome = document.querySelector("#nome")
const button = document.querySelector("button")
const lista = document.querySelector(".lista")

// criar uma função
function cadUser(event) {
    event.preventDefault();
    const inputValue = nome.value;
    const templateHTML = `<li>${inputValue}</li>`;

    lista.innerHTML += templateHTML;
    //limpar campo
    setTimeout(() => {
        window.location.href="./outra.html";
    }, 5000);

    nome.value = "";

}


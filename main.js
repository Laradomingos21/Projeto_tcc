// MENSAGEM DE LOGIN COM SUCESSO OU COM ERRO
const msgDiv = document.getElementById("mensagem");

if (msgDiv && msgDiv.innerText.trim() !== "") {
    msgDiv.style.display = "block";

    const status = msgDiv.getAttribute("data-status");

    if (status === "ok") {
        msgDiv.style.color = "green";
    } else {
        msgDiv.style.color = "red";
    }

    setTimeout(() => {
        if (status === "ok") {
            window.location.href = "index_sistema.php";
        } else {
            msgDiv.style.display = "none";
        }
    }, 3000);
}


let trilho = document.getElementById('trilho')
let body = document.querySelector('body')

trilho.addEventListener('click', () => {
    trilho.classList.toggle('dark')
    body.classList.toggle('dark')
});
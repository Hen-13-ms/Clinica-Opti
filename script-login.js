const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function redireccion(){
    //location.href="\\/Clinica-Optica/index"
    location.href="Clinica-Optica/index.html"
}
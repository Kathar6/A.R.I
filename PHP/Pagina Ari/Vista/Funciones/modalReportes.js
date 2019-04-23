
/*Definiendo los bloques modal*/
let blqmodal = document.querySelector(".blq_modal");
let btnIngresar = document.querySelectorAll(".btnAbrirModal");
let btnCerrar = document.querySelector(".close");
let blq_modal2 = document.querySelector("#openModal");
/*Funcion para abrir el bloque modal*/
function abrirModal() {
    blq_modal2.style.display = 'block';
    blqmodal.style.animationName = 'animLobby';
    blqmodal.style.animationDuration = '.6s';
    blqmodal.style.animationPlayState = 'running';
};
/*Funcion para cerrar el bloque modal*/
function cerrarModal() {
    blqmodal.style.animationName = 'animLobby2';
    blqmodal.style.animationDuration = '.6s';
}
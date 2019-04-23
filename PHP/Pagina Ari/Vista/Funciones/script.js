/*Función para validar si el usuario es incorrecto*/
window.onload = function validarError() {
    if (window.location.search === "?error=true") {
        let blq_error = document.querySelector(".blq_error");
        blq_error.style.display = 'block';
        blq_error.style.animationPlayState = 'running';
        setTimeout(()=>{
            blq_error.style.animationName = 'animErrorUp'
            blq_error.style.animationPlayState = 'running';

        },3000);
        setTimeout(()=>blq_error.style.display = 'none',3500)
    }
};;
/*Deshabilitar inputs form Usuarios*/
function desInputsDefault(campo) {
    let inputs = document.querySelectorAll(campo);
    for (let i = 0; i <= inputs.length; i++) {
        inputs[i].disabled = false;
    }
}

function desInputsActualizar(campo) {
    let inputs = document.querySelectorAll(campo);
    if (campo === '.campos') {
        for (let i = 0; i < inputs.length; i++) {
            if (i === 3) {
                inputs[3].disabled = true;
            } else {
                inputs[i].disabled = false;
            }
        }
    } else {
        for (let i = 0; i <= inputs.length; i++) {
            if (i === 0) {
                inputs[i].disabled = true;
            } else {
                inputs[i].disabled = false;
            }
        }
    }
}

function desInputsBorrar(campo) {
    let inputs = document.querySelectorAll(campo);
    for (let i = 1; i <= inputs.length; i++) {
        inputs[i].disabled = true;
    }
}
/*Evento cuando hace scroll hacia abajo*/
window.onscroll = function () {
    scrollFunction()
};

/*Boton scroll up*/
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.querySelector(".btnScroll").style.display = "block";
    } else {
        document.querySelector(".btnScroll").style.display = "none";
    }
}

/*Evento scroll up*/
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
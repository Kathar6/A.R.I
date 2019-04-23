window.addEventListener("load", inicio);

function inicio() {
    document.getElementById("guardar").addEventListener("click", guardarU);
    document.getElementById("actualizar").addEventListener("click", actualizarU);
    document.getElementById("eliminar").addEventListener("click", eliminarU);
}

function guardarU() {

    var campos = document.getElementsByClassName("campos");
    var boton = document.getElementsByClassName("boton");
  

    for (var i = 0; i < campos.length; i++) {

        campos[i].disabled = false;
    }


    for (var i = 0; i < boton.length; i++) {
        if (i != 0) {
            boton[i].disabled = false;
        } else {
            boton[i].disabled = true;
        }
    }

    document.getElementById("Opcion").value = "guardar";

}

function actualizarU() {
    var campos = document.getElementsByClassName("campos");
    var boton = document.getElementsByClassName("boton");

    for (var i = 0; i < campos.length; i++) {
        
        if (i != 3) {
            campos[i].disabled = false;
        } else {
            if (!campos[i].disabled) {
                campos[i].disabled = true;
            }
        }

    }

    for (var i = 0; i < boton.length; i++) {
        if (i != 1) {
            boton[i].disabled = false;
        } else {
            boton[i].disabled = true;
        }
    }

    document.getElementById("Opcion").value = "actualizar";

}

function eliminarU(){
    var campos = document.getElementsByClassName("campos");
    var boton = document.getElementsByClassName("boton");  

    for (var i = 0; i < campos.length; i++) {
        
        if (i == 0) {
            campos[i].disabled = false;
        } else {
            if (!campos[i].disabled) {
                campos[i].disabled = true;
            }
        }
    }

    for (var i = 0; i < boton.length; i++) {
        if (i != 2) {
            boton[i].disabled = false;
        } else {
            boton[i].disabled = true;
        }
    }

    document.getElementById("Opcion").value = "eliminar";

}
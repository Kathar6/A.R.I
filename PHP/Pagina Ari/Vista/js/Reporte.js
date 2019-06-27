window.addEventListener("load", inicio);

function inicio() {
    document.getElementById("TodoC").addEventListener("click", todo);
    document.getElementById("Limpiar").addEventListener("click", limpiar);
    var verModal = document.getElementById("VerModal");
    var btnMostrar = document.getElementById("BtnMostrar");
    
    //En caso de que el valor del input escondido sea 1, se mostrará el modal
    if (verModal != null) {
        if (verModal.value == "1") {
            btnMostrar.click();
        }
    }
}

//Función para seleccionar todos los checkbox del reporte
function todo() {
    var todo = document.getElementById("TodoC");
    var idbas = document.getElementById("IdBasC");
    var basnom = document.getElementById("NomBasC");
    var cat = document.getElementById("CatC");
    var idmaq = document.getElementById("IdMaqC");
    var ubcmq = document.getElementById("UbcMaqC");
    var fecha = document.getElementById("FechaC");
    var cant = document.getElementById("CantC");

    if (todo.checked) {
        idbas.checked = true;
        basnom.checked = true;
        cat.checked = true;
        idmaq.checked = true;
        ubcmq.checked = true;
        fecha.checked = true;
        cant.checked = true;
    } else {
        idbas.checked = false;
        basnom.checked = false;
        cat.checked = false;
        idmaq.checked = false;
        ubcmq.checked = false;
        fecha.checked = false;
        cant.checked = false;
    }


}

//Función para limpiar y deseleccionar todos los campos
function limpiar() {
    var todo = document.getElementById("TodoC");
    var idbasc = document.getElementById("IdBasC");
    var basnomc = document.getElementById("NomBasC");
    var catc = document.getElementById("CatC");
    var idmaqc = document.getElementById("IdMaqC");
    var ubcmqc = document.getElementById("UbcMaqC");
    var fechac = document.getElementById("FechaC");
    var cantc = document.getElementById("CantC");


    var basnom = document.getElementById("NomBasI");
    var cat = document.getElementById("NomCatI");
    var ubcmq = document.getElementById("UbcMaqI");
    var fecha1 = document.getElementById("Fecha1I");
    var fecha2 = document.getElementById("Fecha2I");


    todo.checked = false;
    idbasc.checked = false;
    basnomc.checked = false;
    catc.checked = false;
    idmaqc.checked = false;
    ubcmqc.checked = false;
    fechac.checked = false;
    cantc.checked = false;

    basnom.value = "";
    cat.value = "";
    ubcmq.value = "";
    fecha1.value = "";
    fecha2.value = "";
}
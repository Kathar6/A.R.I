function guardar(){

    limpiarInputs();


    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nueva máquina";

    opcion.value = "guardar";      
}


function actualizar(btn){

    limpiarInputs();

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input del modal
    var inputIdMaq = document.getElementById('IdMaq');
    var inputPesoOrg = document.getElementById('pesoOrg');
    var inputPesoPlast = document.getElementById('pesoPlast');
    var inputPesoPapel = document.getElementById('pesoPapel');
    var inputUbicacion = document.getElementById('ubicacion');

    //Se obtiene el id de la fila requerida
    var idMaq = document.getElementById('idMaq'.concat(num)).innerHTML;

    //Se obtienen el peso de la fila requerida
    var  pesoOrg = document.getElementById('PesoOrg'.concat(num)).innerHTML;

    //Se obtienen el peso de la fila requerida
    var  pesoPlast = document.getElementById('PesoPlast'.concat(num)).innerHTML;

    //Se obtienen el peso de la fila requerida
    var  pesoPapel = document.getElementById('PesoPapel'.concat(num)).innerHTML;

    //Se obtiene el website de la fila requerida
    var ubicacion = document.getElementById('Ubicacion'.concat(num)).innerHTML;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar máquina";


    
    //Se setean los valores de la fila a los inputs del modal
    inputIdMaq.value = idMaq;
    inputPesoOrg.value = pesoOrg;
    inputPesoPlast.value = pesoPlast;
    inputPesoPapel.value = pesoPapel;
    inputUbicacion.value = ubicacion

    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

       

}



function eliminar(btn){

    limpiarInputs();
    var inputIdMaq = document.getElementById('IdMaq');
    var inputPesoOrg = document.getElementById('pesoOrg');
    var inputPesoPlast = document.getElementById('pesoPlast');
    var inputPesoPapel = document.getElementById('pesoPapel');
    var inputUbicacion = document.getElementById('ubicacion');
    
    var num = btn.dataset.num;
    var idMaq = document.getElementById('idMaq'.concat(num)).innerHTML;
    inputIdMaq.value = idMaq;
    inputPesoOrg.value = 0;
    inputPesoPlast.value = 0;
    inputPesoPapel.value = 0;

    var opcion = document.getElementById('Opcion');
    
    opcion.value = "eliminar";

    document.getElementById('formulario').submit();
    
}

function buscar(){
    var ubicaciones = document.getElementsByClassName('ubicaciones');
    var inputSearch = document.getElementById('search');
    if(inputSearch.value == ""){
        for(var i = 1;i <= ubicaciones.length;i++){
            document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
        }
    }
    var val = 0;
    var indice = 0;

    for(var i = 0;i < ubicaciones.length;i++){
        if(inputSearch.value == ubicaciones[i].innerHTML){
            val = 1;
            indice = i + 1;
        }
    }
    if(val == 1){
        for(var i = 1;i <= ubicaciones.length;i++){
            if(i != indice){
                document.getElementById('tr'.concat(i)).classList.add("deshabilitar");
            }else{
                document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
            }
        }
    }
}

function limpiarInputs(){
    var inputIdMaq = document.getElementById('IdMaq');
    var inputPesoOrg = document.getElementById('pesoOrg');
    var inputPesoPlast = document.getElementById('pesoPlast');
    var inputPesoPapel = document.getElementById('pesoPapel');
    var inputUbicacion = document.getElementById('ubicacion');

    inputIdMaq.value = "";
    inputPesoOrg.value = "";
    inputPesoPlast.value = "";
    inputPesoPapel.value = "";
    inputUbicacion.value = "";
    
}
function guardar(){

    limpiarInputs();


    var blqRut = document.getElementById('blqRUT');

    
    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nueva empresa";


    blqRut.classList.remove("deshabilitar");


    opcion.value = "guardar";      
}


function actualizar(btn){

    limpiarInputs();

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input de rut,nombre y website del modal
    var inputRut = document.getElementById('RUT');
    var inputNombre = document.getElementById('Nombre');
    var inputWebs = document.getElementById('Website');
    var blqRut = document.getElementById('blqRUT');

    //Se obtienen el nombre de la fila requerida
    var nombre = document.getElementById('Nombre'.concat(num)).innerHTML;

    //Se obtiene el rut de la fila requerida
    var rut = document.getElementById('RUT'.concat(num)).innerHTML;

    //Se obtiene el website de la fila requerida
    var website = document.getElementById('Website'.concat(num)).innerHTML;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar empresa";

    //Se coloca el bloque del rut en invisibile
    blqRut.classList.add("deshabilitar");

    
    //Se setean los valores de la fila a los inputs del modal
    inputRut.value = rut;
    inputNombre.value = nombre;
    inputWebs.value = website;

    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

       

}



function eliminar(btn){

    limpiarInputs();

    var opcion = document.getElementById('Opcion');
    var inputRut = document.getElementById('RUT');
    opcion.value = "eliminar";
    var num = btn.dataset.num;
    var rut = document.getElementById('RUT'.concat(num)).innerHTML;
    inputRut.value = rut;
    document.getElementById('formulario').submit();
    

    
}

function buscar(){
    var nombres = document.getElementsByClassName('nombres');
    var inputSearch = document.getElementById('search');
    if(inputSearch.value == ""){
        for(var i = 1;i <= nombres.length;i++){
            document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
        }
    }
    var val = 0;
    var indice = 0;

    for(var i = 0;i < nombres.length;i++){
        if(inputSearch.value == nombres[i].innerHTML){
            val = 1;
            indice = i + 1;
        }
    }
    if(val == 1){
        for(var i = 1;i <= nombres.length;i++){
            if(i != indice){
                document.getElementById('tr'.concat(i)).classList.add("deshabilitar");
            }else{
                document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
            }
        }
    }
}

function limpiarInputs(){
    var inputRut = document.getElementById('RUT');
    var inputNombre = document.getElementById('Nombre');
    var inputWebs = document.getElementById('Website');

    inputRut.value = "";
    inputNombre.value = "";
    inputWebs.value = "";
    
}
//Función para abrir el modal para guardar el registro en la BD
function guardar(){


    limpiarInputs();

    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nueva basura";

    opcion.value = "guardar";      
}


//Función para abrir el modal para actualizar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a actualizar y setear sus datos
function actualizar(btn){

    limpiarInputs();

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input del modal
    var inputIdBas = document.getElementById('IdBas');
    var selectIdCat = document.getElementById('IdCat');
    var inputNomBas = document.getElementById('NomBas');


    //Se obtiene el id de basura de la fila requerida
    var idbas = document.getElementById('IdBasT'.concat(num)).innerHTML;


    //Se obtiene el id de la categoría de la fila requerida
    var idcat = document.getElementById('IdCatT'.concat(num)).innerHTML;

    //Se obtienen el nombre de la fila requerida
    var nombre = document.getElementById('NomBasT'.concat(num)).innerHTML;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar basura";
  
    //Se setean los valores de la fila a los inputs del modal
    inputIdBas.value = idbas;
    selectIdCat[idcat-1].selected = true;
    inputNomBas.value = nombre;

    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

}


//Función para eliminar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a eliminar
function eliminar(btn){

    limpiarInputs();

    var opcion = document.getElementById('Opcion');
    var inputIdBas = document.getElementById('IdBas');
    opcion.value = "eliminar";
    var num = btn.dataset.num;
    var idbas = document.getElementById('IdBasT'.concat(num)).innerHTML;
    inputIdBas.value = idbas;
    document.getElementById('formulario').submit();
    

    
}


//Función para buscar el registro en la tabla
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


//Función para limpiar todos los campos
function limpiarInputs(){
    var inputIdBas = document.getElementById('IdBas');
    var inputIdCat = document.getElementById('IdCat');
    var inputNomBas = document.getElementById('NomBas');

    inputIdBas.value = "";
    inputIdCat.value = "";
    inputNomBas.value = "";
    
}
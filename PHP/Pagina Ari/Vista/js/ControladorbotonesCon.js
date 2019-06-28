//Función para abrir el modal para guardar el registro en la BD
function guardar(){


    limpiarInputs();

    var inputCed = document.getElementById('Cedula');
    var filaTipo = document.getElementById("FilaTipo");
    var selectTipo = document.getElementById("Tipo");

    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nuevo contacto";

    filaTipo.classList.remove("deshabilitar");
    selectTipo.selectedIndex = "0";
    seleccionar();

    inputCed.disabled = false;

    opcion.value = "guardar";      
}



//Función para abrir el modal para actualizar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a actualizar y setear sus datos
function actualizar(btn){

    limpiarInputs();

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input del modal
    var inputIdCon = document.getElementById('IdCon');
    var inputCed = document.getElementById('Cedula');
    var inputEmail = document.getElementById('Email');
    var inputTel = document.getElementById('Tel');
    var inputDir = document.getElementById('Dir');
    var filaTipo = document.getElementById("FilaTipo");
    var blqDatos = document.getElementById('BlqDatos');

    //Se quita la clase de deshabilitar a los datos
    blqDatos.classList.remove("deshabilitar");


    //Se obtiene el id del contacto de la fila requerida
    var idCont = document.getElementById('IdConT'.concat(num)).innerHTML;

    //Se obtiene la cedula de la fila requerida
    var ced = document.getElementById('CedulaT'.concat(num)).innerHTML;

    //Se obtienen el nombre de la fila requerida
    var email = document.getElementById('EmailT'.concat(num)).innerHTML;

    //Se obtienen el nombre de la fila requerida
    var tel = document.getElementById('TelT'.concat(num)).innerHTML;

    //Se obtienen el nombre de la fila requerida
    var dir = document.getElementById('DirT'.concat(num)).innerHTML;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar contacto";
  
    //Se setean los valores de la fila a los inputs del modal
    inputIdCon.value = idCont;
    inputCed.value = ced;
    inputEmail.value = email;
    inputTel.value = tel;
    inputDir.value = dir;
    filaTipo.classList.add("deshabilitar");
    inputCed.disabled = true;


    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

       

}



//Función para eliminar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a eliminar
function eliminar(btn){

    limpiarInputs();

    var opcion = document.getElementById('Opcion');
    var inputIdCon = document.getElementById('IdCon');
    opcion.value = "eliminar";
    var num = btn.dataset.num;
    var idcon = document.getElementById('IdConT'.concat(num)).innerHTML;
    inputIdCon.value = idcon;
    document.getElementById('formulario').submit();
    

    
}

//Función para buscar el registro en la tabla
function buscar(){
    var buscador = document.getElementsByClassName('buscador');
    var inputSearch = document.getElementById('search');
    if(inputSearch.value == ""){
        for(var i = 1;i <= buscador.length;i++){
            document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
        }
    }
    var val = 0;
    var indice = 0;

    for(var i = 0;i < buscador.length;i++){
        if(inputSearch.value == buscador[i].innerHTML){
            val = 1;
            indice = i + 1;
        }
    }
    if(val == 1){
        for(var i = 1;i <= buscador.length;i++){
            if(i != indice){
                document.getElementById('tr'.concat(i)).classList.add("deshabilitar");
            }else{
                document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
            }
        }
    }
}

//Función para habilitar el campo de Cedula al momento de enviar el formulario
function validar(){
    var inputCedula = document.getElementById('Cedula');
    inputCedula.disabled = false;
}

//Función para limpiar todos los campos
function limpiarInputs(){
    var inputIdCon = document.getElementById('IdCon');
    var inputCed = document.getElementById('Cedula');
    var inputEmail = document.getElementById('Email');
    var inputTel = document.getElementById('Tel');
    var inputDir = document.getElementById('Dir');

    var blqCed = document.getElementById('BlqCed');
    var blqTipo = document.getElementById("BlqTipo");
    var filaTipo = document.getElementById("FilaTipo");

    inputIdCon.value = "";
    inputCed.value = "";
    inputEmail.value = "";
    inputTel.value = "";
    inputDir.value = "";
    blqTipo.classList.remove("deshabilitar");

    blqCed.classList.remove("deshabilitar");
    filaTipo.classList.remove("deshabilitar");
    
    
}

//Función para seleccionar la opción de empresa o usuario
function seleccionar(){

    limpiarInputs();

    var selectTipo = document.getElementById("Tipo");
    var blqDatos = document.getElementById('BlqDatos');
    var blqCed = document.getElementById('BlqCed');
    var blqTipo = document.getElementById("BlqTipo")
    var inputCed = document.getElementById("Cedula");

    if(selectTipo.selectedIndex == "0"){
        blqDatos.classList.add("deshabilitar");
        blqTipo.classList.add("mb-5");
    }
    if(selectTipo.selectedIndex == "1" ){
        blqTipo.classList.remove("mb-5");
        blqDatos.classList.remove("deshabilitar");
        blqCed.classList.add("deshabilitar");
        inputCed.value="1000533072";
    }
    if(selectTipo.selectedIndex == "2"){
        blqTipo.classList.remove("mb-5");
        blqDatos.classList.remove("deshabilitar");
        blqCed.classList.remove("deshabilitar");
    }
}
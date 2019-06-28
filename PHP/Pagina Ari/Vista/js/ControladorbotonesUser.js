//Función para abrir el modal para guardar el registro en la BD
function guardar(){


    limpiarInputs();

    var user = document.getElementById('blqUsuario');
    var inputUser = document.getElementById("Usuario");

    var inputCedula = document.getElementById("Cedula");
    
    var contraseña = document.getElementById('blqContraseña');
    var inputContraseña = document.getElementById('Contraseña');
    var inputConfirmar = document.getElementById('Confirmar');

    var contacto = document.getElementById('blqContacto');

    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nuevo usuario";

    user.classList.remove("deshabilitar");
    inputUser.required = true;

    inputCedula.disabled = false;

    contraseña.classList.remove("deshabilitar");
    inputContraseña.required = true;
    inputConfirmar.required = true;

    contacto.classList.remove("deshabilitar");

    opcion.value = "guardar";      
}




//Función para abrir el modal para actualizar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a actualizar y setear sus datos
function actualizar(btn){

    limpiarInputs();

    //Se obtienen el bloque e input de usuario del modal
    var user = document.getElementById('blqUsuario');
    var inputUser = document.getElementById("Usuario");

    //Se obtiene el bloque de datos de contacto del modal
    var contacto = document.getElementById('blqContacto');

    //Se obtiene el bloque y los input para contraseña del modal
    var contraseña = document.getElementById('blqContraseña');
    var inputContraseña = document.getElementById('Contraseña');
    var inputConfirmar = document.getElementById('Confirmar');

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input de cedula,nombres y apellidos del modal
    var inputCedula = document.getElementById('Cedula');
    var inputNombres = document.getElementById('Nombres');
    var inputApellidos = document.getElementById('Apellidos');

    //Se obtienen los nombres de la fila requerida
    var tdNombres = document.getElementById('Nombre'.concat(num));

    //Se obtiene la cédula de la fila requerida
    var cedula = document.getElementById('Cedula'.concat(num)).innerHTML;

    //Se obtienen los nombres y apellidos por separado de la fila requerida
    var nombres = tdNombres.dataset.nom;
    var apellidos = tdNombres.dataset.apell;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar usuario";

    //Se deshabilita el bloque de usuario y se quita el atributo de required
    user.classList.add("deshabilitar");
    inputUser.required = false;

    //Se deshabilita el bloque de datos de contacto
    contacto.classList.add("deshabilitar");

    //Se deshabilita el bloque de contraseña y se quita el atributo de required a sus inputs
    contraseña.classList.add("deshabilitar");
    inputContraseña.required = false;
    inputConfirmar.required = false;
    
    
    //Se setean los valores de la fila a los inputs del modal
    inputCedula.value = cedula;
    inputCedula.disabled = true;
    inputNombres.value = nombres;
    inputApellidos.value = apellidos;

    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

       

}

//Función para eliminar el registro en la BD. Recibe el botón que fue llamado para 
//recibir el numero de la fila que se va a eliminar
function eliminar(btn){

    limpiarInputs();

    var opcion = document.getElementById('Opcion');
    var inputCed = document.getElementById('Cedula');
    opcion.value = "eliminar";
    var num = btn.dataset.num;
    var cedula = document.getElementById('Cedula'.concat(num)).innerHTML;
    inputCed.value = cedula;
    document.getElementById('formulario').submit();
    

    
}

//Función para buscar el registro en la tabla
function buscar(){
    var cedulas = document.getElementsByClassName('cedulas');
    var inputSearch = document.getElementById('search');
    if(inputSearch.value == ""){
        for(var i = 1;i <= cedulas.length;i++){
            document.getElementById('tr'.concat(i)).classList.remove("deshabilitar");
        }
    }
    var val = 0;
    var indice = 0;

    for(var i = 0;i < cedulas.length;i++){
        if(inputSearch.value == cedulas[i].innerHTML){
            val = 1;
            indice = i + 1;
        }
    }
    if(val == 1){
        for(var i = 1;i <= cedulas.length;i++){
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
    var inputCed = document.getElementById('Cedula');
    var inputNombres = document.getElementById('Nombres');
    var inputApellidos = document.getElementById('Apellidos');
    var inputUser = document.getElementById('Usuario');
    var inputContraseña = document.getElementById('Contraseña');
    var inputConfirmar = document.getElementById('Confirmar');
    var inputEmail = document.getElementById('Email');
    var inputTel = document.getElementById('Tel');
    var inputDir = document.getElementById('Dir');

    inputCed.value = "";
    inputNombres.value = "";
    inputApellidos.value = "";
    inputUser.value = "";
    inputContraseña.value = "";
    inputConfirmar.value = "";
    inputEmail.value = "";
    inputTel.value = "";
    inputDir.value = "";
}
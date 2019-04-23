function guardar(){

    limpiarInputs();

   
    var tituloModal = document.getElementById('tituloModal');

    var opcion = document.getElementById('Opcion');

    tituloModal.innerHTML = "Nueva categoría";

    opcion.value = "guardar";      
}


function actualizar(btn){

    limpiarInputs();

    //Se obtiene el numero del botón de la tabla que fue clickeado
    var num = btn.dataset.num;

    //Se obtienen los input del modal
    var inputIdCat = document.getElementById('IdCat');
    var inputNomCat = document.getElementById('NomCat');

    //Se obtiene el id de la categoría de la fila requerida
    var idcat = document.getElementById('IdCatT'.concat(num)).innerHTML;

    //Se obtienen el nombre de la fila requerida
    var nombre = document.getElementById('NomCatT'.concat(num)).innerHTML;

    //Se obtiene el título del modal
    var tituloModal = document.getElementById('tituloModal');

    //Se obtiene el input de opción
    var opcion = document.getElementById('Opcion');

    //Se cambia el título del modal
    tituloModal.innerHTML = "Actualizar basura";
  
    //Se setean los valores de la fila a los inputs del modal
    inputIdCat.value = idcat;
    inputNomCat.value = nombre;

    //Se setea el input de opción en actualizar
    opcion.value = "actualizar";

       

}



function eliminar(btn){

    limpiarInputs();

    var opcion = document.getElementById('Opcion');
    var inputIdCat = document.getElementById('IdCat');
    opcion.value = "eliminar";
    var num = btn.dataset.num;
    var idcat = document.getElementById('IdCatT'.concat(num)).innerHTML;
    inputIdCat.value = idcat;
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
    var inputIdCat = document.getElementById('IdCat');
    var inputNomCat = document.getElementById('NomCat');

    inputIdCat.value = "";
    inputNomCat.value = "";
    
}
/*Dependencias*/
const express = require("express");
const path = require("path");
const app = express();
const rutasBasicas = express.Router();
/*Ruta del directorio publico de los js y css*/

const publicPath = path.resolve(__dirname);
app.use(express.static(publicPath));

/*Obtiene ruta indice*/
rutasBasicas.get('/',(req,res)=>{
    res.sendFile(__dirname+'/index.html');
    
});
/*Obtiene ruta Contacto */
rutasBasicas.get('/contacto',(req,res)=>{
    res.sendFile(__dirname+'/Contacto.html');
});

/*Obtiene ruta Contacto */
rutasBasicas.get('/ingresar',(req,res)=>{
    res.sendFile(__dirname+'/Pagina Web/Ingresar.html');
});
module.exports = {
    router: rutasBasicas
};
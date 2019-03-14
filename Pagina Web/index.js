/*Dependencias*/
const login = require("./Login");
const express = require("express");
const bodyParser = require('body-parser');
const rutasBasicas = require("./router");
const app = express();

/*Obtiene ruta para validar ingreso*/
// app.post('/validar',(req,res)=>{
//     let FUsuario = req.body.Usuario;
//     let FContraseña = req.body.password;
//     login.Fvariables(FUsuario,FContraseña);
//     res.redirect('./lobby.html');
// });
app.use('/',rutasBasicas.router);
app.listen(3000, ()=>console.log("Servidor iniciado en puerto 3000"));
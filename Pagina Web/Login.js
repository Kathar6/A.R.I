const conexion = require("./connection");
let user;
let password;
function Fvariables(usuario,contraseña){
    user = usuario;
    password = contraseña;
    const sqlSelectUsuario = `call login(${user},sha(${password})`;
    const queryUsuario = conexion.connection.query(sqlSelectUsuario, (err, rows, fields)=>{
    if (err) throw err;
    if (rows > 0){
        let vUser = rows[1];
    }
    return vUser;
});
}
module.exports ={
    vUsuario : Fvariables.queryUsuario,
    Fvariables
}
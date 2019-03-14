const mysql = require("mysql");
const connection = 
mysql.createConnection({
    host:'10.12.25.72',
    user:'equipoARI',
    password:'ari12345',
    database:'bd_ari'
});
const conexion = connection.connect();
module.exports ={
    connection
};
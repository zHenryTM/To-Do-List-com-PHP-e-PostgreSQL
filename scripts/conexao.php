<?php

$host = 'localhost';          
$port = '5432';               
$dbname = 'todolist';       
$user = 'postgres';        
$password = 'SUA_SENHA';      


$conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";


$conn = pg_connect($conn_string);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

?>
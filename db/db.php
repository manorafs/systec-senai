<?php

$host = 'localhost';
$user = 'root';
$password = '';
$data = 'systec_db';

$conn = mysqli_connect($host,$user,$password,$data);

if(!$conn){
    echo"Erro na conexao". mysqli_error_connect();
}
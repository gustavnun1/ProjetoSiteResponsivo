<?php

$nome = $_POST['fname'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$ddn = $_POST['ddn'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$repetir_senha = $_POST['rpsenha'];




$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "metis";



$con =  new mysqli($servidor, $usuario, $senha, $nomebd);


if ($conexao->connect_error){
    echo "deu ruim"

}else{
    $cadastrar = "INSERT INTO user (user_id)"

}
?>
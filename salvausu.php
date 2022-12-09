<?php

include("banco.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];

$sql = "insert into tbusu Values(null,'$nome','$email','$senha')";

$insert = $conexao->query($sql);

if($insert == true){
    header('location: novousu.php?inse=ok');
}else{
    header('location: novousu.php?inse=erro');
}


?>
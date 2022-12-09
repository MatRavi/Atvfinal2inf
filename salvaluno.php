<?php

include("banco.php");

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

$sql = "insert into tbaluno Values(null,'$nome','$sexo','$data','$endereco','$fone')";

$insert = $conexao->query($sql);

if($insert == true){
     header('location: novoaluno.php?inse=ok');
}else{
    header('location: novoaluno.php?inse=erro');
}


?>
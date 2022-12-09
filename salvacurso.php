<?php

include("banco.php");

$nome = $_POST['nome'];
$turno = $_POST['turno'];
$ch = $_POST['ch'];

$sql = "insert into tbcursos Values(null,'$nome','$turno','$ch')";

$insert = $conexao->query($sql);

if($insert == true){
     header('location: novocurso.php?inse=ok');
}else{
    header('location: novocurso.php?inse=erro');
}


?>
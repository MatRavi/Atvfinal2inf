<?php

include("banco.php");

$aluno = $_POST['aluno'];
$curso = $_POST['curso'];
$usu = $_POST['usu'];

if($aluno == 0 || $curso == 0 || $usu == 0){
    header('location: novomatri.php?v=O');
}else{

$da = date('Y-m-d');
$ho = date('H:i:s');

$sql = "insert into tbmatriculas Values(null,'$curso','$aluno','$usu','$da','$ho')";

$insert = $conexao->query($sql);

if($insert == true){
    header('location: novomatri.php?inse=ok');
}else{
    header('location: novomatri.php?inse=erro');
}
}

?>
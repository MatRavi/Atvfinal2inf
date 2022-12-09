<?php
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$data = $_POST['data'];
$endereco = $_POST['endereco'];
$fone = $_POST['fone'];

include('banco.php');

$sql = "update tbaluno set nome = '$nome', sexo = '$sexo', nascimento ='$data', endereco='$endereco',fone ='$fone' where codaluno = $cod;";

$atualizar = $conexao->query($sql);

if($atualizar == true){
    header('location: buscaluno.php?alter=ok');
}else{
    header('location: buscaluno.php?alter=erro');
}
?>
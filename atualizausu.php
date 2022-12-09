<?php
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include('banco.php');

$sql = "update tbusu set nome = '$nome', email = '$email', senha ='$senha' where codusu = $cod;";

$atualizar = $conexao->query($sql);

if($atualizar == true){
    header('location: buscausu.php?alter=ok');
}else{
    header('location: buscausu.php?alter=erro');
}
?>
<?php
$id =$_GET['id'];

include('banco.php');

$sql = "delete from tbusu where codusu = $id";

$delete = $conexao->query($sql);

if($delete == true){
    header('location: buscausu.php?delete=ok');
}else{
    header('location: buscausu.php?delete=erro');
}

?>
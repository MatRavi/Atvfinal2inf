<?php
$id =$_GET['id'];

include('banco.php');

$sql = "delete from tbaluno where codaluno = $id";

$delete = $conexao->query($sql);

if($delete == true){
    header('location: buscaluno.php?delete=ok');
}else{
    header('location: buscaluno.php?delete=erro');
}

?>
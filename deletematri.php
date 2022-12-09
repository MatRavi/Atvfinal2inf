<?php
$id =$_GET['id'];

include('banco.php');

$sql = "delete from tbmatriculas where codmat = $id";

$delete = $conexao->query($sql);

if($delete == true){
    header('location: buscamatriculas.php?delete=ok');
}else{
    header('location: buscamatriculas.php?delete=erro');
}

?>
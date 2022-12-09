<?php
$id =$_GET['id'];

include('banco.php');

$sql = "delete from tbcursos where codcurso = $id";

$delete = $conexao->query($sql);

if($delete == true){
    header('location: buscacurso.php?delete=ok');
}else{
    header('location: buscacurso.php?delete=erro');
}

?>
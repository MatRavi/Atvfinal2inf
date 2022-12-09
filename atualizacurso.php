<?php
$cod = $_POST['cod'];
$nome = $_POST['nome'];
$ch = $_POST['ch'];
$turno = $_POST['turno'];

include('banco.php');

$sql = "update tbcursos set nome = '$nome', cargahoraria = '$ch', turno ='$turno' where codcurso = $cod;";

$atualizar = $conexao->query($sql);

if($atualizar == true){
    header('location: buscacurso.php?alter=ok');
}else{
    header('location: buscacurso.php?alter=erro');
}
?>
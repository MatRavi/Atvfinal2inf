<?php
$codmat = $_POST['codmat'];
$codcurso = $_POST['codcurso'];
$codusu = $_POST['codusu'];
$codaluno = $_POST['codaluno'];
$data = $_POST['data'];
$hora = $_POST['hora'];

include('banco.php');

$sql = "update tbmatriculas set codmat = '$codmat', codcurso = '$codcurso', codusu = '$codusu', codaluno = '$codaluno', data = '$data', hora ='$hora' where codmat = $codmat;";

$atualizar = $conexao->query($sql);

if($atualizar == true){
    header('location: buscamatriculas.php?alter=ok');
}else{
    header('location: buscamatriculas.php?alter=erro');
}
}
?>
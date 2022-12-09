<?php
 
  include("banco.php");

  //recebendo variaveis por post
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  //criando uma consulta mysql
  $sql = "select * from tbusu where email='$email' and senha='$senha'";

  $consulta = $conexao->query($sql);

  if($consulta->num_rows > 0){
      //inicia sessão
      session_start();
      $_SESSION['login']='ok';
      header('location: principal.php?login=ok');
  }else{
      header('location: index.php?login=erro');
  }
?>
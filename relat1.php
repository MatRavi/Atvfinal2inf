<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Listagem</title>
<link rel="stylesheet" href="relat1.css" type="text/css">	
</head>
<body>





<table width="100%"><thead>
											<tr>
												<th colspan="100%">LISTAGEM DE USUÁRIO</th>
											</tr>
											
											
											<tr >
										
										<th width="5%" scope="col">ID</th>
										<th>NOME</th>
										<th>E-MAIL</th>
										
										
									 </tr>
									 
									 </thead>
									 <tbody>
									 <?php
									           include 'banco.php';
						 			   
																				   
											   $sql = "select * from tbusu order by nome";
											   
											   //executa o comando sql
											   $consulta = $conexao->query($sql);
											   
											   //testar se deu certo o comando
											   if($consulta){
												 //verificando se existe o usuario
												 if($consulta->num_rows > 0){
													//convertendo a consulta num array
													while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
													    echo '<tr>
																<td>'.$linha['codusu'].'</td>
																<td>'.$linha['nome'].'</td>
																<td>'.$linha['email'].'</td>
															  </tr>';
													}
												 }
											   }
									 ?>
									 
				
									
										
										
								  
								
							</table>
					</body>
</html>

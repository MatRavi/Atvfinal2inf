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
												<th colspan="100%">LISTAGEM DE Matriculas</th>
											</tr>
											
											
											<tr >
										
										<th width="5%" scope="col">ID</th>					
                                        <th>Cursos</th>
                                        <th>Alunos</th>
                                        <th>Usuários</th>
                                        <th>Data</th>
                                        <th>Hora</th>
										
										
									 </tr>
									 
									 </thead>
									 <tbody>
									 <?php
									           include 'banco.php';
						 			   
																				   
											   $sql = "SELECT tbmatriculas.codmat, tbaluno.nome as alunos, tbcursos.nome as cursos, tbusu.nome as usuario, tbmatriculas.data, tbmatriculas.hora FROM tbmatriculas
                                            INNER JOIN tbcursos on (tbmatriculas.codcurso=tbcursos.codcurso)
                                            INNER JOIN tbusu on (tbmatriculas.codusu=tbusu.codusu)
                                            INNER JOIN tbaluno on (tbmatriculas.codaluno=tbaluno.codaluno) order by codmat;";
											   
											   //executa o comando sql
											   $consulta = $conexao->query($sql);
											   
											   //testar se deu certo o comando
											   if($consulta){
												 //verificando se existe o usuario
												 if($consulta->num_rows > 0){
													//convertendo a consulta num array
													while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
													    echo '<tr>
                                                                <td>'. $linha['codmat'].'</td>
                                                                <td>'. $linha['cursos'].'</td>
                                                                <td>'. $linha['alunos'].'</td>
                                                                <td>'. $linha['usuario'].'</td>
                                                                <td>'. $linha['data'].'</td>
                                                                <td>'. $linha['hora'].'</td>
															  </tr>';
													}
												 }
											   }
									 ?>
									 
				
									
										
										
								  
								
							</table>
					</body>
</html>

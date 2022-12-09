<?php
   include("testasessao.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ProjetoMatriculas</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="principal.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Matriculas</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="principal.php">
                    <i class="fas fa-fw fa-globe"></i>
                    <span>Principal</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buscausu.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuários</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buscaluno.php">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Alunos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="buscacurso.php">
                    <i class="fas fa-fw fa-brain"></i>
                    <span>Cursos</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="buscamatriculas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Matriculas</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relat1.php">
                    <i class="fas fa-fw fa-sticky-note"></i>
                    <span>Relatorio Usuários</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relat2.php">
                    <i class="fas fa-fw fa-envelope-open"></i>
                    <span>Relatorio Alunos</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relat3.php">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Relatorio Matriculas id</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="relat4.php">
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <i class="fas fa-fw fa-calendar-alt"></i>
                    <span>Relatorio Matriculas Data</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Sair</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuário</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <section class="content">
                    <div class="row mb-2">
                        <div class="m-3 col-11">
                                <div class="d-sm-flex justify-content-between">
                                    <a href="principal.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-reply"></i>
                                        </span>
                                        <span class="text">Voltar</span>
                                    </a>
                                
                                    <a href="novomatri.php" class="btn btn-success btn-icon-split fa-pull-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Novo</span>
                                    </a>
                                </div>
                        </div>
                    </div>
                    
                    <div class="m-1 col-11">
                    <form action="buscamatriculas.php" class="" method="POST">
                        <div class="input-group text-left">
                        <input class="form-control" type="text" name="texto" id="texto">
                        <div class="input-group-append">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                        </div>
                    </form>
                    </div>
            <hr>

                        <?php
                            if(isset($_GET['delete'])){
                                if($_GET['delete'] == 'ok'){
                                    echo '<div class="alert bg-gradient-info m-3 alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5 class="text-gray-100"><i class="icon fas fa-info"></i> Alerta!</h5>
                                    <t class="text-gray-100">Item excluido com sucesso!</t>
                                    </div>';
                                }else{
                                    echo '<div class="alert bg-gradient-danger m-3 alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5 class="text-gray-100"><i class="icon fas fa-ban"></i> ERRO!</h5>
                                    </div>';
                                }
                            }
                            if(isset($_GET['alter'])){
                              if($_GET['alter'] == 'ok'){
                                  echo '<div class="alert bg-gradient-info m-3 alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5 class="text-gray-100"><i class="icon fas fa-check"></i> Alerta!</h5> <t class="text-gray-100">item alterado com sucesso.</t>
                                </div>';
                              }else{
                                  echo '<div class="alert bg-gradient-danger m-3 alert-dismissible" role="alert">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5 class="text-gray-100"><i class="icon fas fa-ban"></i> ERRO!</h5> 
                                </div>';
                              }
                            }
                        ?>

                    <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Busca de Matriculas <i class="fas fa-search fa-sm fa-fw mr-2"></i></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codígo de Matricula</th>					
                                            <th>Cursos</th>
                                            <th>Alunos</th>
                                            <th>Usuários</th>
                                            <th>Data</th>
                                            <th>Hora</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            if(isset($_POST['texto'])){
                                            $texto = $_POST['texto'];

                                            include('banco.php');

                                            $sql = "SELECT tbmatriculas.codmat, tbaluno.nome as alunos, tbcursos.nome as cursos, tbusu.nome as Usuário, tbmatriculas.data, tbmatriculas.hora FROM tbmatriculas
                                            INNER JOIN tbcursos on (tbmatriculas.codcurso=tbcursos.codcurso)
                                            INNER JOIN tbusu on (tbmatriculas.codusu=tbusu.codusu)
                                            INNER JOIN tbaluno on (tbmatriculas.codaluno=tbaluno.codaluno) where tbusu.nome like '%$texto%';";

                                            $consulta = $conexao->query($sql);

                                            if($consulta -> num_rows > 0){

                                            while($linha = $consulta->fetch_array(MYSQLI_ASSOC)){
                                            echo '<tr>';
                                            echo '<td>'. $linha['codmat'].'</td>';
                                            echo '<td>'. $linha['cursos'].'</td>';
                                            echo '<td>'. $linha['alunos'].'</td>';
                                            echo '<td>'. $linha['Usuário'].'</td>';
                                            echo '<td>'. $linha['data'].'</td>';
                                            echo '<td>'. $linha['hora'].'</td>';
                                            echo '<td>
                                            <a href="alteramatri.php?id='.$linha['codmat'].'" class="btn btn-sm btn-primary" title="Alterar"><i class="fas fa-edit"></i></a>
                                            <a href="deletematri.php?id='.$linha['codmat'].'" class="btn btn-sm btn-danger" title="Excluir"><i class="fas fa-trash"></i></a>
                                            </td>';
                                            echo '</tr>';}
                                            }else{
                                            echo '<td colspan="100%"><b class="text-primary">Nenhum valor encotrado  <i class="far fa-meh"></i></b></td>';
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> 
                    </div>
                </section>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Aperte "Sair" para confirmar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="sair.php">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</body>

</html>
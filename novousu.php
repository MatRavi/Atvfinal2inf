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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                    <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="m-3 col-11">
                                <div class="d-sm-flex justify-content-between">
                                    <a href="buscausu.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-reply"></i>
                                        </span>
                                        <span class="text">Voltar</span>
                                    </a>
                                </div>
                        </div>

                        <?php
                            if(isset($_GET['inse'])){
                                if($_GET['inse'] == 'ok'){
                                    echo '<div class="alert alert-success alert-dismissible col-12">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-info"></i> Alerta!</h5>
                                    Item adicionado com sucesso!
                                    </div>';
                                }else{
                                    echo '<div class="alert alert-danger alert-dismissible col-12">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> ERRO!</h5>
                                    </div>';
                                }
                            }
                        ?>

                        <form action="salvausu.php" method="POST" class="col-lg-12">

                        <div class="col-lg-12">
                            <div class="text-center">
                                <h1 class="h2 text-gray-900 mb-4">Registro de Usuários</h1>
                            </div>
                            <form class="user">
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1 mb-sm-0">
                                        <h5>Nome:</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" required class="form-control form-control-user" name="nome" id="nome"
                                        placeholder="coloque aqui seu nome">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1 mb-sm-0">
                                        <h5>Email:</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" required class="form-control form-control-user" name="email" id="email"
                                        placeholder="coloque aqui seu email">
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-1 mb-sm-0">
                                        <h5>Senha:</h5>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="password" required class="form-control form-control-user" name="senha" id="senha"
                                        placeholder="coloque aqui seu senha">
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
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

</body>

</html>
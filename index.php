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

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-12 col-xl-12 col-xl-12">

                <div class="card o-hidden border-0 shadow-lg my-5 my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" style="background: url('https://imageproxy.ifunny.co/crop:x-20,resize:600x,crop:x800,quality:90x75/images/dbad967b41c16a930f5aa1f1e3e9477c6539ca6a48eb8f83086de92310618ad2_1.jpg');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-900 mb-4">Olá!</h1>
                                        <h1 class="h3 text-gray-900 mb-4">Insira seus dados</h1>
                                    </div>
                                    <?php
                                      if(isset($_GET['login'])){
                                        if($_GET['login'] =='erro'){
                                          echo '<div class="alert alert-danger alert-dismissible">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <h5><i class="icon fas fa-ban"></i> Alerta!</h5>
                                          Email ou senha incorretos.
                                        </div>';
                                        }else if($_GET['login'] =='semsessao'){
                                          echo '<div class="alert alert-warning alert-dismissible">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <h5><i class="icon fas fa-exclamation-triangle"></i> Alerta!</h5>
                                          digite o email e senha para entrar.
                                        </div>';
                                        }else if($_GET['login'] =='saiu'){
                                          echo '<div class="alert alert-info alert-dismissible">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <h5><i class="icon fas fa-info"></i> Alerta!</h5>
                                          logout realizado com sucesso.
                                        </div>';
                                        }
                                      }
                                    ?>
                                    <form class="user" action="login.php" method="post" name="f1">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="senha" name="senha" placeholder="Senha">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">
                                            Login
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
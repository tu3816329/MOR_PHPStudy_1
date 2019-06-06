<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Exercise 1 - Login</title>

        <!-- Custom fonts for this template-->
        <link href="../Resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../Resource/css/sb-admin-2.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>;        
        <script src="../Resource/vendor/jquery/jquery.cookie.js"></script>;
        <script src="../Resource/js/login.js" type="text/javascript"></script>


    </head>

    <body class="bg-gradient-primary">

        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">                            
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div style="height: 80px"></div>
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                        </div>                                        
                                        <form class="user" id="loginForm" action="../Controller/LoginController.php" method="POST">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user" name="txtUsername" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"  name="txtPassword" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                                                </div>
                                            </div>
                                            <input name="btAction" type="hidden" value="Login" />
                                            <input type="submit" value="Login" class="btn btn-primary btn-user btn-block"/>
                                            <hr>
                                            <!--                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                                                                        </a>
                                                                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                                                                        </a>-->
                                        </form>
                                        <span id="errMsg" style="color: red"></span>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="Register.php">Create an Account!</a>
                                        </div>
                                        <div style="height: 80px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <!--<script src="../Resource/vendor/jquery/jquery.min.js"></script>-->
        <script src="../Resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../Resource/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../Resource/js/sb-admin-2.min.js"></script>

    </body>
</html>

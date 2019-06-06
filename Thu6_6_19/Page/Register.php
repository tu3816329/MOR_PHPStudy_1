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

        <title>Exercise 2 - Login</title>

        <!-- Custom fonts for this template-->
        <link href="../Resource/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="../Resource/css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div style="height: 10px"></div>
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" id="RegisterForm">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="txtUsername" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="txtFullname" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" name="txtEmail" placeholder="Email Address" required>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user" name="txtPassword" placeholder="Password" required>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user" name="txtRePassword" placeholder="Repeat Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="date" class="form-control form-control-user" name="txtBirthDay" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" value="Register Account" name="btAction"/>
                                        <input type="submit" value="Register Account" class="btn btn-primary btn-user btn-block"/>
                                    </div>
                                    <hr>
                                    <!--                                    <a href="index.html" class="btn btn-google btn-user btn-block">
                                                                            <i class="fab fa-google fa-fw"></i> Register with Google
                                                                        </a>
                                                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                                            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                                                        </a>-->
                                    <span style="color: red" id="errMsg"></span>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="Login.php">Already have an account? Login!</a>
                                </div>
                                <div style="height: 10px"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>;
        <script src="../Resource/js/register.js" type="text/javascript"></script>

        <!-- Bootstrap core JavaScript-->
        <script src="../Resource/vendor/jquery/jquery.min.js"></script>
        <script src="../Resource/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../Resource/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../Resource/js/sb-admin-2.min.js"></script>

    </body>
</html>

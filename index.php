
<?php 
     session_start();
    if (isset($_SESSION["username"])) {
        ?>
            <script type="text/javascript">
                window.location="dashboard.php";
            </script>
        <?php
    }
    $page = 'home';
    include 'inc/connection.php';
 ?>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">

    
<head>
        
       <?php include 'inc/css.php' ?>
    </head>

    <body>

        <div class="auth-page-wrapper pt-5">
            <!-- auth page bg -->
            <div class="auth-one-bg-position auth-one-bg"  id="auth-particles">
                <div class="bg-overlay"></div>
                
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                    </svg>
                </div>
            </div>

            <!-- auth page content -->
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-sm-5 mb-4 text-white-50">
                                <div>
                                    <a href="index.html" class="d-inline-block auth-logo">
                                        <img src="assets/images/logo-light.png" alt="" height="20">
                                    </a>
                                </div>
                                <p class="mt-3 fs-15 fw-medium">Student portal</p>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">
                            
                                <div class="card-body p-4"> 
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p class="text-muted">Sign in .</p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="#" method="post">
            	<?php
                if (isset($_POST["login"])) {
                    $count=0;
                    $res= mysqli_query($link, "select * from admin where user='$_POST[username]' && password= '$_POST[password]' ");
                    $count = mysqli_num_rows($res);
                    if ($count==0) {
                        ?>
                        <div class="alert alert-warning">
                            <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or Password.</span>
                        </div>
                    <?php
                    }
                    else{
                    $_SESSION["username"] = $_POST["username"];
                    ?>
                        <script type="text/javascript">
                            window.location="dashboard.php";
                        </script>
                        <?php
                    }
                }
                ?>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                            </div>
                    
                                            <div class="mb-3">
                                            
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5" placeholder="Enter password" name="password" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                            </div>
                                            
                                            <div class="mt-4">
                            <input class="btn btn-info submit" type="submit" name="login" value="Login">
                                            </div> 

                                          
                                        </form>
                                    </div>
                                </div>
							
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                          

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end auth page content -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <p class="mb-0 text-muted">&copy; <script>document.write(new Date().getFullYear())</script> Andhra university. Crafted with <i class="mdi mdi-heart text-danger"></i> by Information technology</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->
        </div>
        <!-- end auth-page-wrapper -->
<?php include "inc/js.php" ?>
    </body>


</html>
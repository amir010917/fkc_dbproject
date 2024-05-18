<?php
        require('db/db_connect.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['submit'])){
            // removes backslashes
	        $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
	        $username = mysqli_real_escape_string($conn,$username);
	        $password = stripslashes($_REQUEST['password']);
	        $password = mysqli_real_escape_string($conn,$password);
	        //Checking is user existing in the database or not
            $query = "SELECT * FROM `staff` WHERE staff_username='$username' and staff_password='$password'";
	        $result = mysqli_query($conn,$query) or die(mysqli_connect_error());
	        $rows = mysqli_num_rows($result);
            $user = mysqli_fetch_assoc($result);
            if($rows==1){
                $_SESSION['name'] = $user['staff_fname'];
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $user['id_staff'];

                if($user['staff_role']=="Administrator"){

                    header("Location: admin/index.php");

                }else{
                    header("Location: staff/index.php");

                }
	            
            }else{

                $_SESSION['error'] = '<div class="alert alert-danger" role="alert"> Username/Password is incorrect.</div>';

	        }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

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

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">                           
                                     <div class="text-center">
                                        <h1 class="h2 mb-2 text-gray-800">Fast Kitchen Concept</h1><br><br>
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div><br><br>

                                    <form class="user" method="post">
                                    <?php
                                        if(isset($_SESSION['error'])) {
                                            $errorMessage = $_SESSION['error'] ;
                                            unset($_SESSION['error']);
                                            echo $errorMessage;
                                        }elseif(isset($_SESSION['success'])){
                                            $successMessage = $_SESSION['success'] ;
                                            unset($_SESSION['success']);
                                            echo $successMessage;
                                        }
                                    ?>
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user"
                                                id="username" name="username" aria-describedby="emailHelp"
                                                placeholder="Enter username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
              
                                        <button type="submit" class="btn btn-primary btn-user btn-block" 
                                style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
                                        <hr>
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
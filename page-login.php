<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" value=""
                                                name="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" value="" name="pass">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label><strong>Staff</strong></label>
                                            <select class="form-control" name="staff" required>
                                                <option value="admin">Admin</option>
                                                <option value="stylist">Stylist</option>
                                                <option value="receptionist">Receptionist</option>
                                            </select>
                                        </div> -->
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="btn">Sign me in</button>
                                        </div>
                                    </form>
                                    <?php
            //                         if(isset($_POST['btn'])) {
            //     $username = $_POST['username'];
            //     $password = md5($_POST['pass']); // Hashing the password using MD5
            //     // $staff_role = $_POST['staff']; // Get the selected staff role
                
            //     // Query to check user credentials
            //     $query = "SELECT * FROM `login` WHERE user_name='$username' AND user_pass='$password'";
            //     $result = mysqli_query($con, $query);
                
            //     $rows=array();
                
                


            //     // Check if user exists
            //     if(mysqli_num_rows($result) > 0) {
            //         while($row = mysqli_fetch_array($result))
            //     {
            //         $rows[]=$row;
            //     }
            //         // Set session variables for user role
            //         session_start();
            //         $id = $rows['login_id'];
            //         $user_name =  $rows['user_name'];
            //         $staff_role  = $rows['staff_role'];

            //         $_SESSION['user_name'] = $user_name;
            //         $_SESSION['staff_role'] = $staff_role;
            //         $_SESSION['login_id'] = $id;
                                       
            //         // Redirect based on user role
            //         echo "<script>alert('$login_id'); </script>";
            //     } else {
            //         echo "<script>alert('Invalid username, password');</script>";
            //     }
            // }
            
            ?>
           <?php
    // Start the session
    session_start();

    // include("connection.php");

    if(isset($_POST['btn'])) {
        $username = $_POST['username'];
        $password = md5($_POST['pass']); // Hashing the password using MD5
        
        // Query to check user credentials
        $query = "SELECT * FROM `login` WHERE user_name='$username' AND user_pass='$password'";
        $result = mysqli_query($con, $query);
        
        // Check if user exists
        if(mysqli_num_rows($result) > 0) {
            // Fetch user data
            $row = mysqli_fetch_assoc($result);
            
            // Store the login_id in the session variable
            $_SESSION['login_id'] = $row['login_id'];
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['staff_role'] = $row['staff_role'];
            
            // Display login_id in an alert box
            echo "<script> window.location.href = 'index.php'</script>";
            
            // Redirect based on user role or perform any other actions
            // header("Location: dashboard.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
?>


                                    <div class="new-account mt-3">
                                        <!-- <p>Don't have an account? <a class="text-primary"
                                                href="./page-register.php">Sign up</a></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>

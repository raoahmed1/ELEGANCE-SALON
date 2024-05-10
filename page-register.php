<?php
include('connection.php'); // Include database connection file

// if(isset($_POST['btn'])){
//     $username = $_POST['username'];
//     $fullname = $_POST['fullname'];
//     $email = $_POST['email'];
//     $pass = $_POST['pass'];
//     $cpass = $_POST['cpass'];
//     $staff = $_POST['staff'];
//     $pass_match = ($_POST['pass'] === $_POST['cpass']) ? true : false;

//     if($pass_match){
//         $hashed_pass = md5($pass);

//         $query = "INSERT INTO `login` (`user_name`, `full_name`, `user_email`, `user_pass`, `staff_role`, `date`) VALUES (?, ?, ?, ?, ?, current_timestamp())";
//         $stmt = mysqli_prepare($con, $query);

//         if($stmt){
//             mysqli_stmt_bind_param($stmt, "sssss", $username, $fullname, $email, $hashed_pass, $staff);
//             if(mysqli_stmt_execute($stmt)){
//                 echo "<script>
//                         alert('Registered Successfully');
//                         window.location.href = 'index.php';
//                       </script>";
//             } else {
//                 echo "<script>
//                         alert('Error: ".mysqli_error($con)."');
//                       </script>";
//             }
//             mysqli_stmt_close($stmt);
//         } else {
//             echo "<script>
//                     alert('Error: ".mysqli_error($con)."');
//                   </script>";
//         }
//     } else {
//         echo "<script>
//                 alert('Password Does Not Matched');
//               </script>";
//     }
// }
?>
<?php

if(isset($_POST['btn'])){ // If the form is submitted
    // Retrieve form data
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $staff = $_POST['staff'];
    
    // Check if passwords match
    if($pass === $cpass){
        // Hash the password
        $hashed_pass = md5($pass);

        // Concatenate user input into SQL query string (not recommended due to security risks)
        $query = "INSERT INTO `login` (`user_name`, `full_name`, `user_email`, `user_pass`, `staff_role`, `date`) 
                  VALUES ('$username', '$fullname', '$email', '$hashed_pass', '$staff', current_timestamp())";

        // Execute query
        $result = mysqli_query($con, $query);

        if($result){ // If query execution is successful
            echo "<script>
                    alert('Registered Successfully');
                    window.location.href = 'index.php'; // Redirect to index.php
                  </script>";
        } else {
            echo "<script>
                    alert('Error: ".mysqli_error($con)."');
                  </script>";
        }
    } else {
        echo "<script>
                alert('Password Does Not Matched');
              </script>";
    }
}
?>

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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name="username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Fullname</strong></label>
                                            <input type="text" class="form-control" placeholder="fullname" name="fullname">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="password" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Repeat Password</strong></label>
                                            <input type="password" class="form-control" placeholder="repeat password" name="cpass">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block" name="btn">Sign me up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="page-login.php">Sign in</a></p>
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
    <!--endRemoveIf(production)-->
</body>

</html>

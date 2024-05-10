<?php
include "connection.php";

$id = $_GET['us_id'];
$query = mysqli_query($con,"select * from `login` where login_id = $id");
$row = mysqli_fetch_assoc($query);
$username = $row['user_name'];
$fullname = $row['full_name'];
$email = $row['user_email'];
$pass = $row['user_pass'];
$cpass = $row['cpass'];
$staff = $row['staff_role'];



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
$query = "UPDATE `login` SET `user_name`='$username',`full_name`='$fullname',`user_email`='$email',`user_pass`='$pass',`staff_role`='$staff' WHERE login_id = $id";
    // Execute query
$result = mysqli_query($con, $query);

if($result){ // If query execution is successful
echo "<script>
        alert('Staff Updated Successfully');
        window.location.href = 'viewstaff.php'; // Redirect to index.php
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
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <?php include "aside.php"; ?>
    <main>
        <h2 class="text-center" style="margin-top:100px;">Staff Management</h2>
        <div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <label><strong>Username</strong></label>
                    <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $username?>">
                </div>
                <div class="form-group">
                    <label><strong>Fullname</strong></label>
                    <input type="text" class="form-control" placeholder="fullname" name="fullname" value="<?php echo $fullname?>">
                </div>
                <div class="form-group">
                    <label><strong>Email</strong></label>
                    <input type="email" class="form-control" placeholder="hello@example.com" name="email" value="<?php echo $email?>">
                </div>
                <div class="form-group">
                    <label><strong>Password</strong></label>
                    <input type="password" class="form-control" placeholder="password" name="pass" value="<?php echo $pass?>">
                </div>
                <div class="form-group">
                    <label><strong>Repeat Password</strong></label>
                    <input type="password" class="form-control" placeholder="repeat password" name="cpass" value="<?php echo $cpass?>">
                </div>
                <div class="form-group">
                    <label><strong>Assign Role</strong></label>
                    <select name="staff" class="form-control" value="<?php echo $staff?>" required>
            <option value="receptionist">Receptionist</option>
            <option value="stylist">Stylist</option>
        </select>       
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-block" name="btn">Update Staff</button>
                </div>
            </form>
            <?php

?>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
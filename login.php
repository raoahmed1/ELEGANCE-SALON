<?php include("connection.php"); ?>
<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <h1 class="text-center">LOGIN</h1>
            <form action="" method="post">
                <div class="form-group m-4">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group m-4">
                    <input type="password" class="form-control" placeholder="Password" name="pass" required>
                </div>
                <div class="form-group m-4">
                    <select class="form-control" name="staff" required>
                        <option value="">Staff</option>
                        <option value="admin">Admin</option>
                        <option value="stylist">Stylist</option>
                        <option value="receptionist">Receptionist</option>
                    </select>
                </div>
                <div class="form-group m-4">
                    <input type="submit" class="btn btn-primary" name="btn">
                </div>
            </form>
            <?php 
            if(isset($_POST['btn'])) {
                $username = $_POST['username'];
                $password = md5($_POST['pass']); // Hashing the password using MD5
                $staff_role = $_POST['staff']; // Get the selected staff role
                
                // Query to check user credentials
                $query = "SELECT * FROM `login` WHERE user_name='$username' AND user_pass='$password' AND staff_role='$staff_role'";
                $result = mysqli_query($con, $query);
                
                // Check if user exists
                if(mysqli_num_rows($result) > 0) {
                    // Set session variables for user role
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['staff_role'] = $staff_role;
                    
                    // Redirect based on user role
                    echo "<script>alert('Login Successful'); location.assign('index.php');</script>";
                } else {
                    echo "<script>alert('Invalid username, password, or staff role');</script>";
                }
            }
            ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>

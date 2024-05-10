<?php include('connection.php'); ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="container">
                <h1 class="text-center m-4">REGISTRATION</h1>
                <form action="" method="post">
                    <div class="form-group m-4">
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group m-4">
                        <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                    </div>
                    <div class="form-group m-4">
                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group m-4">
                        <input type="Password" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group m-4">
                        <input type="Password" class="form-control" name="cpass" placeholder="Confirm Password" required>
                    </div>
                    <!-- <div class="form-group m-4">
                        <input type="text" class="form-control" name="staff" placeholder="Staff Registration">
                    </div> -->
                    <div class="form-group m-4">
                        <input type="submit" class="btn btn-primary" name="btn">
                    </div>
                </form>
                
            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>


<?php 
                if(isset($_POST['btn'])){
                    $username = $_POST['username'];
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $pass = $_POST['pass'];
                    $cpass = $_POST['cpass'];
                    $staff = $_POST['staff'];
                    $pass_match = ($_POST['pass'] === $_POST['cpass']) ? true : false;
                    if($pass_match){
                    $query = mysqli_query($con,"INSERT INTO `login` (`user_name`, `full_name`, `user_email`, `user_pass`, `staff_role`, `date`) VALUES ('$username', '$fullname', '$email', MD5('$pass'), '$staff', current_timestamp());");
                    if($query){
                        echo "<script>
                        alert('Registered Successfully');
                        location.assign('index.php');
                        </script>";
                    }
                    else{
                        echo "<script>
                        alert('Error');
                        </script>";
                    }
                }
            else{
                echo "<script>
                alert('Password Does Not Matched');
                </script>";   
            }
            }
                ?>
<?php 
    // Include the file for database connection
    include "connection.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Place navbar here -->
    </header>

    <?php include "aside.php"; ?>

    <main>
        <div class="container">
            <h2 class="text-center" style="margin-top: 150px;">Assign Task to Stylist</h2>
            <form action="" method="POST">
                <div class="form-group m-4">
                    <label for="task_name">Task Name:</label><br>
                    <select name="task_name" class="form-control" required>
                        <?php 
                            $query = mysqli_query($con, "SELECT * FROM `services`");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='".$row['service_id']."'>".$row['service_name']."</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group m-4">
                    <label for="task_shift">Task Shift:</label>
                    <select name="task_shift" class="form-control" required>
                        <option value="morning">Morning</option>
                        <option value="evening">Evening</option>
                        <option value="night">Night</option>
                        <!-- Add more options for other shifts as needed -->
                    </select>
                </div>

                <div class="form-group m-4">
                    <label for="assigned_stylist">Assign To:</label>
                    <select name="assigned_stylist" class="form-control" required>
                        <?php 
                            $query = mysqli_query($con, "SELECT * FROM `login`");
                            while ($row = mysqli_fetch_assoc($query)) {
                                echo "<option value='".$row['login_id']."'>".$row['user_name']."</option>";
                            }
                        ?>
                    </select>
                </div>
                
                <button type="submit" name="btn" class="btn btn-primary">Assign Task</button>
            </form>

            <?php 
                // Handle form submission
                if(isset($_POST['btn'])){
                    $task_name = $_POST['task_name'];
                    $task_shift = $_POST['task_shift'];
                    $assigned_stylist = $_POST['assigned_stylist'];
                    
                    // Insert query
                    $query = "INSERT INTO `tasks` (`task_name`, `task_shift`, `assigned_staff_id`) VALUES ('$task_name', '$task_shift', '$assigned_stylist')";
                    
                    // Execute query and handle errors
                    if(mysqli_query($con, $query)){
                        echo "<script>alert('Task Assigned'); window.location.href ='viewtask.php';</script>";
                    } else{
                        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
                    }
                }
            ?>
        </div>
    </main>

    <footer>
        <!-- Place footer here -->
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
    <!-- Flot Chart JS -->
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

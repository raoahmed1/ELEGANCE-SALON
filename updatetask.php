<?php 
include "connection.php";

$id = $_GET['Utask_id'];
$query = mysqli_query($con,"select * from `tasks` where task_id = $id");
$row = mysqli_fetch_assoc($query);
$task_name = $row['task_name'];
$task_shift = $row['task_shift'];
$assigned_stylist = $row['assigned_staff_id'];

if(isset($_POST['btn'])){
    $task_name = $_POST['task_name'];
    $task_shift = $_POST['task_shift'];
    $assigned_stylist = $_POST['assigned_stylist'];
    
    // Insert query
    $query = "UPDATE `tasks` SET `task_name`='$task_name',`task_shift`='$task_shift',`assigned_staff_id`='$assigned_stylist' WHERE task_id = $id";
    // Execute query
    if(mysqli_query($con, $query)){
        // // Insert a notification for the assigned stylist
        // $notification_message = "You have been assigned a new task: $task_name";
        // $notification_query = "INSERT INTO notifications (stylist_id, task_id, message, status) VALUES ('$assigned_stylist', LAST_INSERT_ID(), '$notification_message', 'unread')";
        // mysqli_query($con, $notification_query);

        // Notify the stylist (this could involve sending an email or using a real-time notification system)
        // For simplicity, we'll just display a JavaScript alert
        echo "<script>alert('Task Updated'); window.location.href ='viewtask.php';</script>";
    } else{
        echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
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
        <div class="container">
        <h2 class="text-center" style="margin-top:150px;">Update Task to Stylist</h2>
    <form action="" method="POST">
        <div class="form-group m-4">
        <label for="task_name">Task Name:</label><br>
        <input type="text" id="task_name" name="task_name" class="form-control" value="<?php echo $task_name ?>" required>
        </div>
        
        <div class="form-group m-4">
        <label for="task_shift">Task Shift:</label>
        <select id="task_shift" name="task_shift" class="form-control" value="<?php echo $task_shift ?>" required>
            <option value="morning">Morning</option>
            <option value="evening">Evening</option>
            <option value="night">Night</option>
            <!-- Add more options for other stylists as needed -->
        </select>       
     </div>

        <div class="form-group m-4">
        <label for="assigned_stylist">Assign To:</label>
        <select id="assigned_stylist" name="assigned_stylist" class="form-control" value="<?php echo $assigned_styist ?>" required>
            <option value="1">Stylist 1</option>
            <option value="2">Stylist 2</option>
            <!-- Add more options for other stylists as needed -->
        </select>
        </div>
        
        <button type="submit" name="btn" class="btn btn-primary">Update Task</button>
    </form>
            <?php 
            // if(isset($_POST['btn'])){
            //     $task_name = $_POST['task_name'];
            //     $task_shift = $_POST['task_shift'];
            //     $assigned_stylist = $_POST['assigned_stylist'];
                
            //     // Insert query
            //     $query = "INSERT INTO `tasks`( `task_name`, `task_shift`, `assigned_staff_id`) VALUES ('$task_name','$task_shift','$assigned_stylist')";
            //     // Execute query
            //     if(mysqli_query($con, $query)){
            //         // // Insert a notification for the assigned stylist
            //         // $notification_message = "You have been assigned a new task: $task_name";
            //         // $notification_query = "INSERT INTO notifications (stylist_id, task_id, message, status) VALUES ('$assigned_stylist', LAST_INSERT_ID(), '$notification_message', 'unread')";
            //         // mysqli_query($con, $notification_query);
        
            //         // Notify the stylist (this could involve sending an email or using a real-time notification system)
            //         // For simplicity, we'll just display a JavaScript alert
            //         echo "<script>alert('Task Assigned'); window.location.href ='taskassign.php';</script>";
            //     } else{
            //         echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            //     }
            // }
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

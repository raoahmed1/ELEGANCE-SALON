<?php 
include "connection.php";
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
        <h2 class="text-center" style="margin-top:100px;">Add Services</h2>
        <div class="container">
            <form action="" method="POST">
                <div class="form-group m-4">
                    <label for="item_name">Service Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group m-4">
                    <label for="item_quantity">Description:</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
                <div class="form-group m-4">
                    <label for="item_status">Duration :</label>
                    <input type="text" class="form-control" name="duration" required>
                    </select>
                </div>
                 <div class="form-group m-4">
                    <label for="item_quantity">Price:</label>
                    <input type="number" class="form-control" name="price" required>
                </div>
                <button type="submit" class="btn btn-primary m-4" name="btn">Add Service</button>
            </form>
            <?php 
            if(isset($_POST['btn'])){
                $service_name = $_POST['name'];
                $service_description = $_POST['description'];
                $service_duration = $_POST['duration'];
                $service_price = $_POST['price'];
                
                // Insert query
                $query = "INSERT INTO `services`(`service_name`, `description`, `duration`, `price`) VALUES ('$service_name','$service_description','$service_duration','$service_price')";

                // Execute query
                if(mysqli_query($con, $query)){
                    echo "<script>alert('Service Added'); </script>";
                } else{
                    echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
                }
            }
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

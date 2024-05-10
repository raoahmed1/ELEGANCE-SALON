<?php 
include "connection.php";

// $id = ""; // Initialize $id variable
     
    $id = $_GET['u_id'];
    $query = mysqli_query($con,"select * from `inventory_items` where item_id = $id");
    $row = mysqli_fetch_assoc($query);
    $item_name = $row['item_name'];
    $item_quantity = $row['item_quantity'];
    $item_price = $row['item_price'];
    $item_image = $row['item_image'];
    $item_status = $row['item_status'];

if(isset($_POST['update_btn'])){
    $item_name = $_POST['item_name'];
    $item_quantity = $_POST['item_quantity'];
    $item_price = $_POST['item_price'];
    $item_image = $_POST['item_image'];
    $item_status = $_POST['item_status'];

    $item_imgname = $_FILES['item_image']['name'];
    $item_tmpimgname = $_FILES['item_image']['tmp_name'];
    $destination = "images/" . $item_imgname;
    $extension = pathinfo($item_imgname, PATHINFO_EXTENSION);

    // Check if uploaded file is an image
    if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png') {
        // Move the uploaded file to destination folder
        if (move_uploaded_file($item_tmpimgname, $destination)) {
            // Insert data into database
            $query = "UPDATE `inventory_items` SET `item_name`='$item_name', `item_quantity`='$item_quantity', `item_price`='$item_price', `item_image`='$item_imgname',`isActive`='$item_status' WHERE item_id = '$id'";
            if(mysqli_query($con, $query)) {
                echo "<script>alert('Data inserted successfully.')</script>";
            } else {
                echo "<script>alert('Error occurred while adding product.')</script>";
            }
        } else {
            echo "<script>alert('Error occurred while uploading image.')</script>";
        }
    } else {
        echo "<script>alert('Only JPG, PNG, and JPEG image extensions are allowed.')</script>";
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
        <h2 class="text-center" style="margin-top:100px;">Update Inventory Item</h2>
        <div class="container">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group m-4">
                    <label for="item_name">Item Name:</label>
                    <input type="text" class="form-control" name="item_name" value="<?php echo $item_name?>" required>
                </div>
                <div class="form-group m-4">
                    <label for="item_quantity">Quantity:</label>
                    <input type="number" class="form-control" name="item_quantity" value="<?php echo $item_quantity?>" required>
                </div>
                <div class="form-group m-4">
                    <label for="item_price">Price:</label>
                    <input type="number" class="form-control" name="item_price" value="<?php echo $item_price?>" required>
                </div>
                <div class="form-group m-4">
                    <label for="item_image">Image:</label>
                    <input type="file" class="form-control" name="item_image">
                </div>
                <div class="form-group m-4">
                    <label for="item_status">Status:</label>
                    <select class="form-control" name="item_status" required>
                        <option value="1">Active</option>
                        <option value="0">Deactive</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary m-4" name="update_btn" value="Update Item"/>
            </form>
            <!-- <?php 
            // if(isset($_POST['btn'])){
            //     $item_name = $_POST['item_name'];
            //     $item_quantity = $_POST['item_quantity'];
            //     $item_status = $_POST['item_status'];
                
            //     // Insert query
            //     $query = "INSERT INTO `Inventory_Items` (`item_name`, `item_quantity`, `item_status`) VALUES ('$item_name', '$item_quantity', '$item_status')";
                
            //     // Execute query
            //     if(mysqli_query($con, $query)){
            //         echo "<script>alert('Item Added');</script>";
            //     } else{
            //         echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            //     }
            // } -->
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

<?php 
include("connection.php");
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
<style>
    .container{
        margin-top: 10%;
        margin-left: 25%;
        margin-bottom: 10%;
    }
</style>
<body>

<?php include("aside.php")?>

<div class="container">
    <h2 class="text-center">Inventory Management</h2>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">Item Id</th>
                <th scope="col">Item Name</th>
                <th scope="col">Item Quantity</th>
                <th scope="col">Item Price</th>
                <th scope="col">Item Image</th>
                <th scope="col">Item Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Retrieve inventory items from the database
            $query = "SELECT * FROM inventory_items" ;
            $result = mysqli_query($con, $query);

            if (!$result) {
                die("Database query failed."); // Add error handling
            }

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td scope='row'><?php echo $row["item_id"]; ?></td>
                        <td><?php echo $row["item_name"]; ?></td>
                        <td><?php echo $row["item_quantity"]; ?></td>
                        <td><?php echo $row["item_price"]; ?></td>
                        <td> <img src="images/<?php echo $row["item_image"]; ?>" class="img-fluid img-thumbnail mx-auto d-block" style="max-width: 30%; height: auto;"></td>
                        <td><?php echo $row["isActive"] ? "Active" : "Deactive"; ?></td>
                        <td><a href="updateinventory.php?u_id=<?php echo $row['item_id']; ?>" class='btn btn-primary' onclick="alert('<?php echo $row['item_id']; ?>')">UPDATE</a></td>
                        <td><a href="deleteinventory.php?ditem_id=<?php echo $row['item_id']?>" class='btn btn-danger'>DELETE</a></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='5' class='text-center'>No items found</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- <a href="addclient.php" class='btn btn-primary'>ADD</a> -->
</div>

<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
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

<!-- JavaScript to show alert for low inventory -->
<script>
// Function to check if the page is being loaded for the first time
function isFirstLoad() {
    // Check if the page has been refreshed
    if (performance.navigation.type === 1) {
        // Get all table rows
        var rows = document.querySelectorAll('tbody tr');

        // Iterate over each row
        rows.forEach(function(row) {
            // Get the quantity cell for the current row
            var quantityCell = row.querySelector('td:nth-child(3)');
            // Get the quantity value
            var quantity = parseInt(quantityCell.textContent.trim());

            // Check if quantity is less than 10
            if (quantity < 10) {
                // Show alert
                alert('Inventory quantity for ' + row.querySelector('td:nth-child(2)').textContent.trim() + ' is less than 10.');
            }
        });
    }
}

// Call the function when the page is loaded
window.onload = function() {
    isFirstLoad();
};
</script>

</body>
</html>

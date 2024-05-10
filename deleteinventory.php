<?php include "connection.php";
if(isset($_GET['ditem_id'])){
    $id = $_GET['ditem_id'];
    $query = mysqli_query($con,"DELETE FROM `inventory_items` WHERE item_id=$id");
    if($query){
        echo "<script>window.location.href = 'viewinventory.php'</script>";
    }
}
?>

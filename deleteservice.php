<?php include "connection.php";?>
<?php
if(isset($_GET['ds_id'])){
    $id = $_GET['ds_id'];
    $query = mysqli_query($con,"DELETE FROM `services` WHERE service_id=$id");
    if($query){
        echo "<script>window.location.href = 'viewservices.php'</script>";
    }
}
?>
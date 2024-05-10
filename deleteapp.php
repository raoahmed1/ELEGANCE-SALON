<?php include "connection.php";?>
<?php
if(isset($_GET['Dapp_id'])){
    $id = $_GET['Dapp_id'];
    $query = mysqli_query($con,"DELETE FROM `appointments` WHERE app_id=$id");
    if($query){
        echo "<script>window.location.href = 'appointment.php'</script>";
    }
}
?>
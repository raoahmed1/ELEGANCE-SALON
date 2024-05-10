<?php include "connection.php";?>
<?php
if(isset($_GET['client_id'])){
    $id = $_GET['client_id'];
    $query = mysqli_query($con,"DELETE FROM `clients` WHERE client_id=$id");
    if($query){
        echo "<script>window.location.href = 'viewclient.php'</script>";
    }
}
?>
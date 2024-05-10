<?php include "connection.php";?>
<?php
if(isset($_GET['Dtask_id'])){
    $id = $_GET['Dtask_id'];
    $query = mysqli_query($con,"DELETE FROM `tasks` WHERE task_id=$id");
    if($query){
        echo "<script>window.location.href = 'viewtask.php'</script>";
    }
}
?>
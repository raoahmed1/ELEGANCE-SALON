<?php
include ("connection.php"); 
//   session_start();
//   if(!isset($_SESSION['staff_role'])){
//       echo "<script>location.assign('login.php');</script>";
//   }
//  include("aside.php");


if(isset($_GET['Uapp_id'])){
  $id = $_GET['Uapp_id'];
  
  $query2 = mysqli_query($con,"SELECT * FROM `appointments` WHERE `app_id` = $id");
  $row = mysqli_fetch_assoc($query2);
  $client_name = $row['c_name'];
  // echo "<script>alert(".$client_name.")</script>";
  $client_contact = $row['c_contact'];
  $client_service = $row['c_service'];

//   $client_time = $row['appointment_Date'];
}



if(isset($_POST['btn'])){
    $client_name = $_POST['cnametxt'];
    $client_contact = $_POST['contacttxtc'];
    $client_service = $_POST['services_Name'];
    $client_time = $_POST['app_time'];
    $query = mysqli_query($con,"UPDATE `appointments` SET `c_name` ='$client_name',`c_contact`='$client_contact',`c_service`='$client_service',`appointment_Date`='$client_time' WHERE `app_id` = $id");
    if($query){
        echo "<script>alert('Appointment Updated')</script>";
    }
    else{
        echo "<script>alert('Error'); window.location.href = '#'</script>";
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
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>

    <?php
    //  include "aside.php";
     ?>
<?php
include ("connection.php"); 
//   session_start();
//   if(!isset($_SESSION['staff_role'])){
//       echo "<script>location.assign('login.php');</script>";
//   }
//  include("aside.php");


if(isset($_GET['Uapp_id'])){
  $id = $_GET['Uapp_id'];
  
  $query2 = mysqli_query($con,"SELECT * FROM `appointments` WHERE `app_id` = $id");
  $row = mysqli_fetch_assoc($query2);
  $client_name = $row['c_name'];
  // echo "<script>alert(".$client_name.")</script>";
  $client_contact = $row['c_contact'];
  $client_service = $row['c_service'];

  $client_time = $row['appointment_Date'];
}



if(isset($_POST['btn'])){
    $client_name = $_POST['cnametxt'];
    $client_contact = $_POST['contacttxtc'];
    $client_service = $_POST['services_Name'];
    $client_time = $_POST['app_time'];
    $query = mysqli_query($con,"UPDATE `appointments` SET `c_name` ='$client_name',`c_contact`='$client_contact',`c_service`='$client_service',`appointment_Date`='$client_time' WHERE `app_id` = $id");
    if($query){
        echo "<script>alert('Appointment Updated')</script>";
    }
    else{
        echo "<script>alert('Error'); window.location.href = '#'</script>";
    }

}
?>

    <div class="container mt-5"  style="margin-top:50px">

        <form action="" method="post">
        <!-- <h1 class="text-center">BOOK APPOINTMENT</h1> -->
        <div class="form-group m-4">
            <label >Client Name :</label>
            <input type="text" name="cnametxt" id="cname" class="form-control" value="<?php echo $client_name ?>" Required>
          </div>
          <div class="form-group m-4">
            <label >Client Contact :</label>
            <input type="number" name="contacttxtc" id="contact" class="form-control" value="<?php echo $client_contact ?>" Required>
          </div>
          <div class="form-group m-4">
            <label>Appointment Time :</label>
            <input type="datetime-local" name="app_time" class="form-control" placeholder="appointment time" value="<?php echo $client_time ?>" Required>
          </div>
          <div class="form-group m-4">
            <label >Client Service :</label> 
          <select class="form-control" name="services_Name" value="<?php echo $client_service ?>" Required>
            <?php 
             $services = mysqli_query($con,"select * from `services`");
             while($row = mysqli_fetch_assoc($services)){
              echo "<option value='".$row['service_id']."' data='".$row['price']."'>".$row['service_name']."</option>";
             }
                ?>
          </select>
          </div>

          <div class="form-group m-4">
            <label>Service price</label>
          <input class="form-control bg-light" id="price" readonly>
          </div>
          

          <!-- <div class="form-group m-4">
            <label for="">Date&Time</label>
            <input type="text" name="datetxt" id="date" class="form-control">
          </div> -->
          <div class="form-group m-4">
          <button type="submit" class="btn btn-primary" name="btn">Submit</button>
          </div>
          
        </form>
        
    </div>
    <!-- <script
  src="https://code.jquery.com/jquery-1.12.4.min.js"></>
  <script>
            $('#services').change(function(){
    $('#price').val($(this).find(':selected').attr('data'));
  });
          </script> -->



    


    <!-- footer part -->
    <?php 
    // include "footer.php";
     ?>

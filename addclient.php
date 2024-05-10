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
    }
</style>
  <body>

  <?php include("aside.php")?>

     <div class="container" mt-5 p-5>
        <form action="" method="post">
            <h1 class="text-center">CLIENT MANAGEMENT</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="nametxt" id="name" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="">Contact</label>
          <input type="number" name="contacttxt" id="contact" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="">Info</label>
          <input type="text" name="infotxt" id="info" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="">Service</label>
          <input type="text" name="servicetxt" id="service" class="form-control">
        </div>
        <br>
        <div class="form-group">
          <label for="">Appointment history</label>
          <input type="text" name="aphistorytxt" id="aphistory" class="form-control">
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="client-btn">Submit</button>
        </form>
     </div> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> 
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


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


    <script src="./js/dashboard/dashboard-1.js"></script>
</body>
</html>
<?php
if(isset($_POST['client-btn'])){
    $name=$_POST['nametxt'];
    $contact=$_POST['contacttxt'];
    $information=$_POST['infotxt'];
    $service=$_POST['servicetxt'];
    $appointment=$_POST['aphistorytxt'];
    $query = mysqli_query($con,"INSERT INTO `clients` (`name`, `contact`, `information`, `service`, `appointment history`) VALUES ('$name',' $contact','$information',' $service',' $appointment')"); 
    if($query){
        echo "<script>alert('data inserted')</script>";
    }
    else{
        echo "<script>alert('data not inserted')</script>";
}
}?>
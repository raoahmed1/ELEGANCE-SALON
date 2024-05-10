<?php 
    $con = mysqli_connect("localhost","root","","salon");

    if (mysqli_connect_errno()) {
        echo "Connection did not build with database";
        die(); // Terminate script execution
    } else {
        echo "Connection build with database";
    }
?>

<?php
    session_start();

    $cid = $_SESSION['user'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $when = $_POST['when'];
    $days = $_POST['days'];
    $time = $_POST['time'];

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "update temp_booking set CID=$cid,bfrom='$from',bto='$to',bwhen='$when',no_days=$days,btime='$time',ride_type='OUTSTATION'";

    mysqli_query($con,$query) or die("er");

    header("location:../Select Cab.php");
?>
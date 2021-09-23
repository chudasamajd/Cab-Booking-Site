<?php
    session_start();
    
    $carid=$_GET['carid'];

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "select * from car_detail where car_id=$carid";

    $res = mysqli_query($con,$query);

    $aid=0;

    while($data=mysqli_fetch_array($res))
    {
        $aid=$data['AID'];
    }

    $query = "update temp_booking set car_id=$carid,AID=$aid";

    mysqli_query($con,$query) or die("er");

    header("location:../Payment.php");
?>
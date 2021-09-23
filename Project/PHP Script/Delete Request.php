<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
        header("location:Login.php");
    }
    
    $rid = $_GET['rid'];

    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "delete from requested_car where RID=$rid";
    
    mysqli_query($con,$query);

    header("location:../Admin Requested Car.php");
?>
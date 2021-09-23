<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "insert into contactUs(fname,lname,email,msg) values('$fname','$lname','$email','$msg')";

    mysqli_query($con,$query);

    header("location:../Contact Us.php");
?>
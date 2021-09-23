<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header("location:Agent Login.php");
    }

    $aid = $_SESSION['user'];

    $password = $_POST['pass'];
    
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    
    $contact = $_POST['contact'];

    $photo = $_FILES['photo']['name'];
    $path = "../Agent/".$photo;

    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "update agent_registration set password='$password',address='$address',city='$city',pincode='$pincode',contact='$contact',photo='$photo' where AID=$aid";

    mysqli_query($con,$query);

    move_uploaded_file($_FILES['photo']['tmp_name'],$path);

    header("location:../Agent Update Info.php");
?>
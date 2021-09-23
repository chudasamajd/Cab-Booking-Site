<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header("location:Agent Login.php");
    }

    $aid = $_SESSION['user'];

    $company = $_POST['company'];

    $model = $_POST['model'];

    $capacity = $_POST['capacity'];

    $desc = $_POST['desc'];

    $photo = $_FILES['photo']['name'];
    $path = "../Cars/".$photo;

    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "insert into requested_car(AID,company,model,capacity,description,photo) values($aid,'$company','$model',$capacity,'$desc','$photo')";

    mysqli_query($con,$query);

    move_uploaded_file($_FILES['photo']['tmp_name'],$path);

    header("location:../Agent Home.php");
?>
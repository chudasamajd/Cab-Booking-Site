<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
        header("location:Login.php");
    }
    
    $rid = $_GET['rid'];

    $price = $_POST['price'];

    $aid=0;
    $company='';
    $model='';
    $capacity=0;
    $description='';
    $photo='';

    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "select * from requested_car where RID=$rid";
            
    $res = mysqli_query($con,$query);
            
    while($data=mysqli_fetch_array($res)){
        $aid=$data['AID'];
        $company=$data['company'];
        $model=$data['model'];
        $capacity=$data['capacity'];
        $description=$data['description'];
        $photo=$data['photo'];
    }

    $query = "insert into car_detail(AID,company,model,capacity,description,price,photo) values($aid,'$company','$model',$capacity,'$description',$price,'$photo')";

    mysqli_query($con,$query) or die("Error");

    $query = "delete from requested_car where RID=$rid";
    
    mysqli_query($con,$query);

    header("location:../Admin Requested Car.php");
?>
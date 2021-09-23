<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['pass'];
    
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];

    $photo = $_FILES['photo']['name'];
    $path = "../Agent/".$photo;


    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "insert into agent_registration(fname,lname,email,DOB,password,address,city,pincode,gender,contact,photo) values('$fname','$lname','$email','$dob','$password','$address','$city','$pincode','$gender','$contact','$photo')";

    mysqli_query($con,$query);

    move_uploaded_file($_FILES['photo']['tmp_name'],$path);

    header("location:../Agent Login.php");
?>
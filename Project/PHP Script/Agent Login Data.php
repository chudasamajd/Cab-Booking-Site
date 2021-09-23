<?php
    session_start();

    $userID = $_POST['userID'];
    $pass = $_POST['pass'];

    $count = 0;

    $AID = 0;

    $con = mysqli_connect('localhost','root','','lets_drive');

    $query = "select * from agent_registration where email='$userID' AND password='$pass'";

    $res = mysqli_query($con,$query);

    while($data = mysqli_fetch_array($res))
    {
        $count++;
        
        $AID = $data['AID'];
    }

    if($count > 0){
        $_SESSION['user'] = $AID;
        
        header("location:../Agent Home.php");
    }

    else{
        header("location:../Agent Login.php?user=1");
    }
?>
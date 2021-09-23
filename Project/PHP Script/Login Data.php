<?php
    session_start();

    $userID = $_POST['userID'];
    $pass = $_POST['pass'];

    $count = 0;

    $CID = 0;

    $useroradmin = 0;

    $con = mysqli_connect('localhost','root','','lets_drive');
    
    if($useroradmin == 0){

        $query = "select * from registration where email='$userID' AND password='$pass'";

        $res = mysqli_query($con,$query);

        while($data = mysqli_fetch_array($res))
        {
            $count++;

            $CID = $data['CID'];
        }

        if($count > 0){
            $_SESSION['user'] = $CID;

            header("location:../Book Now.php");
        }
        else{
            $useroradmin=1;
        }
    }
    if($useroradmin == 1){
        $query = "select * from admin where UID='$userID' AND password='$pass'";

        $res = mysqli_query($con,$query);

        while($data = mysqli_fetch_array($res))
        {
            $count++;

        }

        if($count > 0){
            $_SESSION['admin'] = 1;

            header("location:../Admin Home.php");
        }
        else{
            header("location:../Login.php?user=1");
        }
    }
    
?>
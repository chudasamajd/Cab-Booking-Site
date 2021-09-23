<?php
    session_start();

    $cid = $_SESSION['user'];

    $payby = $_POST['payBy'];

    $code = $_POST['coupon'];

    $offerid=0;

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "update temp_booking set payBy='$payby'";

    mysqli_query($con,$query) or die("er");

    if(!($code==''))
    {
        $query = "select * from offer where CID=$cid and code=$code and used=0";
        
        $res = mysqli_query($con,$query);
        
        while($data=mysqli_fetch_array($res)){
            
            $offerid=$data['offerID'];
        }
    }

    header("location:../Reciept.php?oid=$offerid");


?>
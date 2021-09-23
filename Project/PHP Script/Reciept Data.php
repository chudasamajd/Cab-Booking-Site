<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header('location:Login.php');
    }

    $total = $_POST['totalamount'];

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "update temp_booking set Fare=$total";

    mysqli_query($con,$query) or die("er");
    
    $query = "select * from temp_booking";

    $res = mysqli_query($con,$query);

    $CID=0;
    $bfrom='';
    $bto='';
    $bwhen='';
    $no_days=0;
    $btime='';
    $carID=0;
    $aid=0;
    $fare=0;    
    
    $ride ='';

    while($data=mysqli_fetch_array($res)){
        $ride = $data['ride_type'];
        
        $CID = $data['CID'];
        $bfrom = $data['bfrom'];
        $bto = $data['bto'];
        $bwhen = $data['bwhen'];
        $no_days = $data['no_days'];
        $btime = $data['btime'];
        $carID = $data['car_id'];
        $aid = $data['AID'];
        $fare = $data['Fare'];
    }

    if($ride == 'LOCAL')
    {
        $query = "insert into local_booking(CID,bfrom,bto,bwhen,no_days,btime,carID,AID,fare) values($CID,'$bfrom','$bto','$bwhen',$no_days,'$btime',$carID,$aid,$fare)";
        
        mysqli_query($con,$query) or die("Insert Error");
    }
    else{
        $query = "insert into outstation_booking(CID,bfrom,bto,bwhen,no_days,btime,carID,AID,fare) values($CID,'$bfrom','$bto','$bwhen',$no_days,'$btime',$carID,$aid,$fare)";
        
        mysqli_query($con,$query) or die("Insert Error");
    }

    header("location:../Finish.php");
?>
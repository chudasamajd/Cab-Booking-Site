<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header("location:../Login.php");
    }
    
    $cid = $_SESSION['user'];

    $offerid = $_GET['offerid'];

    $code = $_GET['code'];

    $con = mysqli_connect("localhost",'root','','lets_drive');

    $query = "select * from offer where CID=$cid AND offerID=$offerid";

    $res = mysqli_query($con,$query);

    $count = 0;

    while($data = mysqli_fetch_array($res)){
        $count++;
    }

    
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color:#303030;
        }    
        #coupon{
            font-family: fantasy;
            font-size: 15px;
            color: white;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #btn{
            height: 35px;
            width: 130px;
            border: none;
            outline: none;
            background-color: coral;
            color:black;
            padding-left: 5PX;
            margin: 10px;
            margin-right: 0px;
            margin-left: 30px;
            margin-top: 50px;
            font-family: fantasy;
            color: white;
            font-size: 13px;
            border-radius: 35px;
            line-height: 35px;
            text-align: center;
        }
        a{
            text-decoration: none;
        }
    </style>
    </head>
    <body>
        <table border="0" id="coupon">
            <tr>
                <td>
                    <?php
                    if($count>0){
                        echo "Sorry! You already use this offer.";
                    }
                    else{
                        echo "Your Coupon Code : ".$code; 
                        
                        $query = "insert into offer(CID,offerID,code) values($cid,$offerid,$code)";
                        
                        mysqli_query($con,$query);
                        
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="../Offers.php"><div id="btn">OK</div></a>
                </td>
            </tr>
        </table>
    </body>
</html>
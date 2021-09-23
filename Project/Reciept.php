<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header('location:Login.php');
    }
    $cid = $_SESSION['user'];
    $oid = $_GET['oid'];

?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color:#303030;
        }    
        #reciept{
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
            margin-left: 110px;
            margin-top: 50px;
            font-family: fantasy;
            color: white;
            font-size: 13px;
            border-radius: 35px;
            line-height: 0;
        }
    </style>
    </head>
    <body>
        <form method="post" action="PHP Script/Reciept Data.php">
            <table border="0" id="reciept" width="400px" height="250px">
                <tr>
                    <td>
                        Fare 
                    </td>
                    <td>
                        <?php
                            $ride='';
                        
                            $amount = 0;
                        
                            $discount =0;
                        
                            $con = mysqli_connect("localhost",'root','','lets_drive');

                            $query = "select * from temp_booking,car_detail where temp_booking.car_id=car_detail.CarID";

                            $res = mysqli_query($con,$query);

                            while($data=mysqli_fetch_array($res)){
                                
                                $ride = $data['ride_type'];
                                $amount = $data['price']*$data['no_days']*24;
                                echo $amount;        

                            }

                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                     Discount
                    </td>
                    <td>
                        <?php
                            if($oid==1){
                                if($ride=="OUTSTATION"){
                                   echo $discount = 250; 
                                    
                                    $query = "update offer set used=1 where CID=$cid and offerID=1";
                                    
                                    mysqli_query($con,$query);
                                }
                                else{
                                  echo  $discount = 0;
                                }
                            }
                            else if($oid==2){
                                if($ride=="LOCAL"){
                                  echo  $discount = $amount/2;  
                                    $query = "update offer set used=1 where CID=$cid and offerID=2";
                                    
                                    mysqli_query($con,$query);
                                }
                                else{
                                   echo $discount = 0;
                                }
                            }
                            else if($oid==3){
                                if($ride=="LOCAL"){
                                    if($amount>1000){
                                      echo  $discount = ($amount*30)/100;    
                                        $query = "update offer set used=1 where CID=$cid and offerID=3";
                                    
                                        mysqli_query($con,$query);
                                    }
                                }
                                else{
                                  echo  $discount = 0;
                                }
                            }
                            else{
                                echo $discount = 0;
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr align="left" size="2" width="330px" color="white"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Grand Total
                    </td>
                    <td>
                        <?php echo $amount-$discount; ?>
                        <input type="hidden" value="<?php echo $amount-$discount;?>" name="totalamount"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="FINISH" id="btn"/>
                    </td>

                </tr>
            </table>
        </form>
    </body>
</html>
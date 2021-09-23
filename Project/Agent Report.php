<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header("location:Agent Login.php");
    }

    $aid = $_SESSION['user'];
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        #report{
            position: absolute;
            top:5%;
            left: 17%;
        }
        #field{
            height: 40px;
            background-color: coral;
            font-family: fantasy;
            color: #303030;
            text-align: center;
            font-size: 13px;
        }
        #cardata{
            font-family: fantasy;
            color: #303030;
            text-align: center;
            font-size: 13px;
        }
    </style>
    </head>
    <body>
        <?php include("Agent Menu.php");?>
        
        <table border="1" id="report" width="80%">
            <tr id="field">
                <td rowspan="2">
                    NO
                </td>
                <td colspan="2">
                    CAR INFORMATION
                </td>
                <td colspan="2">
                    BOOKING INFORMATION
                </td>
                <td rowspan="2">PROFIT</td>
            </tr>
            <tr id="field">
                <td>COMPANY</td>
                <td>MODEL</td>
                <td>ISSUE DATE</td>
                <td>NO OF DAYS</td>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $count=0;
            
                $query = "select * from car_detail,local_booking where car_detail.CarID=local_booking.carID and car_detail.AID=$aid";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
                    
                    $count++;
            ?>
            <tr id="cardata">
                <td>
                    <?php echo $count;?>
                </td>
                <td>
                    <?php echo $data['company'];?>
                </td>
                <td>
                    <?php echo $data['model'];?>
                </td>
                <td>
                    <?php echo $data['bwhen'];?>
                </td>
                <td>
                    <?php echo $data['no_days'];?>
                </td>
                <td>
                    <?php echo ($data['fare']*60)/100;?>
                </td>
            </tr>
            <?php
                }
        
            $query = "select * from car_detail,outstation_booking where car_detail.CarID=outstation_booking.carID and car_detail.AID=$aid";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
                    
                    $count++;
            ?>
            <tr id="cardata">
                <td>
                    <?php echo $count;?>
                </td>
                <td>
                    <?php echo $data['company'];?>
                </td>
                <td>
                    <?php echo $data['model'];?>
                </td>
                <td>
                    <?php echo $data['bwhen'];?>
                </td>
                <td>
                    <?php echo $data['no_days'];?>
                </td>
                <td>
                    <?php echo ($data['fare']*60)/100;?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
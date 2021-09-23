<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
        header("location:Login.php");
    }
?>
<html>
    <head>
    <style>
        #reportTable{
            position: absolute;
            top:50px;
            z-index: -1;
            left: 230px;
        }    
        #field{
            font-family: fantasy;
            font-size: 14px;
            color: #303030;
            text-align: center;
            background-color: coral;
        }
        #record{
            font-family: arial;
            font-size: 13px;
            text-align: center;
        }
    </style>
    </head>
    <body>
        <?php include("Admin Menu.php");?>
        
        <table border="1" id="reportTable" width="1100px">
            <tr id="field">
                <td width="100px">
                    ORDER ID
                </td>
                <td width="100px">
                    CUSTOMER ID
                </td>
                <td width="200px">
                    FROM
                </td>
                <td width="200px">
                    TO
                </td>
                <td width="100px">
                    PICKUP DATE
                </td>
                <td width="100px">
                    PICKUP TIME
                </td>
                <td width="100px">
                    NO OF DAYS
                </td>
                <td width="100px">
                    CAR ID
                </td>
                <td width="100px">
                    FARE
                </td>
            </tr>
            
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $query = "select * from local_booking";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
            ?>
                <tr id="record">
                    <td><?php echo $data['OID'];?></td>
                    <td><?php echo $data['CID'];?></td>
                    <td><?php echo $data['bfrom'];?></td>
                    <td><?php echo $data['bto'];?></td>
                    <td><?php echo $data['bwhen'];?></td>
                    <td><?php echo $data['btime'];?></td>
                    <td><?php echo $data['no_days'];?></td>
                    <td><?php echo $data['carID'];?></td>
                    <td><?php echo $data['fare'];?></td>
                </tr>    
            <?php
                    
                }
            ?>
            
        </table>
    </body>
</html>
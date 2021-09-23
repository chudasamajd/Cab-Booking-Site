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
            left: 230px;
            z-index: -1;
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
                <td width="40px">
                    CAR ID
                </td>
                <td width="100px">
                    AGENT ID
                </td>
                <td width="100px">
                    COMPANY
                </td>
                <td width="100px">
                    MODEL
                </td>
                <td width="80px">
                    CAPACITY
                </td>
                <td width="300px">
                    DESCRIPTION
                </td>
                <td width="100px">
                   PRICE
                </td>
                <td width="200px">
                    PHOTO
                </td>
                
            </tr>
            
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $query = "select * from car_detail";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
            ?>
                <tr id="record">
                    <td><?php echo $data['CarID'];?></td>
                    <td><?php echo $data['AID'];?></td>
                    <td><?php echo $data['company'];?></td>
                    <td><?php echo $data['model'];?></td>
                    <td><?php echo $data['capacity'];?></td>
                    <td><?php echo $data['description'];?></td>
                    <td><?php echo $data['price'];?></td>
                    <td><img src="Cars/<?php echo $data['photo'];?>" height="100px" width="150px"/></td>
                </tr>    
            <?php
                    
                }
            ?>
            
        </table>
    </body>
</html>
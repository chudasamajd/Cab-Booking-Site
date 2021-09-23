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
                    ID
                </td>
                <td width="100px">
                    FIRST NAME
                </td>
                <td width="100px">
                    LAST NAME
                </td>
                <td width="100px">
                    EMAIL ID
                </td>
                <td width="400px">
                    QUERY
                </td>
                
            </tr>
            
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $query = "select * from contactus";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
            ?>
                <tr id="record">
                    <td><?php echo $data['id'];?></td>
                    <td><?php echo $data['fname'];?></td>
                    <td><?php echo $data['lname'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['msg'];?></td>
                </tr>    
            <?php
                    
                }
            ?>
            
        </table>
    </body>
</html>
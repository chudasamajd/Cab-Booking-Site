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
                   AGENT ID
                </td>
                <td width="100px">
                    FIRST NAME
                </td>
                <td width="100px">
                    LAST NAEM
                </td>
                <td width="100px">
                    EMAIL ID
                </td>
                <td width="80px">
                    DOB
                </td>
                <td width="300px">
                    ADDRESS
                </td>
                <td width="100px">
                    CITY
                </td>
                <td width="80px">
                    PINCODE
                </td>
                <td width="100px">
                    GENDER
                </td>
                <td width="100px">
                    CONTACT NO
                </td>
                <Td width="100px">
                    PHOTO
                </Td>
            </tr>
            
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $query = "select * from agent_registration";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
            ?>
                <tr id="record">
                    <td><?php echo $data['AID'];?></td>
                    <td><?php echo $data['fname'];?></td>
                    <td><?php echo $data['lname'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['dob'];?></td>
                    <td><?php echo $data['address'];?></td>
                    <td><?php echo $data['city'];?></td>
                    <td><?php echo $data['pincode'];?></td>
                    <td><?php echo $data['gender'];?></td>
                    <td><?php echo $data['contact'];?></td>
                    <td><img src="Agent/<?php echo $data['photo'];?>" height="50px" width="50px" style="border-radius:50%;"/></td>
                </tr>    
            <?php
                    
                }
            ?>
            
        </table>
    </body>
</html>
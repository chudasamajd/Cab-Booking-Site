<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
        header("location:Login.php");
    }
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }    
        #carinfo{
         position: absolute;
            top:5%;
            left: 17%;
            z-index: -1;
        }
        #carinfo a{
            color: black;
        }
        #field{
            font-family: fantasy;
            font-size: 14px;
            background-color: coral;
            text-align: center;
        }
    </style>
    </head>
    <body>
        <?php include("Admin Menu.php");?>
        <table border="1" id="carinfo" width="80%">
            <tr id="field">
                <td rowspan="2" width="50px">
                    AGENT ID
                </td>
                <td colspan="5">
                    CAR INFORMATION
                </td>
                <td rowspan="2">
                    ACTION
                </td>
            </tr>
            <tr id="field">
                <td width="100px">
                    COMPANY
                </td>
                <td width="100px">
                    MODEL
                </td>
                <td width="100px">
                    CAPACITY
                </td>
                <td width="350px">
                    DESCRIPTION
                </td>
                <td width="150px">
                    PHOTO
                </td>
            </tr>
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');
            
                $query = "select * from requested_car";
            
                $res = mysqli_query($con,$query);
            
                while($data=mysqli_fetch_array($res)){
            ?>
                <tr>
                    <td>
                        <?php echo $data['AID'];?>
                    </td>
                    <td>
                        <?php echo $data['company'];?>
                    </td>
                    <td>
                        <?php echo $data['model'];?>
                    </td>
                    <td>
                        <?php echo $data['capacity'];?>
                    </td>
                    <td>
                        <?php echo $data['description'];?>
                    </td>
                    <td>
                        <img src="Cars/<?php echo $data['photo'];?>" height="100px" width="150px"/>
                    </td>
                    <td>
                        <a href="Car Price.php?rid=<?php echo $data['RID'];?>">ADD</a>
                        <a href="PHP%20Script/Delete Request.php?rid=<?php echo $data['RID'];?>">DELETE</a>
                    </td>
                </tr>
                
            <?php
                }
            ?>
        </table>
    </body>
</html>
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
        #info{
            position: absolute;
            top:50px;
            left: 250px;
            
        }
        #car{
            height: 150px;
            width: 230px;
            border: 2px solid lightgray;
            border-radius: 5px;
            margin-right: 40px;
        }   
        #car img{
            margin-top: 20px;
        }
        #carName{
            margin-top: 5px;
            font-family: fantasy;
        }
        #caronrent{
            font-family: fantasy;
            font-size: 25px;
            text-align: center;
            padding-bottom: 40px;
        }
    </style>
    </head>
    <body>
        <?php include("Agent Menu.php");?>
        <div id="info">
            <table border="0">
                <tr> <td colspan="4" id="caronrent">CAR ON RENT</td></tr>  
                <tr align="center">
                        <?php
                        $con = mysqli_connect('localhost','root','','lets_drive');
                          
                        $query = "select * from car_detail where AID=$aid";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        if(mysqli_num_rows($res)!=0){
                    
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                        <div id="car">
                            <img src="Cars/<?php echo $data['photo'];?>" width="150px"/>
                            <div id="carName"><?php echo $data['company']." ".$data['model'];?></div>
                            
                        </div>
                    </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where AID=$aid and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div id="car">
                            <img src="Cars/<?php echo $data['photo'];?>" width="150px"/>
                            <div id="carName"><?php echo $data['company']." ".$data['model'];?></div>
                            
                        </div>
                    </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where AID=$aid and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div id="car">
                            <img src="Cars/<?php echo $data['photo'];?>" width="150px"/>
                            <div id="carName"><?php echo $data['company']." ".$data['model'];?></div>
                            
                        </div>
                    </td>
                        <?php
                        }
                        }
                            
                        }
                        ?>
                    </tr>
                    
            </table>
        </div>
    </body>
</html>
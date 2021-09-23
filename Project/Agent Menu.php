<?php
    session_start();


    $aid = $_SESSION['user'];
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }
        #main{
            height: 100vh;
            width: 200px;
            background-color:#303030;
            position: fixed;
            top:0;
            left: 0;
        }    
        #profile{
            height: 80px;
            width: 80px;
            border-radius: 50%;
            position: absolute;
            top:70px;
            left: 50px;
        }
        #profile img{
            border-radius: 50%;
        }
        #menu{
            position: absolute;
            top:200px;
            left: 15px;
        }
        #menu ul{
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        #menu ul li{
            width: 165px;
            font-family: fantasy;
            font-size: 14px;
            color: white;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #000;
        }
        a{
            text-decoration: none;
            color: white;
        }
    </style>
    </head>
    <body>
        <div id="main">
            <div id="profile">
                <?php
                
                    $con = mysqli_connect('localhost','root','','lets_drive');
                
                    $query = "select * from agent_registration where AID=$aid";
                
                    $res = mysqli_query($con,$query);
                
                    while($data=mysqli_fetch_array($res)){
                ?>
                        <img src="Agent/<?php echo $data['photo'];?>" height="100%" width="100%"/>
                <?php
                    }
                ?>
                
            </div>
            <div id="menu">
                <ul>
                    <li><a href="Agent%20Home.php">HOME</a></li>
                    <li><a href="Car Registration.php">ADD CAR</a></li>
                    <li><a href="Agent Update Info.php">UPDATE INFO</a></li>
                    <li><a href="Agent%20Report.php">REPORT</a></li>
                    <li><a href="PHP%20Script/Logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
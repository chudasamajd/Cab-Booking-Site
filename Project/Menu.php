<?php
    session_start();

?>

<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }   
        #main{
            height: 60px;
            width: 100%;
            background-color:white;
            
            position: fixed;
            z-index: 9999;
        }
        #menu ul{
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        #menu ul li{
            display: inline-block;
            margin-left: 30px;
            font-family: fantasy;
        }
        #login{
            font-family: fantasy;
            vertical-align:super;
        }
        #rmenu ul{
            list-style: none;
            margin: 0px;
            padding: 0px;
        }
        #rmenu ul li{
            display: inline-block;
            margin-left: 30px;
            font-family: fantasy;
            vertical-align: middle;
        }
        #menu ul li a{
            text-decoration: none;
            color: #303030;
        }
        #rmenu ul li a{
            text-decoration: none;
            color: #303030;
        }
        #usericon{
            border-radius: 50%;
            height: 30px;
            width: 30px;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()>50) 
                {
                    $("#main").css("box-shadow","0 2px 15px rgba(0,0,0,.1)");
                }
                else{
                    $("#main").css("box-shadow","none");
                }
            }); 
        });    
    </script>
    </head>
    <body>
        <div id="main">
            <table border="0" width="100%">
                <tr>
                    <td width="45%">
                        <div id="menu">
                        <ul>
                            <li><a href="Index.php">HOME</a></li>
                            <li><a href="Services.php">SERVICES</a></li>
                            <li><a href="Book%20Now.php">BOOK NOW</a></li>
                            <li><a href="Offers.php">OFFERS</a></li>
                            <li><a href="Contact%20US.php">CONTACT US</a></li>
                        </ul>
                        </div>
                    </td>
        
                    <td>
                        <div id="menuLogo"><img src="LOGO.png" height="55px" width="55px"/></div>
                    </td>
                    
                    <td align="right" style="padding-right:30px;">
                        <div id="rmenu">
                            <ul>
                                <li><a href="Registration.php">REGISTRATION</a></li>
                                <?php 
                                        if(isset($_SESSION['user'])){
                                
                                    
                                            
                                            $uid = $_SESSION['user'];
                                            
                                            $con = mysqli_connect('localhost','root','','lets_drive');
                                            
                                            $query = "select * from registration where CID = $uid";
                                            
                                            $res = mysqli_query($con,$query);
                                            
                                            while($data = mysqli_fetch_array($res)){
                                                
                                    ?>
                                        <li><a href="PHP Script/Logout.php">LOGOUT</a></li>
                                        <li>
                                
                                        <img src="User/<?php echo $data['photo'];?>" id="userIcon" width="30px"/></li>
                                    <?php   
                                            }   
                                        }
                                            else
                                            {
                                    ?>
                                    <li><a href="Login.php">LOGIN</a></li>
                                    <li>
                                    <img src="User.png" id="userIcon" width="30px"/></li>
                                    <?php
                                            }
                                    ?>
                            </ul>
                        </div>
                        
                    </td>
                </tr>
                
            
            </table>
        </div>
    </body>
</html>
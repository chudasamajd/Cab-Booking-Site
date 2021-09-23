<?php
    session_start();

?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-image: url(Contact%20Us%20BG.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        #mainMenu{
            height: 60px;
            width: 100%;
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
            color: white;
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
            color: white;
        }
        form div{
            position: relative;
        }
        input{
            padding: 10px 0;
            font-family: fantasy;
            font-size: 15px;
            background-color: transparent;
            margin-bottom: 15px;
            font-size: 13px;
            color: white;
            width: 350px;
            box-sizing: border-box;
            box-shadow: none;
            outline: none;
            border: none;
            border-bottom: 1px solid darkgray;
        }
        #firstName,#lastName{
            width: 175px;
        }
        input:focus{
            border-bottom: 1px solid coral; 
        }
        form div label{
            font-family: fantasy;
            font-size: 12px;
            color:darkgray;
            pointer-events: none;
            transition: all .3s;
        }
        #main table{
            position: absolute;
            top:57%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #btn{
            width: 150px;
            background-color: coral;
            border: none;
            
            border-radius: 2px;
        }
        #msg{
            padding: 10px 0;
            font-family: fantasy;
            font-size: 15px;
            background-color: transparent;
            margin-bottom: 15px;
            font-size: 13px;
            color: white;
            width: 350px;
            box-sizing: border-box;
            box-shadow: none;
            outline: none;
            border: none;
            border-bottom: 1px solid darkgray;
            resize: none;
        }
        #msg:focus{
            border-bottom: 1px solid coral; 
        }
        #menu ul li a,#rmenu ul li a{
            text-decoration: none;
            color: white;
        }
        #usericon{
            border-radius: 50%;
            height: 30px;
            width: 30px;
        }
    </style>
    </head>
    <body>
        <div id="mainMenu">
            
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
                        <div id="menuLogo"><img src="LOGO 2.png" height="55px" width="55px"/></div>
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
        
        <div id="main">
            <form action="PHP Script/Contact Us.php" method="post">
            <table border="0">
                <tr>
                    <td colspan="2">
                        <img src="Contact%20Us.png" width="350px" style="margin-bottom:15px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>FIRST NAME</label><br>
                            <input type="text" name="fname" id="firstName" required=""/>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>LAST NAME</label><br>
                            <input type="text" name="lname" id="lastName" required=""/>
                        </div>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <div>
                            <label>E-MAIL ID</label><br>
                            <input type="email" name="email" required=""/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>
                            <label>MESSAGE</label><br>
                            <textarea id="msg" name="msg" required=""></textarea>
                        </div>
                    </td>
                </tr>
                <tr align="right">
                    <td colspan="2">
                        <input type="submit" value="SUBMIT" id="btn"/>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
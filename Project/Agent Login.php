

<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-image: url(Registration%20BG.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
        #mainMenu{
            height:60px;
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
        #menu ul li a,#rmenu ul li a{
            text-decoration: none;
            color: white;
        }
        #agentbtn,#userbtn{
            height: 35px;
            width: 150px;
            background-color: coral;
            border: none;
            outline: none;
            position: relative;
            font-family: fantasy;
            font-size: 15px;
            line-height: 0px;
            border-radius: 35px;
            cursor: pointer;
        }
        #agentbtn{
            margin-left:30px;
            background-color: white;
            color: #303030;
        }
        #userbtn{
            background-color: coral;
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
                            <li><a href="Index.html">HOME</a></li>
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
                                <li><a href="Login.php">LOGIN</a></li>
                                <li><img src="User 2.png" width="30px"/></li>
                            </ul>
                        </div>
                        
                    </td>
                </tr>
                
            
            </table>
                
        </div>
        
        <div id="main">
            <form action="PHP Script/Agent Login Data.php" method="post">
            <table border="0">
                <tr>
                    <td>
                        <img src="Login.png" width="350px" style="margin-bottom:15px;"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="Login.php"><input type="button" value="USER" id="userbtn"/>
                        </a>
                        
                        <a href="Agent%20Login.php"><input type="button" value="AGENT" id="agentbtn"/>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>USER ID</label><br>
                            <input type="email" name="userID" required=""/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>PASSWORD</label><br>
                            <input type="password" name="pass" required=""/>
                        </div>
                    </td>
                </tr>
                <tr align="right">
                    <td>
                        <input type="submit" value="LOGIN" id="btn"/>
                    </td>
                </tr>
            </table>
                
                <input type="hidden" <?php
                    if(isset($_GET['user'])){
                ?>
                        value = "1"
                <?php
                    }else{
                ?>
                    value = "0"
                <?php
                    }
                ?> id="user"/>
            </form>
        </div>
    </body>
    
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        var user = document.getElementById("user");
        
        if(user.value == 1){
            alert("Invalid UserID or Password");
        }
    </script>
</html>
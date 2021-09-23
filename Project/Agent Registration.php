<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-image: url(Registration%20BG.jpg);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            overflow: hidden;
        }
        form div{
            position: relative;
        }
        input,select{
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
        select:focus{
            background-color: darkgray;
        }
        #photoMain{
            padding: 10px 0;
            margin-top: 15px;
            width: 350px;
            border-bottom: 1px solid darkgray;  
        }
        #photoMain > input[type="file"]{
            float: left;
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            cursor: pointer;
            position: relative;
            z-index: 4;
            opacity: 0;
            top:-20px;
        }
        #photoMain > span{
            position: absolute;
            top:5px;
            left: 0px;
            margin: 0px;
            padding: 0px 55px 0px 0px;
            font-family: fantasy;
            font-size: 15px;
            color:white;
            
        }
        #photo{
            margin: 0px;
            padding: 0px;
            cursor: pointer;
            position: relative;
            z-index: 4;
            opacity: 0;
        }
        #photoMain label{
            position: relative;
            top:-30px;
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
            left: 57%;
            transform: translate(-50%,-50%);
        }
        #btn{
            width: 200px;
            background-color: coral;
            border: none;
            margin-right: 190px;
            border-radius: 2px;
        }
        #mainMenu{
            height: 110px;
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
        #agentbtn,#userbtn{
            height: 35px;
            width: 150px;
            background-color: white;
            border: none;
            outline: none;
            position: relative;
            font-family: fantasy;
            font-size: 15px;
            
            line-height: 0px;
            border-radius: 35px;
            cursor: pointer;
        }
        #userbtn{
            color:white;
            background-color: coral;
            left: 285px;
        }
        #agentbtn{
            margin-left: 300px;
            background-color: white;
            color: #303030;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
    
        <script type="text/javascript">
        $(document).ready(function(){
           
            $("#photoMain > input").on('change',function(){
               
                var newValue=$(this).val();
                $("#msg").html(newValue);
                
            });
            
        });
    
        </script>
    </head>
    <body>
        <div id="mainMenu">
            <table border="0" width="100%">
                <tr>
                    <td width="45%">
                        <div id="menu">
                        <ul>
                            <li>HOME</li>
                            <li>SERVICES</li>
                            <li>BOOK NOW</li>
                            <li>OFFERS</li>
                            <li>CONTACT US</li>
                        </ul>
                        </div>
                    </td>
        
                    <td>
                        <div id="menuLogo"><img src="LOGO 2.png" height="55px" width="55px"/></div>
                    </td>
                    
                    <td align="right" style="padding-right:30px;">
                        <div id="rmenu">
                            <ul>
                                <li>REGISTRATION</li>
                                <li>LOGIN</li>
                                <li><img src="User 2.png" width="30px"/></li>
                            </ul>
                        </div>
                        
                    </td>
                </tr>
                
            
            </table>
        </div>
        <div id="main">
            <img src="Registration.png" width="350px" style="transform:rotate(-90deg); position:absolute; top:300px; left:-50px;"/>
            <form method="post" action="PHP Script/Agent Registration.php" enctype="multipart/form-data">
            <table border="0" width="80%">
                <tr>
                    <td colspan="2">
                        
                        <a href="Registration.php"><input type="button" value="USER" id="userbtn"/>
                        </a>
                        <a href="Agent%20Registration.php"><input type="button" value="AGENT" id="agentbtn"/>
                        </a>
                           
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>FIRST NAME</label><br>
                            <input type="text" name="fname" required=""/>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>LAST NAME</label><br>
                            <input type="text" name="lname" required=""/>
                            
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>EMAIL ID | USER ID</label><br>
                            <input type="email" name="email" required=""/>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>DATE OF BIRTH</label><br>
                            <input type="date" name="dob" required=""/>
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
                    <td>
                        <div>
                            <label>CONFIRM PASSWORD</label><br>
                            <input type="password" name="cpass" required=""/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>ADDRESS</label><br>
                            <input type="text" name="address" id="address" required=""/>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>CITY</label><br>
                            <select name="city">
                                <option>AHMEDABAD</option>
                                <option>BHAVNAGAR</option>
                                <option>RAJKOT</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>PINCODE</label><br>
                            <input type="text" name="pincode" required=""/>
                        </div>
                    </td>
                    <td>
                        <div id="photoMain">
                            <label>PHOTO</label><br>
                            <input type="file" name="photo" id="photo" required=""/>
                            <span id="msg">Browse File</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>GENDER</label><br>
                            <select name="gender">
                                <option>MALE</option>
                                <option>FEMALE</option>
                                <option>OTHER</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>CONTACT NO</label><br>
                            <input type="text" maxlength="10" name="contact" required=""/>             
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
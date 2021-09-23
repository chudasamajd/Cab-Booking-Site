<?php
    session_start();

    if(!(isset($_SESSION['user']))){
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
        #main{
            height: 100vh;
            width: 100%;
            position: absolute;
            overflow: hidden;
        }
        #form{
            height: 100%;
            width: calc(50% - 100px);
            background-color:#303030;
            float: left;
        }
        #form:before{
            content: '';
            height: 0px;
            width: 0px;
            position: absolute;
            top:0;
            left: calc(50% - 100px);
            border-top: 660px solid #303030;
            border-right:200px solid transparent;
            z-index: 9999;
        }
        #form:after{
            content: '';
            height: 700px;
            width: 10px;
            position: absolute;
            top:-25px;
            left: 674px;
            box-shadow: 10px 0px 20px rgba(0,0,0,.4);
            transform: rotate(17deg);
            z-index: 9;
        }
        #form form table{
            position: absolute;
            top:50%;
            left: 25%;
            transform: translate(-50%,-50%);
            
            padding-top: 10px;
           
        }
        #img{
            float: right;
            height: 100%;
            width:calc(50% + 100px);
        }
        #from,#to,#when{
            height: 35px;
            width: 350px;
            outline: none;
            border: none;
            border-bottom:2px solid gray;
            padding-left: 5PX;
            margin: 10px;
            margin-left: 0px;
        }
        
       
        #btn{
            height: 35px;
            width: 150px;
            border: none;
            outline: none;
            background-color: coral;
            color:black;
            padding-left: 5PX;
            margin: 10px;
            margin-right: 0px;
            font-family: fantasy;
            color: white;
            font-size: 13px;
            border-radius: 5px;
            line-height: 0;
        }
        #localbtn,#outstationbtn{
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
        #localbtn{
            margin-left: 10px;
            background-color: white;
            color: #303030;
        }
        #outstationbtn{
            left: -5px;
            background-color: coral;
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
        #days,#time{
            padding: 10px 0;
            font-family: fantasy;
            font-size: 15px;
            background-color: transparent;
            margin-bottom: 15px;
            font-size: 13px;
            color: white;
            width: 173px;
            box-sizing: border-box;
            box-shadow: none;
            outline: none;
            border: none;
            border-bottom: 1px solid darkgray;
        }
        #days:focus,#time:focus{
            background-color: gray;
        }
        #days:focus,#time:focus{
            border-bottom: 1px solid coral;
        }
        #home{
            font-family: fantasy;
            font-size: 15px;
            color: white;
            position: absolute;
            top:10px;
            left: 10px;
        }
        #msg{
            font-family: fantasy;
            font-size: 15px;
            color: coral;
            position:absolute;
            top:45%;
            left: 65%;
        }
        #msgLogo{
            position: absolute;
            top:50%;
            left: 60%;
        }
    </style>
    </head>
    <body>
        <div id="main">
            <a href="Index.php"><div id="home">BACK</div></a>
            <div id="form">
                <form action="PHP Script/Outstation Booking Data.php" method="post">
                    <table border="0">
                        <tr>
                            <td>
                                <a href="Book%20Now.php"><input type="button" value="LOCAL" id="localbtn"/>
                                </a>
                            </td>
                            <td>
                                <a href="Book%20Now Outstation.php">
                                <input type="button" value="OUTSTATION" id="outstationbtn"/>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label>FROM</label><br>
                                    <input type="text" name="from" required=""/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label>TO</label><br>
                                    <input type="text" name="to" required=""/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label>WHEN</label><br>
                                    <input type="date" name="when" id="when" required=""/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label>FOR HOW MANY DAYS?</label><br>
                                    
                                    <select name="days" required="" id="days">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                        <option>04</option>
                                        <option>05</option>
                                        <option>06</option>
                                        <option>07</option>
                                        <option>08</option>
                                        <option>09</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label>TIME</label><br>
                                    <select name="time" required="" id="time">
                                        <option>01 AM - 02 AM</option>
                                        <option>02 AM - 03 AM</option>
                                        <option>03 AM - 04 AM</option>
                                        <option>04 AM - 05 AM</option>
                                        <option>05 AM - 06 AM</option>
                                        <option>06 AM - 07 AM</option>
                                        <option>07 AM - 08 AM</option>
                                        <option>08 AM - 09 AM</option>
                                        <option>09 AM - 10 AM</option>
                                        <option>10 AM - 11 AM</option>
                                        <option>11 AM - 12 AM</option>
                                        <option>12 AM - 01 PM</option>
                                        <option>01 PM - 02 PM</option>
                                        <option>02 PM - 03 PM</option>
                                        <option>03 PM - 04 PM</option>
                                        <option>04 PM - 05 PM</option>
                                        <option>05 PM - 06 PM</option>
                                        <option>06 PM - 07 PM</option>
                                        <option>07 PM - 08 PM</option>
                                        <option>08 PM - 09 PM</option>
                                        <option>09 PM - 10 PM</option>
                                        <option>10 PM - 11 PM</option>
                                        <option>11 PM - 12 PM</option>
                                        <option>12 PM - 01 AM</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                            <input type="submit" value="OK" id="btn"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="img">
                <div id="msg">BOOK A TEXI TO YOUR DESTINATION IN TOWN WITH</div>
                <img src="BG%20LOGO2.png" width="400px" id="msgLogo"/>
                <img src="BooK%20Now%202.jpg" width="100%" height="100%"/>
            </div>
            
        </div>
    </body>
    
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        var year = new Date().getFullYear();
        
        var month = new Date().getMonth()+1;
        
        var day = new Date().getDate()+1;
        
        var newDate = year+"-0"+month+"-"+day; 
        
        $("#when").attr("min",newDate);
    </script>
</html>


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
        #subm{
            background-color: #303030;
            padding: 10px;
            position: absolute;
            left: 50px;
            top:60px;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            z-index: 9999;
        }
        #submenu ul li{
            width: 165px;
            font-family: fantasy;
            font-size: 14px;
            color: white;
            text-align: right;
        }
        a{
            text-decoration: none;
            color: white;
        }
        #subm{
            display: none;
        }
        #report:hover #subm{
            display: block;
        }
    </style>
    </head>
    <body>
        <div id="main">
            <div id="profile">
                <img src="LOGO%202.png" height="100%" width="100%"/>
            </div>
            <div id="menu">
                <ul>
                    <li><a href="Admin%20Home.php">HOME</a></li>
                    <li><a href="Admin%20Requested%20Car.php">REQUESTED CARS</a></li>
                    <li id="report"><a href="">REPORT</a>
                        <div id="subm">
                            <ul id="submenu">
                                <li><a href="Admin%20Local%20Booking%20Report.php">LOCAL BOOKING</a></li>
                                <li><a href="Admin%20Outstation%20Booking%20Report.php">OUTSTATION BOOKING</a></li>
                                <li><a href="Admin%20User%20Report.php">USER</a></li>
                                <li><a href="Admin%20Agent%20Report.php">AGENT</a></li>
                                <li><a href="Admin%20Car%20Report.php">CAR</a></li>
                                <li><a href="Admin%20Query%20Report.php">QUERY</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="PHP%20Script/Logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
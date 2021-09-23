
<html>
    <head>
    <Style>
        #offerMain{
            position: absolute;
            top:55%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #offer1,#offer2,#offer3,#offer4{
            height: 280px;
            width: 600px;
            background-image: url(OFFER%201.png);
            background-size: 600px;
            background-repeat: no-repeat;
        }    
        #offer2{
            background-image: url(OFFER%202.png);
        }
        #offer3{
            background-image: url(OFFER%203.png);
        }
        #offer4{
            background-image: url(OFFER%204.png);
        }
        #offerMsg{
            width: 300px;
            height: 100px;
            font-family: fantasy;
            font-size: 14px;
            color: white;
            position: relative;
            top: 100px;
            left: 240px;
        }
        #offerEnd{
             width:200px;
            height: 50px;
            font-family: arial;
            font-weight: bold;
            font-size: 10px;
            color: lightgray;
            position: relative;
            top: 50px;
            left: 240px;
        }
        #getCoupon{
            height: 35px;
            width:140px;
            background-color: coral;
            font-family: fantasy;
            font-size: 13px;
            color: white;
            border-radius: 35px;
            text-align: center;
            line-height: 35px;
            position: relative;
            top:40px;
            left: 280px;
        }
        a{
            text-decoration: none;
        }
    </Style>
        <script src="jquery-1.10.2.min.js"></script>
    </head>
    
    <body>
        <?php include('Menu.php'); ?>
        <div id="offerMain">
            <table border="0">
                <tr>
                    <td>
                        <div id="offer1">
                            <div id="offerMsg">Get Rs 250 OFF on First Outstation Ride Booking </div>

                            <div id="offerEnd">Ends On 30 April 2018</div>

                            <a href="PHP%20Script/Generate%20Coupon%20Code.php?offerid=1&code=<?php echo rand(0000,9999);?>"><div id="getCoupon">GET COUPON CODE</div></a>
                        </div>
                    </td>
                    <td>
                        <div id="offer3">
                            <div id="offerMsg">Get 50% OFF on First Local Ride Booking</div>

                            <div id="offerEnd">Ends On 20 April 2018</div>

                            <a href="PHP%20Script/Generate%20Coupon%20Code.php?offerid=2&code=<?php echo rand(0000,9999);?>"><div id="getCoupon">GET COUPON CODE</div></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="offer2">
                            <div id="offerMsg">Travel Between Aurangabad and Pune for just Rs 2249</div>

                            <div id="offerEnd">Ends On 30 April 2018<br><br>*Available only in Aurangabad</div>

                            
                        </div>
                    </td>
                    <td>
                        <div id="offer4">
                            <div id="offerMsg">Get 30% OFF(up to Rs 1000) on Local Cab Booking</div>

                            <div id="offerEnd">Ends On 20 April 2018</div>

                            <a href="PHP%20Script/Generate%20Coupon%20Code.php?offerid=3&code=<?php echo rand(0000,9999);?>"><div id="getCoupon">GET COUPON CODE</div></a>
                        </div>
                    </td>
                </tr>
                
            </table>
        </div>
    </body>
</html>
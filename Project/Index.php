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
        #haderImage{
            width: 600px;
            height: 700px;
            position: absolute;
            top:0;
            right: 0;
        }
        #msg{
            position: absolute;
            top:50%;
            left: 45%;
            transform: translate(-50%,-50%);
            margin-top: 15px;
        }
        #msg a{
            text-decoration: none;
            color: white;
        }
        #bookmsg{
            font-family: arial;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            margin-top: 7px;
        }
        #bookNowBtn{
            height: 35px;
            width: 100px;
            background-color: coral;
            font-family: fantasy;
            color: white;
            font-size: 12px;
            text-align: center;
            line-height: 35px;
            font-weight: normal;
            border-radius: 35px;
            margin-top: 14px;
            cursor: pointer;
        }
        #main{
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
        }
        #layer1,#layer2{
            position: absolute;
        }
        #menu{
            position: absolute;
            top:10px;
            left: 0px;
            z-index: 9999;
        }
        #menu ul{
            list-style: none;
        }
        #menu ul li{
            display: inline;
            font-family: fantasy;
            font-size: 16px;
            margin: 10px;
        }
        #menu ul li a{
            text-decoration: none;
            color: #303030;
        }
        #aboutUs{
            display: flex;
            position: relative;
          //  overflow: hidden;
        }
        #aboutImage{
            height: auto;
            width: 30%;
            margin-left: 50px;
        }
        #aboutDetail{
            position: relative;
            width: calc(70% - 90px);
            height: 330px;
            
            top:50px;
            left: 30px;
        }
        #aboutTitle{
            font-family: fantasy;
            font-size: 80px;
            color: rgba(0,0,0,.1);
           // opacity: .5;
            position: absolute;
            bottom: 0;
            right: 0;
        }
        #aboutTitle img{
            position: relative;
            top:00px;
            right: -450;
            opacity: .1;
            transform: rotate(-90deg);
        }
        #aboutInfo{
            width: 70%;
            font-family: arial;
            font-size: 13px;
            color: #303030;
            text-align: justify;
            margin-top: 10px;
        }
        #aboutServices{
            margin-top: 20px;
            margin-left: 30px;
        }
        #aboutServicesName{
            font-family: arial;
            font-weight: bold;
            font-size: 12px;
        }
        #carBlock{
            margin-top: 50px;
            display: flex;
        }
        #carBlockImage{
            height: auto;
            width: 165px;
            margin-left: 50px;
        }
        .block{
            height: 300px;
            width: 200px;
            //border: 1px solid black;
            padding: 15px;
            margin-left: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,.15);
        }
        .block1{
            margin-left: 90px;
        }
        .block img{
            position: relative;
            left: 50%;
            transform: translateX(-50%);
        }
        .carName{
            font-family: fantasy;
            font-size: 15px;
            color: #303030;
            margin-top: 30px;
        }
        .carCapacity{
            font-family: fantasy;
            font-size: 12px;
            color: darkgray;
            margin-top: 10px;
        }
        .carPrice{
            font-family: fantasy;
            font-size: 12px;
            color: darkgray;
        }
        .carDetail{
            font-family: arial;
            font-size: 12px;
            color: darkgray;
            text-align: justify;
            margin-top: 15px;
        }
        .carBlockBookNow{
            height: 35px;
            width: 100px;
            font-family: fantasy;
            font-size: 13px;
            color: white;
            text-align: center;
            line-height: 35px;
            background-color: #303030;
            border-radius: 35px;
            position: relative;
            left: 50%;
            top:10%;
            transform: translateX(-50%);
            cursor: pointer;
        }
        .carBlockBookNow a{
            text-decoration: none;
            color: white;
        }
        .carBlockBookNow:hover{
            background-color: coral;
        }
        #carBlockLine{
            height: 100px;
            width: 1000px;
            background-color: #303030;
            position: absolute;
            left: 0;
            margin-top:55px;
            z-index: -1;
            opacity: .15;
        }
        #rideUs{
            margin-left: 40px;
            margin-top: 100px;
        }
        #rideUs table{
            padding-top: 100px;
        }
        .rideUsBlock{
            height: 150px;
            width: 400px;
            margin: 20px;
            margin-left: 50px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
        }
        .rideUsBlockImage{
            height: 150px;
            width: 150px;
            float: left;
        }
        .rideUsBlockDetail{
            height: 120px;
            width: 220px;
            float: right;
            padding: 15px;
        }
        .rideUsBlockTitle{
            font-family: fantasy;
            font-size: 14px;
            color: #303030;  
        }
        .rideUsBlockInfo{
            font-family: arial;
            font-size: 12px;
            color: darkgray;
            text-align: justify;
            margin-top: 10px;
        }
        #rideUsImage{
            height: auto;
            width: 165px;
            margin-left: 50px;
        }
        #border{
            position: absolute;
            left: 200px;
            z-index: -1;
        }
        #fleet{
            margin-top:200px;
        }
        #fleetImage{
            height: auto;
            width: 165px;
            margin-left: 1080px;
        }
        #fleetIconLine{
            height: 100px;
            width: 1200px;
            background-color: #303030;
            position: absolute;
            left: 0;
            margin-top:-150px;
            z-index: -1;
          //  opacity: .15;
        }
        
        #car_circle{
            height:120px;
            width:calc(100% - 220px);
            background-color:#262626;
            display:block;
            padding-left:160px;
        }
        #type,#type1,#type2,#type3,#type4{
            height:80px;
            width:80px;
            background-color:white;
            border-radius:50%;
            position:relative;
            left:100px;
            top:50%;
            transform:translate(-50%,-50%);
            float:left;
            transition: all .5s;
        }
        #type{
            box-shadow: 0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7);
        }
        #type1{
            left:200px;
            overflow:hidden;
        }
        #type2{
            left:300px;
            overflow:hidden;
        }
        #type3{
            left:400px;
            overflow:hidden;
        }
        #type4{
            left:500px;
            overflow:hidden;
        }
        #type img,#type1  img, #type2  img,#type3  img,#type4 img{
            position:relative;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
        }
        #car_details{
            height:300px;
            width:100%;
            position: relative;
            overflow: hidden;
        }
        #type1_details{
            position: relative;
            left: 0%;
            display:inline-flex;
        }
        #type2_details,#type3_details,#type4_details,#type5_details{
            position: relative;
            left: 100%;
            top:-78%;
            display:flex;
        }
        #type3_details
        {
            top:-165%;
        }
        #type4_details
        {
            top:-250%;
        }
        #type5_details
        {
            top:-335%;
        }

        #car_image img{
            width:50%;
            position:relative;
            left:50%;
            top:60%;
            transform:translate(-50%,-50%);
        }
        #car_title{
            font-family:fantasy;
            font-size:30px;
        }
        #car_subtitle{
            font-family:fantasy;
            font-size:15px;
            color: darkgray;
        }
        #car_information{
            font-family:arial;
            font-size:14px;
            width:300px;
            text-align:justify;
            margin-top:10px;
            color: gray;
        }
        #car1_details{
            //position:relative;
            margin-top:-5%;
            margin-left:0%;
            //transform:translate(-50%,-50%);
        }
        #pre,#next{
            height:50px;
            width:50px;
            background-color:white;
            border-radius:50%;
            font-family:arial black;
            font-size:25px;
            text-align:center;
            line-height:50px;
           // box-shadow: 0px 0px 20px rgba(0,0,0,.5);
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            background-color: coral;
            color: white;
            position:relative;
            top:20%;
            left:10%;
            transform:translate(-50%,-50%);
            z-index: 9999;
            cursor: pointer;
        }
        #next{
            top:7%;
            left:90%;
        }
        .contactInfo{
            height: 120px;
            width: 300px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,.2);
            font-family: fantasy;
            padding: 10px;
            margin-left: 50px;
        }
        
        #mobileNo,#emailID,#address{
            font-family: arial;
            font-size: 13px;
            color: lightgray;
            line-height: 25px;
        }
        .socialMedia{
            position: relative;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .menu ul{
            list-style: none;
            font-family: fantasy;
            font-size: 13px;
            color:#303030;
            margin: 0;
            padding: 0;
            margin-left: 50px;
            margin-top: 20px;
        }
        .menu ul li{
            display: inline-block;
            margin: 10px;
        }
        #footerBG{
            position: absolute;
        }
        #map{
            margin-left: 50px;
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
            color: #303030;
        }
        #login{
            font-family: fantasy;
            vertical-align:super;
        }
        #rmenu{
            position: relative;
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
        #rmenu ul li a{
            text-decoration: none;
            color: white;
        }
        #userIcon{
            width: 30px;
            height: 26px;
            border-radius: 15px;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        $(document).ready(function(){
    
    counter = 1;
    
    $("#next").click(function(){
        
        if(counter==1)
        {
        $("#type1_details").animate({left:"-100%"},1000);
        $("#type2_details").animate({left:"0%"},1000);
            
        $("#type1").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type").css("box-shadow","none");
            counter++;
        }
        else if(counter==2)
        {
            $("#type2_details").animate({left:"-100%"},1000);
        $("#type3_details").animate({left:"0%"},1000);
            $("#type2").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type1").css("box-shadow","none");

            counter++;
        }
        else if(counter==3)
        {
            $("#type3_details").animate({left:"-100%"},1000);
        $("#type4_details").animate({left:"0%"},1000);
            $("#type3").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type2").css("box-shadow","none");

            counter++;
        }
        else if(counter==4)
        {
            $("#type4_details").animate({left:"-100%"},1000);
        $("#type5_details").animate({left:"0%"},1000);
            $("#type4").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type3").css("box-shadow","none");

            counter=5;
        }
        
        
    });
    
    $("#pre").click(function(){
       if(counter==2)
        {
            $("#type2_details").animate({left:"100%"},1000);
        $("#type1_details").animate({left:"0%"},1000);
            $("#type").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type1").css("box-shadow","none");

            counter--;
        }
        else if(counter==3)
        {
            $("#type3_details").animate({left:"100%"},1000);
        $("#type2_details").animate({left:"0%"},1000);
              $("#type1").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type2").css("box-shadow","none");
            counter--;
        }
        else if(counter==4)
        {
            $("#type4_details").animate({left:"100%"},1000);
        $("#type3_details").animate({left:"0%"},1000);
              $("#type2").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type3").css("box-shadow","none");
            counter--;
        }
        else if(counter==5)
        {
            $("#type5_details").animate({left:"100%"},1000);
        $("#type4_details").animate({left:"0%"},1000);
              $("#type3").css("box-shadow","0 0 0px 15px rgba(0,0,0,.5), 0 0 0px 7px rgba(0,0,0,.7)");
            
        $("#type4").css("box-shadow","none");
            counter--;
        }
        
        
        
        
    });
            
           
            $(window).scroll(function(){
                if($(this).scrollTop()>250) 
                {
                    $("#mainMenu").css("box-shadow","0 2px 15px rgba(0,0,0,.1)");
                    $("#mainMenu").css("background-color","white");
                    $("#rmenu ul li a").css("color","#303030");
                    
                }
                else{
                    $("#mainMenu").css("box-shadow","none");
                    $("#mainMenu").css("background-color","transparent");
                    $("#rmenu ul li a").css("color","white");
                }
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
       <!-- <div id="menu">
            <ul>
                <li><a href="Index.html">HOME</a></li>
                <li><a href="Services.php">SERVICES</a></li>
                <li><a href="Book%20Now.php">BOOK NOW</a></li>
                <li><a href="Offers.php">OFFERS</a></li>
                <li><a href="Contact%20US.php">CONTACT US</a></li>
            </ul>
        </div>-->
        <div id="main">
            <div id="layer1">
                <img src="Particals%201.png" width="100%"/>
            </div>
            <div id="layer2">
                <img src="Particals%202.png" width="102%"/>
            </div>
            <div id="msg">
                <img src="BG%20LOGO.png" width="70%"/><br>
                <div id="bookmsg">Book a Car<br>to your destination</div>
                <div id="bookNowBtn"><a href="Book%20Now.php">BOOK NOW</a></div>
                </div>
            <div id="haderImage">
                <img src="BG.png" width="100%"/>
            </div>
        </div>
            
        <!-- ABOUT US -->
        <div id="aboutUs">
            <div id="aboutImage">
                <img src="ABOUT%20US.png" width="100%" height="70%"/>
            </div>
            <div id="aboutDetail">
                <div id="aboutTitle">        
                    <img src="BG%20LOGO.png" width="60%"/>
                </div>
                <div id="aboutInfo">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s, When an unkown printer took a gallery of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s, When an unkown printer took a gallery of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s, When an unkown printer took a gallery of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loren Ipsum has been the industry's standard dummy text ever since the 1500s, When an unkown printer took a gallery of type and scrambled it to make a type specimen book.
                </div>
                <div id="aboutServices">
                    <table border="0" cellspacing="5" width="550px">
                        <tr align="center">
                            <td>
                                <img src="SERVICES%201.png" width="80px"/>
                            </td>
                            <td>
                                <img src="SERVICES%202.png" width="80px"/>
                            </td>
                            <td>
                                <img src="SERVICES%203.png" width="80px"/>
                            </td>
                            <td>
                                <img src="SERVICES%204.png" width="80px"/>
                            </td>
                        </tr>
                        <tr id="aboutServicesName"  align="center">
                            <td>CUSTOMER SERVICE</td>
                            <td>LOWEST PRICES</td>
                            <td>UNMATCHED BENEFITS</td>
                            <td>LET'S DRIVE DEALS</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- CAR BLOCK -->
        
        <div id="carBlock">
            <table border="0">
                <tr>
                    <td>
                        <div class="block block1">
                            <img src="f.png" width="50%"/>
                            <div class="carName">AUDI Z016</div>
                            <div class="carCapacity">CAPACITY : 3</div>
                            <div class="carPrice">1000 Rs./Per Day</div>
                            <div class="carDetail">
                                Full air conditioned cars that you can share with others depending on your route and locations.
                            </div>
                            <div class="carBlockBookNow"><a href="Book%20Now.php">BOOK NOW</a></div>
                        </div>
                        
                    </td>
                    <td>
                        <div class="block">
                            <img src="f3.png" width="50%"/>
                            <div class="carName">BMW AB10</div>
                            <div class="carCapacity">CAPACITY : 5</div>
                            <div class="carPrice">2000 Rs./Per Day</div>
                            <div class="carDetail">
                                compact yet comfortable AC cars that seat up five people and give your great value for your money.
                            </div>
                            <div class="carBlockBookNow"><a href="Book%20Now.php">BOOK NOW</a></div>
                        </div>
                        
                    </td>
                    <td>
                        <div class="block">
                            <img src="f5.png" width="50%"/><br><br>
                            <div class="carName">FORD DC</div>
                            <div class="carCapacity">CAPACITY : 7</div>
                            <div class="carPrice">4000 Rs./Per Day</div>
                            <div class="carDetail">
                                Top rated drivers, and hand-picked fleet of the best cars with extra legroom.small fares for short rides.
                            </div>
                            <div class="carBlockBookNow"><a href="Book%20Now.php">BOOK NOW</a></div>
                        </div>
                        
                    </td>
                </tr>
            </table>
            <div id="carBlockImage">
                <img src="Our%20Best.png" width="100%" height="33%"/>
            </div>
            <div id="carBlockLine"></div>
            
        </div>
        
        <!-- WHY RIDE WITH US -->
        
        <div id="rideUs">
            <div id="border">
                <img src="BG%20Pattern.png" width="1050px" height="580px"/>
            </div>
            <table border="0">
                <tr>
                    <td rowspan="2">
                        <div id="rideUsImage">
                            <img src="Why%20Ride%20With%20Us.png" width="100%" height="33%"/>
                        </div>
                    </td>
                    <td>
                        <div class="rideUsBlock">
                            <div class="rideUsBlockImage">
                                <img src="pg1.jpg" width="100%" height="100%"/>
                            </div>
                            <div class="rideUsBlockDetail">
                                <div class="rideUsBlockTitle">
                                    CABS FOR EVERY POCKET
                                </div>
                                <div class="rideUsBlockInfo">
                                    From sedans and SUVs to luxury cars for special occasions we have cabs to suit every pocket.
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="rideUsBlock">
                            <div class="rideUsBlockImage">
                                <img src="en2.jpg" width="100%" height="100%"/>
                            </div>
                            <div class="rideUsBlockDetail">
                                <div class="rideUsBlockTitle">
                                   ENTERTAINMENT
                                </div>
                                <div class="rideUsBlockInfo">
                                    Play music, watch videos and lot more with Let's Drive! Also stay connected with even if you are travelling through poor network with our free wifi facility.
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="rideUsBlock">
                            <div class="rideUsBlockImage">
                                <img src="s1.jpg" width="100%" height="100%"/>
                            </div>
                            <div class="rideUsBlockDetail">
                                <div class="rideUsBlockTitle">
                                    SECURE AND SAFE RIDES
                                </div>
                                <div class="rideUsBlockInfo">
                                    Verified drivers, an emergency alert button, and live ride tracking some of the features that we have in place to ensure you a safe travel experience.
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="rideUsBlock">
                            <div class="rideUsBlockImage">
                                <img src="s2.jpg" width="100%" height="100%"/>
                            </div>
                            <div class="rideUsBlockDetail">
                                <div class="rideUsBlockTitle">
                                    SHARE AND EXPRESS
                                </div>
                                <div class="rideUsBlockInfo">
                                    To travel with the lowest fares choose let's drive share for a faster travel experience we have share express on some fixed routes with zero devitions.
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        <!-- MEET OUR AWESOME FLEET -->
        
        <div id="fleet">
            <div id="fleetImage">
                <img src="Meet%20Our%20Fleet.png" width="100%" height="33%"/>
            </div>
            <div id="fleetIconLine">
                <div id="car_circle">

                    <div id="type">
                        <img src="Car png/1.png"/>
                    </div>
                    <div id="type1">
                        <img src="Car png/2.png" width="100%"/ >
                    </div>
                    <div id="type2">
                        <img src="Car png/3.png" width="120%"/ >
                    </div>
                    <div id="type3">
                        <img src="Car png/4.png" width="100%"/ >
                    </div>
                    <div id="type4">
                        <img src="Car png/5.png" width="120%"/ >
                    </div>

                </div>
            </div>
            
            <div id="car_details">
		
		<div id="pre"><</div>
		<div id="next">></div>



		<div id="type1_details">
			<div id="car_image">
				<img src="f.png"/>
			</div>
			<div id="car1_details">
				<div id="car_title"> 
					MINI 
				</div>
				<div id="car_subtitle">
					Everyday dependable ride
				</div>
				<div id="car_information">
					A regular comfortable AC hatchback that becomes your everyday dependable ride. An econmical option for daily commute. 
				</div>
			</div>
		</div>
            
        
        <div id="type2_details">
			<div id="car_image">
				<img src="f2.png"/>
			</div>
			<div id="car1_details">
				<div id="car_title">
					MICRO 
				</div>
				<div id="car_subtitle">
					Small fares for short ride
				</div>
				<div id="car_information">
					Compact yet comfortable AC cars that seat up to 3 people  and give you  great value for your money samll fares for short rides.
				</div>
			</div>
		</div>
            
        <div id="type3_details">
			<div id="car_image">
				<img src="f2.png"/>
			</div>
			<div id="car1_details">
				<div id="car_title">
					MICRO 3
				</div>
				<div id="car_subtitle">
					Everyday dependable ride
				</div>
				<div id="car_information">
					A regular comfortable AC hatchback that becomes your everyday dependable ride. An econmical option for daily commute. 
				</div>
			</div>
		</div>
            
        <div id="type4_details">
			<div id="car_image">
				<img src="f2.png"/>
			</div>
			<div id="car1_details">
				<div id="car_title">
					MICRO 4
				</div>
				<div id="car_subtitle">
					Everyday dependable ride
				</div>
				<div id="car_information">
					A regular comfortable AC hatchback that becomes your everyday dependable ride. An econmical option for daily commute. 
				</div>
			</div>
		</div>
            
        <div id="type5_details">
			<div id="car_image">
				<img src="f2.png"/>
			</div>
			<div id="car1_details">
				<div id="car_title">
					MICRO 5
				</div>
				<div id="car_subtitle">
					Everyday dependable ride
				</div>
				<div id="car_information">
					A regular comfortable AC hatchback that becomes your everyday dependable ride. An econmical option for daily commute. 
				</div>
			</div>
		</div>
	</div>
            
        </div>
            
        <!-- FOOTER -->
            
        <div id="footer">
            <!--<img src="BG%202.png" width="100%" height="550px" id="footerBG"/>-->
            <table border="0">
                
                <tr>
                    <td rowspan="3" align="center">
                        <img src="LOGO.png" width="150px" id="logo"/>
                        <img src="BG%20LOGO.png" width="400px" id="logoText"/>
                        <div class="menu">
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
                        <div class="contactInfo">
                            CONTACT ON : <br><br>
                            <div id="mobileNo"><img src="Phone.png" width="18px"/>&nbsp;&nbsp;&nbsp;+91 9090909090</div>
                            <div id="emailID"><img src="Mail.png" width="20px"/>&nbsp;&nbsp;&nbsp;LetsDrive@mail.com</div>
                        </div>
                    </td>
                    <td rowspan="3">
                        <img src="en2.jpg" width="450px" height="500px" id="map"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="contactInfo">
                            ADDRESS : <br><br>
                            <div id="address"><img src="Location.png" width="14px"/>&nbsp;&nbsp;&nbsp;S-16, 2ND FLOOR, "KRISHNA" ,WAGHAVADI ROAD, BHAVNAGAR.</div>
                        </div>
                    </td>
                </tr>
                <Tr>
                    <td>
                        <div class="contactInfo">
                            <div class="socialMedia">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="facebook.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="gplus.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="twitter.png"/></div>
                        </div>
                    </td>
                </Tr>
                
            </table>    
        </div>
    </body>
    <script>
        var object1=$('#layer1');
        var object2=$('#layer2');
       
        var layer=$('#main');
        
        layer.mousemove(function(e){
           var valueX=(e.pageX * -1 / 12); 
           var valueY=(e.pageY * -1 / 12); 
            
            object1.css({
                'transform':'translate3d('+valueX+'px,'+valueY+'px,0)'
            });
        });
        
        layer.mousemove(function(e){
           var valueX=(e.pageX * -1 / 50); 
           var valueY=(e.pageY * -1 / 20); 
            
            object2.css({
                'transform':'translate3d('+valueX+'px,'+valueY+'px,0)'
            });
        });
        
        
    </script>
</html>
<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header('location:Login.php');
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
        #form form #infoTable{
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
            width: 400px;
            outline: none;
            border: none;
            border:2px solid gray;
            padding-left: 5PX;
            margin: 10px;
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
        #edatediv{
            float: left;
        }
        #ccvdiv{
            float: right;
        }
        #edate,#ccv{
            width: 150px;
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
        #carImage{
            height:70px;
            width: 70px;
            background-color: white;
            border-radius: 50%;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 0 0px 12px rgba(0,0,0,.1), 0 0 0px 6px rgba(0,0,0,.3);
        }
        #carImage img{
            position: relative;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #carName,#carPrice,#pickup,#drop,#pickupOn{
            font-family: fantasy;
            color: white;
        }
        .field{
            width: 70px;
            font-family: fantasy;
            color: darkgray;
            font-size: 10px;
        }
        .values{
            font-family: fantasy;
            color: darkgray;
            font-size: 14px;
        }
        #carInfo{
            margin-bottom: 20px;
        }
        #payBy{
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
        #payBy:focus{
            background-color: gray;
        }
        #msgBox{
            height: 175px;
            width: 350px;
            background-color: #303030;
            position: absolute;
            top:-10%;
            left: 50%;
            transform: translate(-50%,-50%);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,.5);
            z-index: 9999;
        }
        #msgBox #msg{
            width: 350px;
            text-align: center;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #finish{
            height: 35px;
            width: 100px;
            background-color: coral;
            font-family: fantasy;
            font-size: 14px;
            border-radius: 35px;
            color: white;
            text-align: center;
            line-height: 35px;
            position: absolute;
            top:155px;
            left: 50%;
            transform: translateX(-50%);
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
        
    </head>
    <body>
        <div id="main">
            <div id="form">
                <form method="post" action="PHP Script/Payment.php">
                    <table border="0" id="infoTable">
                        <?php
                            $con = mysqli_connect("localhost",'root','','lets_drive');

                            $query = "select * from temp_booking,car_detail where temp_booking.car_id=car_detail.CarID";

                            $res = mysqli_query($con,$query);

                            while($data=mysqli_fetch_array($res)){
                        ?>
                        <tr align="center">
                            <td colspan="2">
                                <div id="carImage">
                                    <img src="Cars/<?php echo $data['photo'];?>" width="95%"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table border="0" id="carInfo">
                                    
                                    <tr>
                                        <td class="field">
                                        CAR 
                                        </td>
                                        <td class="values">
                                        <?php echo $data['company']." ".$data['model']; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">
                                        PRICE 
                                        </td>
                                        <td class="values">
                                        &#8377;<?php echo $data['price'];?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        $con = mysqli_connect("localhost",'root','','lets_drive');
                                    
                                        $query = "select * from temp_booking";
                                    
                                        $res = mysqli_query($con,$query);
                                    
                                        while($data=mysqli_fetch_array($res)){
                                            
                                    ?>
                                    <tr>
                                        <td class="field">
                                        PICKUP 
                                        </td>
                                        <td class="values">
                                            <?php
                                                echo $data['bfrom'];
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">
                                        DROP 
                                        </td>
                                        <td class="values">
                                        <?php
                                            echo $data['bto'];
                                        ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">
                                        PICKUP ON 
                                        </td>
                                        <td class="values">
                                        <?php
                                            echo $data['bwhen']." AT ".$data['btime'];
                                        ?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
        
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label>PAY BY</label><br>
                                    <select name="payBy" id="payBy">
                                        <option>Credit Card</option>
                                        <option>Cash</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr id="creditCard">
                            <td>
                                <div>
                                    <label>CARD NUMBER</label><br>
                                    <input type="text" name="cardno" id="cardno" required/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div id="edatediv">
                                    <label>EXPIRATION DATE</label><br>
                                    <input type="date" name="edate" id="edate" required/>
                                </div>
                                <div id="ccvdiv">
                                    <label>CCV</label><br>
                                    <input type="password" name="ccv" id="ccv" maxlength="3" required/>
                                </div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label>COUPON</label><br>
                                    <input type="text" name="coupon" placeholder="Enter Code (Optional)"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                            <input type="submit" value="CONTINUE" id="btn"/>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="img">
                <div id="msg">BOOK A TEXI TO YOUR DESTINATION IN TOWN WITH</div>
                <img src="BG%20LOGO2.png" width="400px" id="msgLogo"/>
                <img src="BooK%20Now%201.jpg" width="100%" height="100%"/>
            </div>
            
        </div>
        
    
    </body>
    <script src="jquery-1.10.2.min.js"></script>
    <script>
        var payby = document.getElementById("payBy");
        $("#payBy").change(function(){
            if(payby.options[1].selected == true){
                
                $("#cardno").removeAttr("required");
                $("#edate").removeAttr("required");
                $("#ccv").removeAttr("required");
            } 
        });
    </script>
    
</html>
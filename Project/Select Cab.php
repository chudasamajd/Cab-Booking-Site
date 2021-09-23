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
            background-color: #303030;
        }
        #main{
            position: absolute;
            top:25%;
            left: 50%;
            transform: translateX(-50%);  
        }
        #seats{
            height: 35px;
            width: 100px;
            border: none;
            border-bottom:2px solid darkgray;
            background-color: transparent;
            color: white;
            font-family: fantasy;
            outline: none;
            position: absolute;
            top:15%;
            left: 53%;
            transform: translateX(-50%);
        }
        #seats:focus{
            outline: none;
            background-color: darkgray;
        }
        .carBlock{
            height: 250px;
            width: 200px;
            border: 2px solid darkgray;
            margin: 50px;
            background-color: white;
            border-radius: 5px;
        }
        .carBlock img{
            margin-top: 20px;
        }
        .carName{
            font-family: fantasy;
            font-size: 15px;
            margin-top: 10px;
        }
        .carPrice{
            font-family: arial;
            font-weight: bold;
            margin-top: 15px;
        }
        .bookbtn{
            height: 35px;
            width: 100px;
            background-color: coral;
            font-family: fantasy;
            font-size: 14px;
            color:white;
            border: none;
            outline: none;
            border-radius: 35px;
            margin-top: 20px;
        }
        .carPriceScale{
            font-family: arial;
            font-size: 10px;
        }
        #seatLabel{
            font-family: fantasy;
            font-size: 15px;
            position: absolute;
            top:16%;
            left: 35%;
            color: white;
        }
        #mini,#micro{
            display: none;
        }
    </style>
    <script src="jquery-1.10.2.min.js"></script>
    </head>
    <body>
            <label id="seatLabel">HOW MANY SEATS YOU WANT?</label>
            <select id="seats">
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
            </select>
        <div id="main">
            <table border="0">
                
                <!-- MINI -->
                
                <tbody id="mini">
                    <tr align="center">
                    <?php
                        $cid = 0;
                        
                        $con = mysqli_connect('localhost','root','','lets_drive');
                    
                        $query = "select * from car_detail where capacity=3";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where capacity=3 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where capacity=3 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                </tbody>
                
                <!-- MICRO -->
                
                <tbody id="micro">
                    <tr align="center">
                        <?php
                        $cid = 0;
                        
                        $con = mysqli_connect('localhost','root','','lets_drive');
                    
                        $query = "select * from car_detail where capacity=4";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where capacity=4 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where capacity=4 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                </tbody>
                
                
                <!-- 5 Seats -->
                
                <tbody id="fiveseat">
                    <tr align="center">
                        <?php
                        $cid = 0;
                        
                        $con = mysqli_connect('localhost','root','','lets_drive');
                    
                        $query = "select * from car_detail where capacity=5";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where capacity=5 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where capacity=5 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                </tbody>
                
                <!-- 6 Seats -->
                
                <tbody id="sixseat">
                    <tr align="center">
                        <?php
                        $cid = 0;
                        
                        $con = mysqli_connect('localhost','root','','lets_drive');
                    
                        $query = "select * from car_detail where capacity=6";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where capacity=6 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where capacity=6 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                </tbody>
                
                <!-- 5 Seats -->
                
                <tbody id="sevenseat">
                    <tr align="center">
                        <?php
                        $cid = 0;
                        
                        $con = mysqli_connect('localhost','root','','lets_drive');
                    
                        $query = "select * from car_detail where capacity=7";
                    
                        $res = mysqli_query($con,$query);
            
                        $count = 0;
                        
                        
                        
                        while($data=mysqli_fetch_array($res)){
                            
                        
                        $count++;
                        if($count<=4)
                        {
                            $cid = $data['CarID'];
                    ?>
                        
                        <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                            
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=4;
                        
                        $query = "select * from car_detail where capacity=7 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>4 && $count<=8){
                            
                            $cid=$data['CarID'];
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                    <tr align="center">
                        <?php
                        
                        $count=8;
                        
                        $query = "select * from car_detail where capacity=7 and CarID>$cid";
                    
                        $res = mysqli_query($con,$query);
                                
                        while($data=mysqli_fetch_array($res)){ 
                            
                        $count++;
                        if($count>8 && $count<=12){
                        ?>
                            <td>
                            <div class="carBlock">
                                <img src="Cars/<?php echo $data['photo'];?>" width="130px"/>
                                <div class="carName"><?php echo $data['company']." ".$data['model'];?></div>
                                <div class="carPrice">&#8377;<?php echo $data['price'];?></div>
                                <div class="carPriceScale">(Per Hour*)</div>
                                <a href="PHP%20Script/Select Cab Data.php?carid=<?php echo $data['CarID'];?>"><input type="button" value="BOOK" class="bookbtn"/></a>
                            </div>
                        </td>
                        <?php
                        }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
    <script type="text/javascript">
        var seats = document.getElementById("seats");
        
        $("#seats").change(function(){
            for(var i=0;i<seats.options.length;i++)
            {
                if(seats.options[i].selected == true)
                {
                    if(i==0)
                    {
                        $("#micro").css("display","none");
                        $("#fiveseat").css("display","none");
                        $("#sixseat").css("display","none");
                        $("#seveneseat").css("display","none");
                        $("#mini").fadeIn(1000);
                        
                    }
                    else if(i==1)
                    {
                        $("#mini").css("display","none");
                        $("#fiveseat").css("display","none");
                        $("#sixseat").css("display","none");
                        $("#seveneseat").css("display","none");
                        $("#micro").fadeIn(1000);
                    }
                    else if(i==2)
                    {
                        $("#mini").css("display","none");
                        $("#micro").css("display","none");
                        $("#sixseat").css("display","none");
                        $("#seveneseat").css("display","none");
                        $("#fiveseat").fadeIn(1000);
                    }
                    else if(i==3)
                    {
                        $("#mini").css("display","none");
                        $("#micro").css("display","none");
                        $("#fiveseat").css("display","none");
                        $("#seveneseat").css("display","none");
                        $("#sixseat").fadeIn(1000);
                    }
                    else if(i==4)
                    {
                        $("#mini").css("display","none");
                        $("#micro").css("display","none");
                        $("#fiveseat").css("display","none");
                        $("#sixseat").css("display","none");
                        $("#seveneseat").fadeIn(1000);
                    }
                }
            }
        });
    </script>
</html>
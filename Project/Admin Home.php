<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
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
        #agentTable{
            border: 1px solid black;
            position: absolute;
            top:80px;
            left: 250px;
        }
        #agentTableOutstation{
            border: 1px solid black;
            position: absolute;
            top:80px;
            left: 800px;
        }
        #field{
            font-family: fantasy;
            font-size: 18px;
            text-align: center;
            
        }
        #record{
            font-family: arial;
            font-size: 15px;
            text-align: center;
        }
        #tableTitle{
            font-family: fantasy;
            font-size: 20px;
            text-align: center;
        }
        #analysisTable{
            position: absolute;
            top:330px;
            left: 450px;
        }
        #analysisTable hr{
            position: absolute;
            top:100px;
            left:50px;
            z-index: -1;
        }
        #totalProfit{
            height:115px;
            width: 200px;
            background-color: coral;
            font-family: fantasy;
            font-size: 18px;
            border-radius: 50%;
            padding-top: 85px;
            text-align: center;
        }
        #localProfit,#outstationProfit{
            height: 85px;
            width: 150px;
            background-color: whitesmoke;
            font-family: fantasy;
            font-size: 13px;
            border-radius: 50%;
            padding-top: 65px;
            text-align: center;
        }
        #totalCars{
            height: 60px;
            width: 100px;
            background-color: coral;
            font-family: fantasy;
            font-size: 13px;
            border-radius: 50%;
            padding-top: 40px;
            text-align: center;
            position: absolute;
            bottom: 70px;
            right: 70px;
        }
    </style>
    </head>
    <body>
        <?php include("Admin Menu.php");?>
        
        <div id="agentTable">
            <table border="0" width="500px" cellspacing="10">
                <tr id="tableTitle">
                    <td colspan="4">MAXIMUM PROFIT FOR AGENT<br>(LOCAL BOOKING)</td>
                </tr>
                <tr id="field">
                    <td>
                        AGENT ID
                    </td>
                    <td>
                        NAME
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        PROFIT
                    </td>
                </tr>
                <?php
                    $con = mysqli_connect('localhost','root','','lets_drive');
                               
                    $count=0;

                    $query = "select AID,sum(fare) from local_booking group by(AID)";

                    $res = mysqli_query($con,$query);

                    $profit=array();
                
                    $p=array();
                                
                    while($data=mysqli_fetch_array($res)){
                        
                            array_push($profit,$data['sum(fare)']."|".$data['AID']);
                            array_push($p,$data['sum(fare)']);
                            
                    }
                
                    $maxp=max($p);
                
                    $newid=0;
                
                    for($i=0;$i<count($profit);$i++)
                    {
                        $index = strrpos($profit[$i],"|");
                                
                        $newstr = substr($profit[$i],0,$index);
                        
                        if($newstr==$maxp){
                        
                            $newid = substr($profit[$i],$index+1);
                        }
                    }
                
                                
                    $query = "select * from agent_registration where AID=$newid";

                    $res = mysqli_query($con,$query);
                                
                    while($data=mysqli_fetch_array($res)){
                        
                ?>
                <tr align="center" id="record">
                    <td>
                        <?php echo $aid=$data['AID']; ?>
                    </td>
                    <td>
                        <?php echo $data['fname']; ?>     
                        <?php echo $data['lname']; ?>     
                    </td>
                    <td>
                        <img src="Agent/<?php echo $data['photo'];?>" height="50px" width="50px" style="border-radius:50%;"/>
                    </td>
                    <td>
                        <?php                     
                            echo ($maxp*60)/100; 
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        
        <!-- Outstation Profit -->
        <div id="agentTableOutstation">
            <table border="0" width="500px" cellspacing="10">
                <tr id="tableTitle">
                    <td colspan="4">MAXIMUM PROFIT FOR AGENT<br>(OUTSTATION BOOKING)</td>
                </tr>
                <tr id="field">
                    <td>
                        AGENT ID
                    </td>
                    <td>
                        NAME
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        PROFIT
                    </td>
                </tr>
                <?php
                    $con = mysqli_connect('localhost','root','','lets_drive');
                   
                    $query = "select AID,sum(fare) from outstation_booking group by(AID)";

                    $res = mysqli_query($con,$query);

                    $profit=array();
                
                    $p=array();
                                
                    while($data=mysqli_fetch_array($res)){
                        
                            array_push($profit,$data['sum(fare)']."|".$data['AID']);
                            array_push($p,$data['sum(fare)']);
                            
                    }
                
                    $maxp=max($p);
                
                    $newid=0;
                
                    for($i=0;$i<count($profit);$i++)
                    {
                        $index = strrpos($profit[$i],"|");
                                
                        $newstr = substr($profit[$i],0,$index);
                        
                        if($newstr==$maxp){
                        
                            $newid = substr($profit[$i],$index+1);
                        }
                                        
                    }
                                        
                
                    $query = "select * from agent_registration where AID=$newid";

                    $res = mysqli_query($con,$query);
                
                    $count=0;
                
                    while($data=mysqli_fetch_array($res)){
                        
                ?>
                <tr align="center" id="record">
                    <td>
                        <?php echo $aid=$data['AID']; ?>
                    </td>
                    <td>
                        <?php echo $data['fname']; ?>     
                        <?php echo $data['lname']; ?>     
                    </td>
                    <td>
                        <img src="Agent/<?php echo $data['photo'];?>" height="50px" width="50px" style="border-radius:50%;"/>
                    </td>
                    <td>
                        <?php                     
                            echo ($maxp*60)/100;
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
        
        <!-- Analysis -->
        <div id="analysisTable">
            <hr size="3" color="black" width="500px">
            <table border="0" width="700px">
                <tr>
                    <td>
                        <div id="localProfit">
                            LOCAL BOOKING<br>&#8377;
                            <?php
                                $con = mysqli_connect('localhost','root','','lets_drive');
                   
                                $query = "select sum(fare) from local_booking";

                                $res = mysqli_query($con,$query);

                                while($data=mysqli_fetch_array($res)){
                                    echo ($data['sum(fare)']*40)/100;
                                }
                            ?>
                             
                        </div>
                    </td>
                    <td>
                        <div id="totalProfit">
                            TOTAL PROFIT<br>&#8377;
                            <?php
                                $con = mysqli_connect('localhost','root','','lets_drive');
                   
                                $query = "select sum(fare) from local_booking";

                                $res = mysqli_query($con,$query);

                                $lp=0;
                            
                                while($data=mysqli_fetch_array($res)){
                                    $lp = ($data['sum(fare)']*40)/100;
                                }
                            
                                $query = "select sum(fare) from outstation_booking";

                                $res = mysqli_query($con,$query);

                                $op=0;
                            
                                while($data=mysqli_fetch_array($res)){
                                    $op = ($data['sum(fare)']*40)/100;
                                }
                            
                                echo $lp+$op;
                            ?>
                        </div>
                    </td>
                    <td>
                        <div id="outstationProfit">
                            OUTSTATION BOOKING<br>&#8377;
                           <?php
                                $con = mysqli_connect('localhost','root','','lets_drive');
                   
                                $query = "select sum(fare) from outstation_booking";

                                $res = mysqli_query($con,$query);

                                while($data=mysqli_fetch_array($res)){
                                    echo ($data['sum(fare)']*40)/100;
                                }
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        
        
        <!-- Total No of Cars -->
        
        <div id="totalCars">
            TOTAL CAR<br>
            <?php
                $con = mysqli_connect('localhost','root','','lets_drive');

                $query = "select * from car_detail";

                $res = mysqli_query($con,$query);

                echo mysqli_num_rows($res);
            
                while($data=mysqli_fetch_array($res)){}
            ?>
        </div>
        
    </body>
</html>
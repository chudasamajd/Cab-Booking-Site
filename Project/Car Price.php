<?php
    session_start();

    if(!(isset($_SESSION['admin']))){
        header("location:Login.php");
    }

    $rid= $_GET['rid'];
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
        }    
        #priceTable{
         position: absolute;
            top:5%;
            left: 17%;
        }
        #priceTable a{
            color: black;
        }
    </style>
    </head>
    <body>
        <?php include("Admin Menu.php");?>
        <form action="PHP Script/Add Car.php?rid=<?php echo $rid;?>" method="post">
            <table border="1" id="priceTable">
                <tr>
                    <td>
                        <select name="price">
                                <option value="130">Rs. 130</option>
                                <option value="140">Rs. 140</option>
                                <option value="150">Rs. 150</option>
                                <option value="160">Rs. 160</option>
                                <option value="170">Rs. 170</option>
                                <option value="180">Rs. 180</option>
                                <option value="190">Rs. 190</option>
                                <option value="200">Rs. 200</option>
                                <option value="210">Rs. 210</option>
                                <option value="220">Rs. 220</option>
                                <option value="230">Rs. 230</option>
                                <option value="240">Rs. 240</option>
                                <option value="250">Rs. 250</option>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="FINISH" id="btn"/>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
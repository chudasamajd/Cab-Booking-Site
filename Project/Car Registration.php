<?php
    session_start();

    if(!(isset($_SESSION['user']))){
        header("location:Agent Login.php");
    }
?>
<html>
    <head>
    <style>
        body{
            margin: 0px;
            padding: 0px;
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
        #desc{
            padding: 10px 0;
            font-family: fantasy;
            font-size: 15px;
            background-color: transparent;
            margin-bottom: 15px;
            font-size: 13px;
            width: 825px;
            box-sizing: border-box;
            box-shadow: none;
            outline: none;
            border: none;
            border-bottom: 1px solid darkgray;
            resize: none;
        }
        #desc:focus{
            border-bottom: 1px solid coral;
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
            color:black;
            
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
        #mainform table{
            position: absolute;
            top:35%;
            left: 60%;
            transform: translate(-50%,-50%);
        }
        #btn{
            width: 200px;
            background-color: coral;
            border: none;
            margin-right: 190px;
            border-radius: 2px;
        }
        #pricetable{
            position: absolute;
            bottom:5%;
            left: 55%;
            transform: translateX(-50%);
            font-family: monospace;
            font-size: 12px;
            text-align: center;
            border: 2px solid black;
            padding: 10px;
        }
        #pricefield{
            background-color: coral;
            font-family: fantasy;
            font-size: 13px;
            text-align: center;
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
        <?php include("Agent Menu.php");?>
        <div id="mainform">
            
            <form method="post" action="PHP Script/Car Registration.php" enctype="multipart/form-data">
            <table border="0" width="70%">
                
                <tr>
                    <td>
                        <div>
                            <label>COMPANY</label><br>
                            <input type="text" name="company" required=""/>
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>MODEL</label><br>
                            <input type="text" name="model" required=""/>
                            
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>CAPACITY</label><br>
                            <select name="capacity">
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
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
                    <td colspan="2">
                        <div>
                            <label>DESCRIPTION</label><br>
                            <textarea id="desc" name="desc" required=""></textarea>
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
        <table border="0" id="pricetable">
            <tr id="pricefield">
                <td>
                    CAPACITY
                </td>
                <Td>
                    PRICE
                </Td>
            </tr>
            <tr>
                <td>
                    3
                </td>
                <td>
                    Rs.150 - Rs. 170 
                </td>
            </tr>
            <tr>
                <td>
                    4
                </td>
                <td>
                    Rs.170 - Rs. 190 
                </td>
            </tr>
            <tr>
                <td>
                    5
                </td>
                <td>
                    Rs.190 - Rs. 210 
                </td>
            </tr>
            <tr>
                <td>
                    6
                </td>
                <td>
                    Rs.210 - Rs. 230 
                </td>
            </tr>
            <tr>
                <td>
                    7
                </td>
                <td>
                    Rs.230 - Rs. 250 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    * Your car will be available in list once admin approve it.<br>
                    * Car price will be decided by admin.<br>
                    * Profit ratio will be 60%(Agent) - 40%(Let's Drive).
                    
                </td>
            </tr>
        </table>
    </body>
</html>
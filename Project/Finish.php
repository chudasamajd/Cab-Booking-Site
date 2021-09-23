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
        #msg{
            font-family: fantasy;
            font-size: 17px;
            color: white;
            position: absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        #btn{
            height: 35px;
            width: 130px;
            background-color: coral;
            font-family: fantasy;
            font-size: 13px;
            color: white;
            border-radius: 35px;
            text-align: center;
            line-height: 35px;
            position: absolute;
            top:60%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
    </head>
    <body>
        <div id="msg">
            Congratulations your booking has been sucessfully done!
        </div>
        <a href="Index.php"><div id="btn">OK</div></a>
    </body>
</html>
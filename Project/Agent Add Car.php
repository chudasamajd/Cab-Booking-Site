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
            color: #303030;
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
            color:#303030;
            
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
        #mainForm table{
            position: absolute;
            top:55%;
            left: 57%;
            transform: translate(-50%,-50%);
        }
        #btn{
            width: 200px;
            background-color: coral;
            border: none;
            margin-right: 50px;
            border-radius: 2px;
            color: white;
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
        <?php include("Agent Menu.html");?>
        
        <div id="mainForm">
            
            <form method="post" action="">
            <table border="0" width="60%">
                
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
                
                <tr align="right">
                    <td colspan="2">
                        <input type="submit" value="SUBMIT" id="btn"/>
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </body>
</html>
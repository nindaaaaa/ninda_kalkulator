<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIN</title>
</head>
<style>
        body {
            background-color: #A5DD9B;
            color: #35374B;
            font-family:"Comic Sans MS";
            margin: 0;
            padding: 0;
           
             }
             .container{
                max-width: 300px;
                margin: 0 auto;
                padding: 20px;
                background-color: #76885B;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
                min-height: 100px;
             
            }.calculator-buttons input[type="button"] {
                padding: 10px;
                border: none;
                border-radius: 20px;
                font-size: 20px;
                text-align: center;
                background-color: #337357;
                color: #00000;
                



             }




        
    </style>

<body>
    <center>
        <h1>KALKULATOR SEDERHANA</h1>
        <div class="container">
            <form action="" method="post" name="form1">
                <input type="text" name="a" id=""><br>
                <div class="calculator-buttons">
                    <input type="button" value="1" onClick="form1.a.value+='1'">
                    <input type="button" value="2" onClick="form1.a.value+='2'">
                    <input type="button" value="3" onClick="form1.a.value+='3'"><br>
                    <input type="button" value="4" onClick="form1.a.value+='4'">
                    <input type="button" value="5" onClick="form1.a.value+='5'">
                    <input type="button" value="6" onClick="form1.a.value+='6'"><br>
                    <input type="button" value="7" onClick="form1.a.value+='7'">
                    <input type="button" value="8" onClick="form1.a.value+='8'">
                    <input type="button" value="9" onClick="form1.a.value+='9'"><br>
                    <input type="button" value="0" onClick="form1.a.value+='0'">
                    <input type="button" value="+" onClick="form1.a.value+='+'">
                    <input type="button" value="-" onClick="form1.a.value+='-'"><br>
                    <input type="button" value="*" onClick="form1.a.value+='*'">
                    <input type="button" value="/" onClick="form1.a.value+='/'">
                    <input type="button" value="C" onClick="form1.a.value=''">
                    <input type="button" value="=" onClick="form1.a.value=eval(form1.a.value)">



                </div>

            </form>
        </div>
        

    </center>
    
</body>
</html>
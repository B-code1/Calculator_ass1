<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST['num']))
    {
     $num=$_POST['input'].$_POST['num'] ;
    }
    else{
        $num="";
    }
    if(isset($_POST['op']))
    {
        $cookie_value1=$_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

        $cookie_value2=$_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }
    if(isset($_POST['equal']))
    {
        $num=$_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result=$_COOKIE['num']+$num;
                break;
                case "-":
                    $result=$_COOKIE['num']-$num;
                    break;
                    case "*":
                        $result=$_COOKIE['num']*$num;
                        break;
                        case "/":
                            $result=$_COOKIE['num']/$num;
                            break;
        }
        $num=$result;
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <input type="text" class="mainput"name="input" value="<?php echo @$num ?>" readonly><br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"><br>
            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"><br>
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="calbtn" name="op" value="*"><br>
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="calbtn" name="op" value="C">
            <input type="submit" class="calbtn" name="op" value="/">
            <input type="submit" class="calbtn" name="equal" value="=">

        </form>
    
    </div>
    <style>
        /* Calculator CSS */

       .calc {
        width: 250px;
        height: 350px;
        margin: 0 auto;
        margin-top: 100px;
        border: 1px solid #000;
        padding: 10px;
        text-align: center;
        border-radius: 10px;
        background-color: black;

         }
         .numbtn {
        width: 50px;
        height: 50px;
        margin: 5px;
        background-color: #cba62e;
        border: none;
        font-size: 20px;
        cursor: pointer;
        }
        .calbtn {
        width: 50px;
        height: 50px;
        margin: 2px;
        background-color: #a95d1f;
        border: none;
        font-size: 20px;
        cursor: pointer;
        border-radius: 10px;
        }

        .input {
        width: 200px;
        height: 50px;
        margin: 10px 0;
        font-size: 20px;
        text-align: right;
        }

        /* Responsive CSS */
        @media screen and (max-width: 600px) {
       .calc {
        width: 100%;
        height: auto;
        }
        .numbtn {
        width: 100%;
        height: 100%;
        }
        .calbtn {
        width: 100%;
        height: 100%;
        }
        .input {
        width: 100%;
        height: 100%;
        }
        }
        
    </style>
</body>
</html>
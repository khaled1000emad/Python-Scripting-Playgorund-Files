<?php 
$mess="";

if(isset($_GET["submit"]))
{
    $name = $_GET['name'];
    $pass = $_GET['pass'];
    if($name == "admin" && $pass == "password")
    $mess = "FLAG{GET_REQUEST}";
    else{
        $mess = "Wrong Credits";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="title">
    <h1 id="banner">Requests Module</h1>
    </div>
    <br><br>
    <div id="desc-div">
        <h2 id="desc" style="text-align: center;">Get Form (1)</h2>
    </div>
    <br>
    <h3 style="text-align: center;">admin : password</h3>
    <br><br>
    <div id="outter-form">
    <form  method="GET" id="post-form">
        <input id="name" class="inputs" name="name" placeholder="Username" >
        <br><br>
        <input id="pass" name="pass" class="inputs" placeholder="Password">
        <br><br>
        <button name="submit" id="submit" >Submit</button>
        <br><br>
        <div id="result"><?php echo $mess; ?></div>
    </form>
    </div>
    <br><br>
    <footer id='footer'><a href='index.php'>Home</a></footer>
</body>
</html>

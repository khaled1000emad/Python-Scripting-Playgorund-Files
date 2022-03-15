<?php 
$mess="";
setcookie("auth", "user");
if($_COOKIE["auth"] === 'admin')
{
    $mess="No not this time ;)";
}
else if($_COOKIE["auth"] === 'wp-admin'){
    $mess="\$flag{c00kie_mast3r}";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">
    <div id="title">
    <h1 id="banner">Requests Module</h1>
    </div>
    <br><br>
    <div id="desc-div">
        <h2 id="desc" style="text-align: center;">Cookies</h2>
    </div>
    <br><br>
    <div id="outter-form">
    <form  method="GET" id="post-form">
        <h3>No Form here, just a delecious peice of cake</h3>
        <!-- <input id="name" class="inputs" name="name" placeholder="Username" >
        <br><br>
        <input id="pass" name="pass" class="inputs" placeholder="Password">
        <br><br>
        <button name="submit" id="submit" >Submit</button>
        <br><br>-->
        <div id="result"><?php echo $mess; ?></div> 
    </form>
    </div>
    <br><br>
    <script src="script.js"></script>
    <br><br>
    <footer id='footer'><a href='index.php'>Home</a></footer>
</body>
</html>

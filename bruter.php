<?php 

$mess = '';
if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $pass = $_GET['pass'];
    if($name == 'admin' && $pass == 'easypass'){
        $mess = 'Logged in: $flag{Sup3r_dUp3r_Adm1n}';
    }
    else{
        $mess = 'Invalid credentials';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>
    <title>Document</title>
</head>
<body>
    <div id="title">
        <h1 id="banner">Requests Module</h1>
    </div>
    <br><br>
    <div id="desc-div">
        <h2 id="desc" style="text-align: center;">Guess the password to get a gift</h2>
    </div>
    <br>
    <p style='text-align:center;'><strong>admin:????</strong></p>
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
    <footer id='footer'><a href='index.php'>Home</a></footer>
</body>
</html>

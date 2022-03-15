<?php 
$mess = '';

if(isset($_POST['submit'])){
    if($_POST['hash'] == '21232f297a57a5a743894a0e4a801fc3'){
        $mess = '$flag{c0rr3ct_hash3s}';
    }
    else{
        $mess = 'Wrong Hash';
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
<body id='body'>
<div id="title">
        <h1 id="banner">hashlib Module</h1>
    </div>
    <br><br>
    <div id="desc-div">
        <h2 id="desc" style="text-align: center;">Submit the hash (md5) of "admin" to get the flag</h2>
    </div>
    <br><br>
    <div id="outter-form">
    <form  method="POST" id="post-form">
        <input id="name" class="inputs" name="hash" placeholder="Hash value" >
        
        <br><br><br><br>
        <button name="submit" id="submit" >Submit</button>
        <br><br>
        <div id="result"><?php echo $mess; ?></div>
    </form>
    </div>
    <br><br><br><br>
    <footer id='footer'><a href='index.php'>Home</a></footer>
    <!-- <script src='script.js'></script> -->
</body>
</html>

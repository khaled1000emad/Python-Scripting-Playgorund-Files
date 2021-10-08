<?php 
$mess="";

if(isset($_POST['submit']))
{   
    
    $mess = $_POST["name"] . " : " . $_POST["pass"];
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
<body>
    <div id="title">
    <h1 id="banner">Requests Module</h1>
    </div>
    <br><br>
    <div id="desc-div">
        <h2 id="desc" style="text-align: center;">Post Form (2)</h2>
    </div>
    <br><br>
    <div id="outter-form">
    <form  method="POST" id="post-form">
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

<?php 


$mess = '';
if(isset($_GET['submit'])){
    if($_GET['decoded'] == 'letmein'){
        $mess = '$flag{g00d_bas3_64}';
    }
    else{
        $mess = 'Wrong Token';
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
        <h1 id="banner">Base64 encoding & decoding</h1>
    </div>
    <h3 style="padding: 10px; text-align:center;">Can you decode me?</h3>

    <div class="container">
    <p id='encoded'>Vm0wd2QyUXlVWGxWV0d4V1YwZDRXRmxVU205V01WbDNXa2M1VjFac2JETlhhMUpUVmpGS2MySkVUbGhoTVhCUVZteFZlRll5VGtsalJtaG9UV3N3ZUZadGNFZFRNazE1VTJ0V1ZXSkhhRzlVVjNOM1pVWmFjVkZ0UmxwV01ERTFWVEowVjFaWFNraGhSemxWVm0xb1JGWldXbUZrUjFaSFYyMTRVMkpIZHpGV2EyUXdZekpHYzFOdVVtaFNlbXhXVm1wT1QwMHhjRlpYYlVaclVqQTFSMWRyV25kV01ERldZMFZ3VjJKVVJYZFpla3BIVmpGT2RWVnRhRk5sYlhoWFZtMXdUMVF3TUhoalJscFlZbFZhY1ZadGRHRk5SbFowWlVaT1ZXSlZjRWRaTUZaM1ZqSktWVkpZWkZkaGExcFlXa1ZhVDJNeFpITmhSMnhUWVROQ1dsWXhaRFJpTWtsNVZtNU9WbUpHV2xSWmJHaFRWMFpTVjJGRlRsTmlSbkJaV2xWYVQxWlhTbFpqUldSYVRVWmFlbFpxU2t0V1ZrWlpZVVphYUdFeGNGaFhiRnBoVkRKT2RGTnJaRlJpVjNoWVZXcE9iMkl4V25SalJVNXBUVlZXTkZkclZtdGhiRXAwVld4c1dtSkdXbWhaTVZwVFZqRmtkVnBGTlZOaVJtOTNWMnhXYTAxR1dsaFRhMlJxVWtWYVYxWnFUbTlrYkZweFVtdDBhazFyTlVoWlZWcHJZVWRGZWxGcmJGZFdSVXBvVjFaa1UxWXhUblZVYkZKcFVqRktWVlpHVWtKa01ERlNVRlF3UFE9PQ==</p>

    <br><br>
    <form method='GET' >
        <input type='text' name='decoded' placeholder='Decoded String ...'>
        <input type='submit' value='submit' name='submit'>
    </form>
    <p><?php echo $mess; ?></p>
    </div>
    <br><br>
    <footer id='footer'><a href='index.php'>Home</a></footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio.php" method="POST">
        <input type="text" name="nameForm[0]" id="">
        <input type="text" name="nameForm[1]" id="">
        <input type="text" name="nameForm[2]" id="">
        <input type="text" name="nameForm[3]" id="">
        <input type="text" name="nameForm[4]" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php

    $nameForm = $_POST['nameForm'];
    

    for ($i=4; $i >=0 ; $i--) { 
     
      printf ($nameForm[$i]."<br>");


    }

   
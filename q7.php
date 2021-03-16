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
        <input type="text" name="numForm[0]" id="">
        <input type="text" name="numForm[1]" id="">
        <input type="text" name="numForm[2]" id="">
        <input type="text" name="numForm[3]" id="">
        <input type="text" name="numForm[4]" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php

    $numForm = $_POST['numForm'];
    printf (max($numForm));

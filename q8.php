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
    $maiorIdade =0;
    $menorIdade =0;

    for ($i=0; $i <5 ; $i++) { 
        if ($numForm[$i]>=18) {
            $maiorIdade++;
        }else{
            $menorIdade++;
        }

        
    }
    printf('São maiores de idade: ' . $maiorIdade." pessoas <br>");
    printf('São menores de idade: ' . $menorIdade. "pessoas");
   
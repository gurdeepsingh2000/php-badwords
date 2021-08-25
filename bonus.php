<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$Name = $_GET['name'];
$Surname = $_GET['surname'];
$CompleteName = "{$Name} {$Surname}";

echo ucwords("$CompleteName");

$position = strpos($CompleteName, 'Elon');

if(strpos($CompleteName, 'Elon') !== false) {
    echo "<br/>L'ho trovato!";
}







?>


    
</body>
</html>



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

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita blanditiis at alias culpa? Quibusdam quidem nesciunt, minima tempora omnis nam, itaque distinctio sint deserunt, suscipit illo deleniti fugit minus autem.';
$lunghezza = strlen($paragrafo);



echo "<p><b>{$paragrafo} <br> la lunghezza di caratteri è di {$lunghezza}</b></p>";
$badWord = $_GET['name'];
$BadWordPar = str_ireplace($badWord, '***', $paragrafo);
$lunghezzaBadwordPar = strlen($BadWordPar);
echo "<p><b>{$BadWordPar} <br> la lunghezza di caratteri è di {$lunghezzaBadwordPar}</b></p>";
?>


    
</body>
</html>



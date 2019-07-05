<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testando Funções</title>
</head>
<body>
    
<?php
$mystring = 'abc';
$findme   = 'b';
$pos = strpos($mystring, $findme);

echo "strpos: $pos <br>";

$email = 'name@example.com';
$domain = strstr($email, '@');
echo "strstr: $domain <br>";

$user = strstr($email, '@', true);
echo "User: $user";

$str = 'abcdef';
$tamanhoStr = strlen($str);

echo "strlen : $tamanhoStr <br>";

$vowels = array("a", "e", "i", "o", "u");
$onlyConsonants = str_replace($vowels, " ", "Hello World of PHP <br>");

echo $onlyConsonants;

$numeros[0] = 1;
$numeros[1] = 3;
$numeros[2] = 5;
$contandoElementos = count($numeros);

echo "Count: $contandoElementos <br>";

if (isset($str)) {
    echo "Essa variável existe.";
}
?>
</body>
</html>
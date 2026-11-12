<?php

$email = 'eliel@alura.com.br';
$senha = '123';

if (strlen($senha) < 8) {
    echo "Senha Insegura";
}

//echo $senha[0] . PHP_EOL;

$posicaoDoArroba = strpos($email, '@',);

echo substr($email, 0, 5) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) .  PHP_EOL;


for ($i = 0; $i < 3; $i++) {
    echo $senha[$i] . PHP_EOL;
}

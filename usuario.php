<?php

$email = 'eliel@alura.com.br';

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, 5) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) .  PHP_EOL;

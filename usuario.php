<?php

$nome = 'Eliel Dias';
$email = ' eliel@alura.com.br ';
$senha = 'áéiaosid';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8) {
    echo 'Senha insergura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@',);
$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario);
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;


$csv = 'Eliel Dias,9,eliel.matos@soluti.com.br';

var_dump(explode(',', $csv));

echo trim($email) . PHP_EOL;

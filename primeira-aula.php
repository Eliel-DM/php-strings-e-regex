<?php

$nome = 'Eliel Dias Matos';

$ehDaMinhaFamilia = str_contains($nome, 'Diass');

if ($ehDaMinhaFamilia) {
    echo "{$nome} é da minha família";
} else {
    echo "{$nome} não é da minha família";
}

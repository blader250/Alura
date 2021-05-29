<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;

$endereco01 = new Endereco('Rio','batata', 'avenida', '123');
$endereco02 = new Endereco('São Gonçado','morango', 'touro', '31');
$endereco03 = new Endereco('Niterói','jumento', 'alberto Cruz', '14');
$endereco04 = new Endereco('Amanhecer','limão', 'Senador Vergueiro', '117');

echo $endereco01->numero;
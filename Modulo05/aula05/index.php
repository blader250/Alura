<?php declare(strict_types=1);

namespace Alura;

require_once 'autoload.php'; 

$correntistas_e_compras = [
    "Mogu",
    "Joreu",
    "Adalberto",
    12,
    "12",
    82
];

ArrayRemove::remover('12', $correntistas_e_compras);
echo "<pre>";
var_dump($correntistas_e_compras);
echo "</pre>";
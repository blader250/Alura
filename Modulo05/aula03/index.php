<?php declare(strict_types=1);

namespace Alura;

spl_autoload_register(
    function (string $namespaceClasse):void{
        $caminho = DIRECTORY_SEPARATOR."src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR. "{$diretorio_classe}.php";
    }
);

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
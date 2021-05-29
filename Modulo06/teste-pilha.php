<?php

function funcao1()
{
    echo 'entrei na função1'.PHP_EOL;
    try {
        funcao2();
    } catch (Exception $erro) {
        echo "erro de ".$erro->getMessage().PHP_EOL;
        echo "na linha: ".$erro->getLine().PHP_EOL;
        echo PHP_EOL."stack trace".PHP_EOL;
        echo $erro->getTraceAsString().PHP_EOL;
        echo "fim do stack trace".PHP_EOL.PHP_EOL;
    };
    echo 'sai da função1'.PHP_EOL;
};

function funcao2()
{
    echo "entrei na função2".PHP_EOL;
    throw new RuntimeException("erro teste");
    echo "sai da função2".PHP_EOL;
};

echo "iniciando programa".PHP_EOL;
funcao1();
echo "encerrando programa".PHP_EOL;
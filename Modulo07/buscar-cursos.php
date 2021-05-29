<?php

/*
    projeto da aula funcionando
*/
require_once 'vendor/autoload.php';

use Alura\Buscador\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

exit();

/*cria o cliente, adiciona o url e desativa a verificacao*/
$client = new Client([
    'base_uri' => 'https://www.alura.com.br',
    'verify' => false
]);

/* cria o crawler*/
$crawler = new Crawler();

/*cria um buscador*/
$buscador = new Buscador($client, $crawler, 'GET');
$cursos = $buscador->buscar('/cursos-online-programacao/php');

$quantidade_cursos = 0;

foreach ($cursos as $i) {
    echo $i . PHP_EOL;
    $quantidade_cursos++;
}

echo $quantidade_cursos . PHP_EOL;

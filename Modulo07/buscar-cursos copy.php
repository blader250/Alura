<?php
/*
    projeto da aula funcionando
*/
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

/*cria o cliente, adiciona o url e desativa a verificacao*/
$client = new Client([
    'base_uri'=>'https://www.alura.com.br',
    'verify'=> false
]);

/*envia uma requisição e recebe a resposta*/
$resposta = $client->request('GET','/cursos-online-programacao/php');

/*pega o corpo na requisição*/
$body = $resposta->getBody();

/*cria a coisa que vai navegar pelo corpo do html*/
$crawler = new Crawler();

/*adiciona mostra o html para o crawler*/
$crawler->addHtmlContent($body);
$cursos = $crawler->filter('span.card-curso__nome');

$quantidade_de_cursos = 0;
foreach ($cursos as $i) {
    echo $i->textContent . PHP_EOL;
    $quantidade_de_cursos++;
}   
echo 'total de ' . $quantidade_de_cursos . 'cursos.';
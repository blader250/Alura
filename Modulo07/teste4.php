<?php

/*
   ta funcionando esse
*/

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client([
    'base_uri' => 'https://desciclo.pedia.ws',
    'verify' => false
]);

$response = $client->request('GET', '/wiki/Kiryu_Coco');

$body = $response->getBody();
print_r($body) . PHP_EOL;
echo '-----fim do teste-----------' . PHP_EOL;

$crawler = new Crawler();
$crawler->addHtmlContent($body);
$cursos = $crawler->filter('i');

foreach ($cursos as $domElement) {
    echo $domElement->textContent . PHP_EOL;
}

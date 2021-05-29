<?php

/*
    Essa é a classe que busca um site com base no cliente, crawler e o método
*/
namespace Alura\Buscador;

use DomainException;
use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class Buscador
{
    private $httpClient;
    private $crawler;
    private $metodo;

    public function __construct(ClientInterface $httpClient, Crawler $crawler, string $metodo)
    {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
        $this->metodo = $metodo;
        $this->verificaMetodo($metodo); #ativa a funcao verificaMetodo()
    }

    public function getHttpClient()
    {
        return $this->httpClient;
    }

    public function getCrawler()
    {
        return $this->crawler;
    }

    /*verifica se o metodo é GET ou POST*/
    public function verificaMetodo($metodo)
    {
        if ($metodo !== 'GET' and $metodo !== 'POST') {
            throw new DomainException('metodo inválido'); #retorna uma excessao caso nao seja GET ou POST
        }
    }

    /*faz a busca e retorna um array com os resultados*/
    public function buscar(string $uri): array
    {

        /*envia uma requisição e recebe a resposta*/
        $resposta = $this->httpClient->request($this->metodo, $uri);

        /*pega o corpo na requisição*/
        $body = $resposta->getBody();

        /*adiciona/mostra o html para o crawler*/
        $this->crawler->addHtmlContent($body);
        /*filtra o corpo buscando pelos elementos dados no filter*/
        $elementos_cursos = $this->crawler->filter('span.card-curso__nome');

        /*array que será retornado*/
        $cursos = [];

        /*adiciona os elementos que estao contidos no $elementos_cursos na array $cursos*/
        foreach ($elementos_cursos as $elemento) {
            $cursos[] = $elemento->textContent;
        }

        /*e finalmente retorna os cursos*/
        return $cursos;
    }
}

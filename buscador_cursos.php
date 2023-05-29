<?php


require 'vendor/autoload.php';

//Teste::exibemensagem();
//exit();

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Alura\BuscadorDeCursos\Buscador;


$client = new Client(['verify' => false]);

$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

try {
    foreach ($cursos as $curso) {
        echo exibenovamensagem($curso);
    }
} catch (Throwable $erro) {
    $erro->getMessage();
}
echo 'teste';

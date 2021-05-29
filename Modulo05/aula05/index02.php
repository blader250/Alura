<?php

namespace Alura;

require_once 'autoload.php';

$grupo1 = [
    "Cali"
    ,"Myune"
    ,"Akai Haato"
    ,"Mel"
    ,"Melody"
    ,"Zentreya"
    ,"Hime Hajime"
    ,"Iron_Mouse"
    ,"Foxy Joel"
];

$grupo2 = [
    "Cali"
    ,"Mel"
    ,"Foxy Joel"
];

$grupo3 = [ 
    "Nyanners"
    ,"Froot"
    ,"Melody"
    ,"Zentreya"
    ,"Hime Hajime"
    ,"Iron_Mouse"
    ,"SiverVale"
    ,"Veibae"
];
$diferenca_vtubers = array_merge($grupo1, $grupo2);

echo "<pre>";
var_dump($diferenca_vtubers);
echo "</pre>";

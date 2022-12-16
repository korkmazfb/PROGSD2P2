<?php

function lees_bestand($string){
    $bestand = fopen( $string, 'r');

    while(!feof($bestand)) {
        $blog_regel = fgets($bestand);
        echo $blog_regel, '<br>';
    }

};

function lees_bestand2($string){
    $bestand = fopen( $string, 'r');

    while(!feof($bestand)) {
        $media_regel = fgets($bestand);
        echo $media_regel, '<br>';
    }

};

function lees_bestand3($string){
    $bestand = fopen( $string, 'r');

    while(!feof($bestand)) {
        $hobby_regel = fgets($bestand);
        echo $hobby_regel, '<br>';
    }

};

$root = substr($_SERVER['SCRIPT_NAME'],
0,
strpos($_SERVER['SCRIPT_NAME'], '/public') + 7);
define("ROOT_URL", $root);

function url_path($path) {
if($path[0] != '/') {
    $path = "/" . $path;
}
return ROOT_URL . $path;
}
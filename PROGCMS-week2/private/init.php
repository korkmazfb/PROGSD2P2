<?php

// define("PUBLIC_PATH", PUBLIC_PATH . '/public');

// define("PRIVATE_PATH", PRIVATE_PATH . '/private');

// define("SHARED_PATH", SHARED_PATH . '/shared');\

define("PRIVATE_PATH", dirname(__FILE__));
define("SHARED_PATH", PRIVATE_PATH . '/shared');  
define("PROJECT_PATH", dirname(PRIVATE_PATH));

//echo $_SERVER['SCRIPT_NAME'];
//echo $_SERVER['DOCUMENT_ROOT'];

//echo PROJECT_PATH;
//echo PRIVATE_PATH;
//echo SHARED_PATH;
//echo __FILE__;


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
<?php

// define("PUBLIC_PATH", PUBLIC_PATH . '/public');

// define("PRIVATE_PATH", PRIVATE_PATH . '/private');

// define("SHARED_PATH", SHARED_PATH . '/shared');\

define("PRIVATE_PATH", dirname(__FILE__));
define("SHARED_PATH", PRIVATE_PATH . '/shared');  
define("PROJECT_PATH", dirname(PRIVATE_PATH));

echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['DOCUMENT_ROOT'];

echo PROJECT_PATH;
echo PRIVATE_PATH;
echo SHARED_PATH;
echo __FILE__;
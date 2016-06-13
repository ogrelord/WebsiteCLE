<?php
//Require needed files
require_once "../app/settings.php";
require_once "../vendor/autoload.php";

use CLEMobile\Utils\Session;

//Always start our session (always place AFTER require of classes to avoid http://stackoverflow.com/a/9443818)
$session = new Session();

//Set variable for errors
$errors = [];

try {
    //Get the url from the .htaccess rewrite & check existence (if not: 404!)
    $currentPage = (!isset($_GET['url']) || $_GET['url'] == "" ? "home" : $_GET['url']);
    $phpFile = $currentPage . ".php";
    if (!file_exists(INCLUDES_PATH . "pages/" . $phpFile)) {
        header('HTTP/1.0 404 Not Found');
        $phpFile = '404.php';
    }

    //Require file for logic
    require_once "../app/pages/" . $phpFile;

    //Use output buffers to capture template data from require statement and store in $content
    ob_start();
    require_once "../app/pages/templates/" . $phpFile;
    $content = ob_get_clean();
} catch (Exception $e) {
    //Set error
    $errors[] = "Oops, try to fix your error please: " . $e->getMessage() . " on line " . $e->getLine() . " of " . $e->getFile();
}

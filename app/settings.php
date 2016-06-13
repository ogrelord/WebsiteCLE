<?php
//Define DB credentials
define("DB_HOST", "localhost");
define("DB_USER", "clemobile");
define("DB_PASS", "somecrappypassword");
define("DB_NAME", "clemobile");

//Paths
define("BASE_PATH", "/");
define("INCLUDES_PATH", dirname(__FILE__) . "/");

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});

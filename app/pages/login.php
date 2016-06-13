<?php
//If already logged in, no need to be here
if ($session->keyExists('user')) {
    header('Location: add');
    exit;
}

//Validation
require_once dirname(__FILE__) . "/includes/login-post-data.php";

//When no error, set session variable, redirect & exit script
if (isset($formData) && empty($errors)) {
    $session->set('user', $user);
    header('Location: add');
    exit;
}

//Default page title
$pageTitle = 'Login';

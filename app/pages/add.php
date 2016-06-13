<?php
//If not logged in, redirect to login
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}

//Set default empty album & load POST logic
$album = new \CLEMobile\MusicCollection\Album();
require_once dirname(__FILE__) . "/includes/album-post-data.php";

//Special check for add form only
if (isset($formData) && $_FILES['image']['error'] == 4) {
    $errors[] = 'Image cannot be empty';
}

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    //Store image & retrieve name for database saving
    $image = new CLEMobile\Utils\Image();
    $album->Image = 'images/' . $image->save($_FILES['image']);

    //Set user id in Album
    $album->User_id = $session->get('user')->id;

    //Init the database
    $db = new CLEMobile\Databases\DatabaseInserter(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if ($db->addAlbum($album)) {
        $success = "Your new album has been added to the database!";
        //Override to see a new empty form
        $album = new CLEMobile\MusicCollection\Album("", "", "", "", "", "");
    } else {
        $errors[] = "Database error info: " . $db->getConnection()->errorInfo();
    }
}

//Default page title
$pageTitle = 'Add album';

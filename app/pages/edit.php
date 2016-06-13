<?php
//Init the database
use CLEMobile\Databases\AlbumRepository;
use CLEMobile\Utils\Image;

$repo = new AlbumRepository(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the record from the db
$album = $repo->getAlbumById($_GET['id']);

//Override logic for POST
require_once dirname(__FILE__) . "/includes/album-post-data.php";

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    //If image is not empty, process the new image file
    if ($_FILES['image']['error'] != 4) {
        //Init image class
        $image = new Image();

        //Remove old image
        $image->delete($album->image);

        //Store new image & retrieve name for database saving (override current image name)
        $album->image = 'images/' . $image->save($_FILES['image']);
    }

    //Save the record to the db
    if ($repo->update($album)) {
        $success = "Your album has been updated in the database!";
    } else {
        $errors[] = "Database error info: " . $repo->getConnection()->errorInfo();
    }
}

//Default page title
$pageTitle = 'Edit ' . $album->name;

<?php
//Init the database
$db = new \CLEMobile\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Get the records from the db
$album = $db->getAlbumById($_GET['id']);

//Default page title
$pageTitle = $album->name;

<?php

use CLEMobile\Utils\Image;
use CLEMobile\MusicCollection\Album;

//Get the record from the db
$repo = new AlbumRepository();
$album = $repo->getAlbumById($_GET['id']);

//Database magic when no errors are found
if ($album != null && $album instanceof Album) {
    //Init image class
    $image = new Image();

    //Remove image
    $image->delete($album->getImage());

    //Save the record to the db
    $repo->delete($album);

    //Redirect to homepage after deletion & exit script
    header("Location: home");
    exit;
}

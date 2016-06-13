<?php
//Check if Post isset, else do nothing
use CLEMobile\Form\Data;
use CLEMobile\Form\Validation\AlbumValidator;

if (isset($_POST['submit'])) {
    //Set form data
    $formData = new Data($_POST);

    //Override object with new variables
    $album->Artist = $formData->getPostVar('artist');
    $album->Name = $formData->getPostVar('name');
    $album->Genre = $formData->getPostVar('genre');
    $album->Year = $formData->getPostVar('year');
    $album->Tracks = $formData->getPostVar('tracks');

    //Actual validation
    $validator = new AlbumValidator($album);
    $validator->validate();
    $errors = $validator->getErrors();
}

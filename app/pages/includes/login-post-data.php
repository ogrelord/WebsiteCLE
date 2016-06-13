<?php
//Check if Post isset, else do nothing
use CLEMobile\Databases\UserRepository;

if (isset($_POST['submit'])) {
    //Set form data
    $formData = new \CLEMobile\Form\Data($_POST);

    //Set post variables
    $email = $formData->getPostVar('email');
    $password = $formData->getPostVar('password');

    $repo = new UserRepository();
    //Get the record from the db
    $user = $repo->getUserByEmail($email);

    //Actual validation
    $validator = new \CLEMobile\Form\Validation\LoginValidator($user, $password);
    $validator->validate();
    $errors = $validator->getErrors();
}

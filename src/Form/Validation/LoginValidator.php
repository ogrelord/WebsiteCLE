<?php 

namespace CLEMobile\Form\Validation;

/**
 * Class LoginValidator
 * @package System\Form\Validation
 */
class LoginValidator implements Validator
{
    private $errors = [];
    private $user, $password;

    /**
     * LoginValidator constructor.
     *
     * @param $user
     * @param $password
     */
    public function __construct($user, $password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    /**
     * Validate the data
     */
    public function validate()
    {
        //Go on if we got an user (which means email is correct)
        if ($this->user) {
            //Validate password
            if (!password_verify($this->password, $this->user->password)) {
                $this->errors[] = "Je wachtwoord is onjuist!";
            }
        } else {
            $this->errors[] = "Je email bestaat niet!";
        }
    }

    /**
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}

<?php 

namespace CLEMobile\Form\Validation;

/**
 * Interface Validator
 * @package System\Form\Validation
 */
interface Validator
{
    /**
     * Validate magic
     */
    public function validate();

    /**
     * @return array
     */
    public function getErrors();
}

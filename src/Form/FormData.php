<?php namespace CLEMobile\Form;

/**
 * Class Data
 * @package System\Form
 */
class Data
{
    private $post = [];

    /**
     * Data constructor.
     *
     * @param $post
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Check if a var exists in the current post state
     *
     * @param $var
     * @return bool
     */
    public function varExists($var)
    {
        return array_key_exists($var, $this->post);
    }

    /**
     * Retrieve a var from the post array
     *
     * @param $var
     * @return mixed
     */
    public function getPostVar($var)
    {
        return htmlentities($this->post[$var]);
    }
}

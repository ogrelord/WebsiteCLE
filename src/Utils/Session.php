<?php 

namespace CLEMobile\Utils;

/**
 * Class Session
 * @package System\Utils
 */
class Session
{
    private $data = [];

    /**
     * Initialize object
     */
    public function __construct()
    {
        session_start();
        $this->data = $_SESSION;
    }

    /**
     * Check if a var exists in the current session state
     *
     * @param $var
     * @return bool
     */
    public function keyExists($var)
    {
        return array_key_exists($var, $this->data);
    }

    /**
     * Retrieve a var from the session array
     *
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->data[$key];
    }

    /**
     * Set a var from in the global session
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Delete a var from the global session
     *
     * @param $key
     */
    public function delete($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * Destroy the session
     */
    public function destroy()
    {
        session_destroy();
    }
}

<?php 

namespace CLEMobile\Form\Validation;
use CLEMobile\Model\Album;

/**
 * Class AlbumValidator
 * @package System\Form\Validation
 */
class AlbumValidator implements Validator
{
    private $errors = [];
    private $album;

    /**
     * AlbumValidator constructor.
     *
     * @param Album $album
     */
    public function __construct(Album $album)
    {
        $this->album = $album;
    }

    /**
     * Validate the data
     */
    public function validate()
    {
        //Check if data is valid & generate error if not so
        if ($this->album->getArtist() == "") {
            $this->errors[] = 'Artist cannot be empty';
        }
        if ($this->album->getName() == "") {
            $this->errors[] = 'Album cannot be empty';
        }
        if ($this->album->getGenre() == "") {
            $this->errors[] = 'Genre cannot be empty';
        }
        if ($this->album->getYear() == "") {
            $this->errors[] = 'Year cannot be empty';
        }
        if (!is_numeric($this->album->getYear()) || strlen($this->album->getYear()) != 4) {
            $this->errors[] = 'Year needs to be a number with the length of 4';
        }
        if ($this->album->getTracks() == "") {
            $this->errors[] = 'Tracks cannot be empty';
        }
        if (!is_numeric($this->album->getTracks())) {
            $this->errors[] = 'Tracks need to be a number';
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

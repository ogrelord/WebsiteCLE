<?php

namespace CLEMobile\Service;

use CLEMobile\Databases\AlbumRepository;
use CLEMobile\Model\Album;
use CLEMobile\Utils\Image;

/**
 * Created by PhpStorm.
 * User: Ogrenetwork
 * Date: 12-6-2016
 * Time: 16:06
 */
class AlbumServiceWrapper
{
	/**
	 * @var AlbumRepository
	 */
	private $albumRepo;
    /**
     * @var Image
     */
    private $image;

    /**
     * AlbumServiceWrapper constructor.
     * @param AlbumRepository $albumRepo
     * @param Image $image
     */
	public function __construct(AlbumRepository $albumRepo, Image $image)
	{
		$this->albumRepo = $albumRepo;
        $this->image = $image;
    }

    /**
     * @param Album $album
     * @param array $file
     * @return int
     */
    public function addAlbum(Album $album, array $file)
	{
        $fileName = $this->image->save($file);
        $album->setImage($fileName);
        return $this->albumRepo->addAlbum($album);
	}

    /**
     * @param Album $album
     */
    public function removeAlbum(Album $album)
	{
        $this->image->delete($album->getImage());
        $this->albumRepo->delete($album);
	}
}
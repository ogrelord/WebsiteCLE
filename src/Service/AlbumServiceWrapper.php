<?php
use CLEMobile\Databases\AlbumRepository;

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
	 * AlbumServiceWrapper constructor.
	 * @param AlbumRepository $albumRepo
	 */
	public function __construct(AlbumRepository $albumRepo)
	{
		$this->albumRepo = $albumRepo;
	}

	public function addAlbum()
	{
		
	}
}
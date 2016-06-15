<?php

namespace CLEMobile\Databases;

use CLEMobile\Model\Album;

/**
 * Created by PhpStorm.
 * User: Ogrenetwork
 * Date: 10-6-2016
 * Time: 22:04
 */
class AlbumRepository extends BaseRepository
{
	/**
	 * @param Album $album
	 * @return bool
	 */
	public function update($album)
	{
		$query = "UPDATE albums
                  SET name = :name, artist = :artist, genre = :genre, year = :year, tracks = :tracks, image = :image
                  WHERE id = :id";
		$statement = $this->connection->prepare($query);
		return $statement->execute([
			':name' => $album->getName(),
			':artist' => $album->getArtist(),
			':genre' => $album->getGenre(),
			':year' => $album->getYear(),
			':tracks' => $album->getTracks(),
			':image' => $album->getImage(),
			':id' => $album->getId()
		]);
	}

	/**
	 * @param Album $album
	 * @return bool
	 */
	public function delete($album)
	{
		$query = "DELETE FROM albums WHERE id = :id";
		$statement = $this->connection->prepare($query);
		return $statement->execute([':id' => $album->getId()]);
	}

	/**
	 * Get all albums from the database
	 *
	 * @return mixed
	 */
	public function getAlbums()
	{
		$query = "SELECT * FROM albums";
		return $this->connection->query($query)->fetchAll(\PDO::FETCH_CLASS, "CLEMobile\\Model\\Album");
	}

	/**
	 * Get a specific album by its ID
	 *
	 * @param $id
	 * @return \CLEMobile\\Model\MusicCollection\Album
	 */
	public function getAlbumById($id)
	{
		$statement = $this->connection->prepare("SELECT * FROM albums WHERE id = :id");
		$statement->execute([':id' => $id]);
		return $statement->fetchObject("CLEMobile\\Model\\Album");
	}

	/**
	 * Save a album to the database
	 *
	 * @param \CLEMobile\MusicCollection\Album $album
	 * @return integer ID of last inserted album
	 */
	public function addAlbum($album)
	{
		$query = "INSERT INTO albums (name, artist, genre, year, tracks, image)
                  VALUES (:userId, :name, :artist, :genre, :year, :tracks, :image)";
		$statement = $this->connection->prepare($query);
		$statement->execute([
			':name' => $album->getName(),
			':artist' => $album->getArtist(),
			':genre' => $album->getGenre(),
			':year' => $album->getYear(),
			':tracks' => $album->getTracks(),
			':image' => $album->getImage()
		]);
		
		return $this->connection->lastInsertId();
	}
}
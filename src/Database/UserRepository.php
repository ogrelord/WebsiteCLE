<?php
/**
 * Created by PhpStorm.
 * User: Ogrenetwork
 * Date: 10-6-2016
 * Time: 22:22
 */

namespace CLEMobile\Databases;


class UserRepository extends BaseRepository
{
	/**
	 * Get a specific user by its email
	 *
	 * @param $email
	 * @return \CLEMobile\\Model\Users\User|bool
	 */
	public function getUserByEmail($email)
	{
		$statement = $this->connection->prepare("SELECT * FROM users WHERE email = :email");
		$statement->execute([':email' => $email]);
		return $statement->fetchObject("CLEMobile\\Model\\User");
	}
}
<?php

namespace JG\Blog\Model;

require_once("model/Manager.php");

class UserManager extends Manager
{
	public function insertUser($firstname, $lastname, $username, $email, $password)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO users(firstname, lastname, username, email, pass, signin_date) VALUES(?, ?, ?, ?, ?, NOW()) ');
		$affectedLines = $req->execute(array($firstname, $lastname, $username, $email, $password));

        return $affectedLines;
	}

	public function loginUser($username, $password)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, username, pass FROM users WHERE username = ?');
		$req->execute(array($username));
		$selectUser = $req->fetch();

		return $selectUser;
	}
    
    public function getUser($userID)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('SELECT id, firstname, lastname, username, email, DATE_FORMAT(signin_date, \'%d %M %Y\') AS signin_date_dmy FROM users WHERE id = ?');
		$req->execute(array($userID));
		$user = $req->fetch();

		return $user;
    }
}
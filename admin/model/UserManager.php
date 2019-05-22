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

	public function getUsers()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, firstname, lastname, username, email, DATE_FORMAT(signin_date, \'%d %M %Y\') AS signin_date_dmy FROM users ORDER BY signin_date DESC');

		return $req;
	}
    
    public function getUser($userId)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('SELECT id, firstname, lastname, username, email, DATE_FORMAT(signin_date, \'%d %M %Y\') AS signin_date_dmy FROM users WHERE id = ?');
        $req->execute(array($userId));
        $user = $req->fetch();

		return $user;
    }
    
    public function setUser($firstname, $lastname, $username, $email, $userId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE users SET firstname = :firstname, lastname = :lastname, username = :username, email = :email WHERE id = :userId');
        $modifiedLines = $req->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':username' => $username, ':email' => $email, ':userId' => $userId));

        return $modifiedLines;
    }

	public function deleteUser($userId)
    {
        $db = $this->dbConnect();
        $affectedLines = $db->exec('DELETE FROM users WHERE id = '.$userId);

        return $affectedLines;
    }
}
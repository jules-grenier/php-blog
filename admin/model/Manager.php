<?php

namespace JG\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blog";

        $db =new \PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        return $db;
    }
}
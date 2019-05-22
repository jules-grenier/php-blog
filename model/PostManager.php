<?php

namespace JG\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts($page)
    {
        $limit = 5;
        $offset = ($page -1) * $limit;
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d %M %Y\') AS creation_date_mdy FROM posts ORDER BY creation_date DESC LIMIT '.$offset.','.$limit);

        return $req;
    }
    
    public function getSliderPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d %M %Y\') AS creation_date_mdy FROM posts ORDER BY creation_date DESC LIMIT 0, 2');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%D %M %Y\') AS creation_date_mdy FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $affectedLines = $post->execute(array($title, $content));

        return $affectedLines;
    }
}
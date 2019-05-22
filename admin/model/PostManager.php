<?php

namespace JG\Blog\Model;

require_once("model/Manager.php");

class PostManager extends Manager
{
    public function getPosts()
    {
        // $limit = 5;
        // $offset = 0;
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d %M %Y\') AS creation_date_dmy FROM posts ORDER BY creation_date DESC');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d %M %Y\') AS creation_date_dmy FROM posts WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function setPost($postId, $content)
    {
        $db = $this->dbConnect();
        $posts = $db->prepare('UPDATE posts SET content = :content WHERE id = :postId');
        $changingLines = $posts->execute(array(':content' => $content, ':postId' => $postId));

        return $changingLines;
    }

    public function addPost($title, $content)
    {
        $db = $this->dbConnect();
        $post = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES(?, ?, NOW())');
        $affectedLines = $post->execute(array($title, $content));

        return $affectedLines;
    }

    public function deletePost($postId)
    {
        $db = $this->dbConnect();
        $affectedLines = $db->exec('DELETE FROM posts WHERE id = '.$postId);

        return $affectedLines;
    }
}
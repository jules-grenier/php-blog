<?php

namespace JG\Blog\Model;

require_once("model/Manager.php");

class CommentManager extends Manager
{
    public function getComments($postId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_dmy FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_dmy FROM comments ORDER BY comment_date DESC');

        return $comments;
    }

    public function insertComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO comments(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $req->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function getComment($commentId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d %M %Y\') AS comment_date_dmy FROM comments WHERE id = ?');
        $req->execute(array($commentId));
        $comment = $req->fetch();

        return $comment;
    }

    public function modifComment($commentId, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('UPDATE comments SET comment = :comment WHERE id = :commentId');
        $chagingLines = $comments->execute(array(':comment' => $comment, ':commentId' => $commentId));

        return $chagingLines;
    }

    public function deleteComByPostId($postId)
    {
        $db = $this->dbConnect();
        $affectedLines = $db->exec('DELETE FROM comments WHERE post_id = '.$postId);

        return $affectedLines;
    }
}
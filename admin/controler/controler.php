<?php

require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');



function checkUser($username, $pass)
{
    $userManager = new JG\Blog\Model\UserManager();
    $selectUser = $userManager->loginUser($username, $pass);

    

    if (!$selectUser)
    {
        echo '<p class="text-center text-danger mt-5">Incorrect ...<p>';
    }
    else
    {
        $isPasswordCorrect = password_verify($pass, $selectUser['pass']);

        if ($isPasswordCorrect && $username = "jules_grenier")
        {

            $_SESSION['username'] = $username;

            echo '<p class="text-center text-success mt-5">Correct !<p>';
            
            header('Location: index.php');
        }
        else
        {
            echo '<p class="text-center text-danger mt-5">Incorrect ...<p>';
        }

        
    }
}

function disconnect()
{
    session_start();
    $_SESSION = array();
    session_destroy();
    header('Location: index.php');
}

function listPosts()
{
    $postManager = new JG\Blog\Model\PostManager();
    $posts = $postManager->getPosts();
    require('view/pages/postsList.php');
}

function postsPage()
{
    listPosts();
}

function newPost($title, $content)
{
    $postManager = new JG\Blog\Model\PostManager();
    $affectedLines = $postManager->addPost($title, $content);

    if ($affectedLines === false) {
        throw new Exception('There was an error adding the post !');
    }
    else {
        header('Location: index.php?page=posts');
    }
}

function delPost($postId)
{
    $postManager = new JG\Blog\Model\PostManager();
    $affectedLines = $postManager->deletePost($postId);
    
    $commentManager = new JG\Blog\Model\CommentManager();
    $affectedLines = $commentManager->deleteComByPostId($postId);

    if ($affectedLines === false) {
        throw new Exception('There was an error deleting the post !');
    }
    else {
        header('Location: index.php?page=posts');
    }
}

function post($postId)
{
    $postManager = new JG\Blog\Model\PostManager();
    $commentManager = new JG\Blog\Model\CommentManager();

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);

    require('view/pages/post.php');
}

function editPost($postId, $content)
{
    $postManager = new JG\Blog\Model\PostManager();

    $changingLines = $postManager->setPost($postId, $content);

    if ($changingLines === false) {
        throw new Exception('There was a problem editing the post !');
    }
    else {
        header('Location: index.php?action=editPost&postId='.$postId);
    }
}

function seePost($postId)
{
    header('Location: /blog/index.php?action=post&id='.$postId);

}


function listComments()
{
    $commentManager = new JG\Blog\Model\CommentManager();
    $comments = $commentManager->getAllComments();
    require('view/pages/commentsList.php');
}

function commentsPage()
{
    listComments();
}


function addComment($postId, $author ,$comment)
{
    $commentManager = new JG\Blog\Model\CommentManager();
    $affectedLines = $commentManager->insertComment($postId, $author ,$comment);
    
    if ($affectedLines === false) {
        throw new Exception('There was an error adding the post !');
    }
    else {
        header('Location: index.php?page=editPost&postId='.$postId);
    }
}




function listUsers()
{
    $userManager = new JG\Blog\Model\UserManager();
    $users = $userManager->getUsers();
    require('view/pages/usersList.php');
}

function userPage($userId)
{
    $userManager = new JG\Blog\Model\UserManager();
    $user = $userManager->getUser($userId);
    
    require('view/pages/user.php');
}


function usersPage()
{
    listUsers();
}

function addUser($firstname, $lastname, $username, $email, $password)
{
    $userManager = new JG\Blog\Model\UserManager();
    $affectedLines = $userManager->insertUser($firstname, $lastname, $username, $email, $password);

    if ($affectedLines === false) {
        throw new Exception('There was an error adding the user !');
    }
    else {
        header('Location: index.php?page=users');
    }
}

function delUser($userId)
{
    $userManager = new JG\Blog\Model\UserManager();
    $affectedLines = $userManager->deleteUser($userId);

    if ($affectedLines === false) {
        throw new Exception('There was an error deleting the user !');
    }
    else {
        header('Location: index.php?page=users');
    }
}

function editUser($firstname, $lastname, $username, $email, $userId)
{
    $userManager = new JG\Blog\Model\UserManager();
    $changingLines = $userManager->setUser($firstname, $lastname, $username, $email, $userId);

    if ($changingLines === false) {
        throw new Exception('There was a problem editing the user !');
    }
    else {
        header('Location: index.php?action=seeUser&userId='.$userId);
    }
}





function dashboard()
{
    $postManager = new JG\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    $userManager = new JG\Blog\Model\UserManager();
    $users = $userManager->getUsers();

    $commentManager = new JG\Blog\Model\CommentManager();
    $comments = $commentManager->getAllComments();
    
    require('view/pages/dashboard.php');
}
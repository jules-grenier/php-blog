<?php


require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');

function listPosts($page)
{
    $postManager = new JG\Blog\Model\PostManager();
    $posts = $postManager->getPosts($page);

    require('view/post/list_posts.php');
}

function sliderPosts()
{
    $postManager = new JG\Blog\Model\PostManager();
    $sliderPosts = $postManager->getPosts();

    require('view/component/header.php');
}

function post($postId)
{
    $postManager = new JG\Blog\Model\PostManager();
    $commentManager = new JG\Blog\Model\CommentManager();

    $post = $postManager->getPost($postId);
    $comments = $commentManager->getComments($postId);

    require('view/post/post.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new JG\Blog\Model\CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('<h2>Impossible d\'ajouter le commentaire !</h2>');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function showComment($commentId)
{
    $commentManager = new JG\Blog\Model\CommentManager();
    $comment = $commentManager->getComment($_GET['commentId']);
    require('view/post/comment.php');
}

function modifComment($commentId, $comment, $postId)
{
    $commentManager = new JG\Blog\Model\CommentManager();

    $changingLines = $commentManager->modifComment($commentId, $comment);

    if ($changingLines === false) {
        throw new Exception('<h2>Impossible de modifier le commentaire !</h2>');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function addUser($firstname, $lastname, $username, $email, $password)
{
    $userManager = new JG\Blog\Model\UserManager();

    $affectedLines = $userManager->insertUser($firstname, $lastname, $username, $email, $password);

    if ($affectedLines === false) {
        throw new Exception('<h2>Impossible d\'ajouter l\'utilisateur !</h2>');
    }
    else {
        header('Location: index.php?action=login');
    }
}

function checkUser($name, $pass)
{
    $userManager = new JG\Blog\Model\UserManager();
    $selectUser = $userManager->loginUser($name, $pass);

    if (!$selectUser)
    {
        throw new Exception('<h1>Ah !</h1><h2>Identifiant ou mot de passe incorrect</h2>');
    }
    else
    {
        $isPasswordCorrect = password_verify($pass, $selectUser['pass']);

        if ($isPasswordCorrect)
        {
            
            if (isset($_POST['rememberme']))
            {  
                // Cookies set for 30 days
                setcookie('id', $selectUser['id'], time()+60*60*24*30,"/",false);
                setcookie('username', $selectUser['username'], time()+60*60*24*30,"/",false);
                setcookie('pass', $selectUser['pass'], time()+60*60*24*30,"/",false);
                // $_SESSION['username'] = $_COOKIE['username'];
            }
            else{
                // $_SESSION['id'] = $selectUser['id'];
                // $_SESSION['username'] = $selectUser['username'];
                setcookie('id', $selectUser['id'], false,"/",false);
                setcookie('username', $selectUser['username'], false,"/",false);
            }

            header('Location: index.php?action=listPosts');
        }
        else
        {
            throw new Exception('<h1>Ah !</h1><h2>Identifiant ou mot de passe incorrect</h2>');
        }

        
    }
}


function startSession()
{
    session_start();
    
}

function disconnectUser()
{
    // session_start();

    // $_SESSION = array();
    // session_destroy();
    setcookie('id', null, -1, '/', false);
    setcookie('username', null, -1, '/', false);
	setcookie('pass', null, -1, '/', false);
    header('Location: index.php');
}

function login()
{
    require('view/user/login.php');
}

function signin()
{
    require('view/user/signin.php');
}

function about()
{
    require('view/about/about.php');
}

function contact()
{
    require('view/contact/contact.php');
}

function getUserInfos($userID)
{
    $userManager = new JG\Blog\Model\UserManager();
    $user = $userManager->getUser($userID);
    
    require('view/user/profil.php');
}
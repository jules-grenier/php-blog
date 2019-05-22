<?php
require('controller/frontend.php');

try {

    $page = 1;

    if (isset($_GET['action'])) {
        // startSession();
        if ($_GET['action'] == 'login')
        {
            login();
        }
        elseif ($_GET['action'] == 'loginCheck') {
            if(!empty($_POST['username']) && !empty($_POST['password']))
            {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);
                
                checkUser($username, $password);
            }
            else{
                throw new Exception('<h1>Ah !</h1><h2>Tous les champs ne sont pas remplis !</h2>');
            }
        }
        
        elseif ($_GET['action'] == 'signin')
        {
            signin();

        }
        elseif ($_GET['action'] == 'signinCheck') {
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
                {
                    $firstname = htmlspecialchars($_POST['firstname']);
                    $lastname = htmlspecialchars($_POST['lastname']);
                    $username = htmlspecialchars($_POST['username']);
                    $email = htmlspecialchars($_POST['email']);
                    $password = htmlspecialchars($_POST['password']);
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    addUser($firstname, $lastname, $username, $email, $password);
                }
                else{
                    throw new Exception('<h1>Ah !</h1><h2>Tous les champs ne sont pas remplis !</h2>');
                }
        }
        elseif($_GET['action'] == 'disconnect'){
            disconnectUser();
        }
        elseif ($_GET['action'] == 'listPosts') {
            sliderPosts();

            if(isset($_GET['page']))
            {
                if($_GET['page'] <= 0)
                {
                    listPosts($page);
                }
                else{
                    $page = $_GET['page'];
                    listPosts($page);
                }
            }
            else{
                listPosts($page);
            }
        }
        elseif ($_GET['action'] == 'about')
        {
            about();

        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post($_GET['id']);
            }
            else {
                throw new Exception('<h1>Uhhh ...</h1><h2>La page que vous cherchez n\'existe pas</h2>');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['comment'])) {
                    addComment($_GET['id'], $_COOKIE['username'], $_POST['comment']);
                }
                else {
                    throw new Exception('<h1>Ah !</h1><h2>Tous les champs ne sont pas remplis !</h2>');
                }
            }
            else {
                throw new Exception('<h1>Uhhh ...</h1><h2>La page que vous cherchez n\'existe pas</h2>');
            }
        }
        elseif ($_GET['action'] == 'contact'){
            contact();
        }
        elseif($_GET['action'] == 'newPost')
        {
            if(!empty($_POST['title']) && !empty($_POST['content']))
            {
                newPost($_COOKIE['username'], $_POST['title'], $_POST['content']);
            }
            else{
                throw new Exception('<h1>Uhhh ...</h1><h2>Tous les champs doivent êtres remplis !</h2>');
            }
        }
        elseif($_GET['action'] == 'profil' && isset($_GET['userID']) && $_GET['userID'] > 0)
        {
            getUserInfos($_GET['userID']);
        }
        else {
            throw new Exception('<h1>Uhhh ...</h1><h2>La page que vous cherchez n\'existe pas</h2>');
        }
    }
    else {
        listPosts($page);
        sliderPosts();
    }
}
catch(Exception $e) {
    require('view/error.php');
}

<?php
session_start();
require('controler/controler.php');

try {

    if(!isset($_SESSION['username']))
    {
        
        if(isset($_GET['action']))
        {            
            if($_GET['action'] == 'login' && !empty($_POST['username']) && !empty($_POST['password']))
            {
                checkUser($_POST['username'], $_POST['password']);
            }
            else{
                echo '<p class="text-center text-danger mt-5">All the fields are required<p>';
            }
        }
        require('view/pages/login.php');
    }
    else
    {
        if (isset($_GET['page'])) {        
            if($_GET['page'] == 'posts')
            {
                postsPage();
            }  
            elseif($_GET['page'] == 'users')
            {
                usersPage();
            } 
            elseif($_GET['page'] == 'comments')
            {
                commentsPage();
            }
            else {
                throw new Exception("The page you're looking for does not exist !");
            }
        }
        elseif(isset($_GET['action']))
        {
            if($_GET['action'] == 'disconnect')
            {
                disconnect();
            }

            // BLOG POSTS
            elseif($_GET['action'] == 'addPost')
            {
                if(!empty($_POST['title']) && !empty($_POST['content']))
                {
                    newPost($_POST['title'], $_POST['content']);
                }
                else
                {
                    throw new Exception('All the fields are required !');
                }
            }
            elseif($_GET['action'] == 'delPost' && isset($_GET['postId']) && $_GET['postId'] > 0)
            {
                delPost($_GET['postId']);
            }
            elseif($_GET['action'] == 'editPost' && isset($_GET['postId']) && $_GET['postId'] > 0)
            {
                post($_GET['postId']);
            }
            elseif($_GET['action'] == 'modifPost' && isset($_GET['postId']) && $_GET['postId'] > 0 && !empty($_POST['content']))
            {
                editPost($_GET['postId'], $_POST['content']);
            }
            elseif($_GET['action'] == 'seePost' && isset($_GET['postId']) && $_GET['postId'] > 0)
            {
                seePost($_GET['postId']);
            }
            
            // BLOG COMMENTS
            elseif($_GET['action'] == 'addComment' && isset($_GET['postId']) && $_GET['postId'] > 0)
            {
                if(!empty($_POST['comment']))
                {
                    addComment($_GET['postId'], $_SESSION['username'] ,$_POST['comment']);
                }
                else{
                    throw new Exception('All the fields are required !');
                }
            }

            // BLOG USERS
            elseif($_GET['action'] == 'addUser')
            {
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
                    throw new Exception('All the fields are required !');
                }
            }
            elseif($_GET['action'] == 'delUser' && isset($_GET['userId']) && $_GET['userId'] > 0)
            {
                delUser($_GET['userId']);
            }
            elseif($_GET['action'] == 'seeUser' && isset($_GET['userId']) && $_GET['userId'] > 0)
            {
                userPage($_GET['userId']);
            }
            elseif($_GET['action'] == 'editUser' && isset($_GET['userId']) && $_GET['userId'] > 0)
            {
                if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['username']) && !empty($_POST['email']))
                {
                    $firstname = htmlspecialchars($_POST['firstname']);
                    $lastname = htmlspecialchars($_POST['lastname']);
                    $username = htmlspecialchars($_POST['username']);
                    $email = htmlspecialchars($_POST['email']);
                    
                    editUser($firstname, $lastname, $username, $email, $_GET['userId']);
                }
                else
                {
                   throw new Exception('All the fields are required !'); 
                }
            }
    
            else {
                throw new Exception("The page you're looking for does not exist !");
            }
        }
    
        else {
            dashboard();
        }
    }
    

}
catch(Exception $e) {
    require('view/errorView.php');
}

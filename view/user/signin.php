<?php if(!isset($_SESSION['id']) && !isset($_COOKIE['id']))
{
?>

<?php $title = 'Inscription' ?>

<?php ob_start(); ?>

<div class="container-fluid" id="signinPage">
    
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-10 col-md-4">

                <div class="card my-5">

                    <div class="card-body">

                        <h3 class="text-dark mb-2 text-center">Inscription</h3>
                        <hr>

                        <form action="index.php?action=signinCheck" method="post" autocomplete="off">
                                                        
                            <div class="form-group my-4">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control rounded-0" name="firstname" id="firstname">
                            </div>
                                                    
                            <div class="form-group my-4">
                                <label for="lastname">Nom</label>
                                <input type="text" class="form-control rounded-0" name="lastname" id="lastname">
                            </div>
                                                        
                            <div class="form-group my-4">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control rounded-0" name="username" id="username">
                            </div>
                                                        
                            <div class="form-group my-4">
                                <label for="email">Adresse e-mail</label>
                                <input type="email" class="form-control rounded-0" name="email" id="email">
                            </div>

                            <div class="form-group my-4">
                                <label for="password">Mot de passe</label>
                                <input name="password" id="password" class="form-control rounded-0" type="password">
                            </div>
                            
                            <div class="my-4">
                                <input class="btn btn-block btn-dark rounded-0" type="submit" name="signin" value="S'inscrire">
                            </div>
                        </form>
                        
                        <div class="text-center">
                            <p>Déjà un compte ? <a href="index.php?action=login">Connectez-vous</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/main.php'); ?>

<?php
}
else{
    header('Location: index.php');
}
?>
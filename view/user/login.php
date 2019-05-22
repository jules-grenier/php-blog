<?php if(!isset($_SESSION['id']) && !isset($_COOKIE['id']))
{
?>
<?php $title = 'Connexion' ?>

<?php ob_start(); ?>

<div class="container-fluid" id="loginPage">
    
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-10 col-md-4">

                <div class="card my-5">

                    <div class="card-body">

                        <h3 class="text-dark mb-2 text-center">Connexion</h3>
                        <hr>

                        <form action="index.php?action=loginCheck" method="post" autocomplete="on">
                                                    
                            <div class="form-group my-4">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="text" class="form-control rounded-0" name="username" id="username">
                            </div>

                            <div class="form-group my-4">
                                <label for="password">Mot de passe</label>
                                <input name="password" id="password" class="form-control rounded-0" type="password">
                            </div>

                            <div class="my-4">
                                <label><input type="checkbox" name="rememberme" value="1"> Se souvenir de moi</label>
                            </div>
                            
                            <div class="my-4">
                                <input class="btn btn-block btn-dark rounded-0" type="submit" name="login" value="Se connecter">
                            </div>
                        </form>
                        
                        <div class="text-center">
                            <p>Pas encore de compte ? <a href="index.php?action=signin">Inscrivez-vous</a></p>
                            <p>Ou <a href="#">mot de passe oublié</a> ?</p>
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
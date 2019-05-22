<?php $title = 'Mon profil' ?>

<?php ob_start(); ?>

<div class="container my-5" id="profil">
	<div class="row">

        <div class="col-lg-5">
            <div class="profil-section">
                <div class="row p-0">
                    <div class="col">
                        <h4>Mon profil</h4>
                    </div>
                    
                    <div class="col text-right">
                        <a href="index.php?editProfil" class="btn btn-red">Modifier</a>
                    </div>
                                        
                </div>
                <hr>
                <p>Vous êtes inscrit depuis le <?= $user['signin_date_dmy']; ?></p>
                
                <p><span class="text-red">Prénom : </span><?= $user['firstname']; ?></p>
                <p><span class="text-red">Nom : </span><?= $user['lastname']; ?></p>
                <p><span class="text-red">Pseudo : </span><?= $user['username']; ?></p>
                <p><span class="text-red">Adresse e-mail : </span><?= $user['email']; ?></p>
                
            </div>
        </div>
        
        <div class="col-lg-5 ml-auto">
            <div class="profil-section">
                <h4>Mes statistiques</h4>
                <hr>
                
                <p><span class="text-red">Cette semaine : </span>n commentaires</p>
                <p><span class="text-red">Total : </span>n commentaires</p>
            </div>
        </div>
        
	</div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template/main.php'); ?>
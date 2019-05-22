<?php $title = "Uhhh ..." ?>

<?php ob_start(); ?>
<div class="container-fluid bg-light" id="errorPage">
	    
    <div class="row align-items-center">

	        <div class="col-12 text-center">
	       		<?= $e->getMessage(); ?>
	        </div>

	        <div class="col-12 text-center">
	        	<a href="index.php" class="btn btn-lg btn-outline-light"><i class="fas fa-home"></i> Accueil</a>
	        </div>

    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/template.php'); ?>
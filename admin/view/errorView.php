<?php $title = "Error"; ?>
<?php ob_start(); ?>

<div class="row m-0 p-5">
    
    <h2 class="text-center text-danger"><?= $e->getMessage(); ?></h2>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
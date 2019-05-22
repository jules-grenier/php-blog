<?php $title = "Dashboard"; ?>
<?php ob_start(); ?>

<div class="container p-5">

    <h2 class="mb-5 pb-2 border-bottom">Overview</h2>

    <div class="row stats">
        <div class="col p-0 text-center mr-5">
            <a href="index.php?page=posts" class="btn btn-block btn-danger rounded-0"><i class="fas fa-clipboard"></i>&emsp;<?= $posts->rowCount();?> posts</a>
        </div>

        <div class="col p-0 text-center mr-5">
            <a href="index.php?page=comments" class="btn btn-block btn-primary rounded-0"><i class="fas fa-comments"></i>&emsp;<?= $comments->rowCount();?> comments</a>
        </div>

        <div class="col p-0 text-center">
            <a href="index.php?page=users" class="btn btn-block btn-success rounded-0"><i class="fas fa-users"></i>&emsp;<?= $users->rowCount();?> users</a>
        </div>
    </div>
    
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
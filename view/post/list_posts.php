<?php
$title = 'Blog';
$main_title = 'Jules Grenier';
$main_subtitle = 'Développeur web full stack';
$background = 'background-image: url(public/img/header.png)';
?>

<?php ob_start(); ?>

<?php require("view/component/header.php"); ?>

<div class="container">
    <div class="row">

        <div class="col-lg-7">
            <div class="my-5">
                
                <?php
                while ($data = $posts->fetch())
                {
                ?>
                <article class="post">
                    <div class="post-header">
                        <img src="public/img/post_img.png" alt="Post Image">
                    </div>

                    <div class="post-body">
                        <a href="index.php?action=post&id=<?= $data['id']; ?>" class="d-block mb-4">
                            <h2><?= htmlspecialchars($data['title']) ?></h2>
                        </a>
                        <?= nl2br(htmlspecialchars_decode(stripslashes($data['content']))); ?>
                        <span class="d-block mt-4">Posté le <?= $data['creation_date_mdy']; ?></span>
                    </div>

                    <div class="post-footer">
                        <div class="row">
                            <div class="col-12"><a href="index.php?action=post&id=<?= $data['id']; ?>">Lire la suite</a></div>
                            <div class="col-lg"><a href="#"><i class="far fa-heart"></i> n Likes</a></div>
                            <div class="col-lg"><a href="index.php?action=post&id=<?= $data['id']; ?>"><i class="far fa-comments"></i> n Commentaires</a></div>
                            <div class="col-lg"><a href="#"><i class="fas fa-share-alt"></i> Partager</a></div>
                        </div>
                    </div>
                </article>
                <?php
                }
                $posts->closeCursor();
                ?>

                
            </div>

            <div class="my-5 blog-pagination">
                <div class="row">
                    <div class="col ml-0">
                        <a class="page-btn left-btn" href="#"><i class="fas fa-arrow-left"></i> Moins récents</a>
                    </div>
                    <div class="col mr-0 text-right">
                        <a class="page-btn right-btn" href="#">Plus récents <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <?php require("view/component/sidebar.php"); ?>
        
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/main.php'); ?>
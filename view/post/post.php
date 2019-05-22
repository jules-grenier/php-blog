<?php
$title = htmlspecialchars($post['title']);
$heading = htmlspecialchars($post['title']);
$subheading = 'Sous-titre';
$date = $post['creation_date_mdy'];
$background = 'background-image: url(public/img/post_img.png)';
?>

<?php ob_start(); ?>

<?php require("view/component/post_page_header.php"); ?>


<div class="container">

    <div class="row">

        <div class="col-lg-7">
            
            <article class="mt-5">
                <div class="post-body p-0">
                    <?= nl2br(htmlspecialchars_decode(stripslashes($post['content']))); ?>
                    <span class="d-block my-4">Posté le <?= $post['creation_date_mdy']; ?></span>
                </div>
                
                <div class="post-footer">
                    <div class="row">
                        <div class="col"><a href="#"><i class="far fa-heart"></i> n Likes</a></div>
                        <div class="col"><a href="#"><i class="fas fa-share-alt"></i> Partager</a></div>
                    </div>
                </div>
            </article>
            
            <div class="comments my-5"> 
                <h4 class="text-dark">Ajouter un commentaire</h4>
                <?php
                    if(!isset($_COOKIE['id']))
                    {
                ?>
                <a class="btn my-3" href="index.php?action=login">Se connecter</a>
                <?php
                    }
                    else
                    {
                ?>
                <form class="mt-3" action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post" autocomplete="off">
                    <div class="form-group mb-4">
                        <textarea required class="form-control" id="comment" name="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-red">Envoyer</button>
                </form>

                <?php
                    }
                ?>

                <div class="mt-5">
                    <?php
                    while ($comment = $comments->fetch())
                    {
                    ?>
                        <div class="media p-3 mb-4">
                            <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="avatar" class="mr-4 rounded-circle align-self-start" style="width:60px;">
                            <div class="media-body">
                                <h4><?= htmlspecialchars($comment['author']) ?></h4>
                                <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                                <small class="text-muted"><i class="far fa-clock"></i> <?= $comment['comment_date_mdy'] ?></small>
                            </div>
                        </div>
                    <?php
                    }
                    ?>                   

                </div>
            </div>
            
        </div>
        
        <?php require("view/component/sidebar.php"); ?>
        
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template/main.php'); ?>
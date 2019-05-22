<?php $title = $post['title']; ?>
<?php ob_start(); ?>

<div class="container p-5">
    
    <h2 class="mb-5 pb-2 border-bottom"><?= $post['title']; ?></h2>

    <div class="row m-0">
        <div class="col-lg-7 p-0 mb-5 post">
            <div class="post-header">
                <img src="public/img/post_img.png" alt="post image">
            </div>

            <form action="index.php?action=modifPost&amp;postId=<?= $post['id']; ?>" method="post">

                <div>                    
                    <textarea class="form-control rounded-0 postContent" name="content" id="content" rows="10"><?= nl2br(htmlspecialchars_decode(stripslashes($post['content']))); ?></textarea>
                </div>
                
                

                <input type="submit" value="Edit" class="btn btn-success rounded-0 mb-2">

            </form>

            <div class="row post-footer">
                <div class="col text-secondary text-left">
                    <i class="far fa-clock"></i> <?= $post['creation_date_dmy'] ?>
                </div>
                <div class="col text-secondary text-right">
                    <i class="fas fa-comment"></i> <?= $comments->rowCount(); ?> Comments
                </div>
            </div>
        </div>


        <div class="col-lg-7 comments my-5 p-0"> 
            <h4 class="text-dark">Comments</h4>
            
            <form class="mt-3" action="index.php?action=addComment&amp;postId=<?= $post['id'] ?>" method="post" autocomplete="off">
                <div class="form-group mb-4">
                    <textarea class="form-control rounded-0" id="comment" name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-success rounded-0">Add</button>
            </form>

            <div class="mt-5">
                <?php
                while ($comment = $comments->fetch())
                {
                ?>
                    <div class="media p-3 mb-4">
                        <img src="https://www.atomix.com.au/media/2015/06/atomix_user31.png" alt="avatar" class="mr-4 rounded-circle align-self-start" style="width:60px;">
                        <div class="media-body">
                            <h4><?= htmlspecialchars($comment['author']) ?></h4>
                            
                            <form class="mt-3" action="" method="post" autocomplete="off">
                                <div class="form-group mb-2">
                                    <textarea class="form-control rounded-0" id="comment" name="comment"><?= nl2br(htmlspecialchars($comment['comment'])) ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success rounded-0 mb-2">Edit</button>
                            </form>
                            
                            <small class="text-muted"><i class="far fa-clock"></i> <?= $comment['comment_date_dmy'] ?></small>
                        </div>
                    </div>
                <?php
                }
                ?>                   

            </div>
        </div>

    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
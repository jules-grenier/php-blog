<?php $title = "Comments"; ?>

<?php ob_start(); ?>

    
<div class="container p-5">
    
    <h2 class="mb-5 pb-2 border-bottom">Comments list</h2>
    
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Post ID</th>
                <th scope="col">Author</th>
                <th scope="col">Comment</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>

        <tr>
            <td scope="row"><?= $comment['id']; ?></td>
            <td scope="row"><?= $comment['post_id']; ?></td>
            <td><?= $comment['author']; ?></td>
            <td><?= $comment['comment']; ?></td>
            <td><?= $comment['comment_date_dmy']; ?></td>
            <td>
                <a class="btn btn-sm btn-success rounded-0" href="#"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-sm btn-danger rounded-0" href="#"><i class="fas fa-trash"></i></a>
            </td>
        </tr>

        <?php
        }
        ?>
        </tbody>
    </table>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
<?php $title = "Posts"; ?>
<?php ob_start(); ?>

<div class="container p-5">
    
    <h2 class="mb-5 pb-2 border-bottom">Posts list</h2>
    
    <button class="btn btn-primary rounded-0 mb-4" data-toggle="collapse" data-target="#postForm"><i class="fas fa-plus"></i> Add a post</button>

    <div class="collapse w-75" id="postForm">
        <form action="index.php?action=addPost" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input required type="text" name="title" id="title" class="form-control rounded-0">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea  type="text" name="content" id="content" class="form-control rounded-0 postContent"></textarea>
            </div>

            <input type="submit" value="Add" class="btn btn-success rounded-0 mb-5">

            <button type="reset" class="btn btn-danger rounded-0 mb-5" data-toggle="collapse" data-target="#postForm">Cancel</button>
            
        </form>
    </div>

    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        while ($data = $posts->fetch())
        {
        ?>

        <tr>
            <td scope="row"><?= $data['id']; ?></td>
            <td><?= $data['title']; ?></td>
            <td><?= $data['creation_date_dmy']; ?></td>
            <td>
                <a class="btn btn-sm btn-success rounded-0" href="index.php?action=editPost&amp;postId=<?= $data['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-sm btn-danger rounded-0" href="index.php?action=delPost&amp;postId=<?= $data['id']; ?>"><i class="fas fa-trash"></i></a>
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
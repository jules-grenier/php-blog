<?php $title = "Users"; ?>
<?php ob_start(); ?>

    
<div class="container p-5">
    
    <h2 class="mb-5 pb-2 border-bottom">Users list</h2>

    <button class="btn btn-primary rounded-0 mb-4" data-toggle="collapse" data-target="#userForm"><i class="fas fa-plus"></i> Add a user</button>

    <div class="collapse w-50" id="userForm">
        <form action="index.php?action=addUser" method="post">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input required type="text" class="form-control rounded-0" name="firstname" id="firstname">
            </div>
                                    
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input required type="text" class="form-control rounded-0" name="lastname" id="lastname">
            </div>
                                        
            <div class="form-group">
                <label for="username">Username</label>
                <input required type="text" class="form-control rounded-0" name="username" id="username">
            </div>
                                        
            <div class="form-group">
                <label for="email">Email</label>
                <input required type="email" class="form-control rounded-0" name="email" id="email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input required name="password" id="password" class="form-control rounded-0" type="password">
            </div>

            <input type="submit" value="Add" class="btn btn-success rounded-0 mb-5">

            <button type="reset" class="btn btn-danger rounded-0 mb-5" data-toggle="collapse" data-target="#userForm">Cancel</button>
        </form>
    </div>
    
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

        <?php
        while ($user = $users->fetch())
        {
        ?>

        <tr>
            <td scope="row"><?= $user['id']; ?></td>
            <td><?= $user['firstname']; ?></td>
            <td><?= $user['lastname']; ?></td>
            <td><?= $user['username']; ?></td>
            <td><?= $user['email']; ?></td>
            <td><?= $user['signin_date_dmy']; ?></td>
            <td>
                <a class="btn btn-sm btn-success rounded-0" href="index.php?action=seeUser&amp;userId=<?= $user['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
                <a class="btn btn-sm btn-danger rounded-0" href="index.php?action=delUser&amp;userId=<?= $user['id']; ?>"><i class="fas fa-trash"></i></a>
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
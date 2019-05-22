<?php $title = $user['username']; ?>
<?php ob_start(); ?>

<div class="container p-5">
    
    <h2 class="mb-5 pb-2 border-bottom"><?= $user['username']; ?>'s profile</h2>
    
    <form action="index.php?action=editUser&amp;userId=<?= $user['id']; ?>" method="post" class="w-50">
        <div class="form-group">
            <label class="text-primary"  for="firstname">Firstname</label>
            <input required type="text" class="form-control rounded-0" name="firstname" id="firstname" value="<?= $user['firstname']; ?>">
        </div>

        <div class="form-group">
            <label class="text-primary"  for="lastname">Lastname</label>
            <input  type="text" class="form-control rounded-0" name="lastname" id="lastname" value="<?= $user['lastname']; ?>">
        </div>

        <div class="form-group">
            <label class="text-primary"  for="username">Username</label>
            <input  type="text" class="form-control rounded-0" name="username" id="username" value="<?= $user['username']; ?>">
        </div>

        <div class="form-group">
            <label class="text-primary"  for="email">Email</label>
            <input  type="email" class="form-control rounded-0" name="email" id="email" value="<?= $user['email']; ?>">
        </div>
        
        <div class="form-group">
            <label class="text-primary"  for="date">Signed in on</label>
            <input readonly  type="text" class="form-control rounded-0" name="date" id="date" value="<?= $user['signin_date_dmy']; ?>">
        </div>
        
        <input type="submit" value="Edit" class="btn btn-success rounded-0 mb-5">

    </form>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('view/template.php'); ?>
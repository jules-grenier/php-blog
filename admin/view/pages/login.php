<!DOCTYPE html>
<html class="h-100">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<link href="public/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Marcellus" rel="stylesheet">
	<link rel="icon" href="public/img/admin_ico.ico">
</head>
<body class="h-100">

	<div class="container-fluid h-100">

        <div class="row h-100 align-items-center">
            <div class="col-4 p-5 mx-auto bg-light">

                <div class="w-25 mb-5 mx-auto"><img src="public/img/admin.png" alt="shield"></div>

                <form action="index.php?action=login" method="post" class="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control rounded-0">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control rounded-0">
                    </div>

                    <input type="submit" value="Login" class="btn btn-dark rounded-0">
                </form>

            </div>
        </div>

	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
</body>
</html>
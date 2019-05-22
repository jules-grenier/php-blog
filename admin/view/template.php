<!DOCTYPE html>
<html class="h-100">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $title; ?> - Admin Panel</title>
	<link href="public/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="public/css/bootstrap_4.1.1/bootstrap.min.css" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Marcellus" rel="stylesheet">
	<link rel="icon" href="public/img/admin_ico.ico">
    
</head>
<body class="h-100">

	<div class="container-fluid h-100">

		<div class="row pageContent">
			<div class="col-3 bg-dark p-0 sidenav">
				<nav class="nav sideNav flex-column">
					<h2 class="mb-0 p-3 text-center border-bottom mb-5"><a class="text-light title" href="index.php">Admin Panel</a></h2>
					<a class="p-3 text-light" href="index.php"><i class="fas fa-home"></i>&emsp; Dashboard</a>
                    <div class="border-top border-secondary mx-3 my-4"></div>
					<a class="p-3 text-light active" href="index.php?page=posts"><i class="fas fa-clipboard"></i>&emsp; Posts</a>
					<a class="p-3 text-light" href="index.php?page=comments"><i class="fas fa-comments"></i>&emsp; Comments</a>
					<a class="p-3 text-light" href="index.php?page=users"><i class="fas fa-users"></i>&emsp; Users</a>
                    <div class="border-top border-secondary mx-3 my-4"></div>
					<a class="p-3 text-light" href="/blog_v2" target="_blank"><i class="fas fa-eye"></i>&emsp; Live preview</a>
				</nav>
			</div>

			<div class="col-9 ml-auto p-0 bg-light">
				<nav class="navbar navbar-expand-sm navbar-light bg-white border-bottom py-0">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="myNav">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle p-4" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= $_SESSION['username']; ?></a>
								<div class="dropdown-menu rounded-0" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="index.php?action=disconnect"><i class="fas fa-sign-out-alt"></i> Log out</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>



				<?= $content; ?>




			</div>
		</div>
	</div>



	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="public/js/bootstrap_4.1.1/bootstrap.bundle.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
	<script src="public/js/admin.js"></script>
    
    <script src="vendor/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#content',
            height: 500,
            theme: 'modern',
            plugins: [
              'advlist autolink lists link image charmap print preview hr anchor pagebreak',
              'searchreplace wordcount visualblocks visualchars code fullscreen',
              'insertdatetime media nonbreaking save table contextmenu directionality',
              'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
    </script>
</body>
</html>
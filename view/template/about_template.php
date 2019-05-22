<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="public/img/ico.ico">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap_4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Raleway">
    
    <!-- Public CSS -->
    <link rel="stylesheet" href="public/css/general.css">
    <link rel="stylesheet" href="public/css/navbar.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/sidebar.css">
    <link rel="stylesheet" href="public/css/footer.css">

    <title><?= $title; ?> - JG</title>
</head>
<body>
    
    <?php require("view/component/navbar.php"); ?>
        
    <?= $content; ?>

    <?php require("view/component/footer.php"); ?>
    
    

    <!-- Vendor JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="vendor/bootstrap_4.1.1/js/bootstrap.bundle.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
    
    <!-- Public JS -->
    <script src="public/js/script.js"></script>
</body>
</html>
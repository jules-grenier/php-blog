<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
        <a class="navbar-brand py-lg-2" href="index.php">Jules Grenier</a>
            <button class="navbar-toggler navbar-toggler-right rounded-0" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu 
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item py-lg-2">
                    <a class="nav-link" href="index.php">Blog</a>
                </li>
                
                <li class="nav-item py-lg-2">
                    <a class="nav-link" href="index.php?action=about">A propos</a>
                </li>
                
                <li class="nav-item py-lg-2">
                    <a class="nav-link" href="index.php?action=contact">Contact</a>
                </li>
                
                <?php
                if(isset($_COOKIE['id']))
                {
                ?>
                <li class="nav-item py-lg-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $_COOKIE['username']; ?>
                    </a>
                    <div class="dropdown-menu rounded-0 mt-2" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?action=profil&amp;userID=<?= $_COOKIE['id']; ?>">Profil</a>
                        <a class="dropdown-item" href="index.php?action=disconnect">Se déconnecter</a>
                    </div>
                </li>
                <?php
                }
                else
                {
                ?>     
                <li class="nav-item py-lg-2">
                    <a class="nav-link" href="index.php?action=login">Se connecter</a>
                </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
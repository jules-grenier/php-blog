<footer class="container-fluid">
    <div class="container">

        <div class="row">
            <div class="col-12 mx-auto">

                <div class="social mb-4">
                    <a class="twitter" href="https://twitter.com/JulesGrenier_" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="linkedin" href="https://www.linkedin.com/in/jules-grenier/" target="_blank">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="github" href="https://github.com/JulesGrenier" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="codepen" href="https://codepen.io/Jules_Grenier" target="_blank">
                        <i class="fab fa-codepen"></i>
                    </a>
                </div>
                
                <div class="footer-nav mb-4">
                    <a href="index.php">Blog</a>
                    <a href="index.php?action=about">A propos</a>
                    <a href="index.php?action=contact">Contact</a>
                    <?php
                    if(isset($_COOKIE['id']))
                    {
                    ?>
                    <a href="index.php?action=profil&amp;userID=<?= $_COOKIE['id']; ?>">Profil</a>
                    <a href="index.php?action=disconnect">Déconnexion</a>
                    <?php
                    }
                    else
                    {
                    ?>
                    <a href="index.php?action=login">Connexion</a>
                    <a href="index.php?action=signin">Inscription</a>
                    <?php
                    }
                    ?>
                        
                </div>

                <p><small>Copyright © 2018 Jules Grenier</small></p>
            </div>

        </div>
    </div>
</footer>
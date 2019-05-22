<?php $title = 'A propos' ?>

<?php ob_start(); ?>

<div class="container" id="about">
    <div class="my-5">
        <div class="row">

            <div class="col-12">
                <div id="apropos" class="block-content">
                    <div class="row">
                        <div class="col-md-2 col-sm-12 picture">
                            <img src="public/img/author.png" class="rounded-circle" alt="Photo Jules">
                        </div>
                        <div class="col-md-9 col-sm-12 offset-md-1">
                            <h2>A Propos</h2>
                            <p>Tout a commencé à mes douze ans, quand j'ai ouvert les scripts du jeu Minecraft. J'ai modifié quelques lignes et observé les résultats, foireux, vu que je ne connaissais rien à la programmation, mais ça m'amusait quand même.
                            <br>Par la suite, j'ai voulu avoir un site web présentant mon serveur multijoueur. J'ai donc créé un site à l'aide d'une plateforme en ligne, mais au bout de quelque temps je ne l'aimais pas. Il ne m'appartenait pas, je n'avais fait que déplacer des éléments et éditer du texte. J'ai donc décidé d'apprendre les langages HTML et CSS sur siteduzero.com, connu aujourd'hui sous le nom d'OpenClassrooms, et de refaire ce site. Cette fois, il m'appartenait.
                            </p>
                            <br>
                            <p>Puis au lycée, en Terminale, j'ai découvert la vraie programmation orientée objet en participant à plusieurs petits projets en Python et au développement d'un jeu vidéo en C++. J'ai également développé un site présentant ce projet de groupe.</p>
                            <br>
                            <p>Aujourd'hui, je passe la majeure partie de mon temps à faire du développement web.</p>
                        </div>
                    </div>
                </div>
            </div>    

            <div class="col-lg-7">

                <div id="experience" class="block-content">
                    <h3>Expériences</h3>
                    <div class="exp">
                        <h4>Professionnelle</h4>
                        <div class="box">
                            <h4>Poste</h4>
                            <h6>Boîte&emsp;&#8226;&emsp;Date</h6>
                            <p>Description</p>
                        </div>
                    </div>

                    <div class="exp">
                        <h4>Extra-Professionnelle</h4>
                        <div class="box">
                            <h4>Développement de jeu vidéo</h4>
                            <h6>2017</h6>
                            <p>Création d'un jeu vidéo avec Unity 3D</p>
                        </div>

                        <div class="box">
                            <h4>Développement de jeu vidéo</h4>
                            <h6>2017</h6>
                            <p>Participation au développement d'un jeu vidéo en C++, dans le cadre d'une épreuve du BAC</p>
                        </div>

                        <div class="box">
                            <h4>Développement Web</h4>
                            <h6>2017</h6>
                            <p>Création d'un site Web statique</p>
                        </div>

                        <div class="box">
                            <h4>Développement Web</h4>
                            <h6>2017</h6>
                            <p>Création d'un site Web dynamique</p>
                        </div>
                    </div>
                </div>

                <div id="formations" class="block-content">
                    <h3>Formations</h3>
                    <div class="box">
                        <h4>BAC S spé ISN</h4>
                        <h6>LPO Hyacinthe BASTARAUD&emsp;&#8226;&emsp;2015-2017</h6>
                    </div>

                    <div class="box">
                        <h4>Informatique</h4>
                        <h6>OpenClassrooms&emsp;&#8226;&emsp;2016 - aujourd'hui</h6>
                        <p>Développement Web et de jeux vidéo, réseau</p>
                    </div>
                </div>

                <div id="diplomes" class="block-content">
                    <h3>Diplômes</h3>
                    <div class="box">
                        <h4>BAC S spé ISN</h4>
                        <h6>LPO Hyacinthe BASTARAUD&emsp;&#8226;&emsp;2017</h6>
                        <p>Mention passable</p>
                    </div>

                    <div class="box">
                        <h4>Certificats</h4>
                        <h6>OpenClassrooms&emsp;&#8226;&emsp;2016 - 2017</h6>
                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="0">Développer un site Web en HTML5 et CSS3</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="1">Protéger ses communications sur Internet</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="2">Protéger ses données sur son ordinateur</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="3">Réaliser un jeu vidéo avec Unity 3D</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="4">Comprendre le Web</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="5">Échanger par e-mail en toute sécurité</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="6">Concevez votre site Web avec PHP et MySQL</span></a><br>

                        <a href="#" data-toggle="modal" data-target="#myModal"><span data-target="#myCarousel" data-slide-to="7">Apprenez à coder avec JavaScript</span></a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                              <div class="modal-header">
                                <h4 class="modal-title">Certificat Openclassroom</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                                <div class="modal-body">					        

                                    <div id="myCarousel" class="carousel slide" data-interval="false">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active"><img src="public/img/certifs/html.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/communications.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/donnees.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/unity.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/web.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/emailsec.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/php.png"></div>
                                            <div class="carousel-item"> <img src="public/img/certifs/js.png"></div>

                                            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                                                <i class="fas fa-chevron-left"></i>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 ml-lg-auto">

                <div id="competences" class="block-content">
                    <h3>Compétences</h3>
                    <div class="skills">
                        <h4>Langages Web</h4>

                        <div class="skill-item">
                            <h4>HTML/CSS</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:85%"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <h4>JavaScript</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:60%"></div>
                            </div>
                        </div>


                        <div class="skill-item">
                            <h4>PHP/MySQL</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:55%"></div>
                            </div>
                        </div>

                    </div>

                    <div class="skills">
                        <h4>Frameworks</h4>

                        <div class="skill-item">
                            <h4>Bootstrap 4</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:90%"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <h4>React</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:5%"></div>
                            </div>
                        </div>


                        <div class="skill-item">
                            <h4>Symfony 3</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:5%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skills">
                        <h4>Langues</h4>

                        <div class="skill-item">
                            <h4>Français</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:100%"></div>
                            </div>
                        </div>


                        <div class="skill-item">
                            <h4>Anglais</h4>
                            <div class="progress">
                            <div class="progress-bar" style="width:55%"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="interets" class="block-content">
                    <h3>Centres d'intérêts</h3>

                </div>

            </div>

            <div class="col-12">
                <a class="btn btn-red" href="cv_jules_grenier.pdf" target="_blank">Version PDF</a>
            </div>

        </div>
    </div>
    
</div>




<?php $content = ob_get_clean(); ?>

<?php require('view/template/about_template.php'); ?>
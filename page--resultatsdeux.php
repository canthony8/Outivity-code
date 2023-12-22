<?php /* Template Name: PageResultatsDeux */ get_header();?>

<h2 class = "titreresult">Bravo, vous avez terminé le quizz !<br>Voici les activités suggérées
</h2>

<br>

<div class="container">

<div class="row">
    <div class="col-sm-6">
        <div class="card-deux">
            <div class="card-body">
                <h5 class="card-title">
                    <h3>Fitness</h3>
                    <p class="card-text">15 février 13h - 78 Avenue Louise, 1000 Bruxelles<br>
                        <p>Organisateur : Julie Clos</p>
                        <br>
                        Adresse e-mail: julien.cl@gmail.com
                        <br>
                        Numéro de téléphone: 0456777210
                        <br>
                        <p>
                            Venez nous rejoindre pour une séance de fitness à couper le souffle !
                            <br>
                            Je vous attends !
                            <br>
                            <div a="a" href="<?php the_permalink(); ?>" class="btn btn-danger-cinq">Participer</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <?php get_footer();?>
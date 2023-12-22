<?php /* Template Name: PageResultatsQuatre*/ get_header();?>

<h2 class = "titreresult">Bravo, vous avez terminé le quizz !<br>Voici les activités suggérées
</h2>

<br>

<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <div class="card-deux">
                <div class="card-body">
                    <h5 class="card-title">
                        <h3>Jeux de sociétés</h3>
                        <p class="card-text">20 février 16h - 17 Rue du Roi, 1000 Bruxelles<br>
                            <p>Organisateur : Roland Bocho</p><br>
                            Adresse e-mail: roland.bocho@gmail.com
                            <br>
                            Numéro de téléphone: 0420105434
                            <br>
                            <p>
                                Organisateur passionné de jeux depuis enfant, je vous invite à me rejoindre pour
                                quelques parties de Uno, Monopoly et bien plus encore ! Mon objectif est que
                                vous ayez de l'amusement et du bonheur en jouant au jeux de sociétés.
                                <br>
                                <div a="a" href="<?php the_permalink(); ?>" class="btn btn-danger-cinq">Participer</a>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="col-sm-6">
                        <div class="card-deux">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <h3>Dessin</h3>
                                    <p class="card-text">17 février 13h - 17 Blvd St-Michel, 1040 Etterbeek<br>
                                        <p>78 Rue Defalquz, 1060 Saint - Gilles</p><br>
                                        <p>Organisateur : James St Patrick</p><br>
                                        Adresse e-mail : stpatrick@outlook.be
                                        <br>
                                        Numéro de téléphone : 0477197304
                                        <br>
                                        <p>
                                            Organisateur passionné d’ateliers artistiques axés sur le dessin et la peinture.
                                            Mon objectif est de créer un espace bienveillant où libérer votre créativité,
                                            explorer de nouvelles techniques et trouver du bonheur dans chaque coup de
                                            pinceau.
                                        </p>
                                        <br>
                                        <div a="a" href="<?php the_permalink(); ?>" class="btn btn-danger-cinq">Participer</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                <?php get_footer();?>
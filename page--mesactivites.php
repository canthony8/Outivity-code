<div class="fonda">
    <?php
/* Template Name: PageMesActivites */
get_header();?>

<a class="btn btn-primary" href="<?php echo home_url() . '/creer-une-activite/'; ?>">Créer une activité</a>

    <div class="container">

        <h1 class="titremesactivite">Mes activités</h1>
        <br>

        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <h3>Fitness</h3>
                            <p class="card-text"> 14 février - 11h<br>
                                <p>78 Rue Defalquz, 1060 Saint - Gilles</p>
                                <div a="a" href="<?php the_permalink(); ?>" class="btn btn-info">Supprimer</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <h1 class="titremesactivite">Activités prévus</h1>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <h3>Yoga</h3>
                                <p class="card-text"> 28 février - 12h<br>
                                    <p>8 Rue de St.Jean, 1000 Bruxelles</p>
                                    <div a="a" href="<?php the_permalink(); ?>" class="btn btn-info">Retirer</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
</div>
            <?php get_footer();?>
        </div>
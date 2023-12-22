<?php /* Template Name: PageAccueil */  get_header();?>

<div class="container">
    <div class="row">

        <div class="col-6">

            <h1 class="premiertitre">
                À la recherche d’aventure
                <br>
                et de bien-être ?
            </h1>

            <p class="premiertexte">Rejoignez Outivity pour une aventure dynamique : sport, loisirs,<br>
                détente. Un écosystème accueillant vous attend pour élargir vos
                <br>
                horizons, rencontrer de nouvelles personnes et cultiver le bien-être.<br>
                Bienvenue chez Outivity, où la joie de vivre règne en maître.</p>

        </div>

        <div class="col-6">
            <img
                class="photoun"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_258297713.jpg"
                alt="Photo">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">

        <div class="col-6">

            <img
                class="photodeux"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_256654762.jpg"
                alt="Photo deux">
        </div>

        <div class="col-6">

            <h1 class="deuxiemetitre">Équilibre et
                <br>
                Épanouissement Collectif</h1>

            <p class="deuxiemetexte">Outivity offre des activités variées pour l’épanouissement physique et<br>
                personnel, de yoga en plein air à des ateliers de cuisine. Créant une<br>
                communauté de bien-être, elle encourage un mode de vie équilibré<br>
                et enrichissant, loin de la routine.
                <br>
                <a class="btn btn-danger-cinq" href="<?php echo home_url() . '/inscription/'; ?>">Commencer</a>

                <br>
            </p>
        </div>
    </div>
</div>

<div class="newcolor">
    <br>
    <h1 class="equipetitre">L'équipe Outivity</h3>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <img
                        class="phototrois mb-3"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/jon.jpg"
                        alt="Jon">
                    <div class="text-center">
                        <h3 class="mb-3">Jonathan Nguwo Okongo Olombe</h3>
                        <p class="mb-3">21 ans</p>
                        <p class="mb-3">Étudiant à l'ISFSC</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <img
                        class="photoquatre mb-3"
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/ch.jpg"
                        alt="Charles">
                    <div class="text-center">
                        <h3 class="mb-3">Charles-Anthony Migabo</h3>
                        <p class="mb-3">24 ans</p>
                        <p class="mb-3">Étudiant à l'ISFSC</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer();?>
</div>
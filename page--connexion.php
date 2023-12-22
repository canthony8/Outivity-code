<div class="connexion">

    <?php
/* Template Name: PageConnexion */

get_header();?>

    <h1 class="titreco">Content de vous revoir !</h1>

    <div class="justifiemoi">

        <form
            action="<?php echo esc_url( site_url( 'wp-login.php', 'login_post' ) ); ?>"
            method="post">

            <div class="form-floating mb-3">
                <label for="log">E-mail</label>
                <input
                    type="email"
                    class="form-control"
                    id="log"
                    name="log"
                    value="<?php echo esc_attr( $user_login ); ?>">
            </div>

            <div class="form-floating">
                <label for="pwd">Mot de passe</label>
                <input type="password" class="form-control" id="pwd" name="pwd">
            </div>

            <div class="text-center">
            <a class="btn btn-dark" href="<?php echo home_url() . '/liste-activite/'; ?>">Se connecter</a>



            </form>

        </div>
    </div>

    <?php get_footer();?>
</div>    
<?php get_header();?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <?php wp_head(); ?>
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/styleconnexion.css">
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/styleinscription.css">
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylebienvenue.css">
        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/styleliste.css">

        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylemesactivites.css">

        <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylecreer.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylequizz.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylequizzun.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylequizzdeux.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/styleresultats.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylepageactivite.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylementions.css">

            <link
            rel="stylesheet"
            href="<?php echo get_template_directory_uri(); ?>/assets/css/stylefooter.css">






    </head>

    <body <?php body_class();?>>
        <header class="header">

            <nav class="navbar bg-light justify-content-end navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                        <img
                            class="logo"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/outivity logo 4 copie (3).png"
                            alt="Logo">
                        <?php wp_nav_menu([
  'theme_location' => 'header',
  'container' => false,
  'menu_class' => 'navbar-nav ms-auto flex-row menu-item'
]); ?>
                    </a>
                </div>
            </nav>
        </header>
        <?php wp_body_open();?>
        <div class="background-image">
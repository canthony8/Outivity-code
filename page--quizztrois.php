<?php
/* Template Name: PageQuizzTrois */
get_header();?>


<h3 class="titrequizzun"><strong> Préférez-vous des activités gratuites ou<br> 
êtes-vous prêt(e) à payer pour une expérience de qualité ? </strong></h3>
<br>
<div class="text-center">
    
        <a
            class="btn btn-danger-cinq"
            href="<?php echo home_url() . '/resultat-quizz/'; ?>">Gratuites</a>

            <br>

        <a
            class="btn btn-danger-cinq"
            href="<?php echo home_url() . '/resultat-quizz-un/'; ?>">Prêt(e) à payer</a>
    </div>

<?php get_footer();?>
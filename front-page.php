<?php
$banner_image = get_theme_mod('banner_image');
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fols-security-theme
 */

get_header();
?>

<?php 
get_template_part('template-parts/hero');
get_template_part('template-parts/services');
get_template_part('template-parts/why-fols');
get_template_part('template-parts/testimonials');
?>

<section class="banner"></section>
<section class="contact">
    <div class="container">
        <div class="con-title">
            <h2>Prêt à Sécuriser Votre Environnement?</h2>
            <p>Contactez-nous dès aujourd'hui pour discuter de vos besoins en matière de sécurité et obtenir un devis personnalisé.</p>
            <div class="btn">
                <button>Nous Contacter</button>
                <button>En Savoir Plus</button>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

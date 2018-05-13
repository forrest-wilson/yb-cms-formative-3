<?php   
    /*
        Template Name: Home Page
    */

    get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php get_template_part("template-parts/home", "hero"); ?>
        <section class="container">
            <?php the_content(); ?>
        </section>
    </main>
</div>

<?php get_footer(); ?>
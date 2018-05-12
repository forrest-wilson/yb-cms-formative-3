<?php
    /*
        Template Name: About Template
    */

    get_header();
?>

<?php get_template_part("template-parts/content", "banner"); ?>

<main class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <?php if (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endif; ?>
        </div>

        <div class="col-sm-12 col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
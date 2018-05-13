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
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <?php the_content(); ?>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>
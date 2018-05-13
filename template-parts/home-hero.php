<?php
    // Custom Field variables
    $hero_text = get_post_meta(30, "hero_text", true);
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<?php if (has_post_thumbnail()) { ?>

    <section class="feature-image" style="background-image: url('<?php echo $thumbnail_url; ?>');">

<?php } else { ?>

    <section class="feature-image feature-image-default">

<?php } ?>
        <div class="container">
            <div class="opaque-cover"></div>
            <div class="content">
                <h1 class="hero-title"><?php the_title(); ?></h1>
                <?php if (have_posts()) : the_post() ?>
                    <h2 class="hero-subtitle"><?php echo $hero_text; ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
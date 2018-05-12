<?php
    // Custom Field variables
    $hero_text = get_post_meta(30, "hero_text", true);
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<?php if (has_post_thumbnail()) { ?>

    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover; background-position: center; color: white; position: relative;">
        <div class="container">
            <div style="background-color: rgba(0,0,0,0.40); position: absolute; top: 0; bottom: 0; left: 0; right: 0; z-index: 50;"></div>
            <div class="content" style="max-width: 400px; margin: 0 auto; position: relative; z-index: 100;">
                <h1 style="font-size: 64px;"><?php the_title(); ?></h1>
                <h2><?php echo $hero_text; ?></h2>
            </div>
        </div>
    </section>

<?php } else { ?>
    <section class="feature-image" data-type="background" data-speed="2">
        <h1><?php echo $hero_text; ?></h1>
    </section>
<?php } ?>
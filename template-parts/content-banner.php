<?php
    // Custom Field variables
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
?>

<?php if (has_post_thumbnail()) { ?>

    <section class="feature-image" style="background-image: url('<?php echo $thumbnail_url; ?>');">

<?php } else { ?>

    <section class="feature-image">

<?php } ?>
    <div class="container">
        <div class="opaque-cover"></div>
        <div class="content">
            <h1 class="hero-title"><?php the_title(); ?></h1>
        </div>
    </div>
</section>
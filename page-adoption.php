<?php
    /*
        Template Name: Adoption Template
    */

    get_header();
?>

<main class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <h1>Cats Available for Adoption</h1>

            <?php $loop = new WP_Query(array("post_type" => "cat_adoption", "order_by" => "post_id", "order" => "ASC")); ?>
            
            <div class="row animal">

                <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                    <?php
                        $name = get_field("name");
                        $location = get_field("location");
                        $status = get_field("status");
                        $age = get_field("age");
                        $sex = get_field("sex");
                        $breed = get_field("breed");
                        $name = get_field("name");
                        $desexed = get_field("desexed");
                        $donation = get_field("donation");
                        $good_with_other_pets = get_field("good_with_other_pets");
                        $good_with_kids = get_field("good_with_kids");
                        $description = get_field("description");
                        $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($loop->ID));
                    ?>

                    <div class="col-sm-12 animal-post">
                        <div class="animal-thumbnail">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail(); ?>
                            <?php } else { ?>
                                <img src="" alt="">
                            <?php } ?>
                        </div>
                        <div class="animal-info">
                            <p><strong>Name: </strong><?php echo $name; ?></p>
                            <p><strong>Location: </strong><?php echo $location; ?></p>
                            <p><strong>Status: </strong><?php echo $status; ?></p>
                            <p><strong>Age: </strong><?php echo $age; ?></p>
                            <p><strong>Sex: </strong><?php echo $sex; ?></p>
                            <p><strong>Breed: </strong><?php echo $breed; ?></p>
                            <a href="<?php echo get_post_permalink($post); ?>" role="button" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                    <hr>

                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
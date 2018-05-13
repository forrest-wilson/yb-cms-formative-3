<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<div class="row">
				<?php if (have_posts()) : the_post() ?>

					<?php
						$name = get_field("name");
                        $location = get_field("location");
                        $status = get_field("status");
                        $age = get_field("age");
                        $sex = get_field("sex");
                        $breed = get_field("breed");
                        $desexed = get_field("desexed");
                        $donation = get_field("donation");
                        $good_with_other_pets = get_field("good_with_other_pets");
                        $good_with_kids = get_field("good_with_kids");
                        $description = get_field("description");
					?>

					<div class="col-sm-12 col-md-8 col-lg-9">
						<div class="animal-post">
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
								<p><strong>Desexed: </strong><?php $desexed == 1 ? print("Yes") : print("No"); ?></p>
								<p><strong>Donation: </strong><?php echo "$".$donation; ?></p>
								<p><strong>Good with other pets?: </strong><?php echo $good_with_other_pets; ?></p>
								<p><strong>Good with kids: </strong><?php echo $good_with_kids; ?></p>
							</div>
						</div>
						<div><?php echo $description; ?></div>
					</div>
				<?php endif; ?>
				<div class="col-sm-12 col-md-4 col-lg-3">
					<?php get_sidebar(); ?>
				</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

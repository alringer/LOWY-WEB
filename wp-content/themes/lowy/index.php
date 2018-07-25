<?php
 $index_hero_img_id = get_the_ID();
 $index_hero_img_url = home_url();
 $index_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 

?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="single-page-template--content">

			<div class="container">
				<div class="row">
					<div class="col-12">
					<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

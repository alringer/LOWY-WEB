<?php
 $single_hero_img_id = get_the_ID();
 $single_hero_img_url = home_url();
 $single_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 

?>
<?php get_header(); ?>

	<main role="main">
		<!--  Hero section -->
		<section>
			<?php $single_hero_img_bg  =  strlen($single_hero_img) > 0 ? $single_hero_img :  '/wp-content/themes/lowy/img/default/nature-pines.jpg'; ?>
			<div class="hero hero--templates" style="background-image: url(<?php echo $single_hero_img_url; ?><?php echo $single_hero_img_bg; ?>)">
			</div>
		</section>
		<!-- section -->
		<section>
		<div class="container">
				<div class="row">
					<div class="col-12">
						<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>
					</div>
				</div>
			</div>
			<!-- Line between sections -->
			<?php get_template_part('partials/line', 'page'); ?>
			
			<!-- Search results in a loop -->
			<?php get_template_part('search-loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

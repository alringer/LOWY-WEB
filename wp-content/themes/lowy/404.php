<?php
	$single_hero_img_id = get_the_ID();
	$single_hero_img_url = home_url();
	$single_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true);
 ?>
 <?php get_header(); ?>
	<main role="main">
		<!-- Hero section -->
		<section>
		<?php $single_hero_img_bg  =  strlen($single_hero_img) > 0 ? $single_hero_img :  '/wp-content/themes/lowy/img/default/pub-hero.jpg'; ?>
			<div class="hero hero--templates" style="background-image: url(<?php echo $single_hero_img_url; ?><?php echo $single_hero_img_bg; ?>)">
			</div>
		</section>
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">
				<div class="single-page-template--content">
					<div class="container">
						<div class="row">
							<div class="col-12">
							<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
								<h2>
									<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
								</h2>
							</div>
						</div>
					</div>

					<!-- Line between sections -->
					<?php get_template_part('partials/line', 'page'); ?>
				</div>


			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

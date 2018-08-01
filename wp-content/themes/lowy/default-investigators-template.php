<?php
/*
 * Template Name: Default Investigators Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $imaging_hero_img_id = get_the_ID();
 $imaging_hero_img_url = home_url();
 $imaging_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $imaging_hero_img_url;?><?php echo $imaging_hero_img; ?>)">
		</div>
	</section>
	<!-- End Hero Section -->

	<!-- template content section -->
	<section class="single-page-template--content single-page-template--smaill-img-card">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-12 col-lg-9">
				<h1><?php the_title(); ?></h1>
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content ">
							<?php the_content(); ?>

							<!-- <div class="single-page-template--centered-image ">
								<figure class="wp-caption-text">
									<img src="<?php //echo $imaging_hero_img_url;?><?php //echo $imagings_content_img; ?>">
								</figure>
							</div> -->
							
							<br class="clear">
							<?php edit_post_link(); ?>
						</article>
					<?php endwhile; ?>
				<?php else: ?>
 				<!-- End Clinical research post -->

				<!-- article -->
				<article>
					<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				</article>
				<!-- /article -->

				<?php endif; ?>
			</div>
			<div class="col-12 col-md-12 col-lg-3 d-none d-lg-block">
				<h4><?php _e('Investigators:', 'html5blank');?></h4>
				<div class="single-page-template__investigators-cards">
					<?php get_template_part('partials/reading-centers/investigators', 'page'); ?>
				</div>
			</div>


		</div>
	</div>
	</section>
	<!-- end template content section -->

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php
/*
 * Template Name: Reading Center Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $reading_center_hero_img_id = get_the_ID();
 $reading_center_hero_img_url = home_url();
 $reading_center_hero_img = get_post_meta($post->ID, 'reading-centers-hero-img', $single = true); 
//  $reading_centers_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $reading_center_hero_img_url;?><?php echo $reading_center_hero_img; ?>)">
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
									<img src="<?php //echo $reading_center_hero_img_url;?><?php //echo $reading_centers_content_img; ?>">
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
				<div class="single-page-template__investigators-cards">
					<?php get_template_part('partials/reading-centers/investigators', 'page'); ?>
				</div>
			</div>


		</div>
	</div>
	</section>
	<!-- end template content section -->


	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <!-- 2nd section template content -->
    
	<?php get_template_part('partials/reading-centers/moorfields-reading-center', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
	<!-- 2nd section template content -->
	<?php get_template_part('partials/reading-centers/duke-reading-center', 'page'); ?>	
    
	<!-- end 2nd section template content -->
	
	
	<!-- Line between sections -->
	<div class="d-block d-sm-none d-none d-sm-block d-md-none d-md-block d-lg-none">
		<?php //get_template_part('partials/line', 'page'); ?>	
	</div>
	<!-- End Line between sections -->
	
	<div class="col-12  d-block d-sm-none d-none d-sm-block d-md-none d-md-block d-lg-none">
		<div class="single-page-template__investigators-cards">
			<?php get_template_part('partials/reading-centers/investigators', 'page'); ?>
		</div>
	</div>
	
	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->

	<?php get_template_part('partials/reading-centers/reading-centers-related-posts', 'page'); ?>
		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

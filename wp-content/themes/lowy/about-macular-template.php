<?php
/*
 * Template Name: About Macular Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $about_macular_img_id = get_the_ID();
 $about_macular_img_url = home_url();
 $about_macular_img = get_post_meta($post->ID, 'about-macular-hero-img', $single = true); 
//  $diagnosing_mactels_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $about_macular_img_url;?><?php echo $about_macular_img; ?>)">
		</div>
	</section>
	<!-- End Hero Section -->

	<!-- template content section -->
	<section class="single-page-template--content single-page-template--smaill-img-card">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php 
					if ( function_exists('yoast_breadcrumb') ) {
						yoast_breadcrumb('
						<div class="breadcrumbs">','</div>
						');
					}
				?>
				<h1><?php the_title(); ?></h1>
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content ">
							<?php the_content(); ?>							
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
		</div>
	</div>
	</section>
	<!-- end template content section -->


	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <!-- 2nd section template content -->
    
	<?php get_template_part('partials/about-macular/mactel-project', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
	<div class="single-page-template--content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3><?php _e('Learn More About MacTel', 'html5blank'); ?></h3>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
		
    <?php get_template_part('partials/diagnosing-mactel/about-macular-card', 'page'); ?>
    <?php get_template_part('partials/diagnosing-mactel/patient-perspectives-card', 'page'); ?>
    <?php get_template_part('partials/diagnosing-mactel/clinician-perspectives-card', 'page'); ?>
		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

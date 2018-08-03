<?php
/*
 * Template Name: How to Participate Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $how_to_participate_img_id = get_the_ID();
 $how_to_participate_img_url = home_url();
 $how_to_participate_img = get_post_meta($post->ID, 'how-to-participate-hero-img', $single = true); 
//  $diagnosing_mactels_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $how_to_participate_img_url;?><?php echo $how_to_participate_img; ?>)">
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
                            
                            <!-- <div>
                                <a href="http://www.lmri.net/wp-content/uploads/2015/11/eye-donation-brochure-FINAL-8-21-2015.pdf" class="read-more-btn"> Download  <span class=""></span></a>
							</div>   -->

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

	<?php get_template_part('partials/how-to-participate/country-tabs-list', 'page'); ?>

	<?php get_template_part('partials/how-to-participate/country-tabs-content', 'page'); ?>

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

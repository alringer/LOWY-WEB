<?php
/*
 * Template Name: Eye Donation Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $eye_donation_img_id = get_the_ID();
 $eye_donation_img_url = home_url();
 $eye_donation_img = get_post_meta($post->ID, 'eye-donation-hero-img', $single = true); 
//  $diagnosing_mactels_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $eye_donation_img_url;?><?php echo $eye_donation_img; ?>)">
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
                            
                            <div class="">
                                <a href="http://www.lmri.net/wp-content/uploads/2015/11/eye-donation-brochure-FINAL-8-21-2015.pdf" class="read-more-btn"> Download  <span class=""></span></a>
                            </div>  

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
    
	<?php get_template_part('partials/eye-donation/how-to-donate', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<?php get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <?php get_template_part('partials/eye-donation/instructions', 'page'); ?>
    <?php //get_template_part('partials/line', 'page'); ?>	
    <?php get_template_part('partials/reading-centers/reading-centers-related-posts', 'page'); ?>

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

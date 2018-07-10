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
				<h1><?php the_title(); ?></h1>
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content ">
                            <?php the_content(); ?>	
                            
                            <button class="read-more-btn">
                                <a href="http://www.lmri.net/wp-content/uploads/2015/11/eye-donation-brochure-FINAL-8-21-2015.pdf" class=""> Download  <span class=""></span></a>
                            </button>  

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
	<?php //get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <!-- 2nd section template content -->
    
	<?php //get_template_part('partials/eye-donation/how-to-donate', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<?php //get_template_part('partials/line', 'page'); ?>	
	<!-- End Line between sections -->
		
    <?php //get_template_part('partials/eye-donation/instructions', 'page'); ?>
    <?php //get_template_part('partials/line', 'page'); ?>	
    <?php //get_template_part('partials/reading-centers/reading-centers-related-posts', 'page'); ?>

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

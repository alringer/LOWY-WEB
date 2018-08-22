<?php
 $lmri_main_hero_img_id = get_the_ID();
 $lmri_main_hero_img_url = home_url();
 $lmri_main_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 

?>
    
    <!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $lmri_main_hero_img_url;?><?php echo $lmri_main_hero_img; ?>)">
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
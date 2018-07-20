<?php
/*
 * Template Name: Bio Page Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $how_to_participate_img_id = get_the_ID();
 $how_to_participate_img_url = home_url();
 $how_to_participate_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 
 $how_to_participate_title = get_post_meta($post->ID, 'bio_title', $single = true); 
//  $diagnosing_mactels_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $how_to_participate_img_url;?><?php echo $how_to_participate_img; ?>)">
		</div>
	</section>
	<!-- End Hero Section -->

	<section>
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
				</div>
			</div>
		</div>
	</section>

	<!-- template content section -->
	<section class="single-page-template--content single-page-template--bio-page">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-10 ">


                <div class="text-center">
                    <?php echo get_the_post_thumbnail($post->ID, 'thumbnail'); ?>
                </div>
				<h1><?php the_title(); ?></h1>
                <div class="text-center">
                    <h2>
                        <?php echo $how_to_participate_title; ?>
                    </h2>
                </div> 

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
		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

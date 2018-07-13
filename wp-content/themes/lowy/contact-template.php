<?php
 $contact_hero_img_id = get_the_ID();
 $contact_hero_img_url = home_url();
 $contact_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 

?>
<?php /* Template Name: Contact template */ get_header(); ?>

<main role="main">
    	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $contact_hero_img_url;?><?php echo $contact_hero_img; ?>)">
		</div>
	</section>
	<!-- End Hero Section -->

	<!-- template content section -->
	<section class="single-page-template--content">
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
			<div class="col-12 col-md-6">
                <h1><?php the_title(); ?></h1>
                <div class="">
                    <?php get_template_part('/partials/contact/contact-map-page', 'page'); ?>
                </div>
				
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content single-page-template__article-content--contact">
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
            <div class="col-12 col-md-6">
                    <?php get_template_part('/partials/contact/contact-form-page', 'page'); ?>
                </div>
            </div>
            <div>
            
		</div>
	</div>
	</section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

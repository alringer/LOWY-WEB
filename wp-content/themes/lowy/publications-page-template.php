<?php
/*
 * Template Name: Publications Template 
 * Template Post Type: post, page, product
 */

get_header();
$publications_hero_img_id = get_the_ID();
$publications_hero_img_url = home_url();
$publications_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true);

?>

<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $publications_hero_img_url;?><?php echo $publications_hero_img; ?>)">
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
				<h1><?php the_title(); ?></h1>
				<!-- Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content">
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
  

    <!-- Line between sections -->
    <?php get_template_part('partials/publications/filter', 'page'); ?>

    <!-- Line between sections -->
    <?php get_template_part('partials/publications/publications-cat', 'page'); ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
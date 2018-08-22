<?php
/*
 * Template Name: Default Investigators Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $default_hero_img_id = get_the_ID();
 $default_hero_img_url = home_url();
 $default_hero_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true);
 $investigators = get_post_meta($post->ID, 'investigator_id', $single = false);
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<?php $hero_img_bg  =  strlen($default_hero_img) > 0 ? $default_hero_img :  '/wp-content/themes/lowy/img/default/nature-pines.jpg'; ?>
		<div class="hero hero--templates" style="background-image: url(<?php echo $default_hero_img_url;?><?php echo $hero_img_bg; ?>)">
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
			</div>
			<div class="col-12 col-md-12 <?php if(count($investigators) > 0) { echo 'col-lg-9'; }?>">
				<h1><?php the_title(); ?></h1>
				<!-- Clinical research Post -->
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- article -->
						<article id="post-<?php the_ID(); ?>" class="single-page-template__article-content ">
							<?php the_content(); ?>

							<!-- <div class="single-page-template--centered-image ">
								<figure class="wp-caption-text">
									<img src="<?php //echo $default_hero_img_url;?><?php //echo $imagings_content_img; ?>">
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
			<?php if(count($investigators) > 0): ?>
				<div class="col-12 col-md-12 col-lg-3">
					<h3>&nbsp;</h3>
					<h4><?php _e('Investigators:', 'html5blank');?></h4>
					<div class="clearfix--section">
						<div class="single-page-template__investigators-cards">
							<?php get_template_part('partials/reading-centers/investigators', 'page'); ?>
						</div>
					</div>
					
					
				</div>
			<?php endif; ?>

		</div>
	</div>
	</section>
	<!-- end template content section -->
	<?php get_template_part('partials/line', 'page'); ?>

	<?php get_template_part('partials/cards-sections'); ?>

		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

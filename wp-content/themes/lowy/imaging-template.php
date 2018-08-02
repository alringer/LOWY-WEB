<?php
/*
 * Template Name: Imaging Template 
 * Template Post Type: post, page, product
 */
 get_header();
 $imaging_hero_img_id = get_the_ID();
 $imaging_hero_img_url = home_url();
 $imaging_hero_img = get_post_meta($post->ID, 'reading-centers-hero-img', $single = true); 
//  $imagings_content_img = get_post_meta($post->ID, 'reading-centers-content-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<?php $hero_img_bg  =  strlen($imaging_hero_img) > 0 ? $imaging_hero_img :  '/wp-content/themes/lowy/img/default/nature-pines.jpg'; ?>
		<div class="hero hero--templates" style="background-image: url(<?php echo $imaging_hero_img_url;?><?php echo $hero_img_bg; ?>)">
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
									<img src="<?php //echo $imaging_hero_img_url;?><?php //echo $imagings_content_img; ?>">
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

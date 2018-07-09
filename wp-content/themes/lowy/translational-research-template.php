 <?php
 $translational_research_hero_img_id = get_the_ID();
 $translational_research_hero_img_url = home_url();
 $translational_research_hero_img = get_post_meta($post->ID, 'translational-research-hero-img', $single = true); 

?>
<?php /* Template Name: translational research template */ get_header(); ?>


<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $translational_research_hero_img_url;?><?php echo $translational_research_hero_img; ?>)">
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
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-page-template__line">
					
				</div>
			</div>
		</div>
	</div> 
	<!-- End Line between sections -->
		
	<!-- 2nd section template content -->
	<?php get_template_part('partials/translational-research/laboratory-research', 'page'); ?>
	<!-- end 2nd section template content -->

	<!-- Line between sections -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-page-template__line">
					
				</div>
			</div>
		</div>
	</div> 
	<!-- End Line between sections -->
		
	<!-- 2nd section template content -->
	<?php get_template_part('partials/translational-research/research-portal', 'page'); ?>
	<!-- end 2nd section template content -->


	<!-- Line between sections -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-page-template__line">
					
				</div>
			</div>
		</div>
	</div> 
	<!-- End Line between sections -->

	<?php get_template_part('partials/translational-research/collaborating-investigators', 'page'); ?>

	<!-- Line between sections -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="single-page-template__line">
					
				</div>
			</div>
		</div>
	</div> 
	<!-- End Line between sections -->

	<?php get_template_part('partials/translational-research/translational-research-posts', 'page'); ?>
	

</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>









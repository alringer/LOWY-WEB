 <?php
 $about_lmri_hero_img_id = get_the_ID();
 $about_lmri_hero_img_url = home_url();
 $about_lmri_hero_img = get_post_meta($post->ID, 'about-lmri-hero-img', $single = true); 

?>
<?php /* Template Name: About LMRI page template */ get_header(); ?>


<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $about_lmri_hero_img_url;?><?php echo $about_lmri_hero_img; ?>)">
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
		


	<?php 
		$about_lmri_template_sections = get_post_meta($post->ID, 'page_id', $single = false);
	?>				

	<?php if (count($about_lmri_template_sections) > 0 ): ?>
			<?php foreach ($about_lmri_template_sections as $about_lmri_template_section_id) : ?>
			<?php $about_lmri_template_section =  get_page($about_lmri_template_section_id); ?>
			
			<section class="single-page-template--content"> 
				<div class="container">
					<div class="row">
						<div class="col-12">
							
							<div>
								<?php //echo '<img src="'.get_the_post_thumbnail_url($about_lmri_history_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
							</div>

							<div>
								<h3><?php echo apply_filters( 'the_title', $about_lmri_template_section ->post_title, $about_lmri_template_section ->ID )  ?></h3>

							</div>

							<div class="single-page-template__article-content">
								<?php
								echo '<p>'. apply_filters( 'the_content',( $about_lmri_template_section ->post_content ) ) .'</p>';                  
								//echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $about_lmri_history_page->post_content, 100, "" ) ) .'</p>'; 
								?>
							</div>


							<div class="can-edit-wrap">
								<?php if($canBeEdited) {
									echo '<a href=" '.get_edit_post_link($about_lmri_template_section->ID, 'none').' ">Edit</a>';
								} ?>
							</div>

						</div>
					</div>
				</div>
			</section>       
			
			<?php get_template_part('partials/line', 'page'); ?>
			<?php endforeach; ?>
		<?php endif; ?>
				
		
    <!-- 2nd section template content -->
    

    <?php get_template_part('partials/about-lmri/sponsors-card', 'page'); ?>
    
    <?php get_template_part('partials/about-lmri/board-directors', 'page'); ?>

    <?php get_template_part('partials/about-lmri/board-scientific-governors', 'page'); ?>

    <?php get_template_part('partials/about-lmri/lmri-staff-card', 'page'); ?>
	

</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>









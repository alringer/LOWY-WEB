<?php
/*
 * Template Name: LMRI Staff
 */
 get_header();
 $lmri_staff_img_id = get_the_ID();
 $lmri_staff_img_url = home_url();
 $lmri_staff_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true); 
?>
<main role="main">
	<!--  Hero section -->
	<section>
		<div class="hero hero--templates" style="background-image: url(<?php echo $lmri_staff_img_url;?><?php echo $lmri_staff_img; ?>)">
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
	<?php 
		$canBeEdited = current_user_can('editor') || current_user_can('administrator');
		$lmri_staff_cat_id =  get_post_meta($post->ID, 'cat_id', true);
		$lmri_staff_cards_id = get_the_ID();
		$lmri_staff_cat_query = new WP_Query( 'cat='.$lmri_staff_cat_id.'&order=asc');
	?>
	<section class="single-page-template--content ">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12">
					<?php
						$page_slug = get_post_field( 'post_name', get_post());
					?>
				</div>
				<?php while($lmri_staff_cat_query->have_posts()) : $lmri_staff_cat_query->the_post(); ?>
				<?php $bg_staff_image = strlen(get_the_post_thumbnail_url($post->ID, 'full')) > 0 ?  
					get_the_post_thumbnail_url($post->ID, 'full') : 
					'/wp-content/themes/lowy/img/icons/abstract_user.svg';
				 ?>
					<div class="col-12 col-md-6 col-lg-4">
					<div class="cards--staff <?php 
					if($page_slug === 'board-of-directors' || $page_slug ===  'sponsors') {
						echo 'cards--staff--bod';
					}
					?>" style="background-image: url('<?php echo $bg_staff_image; ?>')">
					<a href="<?php echo get_permalink($lmri_staff_cards_id->ID); ?>"><div class="cards--staff__img"></div></a>
						<div class="cards--staff__content">
							<div class="cards--staff__content__title text-center">
								<h3><?php the_title(); ?></h3>
								<?php 
									$bio_title = get_post_meta($post->ID, 'bio_title', true);
								?>
								<strong><?php //echo $bio_title; ?></strong>
							</div>
							<?php if (($page_slug ==  'board-of-directors') || ($page_slug == 'sponsors')): ?>
								<div class="text-center">
									<p>
										<?php  
											if (strlen($bio_title) > 200 ) {
												echo wp_trim_words( $post->post_content, 10, "..." ); 
											} else if(strlen($bio_title) > 110) {
												echo wp_trim_words( $post->post_content, 18, "..." );
											} else if(strlen($bio_title) > 80) {
												echo wp_trim_words( $post->post_content, 20, "..." );
											} else if(strlen($bio_title) < 70 && strlen($bio_title) > 21) {
												echo wp_trim_words( $post->post_content, 30, "..." );
											}  else {
												echo wp_trim_words( $post->post_content, 30, "..." );
											}
										?>
									</p>
								</div>
							<?php endif; ?>

							
						</div>
						<div class="cards--staff__content__read-more text-center">
								<a href="<?php echo get_permalink($lmri_staff_cards_id->ID); ?>" class="read-more-btn"> Read More  <span class=""></span></a>
							</div>
							<div class="can-edit-wrap">
								<?php if($canBeEdited) {
									echo '<a href=" '.get_edit_post_link($lmri_staff_cards_id->ID, 'none').' ">Edit</a>';
								} ?>
						</div>

						

					</div>
					</div>
				<?php endwhile; ?> 
			</div>
		</div>
	</section>   

	<!-- end template content section -->
		
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

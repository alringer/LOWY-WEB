<?php
/*
 * Template Name: News
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
                    //do something like this for order
                    //$community_pages = get_pages( array( 'child_of' => $community_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
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
    

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_cat_id =  17;
    $featured_cat_limit = 30;
    $clinical_research_cards_id = get_the_ID();
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'');
?>

<?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
<section class="single-page-template--content ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cards__posts">
                    <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-8">
                <div class="single-page-template__card-title">
                    <h3><?php the_title(); ?></h3>
                </div>
                
                <?php //echo '<p>'. apply_filters( 'the_content',( $clinical_research_cards_id->post_content ) ) .'</p>'; ?> 
                
                <?php echo '<p>'. strip_shortcodes( apply_filters( 'post_content', wp_trim_words( $post->post_content, 32, "" ) ) ) .'</p>';  ?>


                <?php //echo '<p>'. apply_filters( 'post_content', wp_trim_words( $post->post_content, 32, "" ) ) .'</p>';  ?>

                
                <?php //echo get_post_field('post_content'); ?>

                <div>
                    <a href="<?php echo get_permalink($clinical_research_cards_id->ID); ?>" class="read-more-btn"> Read More  <span class=""></span></a>
                </div>

                <div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($clinical_research_cards_id->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>


            </div>
        </div>
    </div>
 </section>   

 <?php get_template_part('partials/line', 'page'); ?>

<?php endwhile; ?> 
        








<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $lmri_staff_cat_id =  get_post_meta($post->ID, 'cat_id', true);;
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
					<div class="col-12 col-md-6 col-lg-4">
					<div class="cards--staff <?php 
					if($page_slug === 'board-of-directors' || $page_slug ===  'sponsors') {
						echo 'cards--staff--bod';
					}
					?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'thumbnail'); ?>')">
					<a href="<?php echo get_permalink($lmri_staff_cards_id->ID); ?>"><div class="cards--staff__img"></div></a>
						<div class="cards--staff__content">
							<div class="cards--staff__content__title text-center">
								<h3><?php the_title(); ?></h3>
								<?php 
									$bio_title = get_post_meta($post->ID, 'bio_title', true);
								?>
								<strong><?php echo $bio_title; ?></strong>
							</div>
							<div class="text-center"><p><?php  
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
							?></p></div>
							
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



</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

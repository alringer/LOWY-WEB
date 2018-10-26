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


                <div class="breadcrumbs breadcrumbs--news">  
                    <span>
                        <a href="<?php echo home_url(); ?><?php echo '/news/news-and-media/';?>" class="<?php if (htmlspecialchars($_GET["popular"]) == 'true') {echo ''; }else{echo 'active';} ?>">
                            Newest  
                        </a>
                    </span>
                    <span>
                        <a href="<?php echo home_url(); ?><?php echo '/news/news-and-media/?popular=true';?>" class="<?php if (htmlspecialchars($_GET["popular"]) == 'true') {echo 'active'; }else{echo '';} ?>">
                            Most Popular
                        </a>
                    </span>
                </div>

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
    $clinical_research_cards_id = get_the_ID();
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&order=desc');
    if (htmlspecialchars($_GET["popular"]) == 'true' ) {
 ?>
<section class="single-page-template--content ">
<div class="container">
        <?php
            
            
            $args = array(
                'taxonomy' => 'post_category',
                'term_id' => '17',
                'header' => 'Most Popular', 
                'header_start' => '<h3 class="title">',
                'header_end' => '</h3>',
                'thumbnail_width' => 290,
                'thumbnail_height' => 290,
                'excerpt_length' => 250,
                'post_html' => '

                <div class="row">    
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="cards__posts">
                            {thumb}
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="single-page-template__card-title">
                            <h3>{text_title}</h3>
                            <p>{summary}</p>

                             <div>
                                <a href="{url}" class="read-more-btn"> Read More  <span class=""></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                '
                
            );

            wpp_get_mostpopular( $args );
       
        ?>
</div>
</section>

 <?php } else { ?>

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
                
                <?php //echo '<p>'. strip_shortcodes( apply_filters( 'post_content', wp_trim_words( $post->post_content, 32, "" ) ) ) .'</p>';  ?>

               <p><?php the_excerpt(); ?></p>



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
<?php } ?>
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_cat_id =  15;
    $featured_cat_limit = 7;
    $clinical_research_cards_id = get_the_ID();
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'');
?>

<?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-8">
                <h3><?php the_title(); ?></h3>
                
                <?php //echo '<p>'. apply_filters( 'the_content',( $clinical_research_cards_id->post_content ) ) .'</p>'; ?> 
                <?php echo '<p>'. apply_filters( 'post_content', wp_trim_words( $post->post_content, 35, "" ) ) .'</p>';  ?>
                
                <?php //echo get_post_field('post_content'); ?>


                <button class="read-more-btn">
                    <a href="<?php echo get_permalink($clinical_research_cards_id->ID); ?>" class=""> Read More  <span class=""></span></a>
                </button>  

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($clinical_research_cards_id->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>


            </div>
        </div>
    </div>

<?php endwhile; ?> 




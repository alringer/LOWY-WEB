<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $publications_cat_id =  get_post_meta($post->ID, 'cat_id', true);
    $publications_cards_id = get_the_ID();
    $publications_cat_query = new WP_Query( 'cat='.$publications_cat_id.'&order=desc');
?>
<section class="single-page-template--content ">
    <?php while($publications_cat_query->have_posts()) : $publications_cat_query->the_post(); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h4><?php the_title(); ?></h4>
                <a href="<?php echo get_post_meta($post->ID, 'link-offsite', true);  ?>">
                    <?php echo wp_trim_words( $post->post_content, 50, "..." ); ?> 
                </a>

                <div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($publications_cards_id->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Line between sections -->
    <?php get_template_part('partials/line', 'page'); ?>
    <?php endwhile; ?> 
</section>  
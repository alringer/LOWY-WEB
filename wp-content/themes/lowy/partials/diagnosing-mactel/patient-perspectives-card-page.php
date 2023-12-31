<?php $patient_perspectives_card_page = get_page(60); ?>
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>


<section class="single-page-template--content ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cards__posts ">
                    <?php echo '<img src="'.get_the_post_thumbnail_url($patient_perspectives_card_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-8">
                <div class="single-page-template__card-title ">
                    <!-- <h3><?php //the_title(); ?></h3> -->
                    <h3><?php echo apply_filters( 'the_title', $patient_perspectives_card_page->post_title, $patient_perspectives_card_page->ID )  ?></h3>
                </div>
                
                <?php //echo '<p>'. apply_filters( 'the_content',( $about_lmri_cards_id->post_content ) ) .'</p>'; ?> 
                
                <?php echo '<p>'. strip_shortcodes( apply_filters( 'post_content', wp_trim_words( $patient_perspectives_card_page->post_content, 31, "" ) ) ) .'</p>';  ?>


                <?php //echo '<p>'. apply_filters( 'post_content', wp_trim_words( $post->post_content, 32, "" ) ) .'</p>';  ?>

                
                <?php //echo get_post_field('post_content'); ?>


                <div>
                    <a href="<?php echo get_permalink($patient_perspectives_card_page->ID); ?>" class="read-more-btn"> Read More  <span class=""></span></a>
                </div>  

                <div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($patient_perspectives_card_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>


            </div>
        </div>
    </div>
</section>   













<?php $how_to_participate_page = get_page(82); ?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div>
                <?php //echo '<img src="'.get_the_post_thumbnail_url($how_to_participate_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </div>

            <div>
                <h3><?php echo apply_filters( 'the_title', $how_to_participate_page->post_title, $how_to_participate_page->ID )  ?></h3>
            </div>

            <div>
                <?php
                echo '<p>'. apply_filters( 'the_content',( $how_to_participate_page->post_content ) ) .'</p>';                  
                //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $how_to_participate_page->post_content, 100, "" ) ) .'</p>'; 
                ?>
            </div>

            <div class="">
                    <a href="<?php echo get_permalink($how_to_participate_page->ID); ?>" class="read-more-btn"> Read More  <span class=""></span></a>
            </div>

            <div class="can-edit-wrap">
                <?php if($canBeEdited) {
                    echo '<a href=" '.get_edit_post_link($how_to_participate_page->ID, 'none').' ">Edit</a>';
                } ?>
            </div>

        </div>
    </div>
</div>
</section>       
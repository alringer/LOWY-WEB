<?php $instructions_page = get_page(103); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div>
                    <?php //echo '<img src="'.get_the_post_thumbnail_url($instructions_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>

                <div>
                    <h3><?php echo apply_filters( 'the_title', $instructions_page->post_title, $instructions_page->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $instructions_page->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $instructions_page->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div>
                    <a href="http://www.lmri.net/wp-content/uploads/2015/10/Eye-Donation-Retrieval-Shipping-Instructions-revised-6-12-2018-jt.pdf" class="read-more-btn"> Download  <span class=""></span></a>
                </div>  
                <br class="clear">
                

                <div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($instructions_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>       
<?php $research_portal_page = get_page(323); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <div>
                <?php //echo '<img src="'.get_the_post_thumbnail_url($research_portal_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </div>

            <div>
                <h3><?php echo apply_filters( 'the_title', $research_portal_page->post_title, $research_portal_page->ID )  ?></h3>
            </div>

            <div>
                <?php
                echo '<p>'. apply_filters( 'the_content',( $research_portal_page->post_content ) ) .'</p>';                  
                //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $research_portal_page->post_content, 100, "" ) ) .'</p>'; 
                ?>
            </div>


            <div class=" ">
                <?php if($canBeEdited) {
                    echo '<a href=" '.get_edit_post_link($research_portal_page->ID, 'none').' ">Edit</a>';
                } ?>
            </div>

        </div>
    </div>
</div>
</section>       
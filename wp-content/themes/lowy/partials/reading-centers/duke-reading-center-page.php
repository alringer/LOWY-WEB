<?php $duke_reading_center = get_page(1016); ?>
<?php

?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div>
                    <?php //echo '<img src="'.get_the_post_thumbnail_url($duke_reading_center->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>

                <div>
                    <h3><?php echo apply_filters( 'the_title', $duke_reading_center->post_title, $duke_reading_center->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $duke_reading_center->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $duke_reading_center->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($duke_reading_center->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>       
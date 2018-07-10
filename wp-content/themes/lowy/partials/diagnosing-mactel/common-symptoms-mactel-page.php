<?php $common_symptoms_mactel = get_page(1666); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div>
                    <?php //echo '<img src="'.get_the_post_thumbnail_url($common_symptoms_mactel->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>

                <div>
                    <h3><?php echo apply_filters( 'the_title', $common_symptoms_mactel->post_title, $common_symptoms_mactel->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $common_symptoms_mactel->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $common_symptoms_mactel->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($common_symptoms_mactel->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>       


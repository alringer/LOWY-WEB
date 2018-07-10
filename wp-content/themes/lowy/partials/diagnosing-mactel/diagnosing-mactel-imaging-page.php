<?php $diagnosing_mactel_imaging = get_page(1672); ?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div>
                    <?php //echo '<img src="'.get_the_post_thumbnail_url($diagnosing_mactel_imaging->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>

                <div>
                    <h3><?php echo apply_filters( 'the_title', $diagnosing_mactel_imaging->post_title, $diagnosing_mactel_imaging->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $diagnosing_mactel_imaging->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $diagnosing_mactel_imaging->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($diagnosing_mactel_imaging->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>       




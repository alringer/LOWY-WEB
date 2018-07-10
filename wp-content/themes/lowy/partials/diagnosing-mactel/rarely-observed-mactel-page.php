<?php $rarely_observed_mactel = get_page(1669); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section class="single-page-template--content"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <div>
                    <?php //echo '<img src="'.get_the_post_thumbnail_url($rarely_observed_mactel->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>

                <div>
                    <h3><?php echo apply_filters( 'the_title', $rarely_observed_mactel->post_title, $rarely_observed_mactel->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $rarely_observed_mactel->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $rarely_observed_mactel->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($rarely_observed_mactel->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>       


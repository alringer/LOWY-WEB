<?php $first_post_card = get_page(82); ?>
<?php

?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div>
                    <?php echo '<img src="'.get_the_post_thumbnail_url($first_post_card->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <div>
                    <h3><?php echo apply_filters( 'the_title', $first_post_card->post_title, $first_post_card->ID )  ?></h3>
                </div>

                <div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $first_post_card->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $first_post_card->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                </div>

                <div class="">
                    <button class="read-more-btn">
                        <a href="<?php echo get_permalink($first_post_card->ID); ?>" class=""> Read More  <span class=""></span></a>
                    </button>
                </div>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($first_post_card->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>

            </div>
        </div>
    </div>
</section>

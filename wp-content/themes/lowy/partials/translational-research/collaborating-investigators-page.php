<?php $collaborating_investigators = get_page(95); ?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>

<section class="single-page-template--content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 order-1 order-lg-2">
                <div class="d-lg-none  d-xl-none card-content__card-title">
                    <h3><?php echo apply_filters( 'the_title', $collaborating_investigators->post_title, $collaborating_investigators->ID )  ?></h3>
                </div>
                <figure class="image-figure">
                    <img src= "<?php echo get_the_post_thumbnail_url($collaborating_investigators->ID, 'post-thumbnail'); ?>" class="img-responsive">
                    <figcaption class="fig-caption">
                        <!-- echo get_post_meta(get_the_ID(),'image-caption',true) -->
                        <?php echo get_post_meta($collaborating_investigators->ID, 'image-caption', $single = true);  ?>
                    </figcaption>
                </figure>
                
            </div>
            <div class="col-12 col-md-12 col-lg-6 order-2 order-lg-1">
                <div>
                    <div class="d-none d-lg-block d-xl-block">
                        <h3><?php echo apply_filters( 'the_title', $collaborating_investigators->post_title, $collaborating_investigators->ID )  ?></h3>
                    </div>
                    <?php
                    echo '<p>'. apply_filters( 'the_content',( $collaborating_investigators->post_content ) ) .'</p>';                  
                    //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $collaborating_investigators->post_content, 100, "" ) ) .'</p>'; 
                    ?>
                    <div class="">
                        <button class="read-more-btn">
                            <a href="<?php echo get_permalink($collaborating_investigators->ID); ?>" class=""> Read More  <span class=""></span></a>
                        </button>
                    </div>
                    <div class=" ">
                        <?php if($canBeEdited) {
                            echo '<a href=" '.get_edit_post_link($collaborating_investigators->ID, 'none').' ">Edit</a>';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






















       
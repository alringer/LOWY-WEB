<?php $clinical_research_page = get_page(11); ?>

<?php
$page_meta_data = get_post_meta($clinical_research_page->ID, 'custom-text', $single = true); 
?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--unstyled list--grid-order-img-up home__card-grid about-card list__clinical-research-content-pad">


            <li class="position--relative  list__item-clinical-image-pos">
            <a href="<?php echo get_permalink($clinical_research_page->ID); ?>">
                <?php echo '<img src="'.get_the_post_thumbnail_url($clinical_research_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </a>
            </li>

            <li class="position--relative home__card-grid__content-wrap list__item-pad">

                <h3><?php echo apply_filters( 'the_title', $clinical_research_page->post_title, $clinical_research_page->ID )  ?></h3>

                <?php
                // echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $clinical_research_page->post_content, 20, "" ) ) .'</p>'; 
                ?>

                <?php echo '<p>'.$page_meta_data.'</p>'; ?>

                <a href="<?php echo get_permalink($clinical_research_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>

                <div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($clinical_research_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
        

</ul>


<?php $about_mactel_research_page = get_page(58); ?>
<?php
// sorts by page added
// sort($clinical_research_pages);
// $clinical_research_i = 0;
// $clinical_research_limit = 1;
?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--grid-order  list--unstyled list--grid-order-img-right list--tablet-img-top home__card-grid  ">
    <?php //foreach ( $clinical_research_pages as $clinical_research_page ) : ?>
    <?php //if($clinical_research_i < $clinical_research_limit) : ?>

            <li class="position--relative  list__item-image-pos">
                <?php echo '<img src="'.get_the_post_thumbnail_url($about_mactel_research_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </li>

            <li class="position--relative home__card-grid__content-wrap list__item-pad home__card-grid__content-wrap-right-arrow-about-mactel">

                <h3><?php echo apply_filters( 'the_title', $about_mactel_research_page->post_title, $about_mactel_research_page->ID )  ?></h3>

                <?php
                echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $about_mactel_research_page->post_content, 19, "" ) ) .'</p>'; 
                ?>

                <a href="<?php echo get_permalink($about_mactel_research_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($about_mactel_research_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
        
    <?php //$clinical_research_i++; ?>
        <?php //endif ?>
    <?php //endforeach; ?>
</ul>


<?php
// $canBeEdited = current_user_can('editor') || current_user_can('administrator');

//    $footer_id = 11; 
//    $footer_p = get_page($footer_id);
//    echo apply_filters('the_content', wp_trim_words( $footer_p->post_content, 21, "" ));

//    if($canBeEdited) {
//        echo '<a href=" '.get_edit_post_link($footer_id, 'none').' ">Edit</a>';
//    } 
?>

<?php 
// Notes: need to change variables names.
?>
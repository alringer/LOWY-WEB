<?php $about_mactel_research_page = get_page(58); ?>

<?php 
    $page_meta_data = get_post_meta($about_mactel_research_page->ID, 'custom-text', $single = true); 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--grid-order  list--unstyled list--grid-order-img-right list--tablet-img-top home__card-grid  ">

            <li class="position--relative  list__item-image-pos">
            <a href="<?php echo get_permalink($about_mactel_research_page->ID); ?>">
                <?php echo '<img src="'.get_the_post_thumbnail_url($about_mactel_research_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </a>
            </li>

            <li class="position--relative home__card-grid__content-wrap list__item-pad home__card-grid__content-wrap-right-arrow-about-mactel">

                <h3><?php echo apply_filters( 'the_title', $about_mactel_research_page->post_title, $about_mactel_research_page->ID )  ?></h3>

                <?php
                //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $about_mactel_research_page->post_content, 19, "" ) ) .'</p>'; 
                ?>

                <?php echo '<p>'.$page_meta_data.'</p>'; ?>

                <a href="<?php echo get_permalink($about_mactel_research_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($about_mactel_research_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
</ul>

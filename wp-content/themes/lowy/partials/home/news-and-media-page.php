<?php $news_and_media_page = get_page(17); ?>

<?php 
    $page_meta_data = get_post_meta($news_and_media_page->ID, 'custom-text', $single = true); 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--grid-order  list--unstyled     list--tablet-img-top list--reverse-order  home__card-grid  list__news-media-content-no-pad">

            <li class="position--relative  list__item-image-pos">
            <a href="<?php echo get_permalink($news_and_media_page->ID); ?>">
                <?php echo '<img src="'.get_the_post_thumbnail_url($news_and_media_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </a>
            </li>

            <li class="position--relative home__card-grid__content-wrap list__item-pad home__card-grid__content-wrap-left-arrow-news-media">

                <h3><?php echo apply_filters( 'the_title', $news_and_media_page->post_title, $news_and_media_page->ID )  ?></h3>

                <?php
                //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $news_and_media_page->post_content, 20, "" ) ) .'</p>'; 
                ?>

                <?php echo '<p>'.$page_meta_data.'</p>'; ?>

                <a href="<?php echo get_permalink($news_and_media_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($news_and_media_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
</ul>

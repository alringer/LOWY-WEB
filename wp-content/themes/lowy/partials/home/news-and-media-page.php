<?php $news_and_media_page = get_page(17); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--grid-order  list--unstyled     list--tablet-img-top list--reverse-order  home__card-grid  list__news-media-content-no-pad">
    <?php //foreach ( $clinical_research_pages as $clinical_research_page ) : ?>
    <?php //if($clinical_research_i < $clinical_research_limit) : ?>

            <li class="position--relative  list__item-image-pos">
                <?php echo '<img src="'.get_the_post_thumbnail_url($news_and_media_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </li>

            <li class="position--relative home__card-grid__content-wrap list__item-pad home__card-grid__content-wrap-left-arrow-news-media">

                <h3><?php echo apply_filters( 'the_title', $news_and_media_page->post_title, $news_and_media_page->ID )  ?></h3>

                <?php
                echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $news_and_media_page->post_content, 20, "" ) ) .'</p>'; 
                ?>

                <a href="<?php echo get_permalink($news_and_media_page->ID); ?>" class="read-more"> Read More  </a>

                <div class=" ">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($news_and_media_page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
        
    <?php //$clinical_research_i++; ?>
        <?php //endif ?>
    <?php //endforeach; ?>
</ul>

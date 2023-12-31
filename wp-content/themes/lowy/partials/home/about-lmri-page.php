 <?php $about_lmri_pages = get_pages( array( 'child_of' => 6 ) ); ?>
<?php
// sorts by page added
sort($about_lmri_pages);

?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
 
<section class="container">
    <div class="row">
        <div class="col-12">
            <ul class=" list--home-grid list--grid-order home__card-grid home__about-card ">
                <?php foreach ( $about_lmri_pages as $about_lmri_page ) : ?>
                
                    <?php 
                    $page_meta_data = get_post_meta($about_lmri_page->ID, 'custom-text', $single = true); 
                    ?>

                    <!-- <li style="background-image: url('<?php //echo get_the_post_thumbnail_url($about_lmri_page->ID, 'post-thumbnail') ?>')"> -->
                    <li class="position--relative  list__item-image-pos">
                    <a href="<?php echo get_permalink($about_lmri_page->ID); ?>">
                        <?php echo '<img src="'.get_the_post_thumbnail_url($about_lmri_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                    </a>
                    </li>
                    <li class="position--relative home__card-grid__content-wrap list__item-pad home__card-grid__content-wrap-right-arrow ">
                        <h3><?php echo apply_filters( 'the_title', $about_lmri_page->post_title, $about_lmri_page->ID )  ?></h3>
                        <?php //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $about_lmri_page->post_content, 21, "" ) ) .'</p>'; ?>

                        <?php echo '<p>'.$page_meta_data.'</p>'; ?>

                        <a href="<?php echo get_permalink($about_lmri_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>

                        <div class=" ">
                            <?php if($canBeEdited) {
                                echo '<a href=" '.get_edit_post_link($about_lmri_page->ID, 'none').' ">Edit</a>';
                            } ?>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>


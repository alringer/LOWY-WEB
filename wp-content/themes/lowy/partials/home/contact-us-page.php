<?php $contact_us_page = get_page(19); ?>
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
       
       
<ul class="list  list--home-grid list--unstyled list--grid-order-img-up home__card-grid about-card list__clinical-research-content-pad list__home-grid-contact-us-content">

    <li class="position--relative  list__item-clinical-image-pos list__item-heart-image-pos">
    <a href="<?php echo get_permalink($contact_us_page->ID); ?>">
        <?php echo '<img src="'.get_the_post_thumbnail_url($contact_us_page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
    </a>
    </li>

    <li class="position--relative home__card-grid__content-wrap list__item-pad">

        <h3><?php echo apply_filters( 'the_title', $contact_us_page->post_title, $contact_us_page->ID )  ?></h3>

        <?php
        echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $contact_us_page->post_content, 3, "" ) ) .'</p>'; 
        ?>

        <a href="<?php echo get_permalink($contact_us_page->ID); ?>" class="read-more"> Read More  <span class="icn icn--arrow"></span></a>

        <div class=" ">
            <?php if($canBeEdited) {
                echo '<a href=" '.get_edit_post_link($contact_us_page->ID, 'none').' ">Edit</a>';
            } ?>
        </div>
    </li>
</ul>



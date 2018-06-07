<?php 
    $perspective_page_id = 60;
    $eye_donation_page_id = 99;
    //$perspective_pages = get_pages( array( $perspective_page_id, $eye_donation_page_id));
    $perspective_page = get_page($perspective_page_id);
    $eye_donation_page = get_page($eye_donation_page_id );
    
?>
<div class="perspective--wrap">
    <section class="container section-tb-pad">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-5">
                <?php echo '<img src="'.get_the_post_thumbnail_url($perspective_page->ID, 'large').'" class="img-margin-bottom-desktop">'; ?>
            </div>
            <div class="col-12 col-md-10 col-lg-7">
                <h2><?php echo apply_filters( 'the_title', $perspective_page->post_title, $perspective_page->ID )  ?></h2>
                <p><?php echo apply_filters( 'the_excerpt', wp_trim_words( $perspective_page->post_content, 60, "" ) ); ?></p>
                <a href="<?php echo get_permalink($perspective_page->ID); ?>" class="read-more-btn"> Read More  </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 order-1 order-lg-0">
                <h2><?php echo apply_filters( 'the_title', $eye_donation_page->post_title, $eye_donation_page->ID )  ?></h2>
                <?php echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $eye_donation_page->post_content, 41, "" ) ) .'</p>'; ?>
                <a href="<?php echo get_permalink($eye_donation_page->ID); ?>" class="read-more-btn"> Read More  </a>
            </div>
            <div class="col-12 col-md-10 col-lg-5 order-0 order-lg-1">
                <?php echo '<img src="'.get_the_post_thumbnail_url($eye_donation_page->ID, 'large').'" class="img-margin-top-mobile ">'; ?>
            </div>
        </div>
    </section>
</div>



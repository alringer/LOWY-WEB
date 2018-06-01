<?php
        $reach_out_page_id = 1488;
        $reach_out_page = get_page($reach_out_page_id);
        $reach_out_title = $reach_out_page->post_title;
?>
<section class="reach-out" style="background-image: url(<?php echo get_the_post_thumbnail_url($reach_out_page->ID); ?>)">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-10 text-center">
                <h3 class="reach-out__title"><?php echo apply_filters('post_title', $reach_out_title);  ?></h3>
                <div class="reach-out__content">
                   <?php echo apply_filters('the_content', $reach_out_page->post_content); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');

    $footer_id = 48; //
    $footer_p = get_page($footer_id);

    ?>
    <p>
        <?php echo apply_filters('the_content', wp_trim_words( $footer_p->post_content, 42, "" )); ?>
    </p>
    <?php

    if($canBeEdited) {
        echo '<a href=" '.get_edit_post_link($footer_id, 'none').' ">Edit</a>';
    }

?>

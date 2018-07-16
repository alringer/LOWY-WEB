<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');

    $footer_form_id = 1728; //
    $footer_form_p = get_page($footer_form_id);

    ?>
    <p>
        <?php echo apply_filters('the_content', $footer_form_p->post_content); ?>
    </p>
    <?php

    if($canBeEdited) {
        echo '<a href=" '.get_edit_post_link($footer_form_id, 'none').' ">Edit</a>';
    }

?>
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');

    $footer_id = 58; //
    $footer_p = get_page($footer_id);
    echo apply_filters('the_content', $footer_p->post_content);

    if($canBeEdited) {
        echo '<a href=" '.get_edit_post_link($footer_id, 'none').' ">Edit</a>';
    }

?>

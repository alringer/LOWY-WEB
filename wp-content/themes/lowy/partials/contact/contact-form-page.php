<?php $contact_form_macular = get_page(1714); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
<div class="cards--contact-form">
    <?php
            echo apply_filters( 'the_content',( $contact_form_macular->post_content ) );
    ?>
</div>

<div class=" ">
    <?php if($canBeEdited) {
        echo '<a href=" '.get_edit_post_link($contact_form_macular->ID, 'none').' ">Edit</a>';
    } ?>
</div>
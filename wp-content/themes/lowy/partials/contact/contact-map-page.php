<?php $contact_map_macular = get_page(1712); ?>


<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
<div>
    <?php
            echo '<p>'. apply_filters( 'the_content',( $contact_map_macular->post_content ) ) .'</p>';                  
            //echo '<p>'. apply_filters( 'the_excerpt', wp_trim_words( $contact_map_macular->post_content, 100, "" ) ) .'</p>'; 
    ?>
</div>

<div class=" ">
    <?php if($canBeEdited) {
        echo '<a href=" '.get_edit_post_link($contact_map_macular->ID, 'none').' ">Edit Map</a>';
    } ?>
</div>

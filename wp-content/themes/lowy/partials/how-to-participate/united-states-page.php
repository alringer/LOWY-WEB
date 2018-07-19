<?php $country_page_content_page = get_page(1734); ?>
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>

<?php echo '<p>'. apply_filters( 'post_content',  $country_page_content_page->post_content ) .'</p>';  ?>
<div class="can-edit-wrap">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($about_macular_card_page->ID, 'none').' ">Edit</a>';
                    } ?>
</div>
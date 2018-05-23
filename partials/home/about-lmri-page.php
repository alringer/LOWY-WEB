 <?php $pages = get_pages( array( 'child_of' => 24 ) ); ?>
<?php
// sorts by page added
sort($pages);
?>

<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
 
<section class="container">

 <div class="row">
    <div class="col-xs-12">
        <ul class="list--grid-order">


    <?php foreach ( $pages as $page ) : ?>

            <li>
                <?php echo '<img src="'.get_the_post_thumbnail_url($page->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
            </li>
            <li class="position--relative">
                <h3><?php echo apply_filters( 'the_title', $page->post_title, $page->ID )  ?></h3>
                <?php echo apply_filters( 'the_excerpt', wp_trim_words( $page->post_content, 21, "" ) ); ?>
                <a href="<?php echo get_permalink($page->ID); ?>"> Read More...  </a>
                <div class="position--absolute can-edit">
                    <?php if($canBeEdited) {
                        echo '<a href=" '.get_edit_post_link($page->ID, 'none').' ">Edit</a>';
                    } ?>
                </div>
            </li>
        
        
    <?php endforeach; ?>
        </ul>

    </div>
</div>

</section>


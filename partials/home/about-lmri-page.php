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
        
        <?php
            // thumbnail with custom dimension 
            // echo get_the_post_thumbnail( $page->ID, array( 260, 300));
            // thumbnail url if needed
           
            // adds alt tag to thumbnail
            // echo get_post_meta($page->ID, '_wp_attachment_image_alt', true);
            // h3 post title
            // echo '<h3>'.apply_filters( 'the_title', $page->post_title, $page->ID ).'</h3>';
            // page content of partials
            // echo apply_filters( 'the_content', $page->post_content );
            // id if needed 
            // echo 'ID'.$page->ID;
            // if($canBeEdited) {
            //     echo '<a href=" '.get_edit_post_link($page->ID, 'none').' ">Edit</a>';
            // }
        ?>
        
    <?php endforeach; ?>
        </ul>

    </div>
</div>

</section>


<div class="d-flex flex-row">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
<div class="d-flex flex-row-reverse">
  <div class="p-2">Flex item 1</div>
  <div class="p-2">Flex item 2</div>
  <div class="p-2">Flex item 3</div>
</div>
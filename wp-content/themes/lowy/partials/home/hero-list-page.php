<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>
<div class="container">
    
    <ul class="list list--unstyled list--inline list--home-hero row justify-content-md-center">
        <!-- Id of child section -->
        <?php $pages = get_pages( array( 'child_of' => 24 ) ); ?>
        <?php
        // sorts by page added
            sort($pages);
        ?>
            <?php foreach ( $pages as $page ) : ?>
                <li class="col-12 col-sm-6 col-lg-3">
                    <?php
                        // thumbnail with custom dimension 
                        // echo get_the_post_thumbnail( $page->ID, array( 260, 300));
                        // thumbnail url if needed
                        echo '<img src="'.get_the_post_thumbnail_url($page->ID, 'post-thumbnail').'" class="img-responsive">';
                        // adds alt tag to thumbnail
                        echo get_post_meta($page->ID, '_wp_attachment_image_alt', true);
                        // h3 post title
                        echo '<h3>'.apply_filters( 'the_title', $page->post_title, $page->ID ).'</h3>';
                        // page content of partials
                        echo apply_filters( 'the_content', $page->post_content );
                        // id if needed 
                        // echo 'ID'.$page->ID;
                        if($canBeEdited) {
                            echo '<a href=" '.get_edit_post_link($page->ID, 'none').' ">Edit</a>';
                        }
                    ?>
                </li>
            <?php endforeach; ?>
    </ul>
</div>
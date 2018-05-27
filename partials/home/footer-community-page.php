<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $community_page_id = 61;
?>
    
    <div class="">
        <!-- Id of child section -->
        <?php $community_pages = get_pages( array( 'child_of' => $community_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) ); ?>
        <?php
         $parent_page = get_page($community_page_id);
         $title = $parent_page->post_title;
        echo '<h3 class="footer__heading">'.apply_filters('post_title', $title).'</h3>'; // the title is here wrapped with h3
        // sorts by page added
            //sort($community_pages);
            $footer_i = 0;
            $footer_limit = 2;
        ?>
            <?php foreach ( $community_pages as $community_page ) : ?>
            <?php if ($footer_i < $footer_limit): ?>
                <div class="footer__community">
                    <div class="footer__community__thumb">
                        <?php  echo '<img src="'.get_the_post_thumbnail_url($community_page->ID, array( 100, 100)).'" class="img-responsive">'; ?>
                    </div>
                    <div class="footer__community__desc">
                        <?php
                            // h3 post title
                            echo '<h3 class="footer__subheading">'.apply_filters( 'the_title', $community_page->post_title, $community_page->ID ).'</h3>';
                        ?>
                        <a href="<?php echo get_permalink($community_page->ID)?>" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
                        <?php
                            $footer_i++;
                        ?>
                    </div>
                </div>
                    <?php endif; ?>
            <?php endforeach; ?>
    </div>
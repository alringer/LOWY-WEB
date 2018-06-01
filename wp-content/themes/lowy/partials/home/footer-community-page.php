<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $community_page_id = 17;
    $community_pages = get_pages( array( 'child_of' => $community_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
    $community_parent_page = get_page($community_page_id);
    $community_title = $community_parent_page->post_title;
    $footer_i = 0;
    $footer_limit = 2;
?>
<?php $catquery = new WP_Query( 'cat=22&posts_per_page=2' ); ?>
<h3 class="footer__heading"><?php echo apply_filters('post_title', $community_title) ?></h3>

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
<div class="footer__community">
    <div class="footer__community__desc">
        <h3 class="footer__subheading"><?php the_title(); ?></h3>
        <a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
        <!-- <p><?php the_content(); ?></p> -->
    </div>
</div>
<?php endwhile; ?> 

<?php wp_reset_postdata(); ?>
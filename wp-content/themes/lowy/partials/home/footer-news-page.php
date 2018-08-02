<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $community_page_id = 109;
    $community_pages = get_pages( array( 'child_of' => $community_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
    $community_parent_page = get_page($community_page_id);
    $community_title = $community_parent_page->post_title;
?>
<?php $catquery = new WP_Query( 'cat=17&posts_per_page=2' ); ?>
<h3 class="footer__heading"><?php _e('News')?></h3>

<?php 
    while($catquery->have_posts()) : $catquery->the_post();
    $community_meta_img = get_post_meta($post->ID, 'alternate-hero-img', $single = true);
    $community_img =  strlen($community_meta_img ) > 0 ? $community_meta_img :  '/wp-content/themes/lowy/img/default/default_bg.jpg';
?>
<div class="footer__community">
    <div class="footer__community__thumb">
        <img src="<?php echo $community_img; ?>" alt="">
    </div>
    <div class="footer__community__desc">
    
    <?php
    
    ?>
        <h3 class="footer__subheading"><?php echo mb_strimwidth(get_the_title(),0, 42, "..." ); //the_title(); ?></h3>
        <a href="<?php the_permalink() ?>" rel="bookmark" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
    </div>
</div>
<?php endwhile; ?> 

<?php wp_reset_postdata(); ?>
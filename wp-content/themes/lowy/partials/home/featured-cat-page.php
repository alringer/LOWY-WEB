<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_page_id = 17;
    $featured_pages = get_pages( array( 'child_of' => $featured_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
    $featured_parent_page = get_page($featured_page_id);
    $featured_cat_id =  25;
    $featured_cat_limit = 3;
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'');

    $featured_page_bg_id = 1500;
    $featured_page_bg_page = get_page($featured_page_bg_id);
    $featured_page_bg_img = get_the_post_thumbnail_url($featured_page_bg_page->ID, 'post-thumbnail')
?>
<div class="featured-wrap home__bg-image" style="background-image:url('<?php echo $featured_page_bg_img; ?>')">
<section class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center"><?php echo get_cat_name(25) ?></h2>
        </div>
    </div>
</section>
<div class="featured__outter-wrap">
    <section class="featured__inner-wrap">
        <ul class="list list--unstyled list--featured">
            <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
                <li>
                    <div class="featured__card-img">
                    <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                    </div>
                    <div class="featured__card-content">
                    <div class="featured__card-date"><?php echo get_the_date( 'M Y' ); ?></div>
                        <h3><?php the_title(); ?></h3>
                        
                        <a href="<?php the_permalink() ?>" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
                    </div>
                </li>
            <?php endwhile; ?> 
        </ul>
    </section>
</div>


</div>


<?php wp_reset_postdata(); ?>
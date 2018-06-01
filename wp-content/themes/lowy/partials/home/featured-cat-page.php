<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_page_id = 17;
    $featured_pages = get_pages( array( 'child_of' => $featured_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
    $featured_parent_page = get_page($featured_page_id);
    $featured_cat = get_the_category( 25 );
    $category_name = $featured_cat[0]->cat_name;
?>
<?php $featured_catquery = new WP_Query( 'cat=25&posts_per_page=3' ); ?>
<section class="container">
    <div class="row">
        <div class="col-12">
            <h2><?php echo $featured_cat[0]->cat_name; ?></h2>
        </div>
    <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
        <div class="col-4">
            <div class="">
                <h3 class=""><?php the_title(); ?></h3>
                <a href="<?php the_permalink() ?>" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
                <!-- <p><?php the_content(); ?></p> -->
            </div>
        </div>
    <?php endwhile; ?> 
    </div>
</section>


<?php wp_reset_postdata(); ?>
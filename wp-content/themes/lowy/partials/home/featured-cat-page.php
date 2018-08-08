<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_page_id = 17;
    $featured_pages = get_pages( array( 'child_of' => $featured_page_id, 'sort_order' => 'desc', 'sort_column' => 'ID'  ) );
    $featured_parent_page = get_page($featured_page_id);
    $featured_cat_id =  25;
    $featured_cat_limit = 3;
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'');
    $featured_index = 0;
    $featured_page_bg_id = 1500;
    $featured_page_bg_page = get_page($featured_page_bg_id);
    $featured_page_bg_img = get_the_post_thumbnail_url($featured_page_bg_page->ID, 'post-thumbnail')
?>
<div class="featured-wrap " style="background-image:url('<?php echo $featured_page_bg_img; ?>')">
<section class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center"><?php echo get_cat_name(25) ?></h2>
        </div>
    </div>
</section>
 <!-- mobile slider -->
<div class="container d-block d-lg-none">
    <div class="row justify-content-center">
        <div class="col-11 col-md-10 col-lg-8">
        <!-- #featuredCatCarousel slider -->
        <div id="featuredCatCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#featuredCatCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#featuredCatCarousel" data-slide-to="1"></li>
                    <li data-target="#featuredCatCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
                        <div class="carousel-item <?php if($featured_index == 0) { echo 'active'; } ?>">
                            <div class="featured__card-img">
                                <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                            </div>
                            <div class="featured__card-content">
                                <div class="featured__card-date"><?php echo get_the_date( 'M Y' ); ?></div>
                                <h3><?php the_title(); ?></h3>
                                <a href="<?php echo get_post_meta($post->ID, 'link-offsite', true);  ?>" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
                            </div>
                        </div>
                        <?php $featured_index++; ?>
                    <?php endwhile; ?> 
                </div>  
            </div>
        </div> <!-- end #featuredCatCarousel slider -->
    </div>
</div>
<!-- end mobile slider -->
<div class="featured__outter-wrap d-none d-sm-none d-lg-block">
    <section class="featured__inner-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
                    <div class="col-4">
                        <div class="featured__card-img">
                        <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                        </div>
                        <div class="featured__card-content">
                        <div class="featured__card-date"><?php echo get_the_date( 'M Y' ); ?></div>
                            <h3><?php the_title(); ?></h3>
                            
                            <a href="<?php echo get_post_meta($post->ID, 'link-offsite', true);  ?>" class="read-more">Read More <span class="icn icn--arrow"></span> </a>
                            <div>
                            <?php edit_post_link(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?> 
            </div>
        </div>
    </section>
</div>


</div>


<?php wp_reset_postdata(); ?>
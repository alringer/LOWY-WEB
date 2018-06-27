<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_cat_id =  27;
    $featured_cat_limit = 3;
    $reading_centers_related_posts = get_the_ID();
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'');
?>

<section class="single-page-template--content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="list list--unstyled list--clinical-research-featured row justify-content-md-center justify-content-lg-start">
                    <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>

                        <li class="col-12 col-md-4 col-lg-3">
                            <div class="cards__small cards__card-animation">

                                <div class="cards__small-thumb">
                                    <?php echo '<img src="'.get_the_post_thumbnail_url($post->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                                </div>
                        
                                <div class="cards__small-content">
                                    
                                    <h3><?php the_title(); ?></h3>
                                    
                                    <div class="home__card-grid__content-wrap-right-arrow">
                                        <a href="<?php echo get_permalink($about_lmri_page->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>
                                    </div>

                                    <div class=" ">
                                        <?php if($canBeEdited) {
                                            echo '<a href=" '.get_edit_post_link($reading_centers_related_posts->ID, 'none').' ">Edit</a>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    <?php endwhile; ?> 
                </ul>
            </div>
        </div>
    </div>  
</section>

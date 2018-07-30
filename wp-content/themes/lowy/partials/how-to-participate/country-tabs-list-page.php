<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_cat01_id =  28;
    $featured_cat01_limit = 7;
    $counter_01 = 0;
    $featured_cat01query = new WP_Query( 'cat='.$featured_cat01_id.'&posts_per_page='.$featured_cat01_limit.'&order=asc');
?>

<section class="single-page-template__country-list-tabs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>
                    <?php _e('Choose a country or region: ', 'html5blank'); ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs" id="countryTab" role="tablist">

                    <?php while($featured_cat01query->have_posts()) : $featured_cat01query->the_post(); ?>
                        <li class="nav-item">
                            <a href="#<?php the_ID(); ?>" data-toggle="tab" class="nav-link <?php echo $counter_01 === 0 ? 'active' : '';  ?>"  role="tab"  aria-controls="<?php the_ID(); ?>" aria-selected="<?php echo $counter_01 === 0 ? 'true' : 'false';  ?>"><?php the_title(); ?></a>
                        </li>
                        <?php $counter_01++; ?>
                    <?php endwhile; ?> 
				</ul>
            </div>
        </div>
    </div>
</section>
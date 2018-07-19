<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
    $featured_cat_id =  28;
    $featured_cat_limit = 7;
    $counter_02 = 0;
    $clinical_research_cards_id = get_the_ID();
    $featured_catquery = new WP_Query( 'cat='.$featured_cat_id.'&posts_per_page='.$featured_cat_limit.'&order=asc');
?>

<section>
		<div class="container">
			<div class="row">
			    <div class="col-12">
				    <div class="tab-content" id="countryTabContent">
                    <?php while($featured_catquery->have_posts()) : $featured_catquery->the_post(); ?>
                        <div class="tab-pane tab-pane--single-page-tab fade <?php echo $counter_02 === 0 ? 'show active' : '';  ?>" id="<?php the_ID(); ?>" role="tabpanel" aria-labelledby="<?php the_ID(); ?>-tab">
                            <div class="single-page-template__card-title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                            <?php echo the_content(); ?>
                            <div class="can-edit-wrap">
                                <?php 
                                $counter_02++;
                                    if($canBeEdited) {
                                        echo '<a href=" '.get_edit_post_link($clinical_research_cards_id->ID, 'none').' ">Edit</a>';
                                    } 
                                ?>
                            </div>
                        </div>
                    <?php endwhile; ?> 
			    </div>
            </div>
		</div>
</section>


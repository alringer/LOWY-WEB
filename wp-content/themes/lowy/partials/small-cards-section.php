<?php 
	$card_template_sections = get_post_meta($post->ID, 'card_id', $single = false);
?>				
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>


        <section class="single-page-template--content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="list list--unstyled list--clinical-research-featured row justify-content-md-center justify-content-lg-start">
                            
                            
                        <?php if (count($card_template_sections) > 0 ): ?>
                                <?php foreach ($card_template_sections as $card_template_section_id) : ?>
                                <?php $card_template_section =  get_page($card_template_section_id); ?>
                                <?php $card_meta_data = get_post_meta($card_template_section ->ID, 'card-custom-text', $single = true); ?>
            
                               
                                    <li class="col-12 col-md-4 col-lg-3">
                                        <div class="cards__small cards__card-animation">

                                            <div class="cards__small-thumb">
                                                <?php echo '<img src="'.get_the_post_thumbnail_url($card_template_section->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                                            </div>
                                    
                                            <div class="cards__small-content">
                                                
                                                
                                                <h3><?php echo apply_filters( 'the_title', $card_template_section->post_title, $card_template_section->ID )  ?></h3>
                                                
                                                <div class="home__card-grid__content-wrap-right-arrow">
                                                    <a href="<?php echo get_permalink($card_template_section ->ID); ?>" class="read-more"> Read More <span class="icn icn--arrow"></span> </a>
                                                </div>

                                                <div class=" ">
                                                    <?php if($canBeEdited) {
                                                        echo '<a href=" '.get_edit_post_link($card_template_section ->ID, 'none').' ">Edit</a>';
                                                    } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                            <?php endif; ?>
                                                  
                        </ul>
                    </div>
                </div>
            </div>  
        </section>
            
            

			<?php //get_template_part('partials/line', 'page'); ?>
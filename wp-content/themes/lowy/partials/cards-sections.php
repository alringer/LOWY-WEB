<?php 
		$card_template_sections = get_post_meta($post->ID, 'card_id', $single = false);
?>				
<?php 
    $canBeEdited = current_user_can('editor') || current_user_can('administrator');
?>

	<?php if (count($card_template_sections) > 0 ): ?>
			<?php foreach ($card_template_sections as $card_template_section_id) : ?>
            <?php $card_template_section =  get_page($card_template_section_id); ?>
            <?php $card_meta_data = get_post_meta($card_template_section ->ID, 'card-custom-text', $single = true); ?>
			
			<section class="single-page-template--content ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="cards__posts ">
                                <?php echo '<img src="'.get_the_post_thumbnail_url($card_template_section->ID, 'post-thumbnail').'" class="img-responsive">'; ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-8">
                            <div class="single-page-template__card-title ">
                                <!-- <h3><?php //the_title(); ?></h3> -->
                                <h3><?php echo apply_filters( 'the_title', $card_template_section->post_title, $card_template_section->ID )  ?></h3>
                            </div>
                            
                            <?php //echo '<p>'. apply_filters( 'the_content',( $about_lmri_cards_id->post_content ) ) .'</p>'; ?> 
                            
                            <?php //echo '<p>'. strip_shortcodes( apply_filters( 'post_content', wp_trim_words( $card_template_section->post_content, 31, "" ) ) ) .'</p>';  ?>
                            <?php echo '<p>'.$card_meta_data.'</p>'; ?>


                            <?php //echo '<p>'. apply_filters( 'post_content', wp_trim_words( $post->post_content, 32, "" ) ) .'</p>';  ?>

                            
                            <?php //echo get_post_field('post_content'); ?>


                            <div>
                                <a href="<?php echo get_permalink($card_template_section->ID); ?>" class="read-more-btn"> Read More  <span class=""></span></a>
                            </div>  

                            <div class="can-edit-wrap">
                                <?php if($canBeEdited) {
                                    echo '<a href=" '.get_edit_post_link($card_template_section->ID, 'none').' ">Edit</a>';
                                } ?>
                            </div>


                        </div>
                    </div>
                </div>
            </section>   
			
			<?php //get_template_part('partials/line', 'page'); ?>
			<?php endforeach; ?>
    <?php endif; ?>
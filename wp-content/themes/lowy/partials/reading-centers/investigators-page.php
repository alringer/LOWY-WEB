<?php 
    // Collaborating Investigators
    $investigators = get_post_meta($post->ID, 'investigator_id', $single = false);

?>
<!-- <section class="container">
<aside class="row"> -->
<?php 
    if (count($investigators) > 0 ):
        foreach ($investigators as $key): ?>
        <?php $investigator = get_page($key); ?>
        <?php 
            $image_default = strlen(get_the_post_thumbnail_url($investigator->ID, 'full')) > 0 ? 
                                    get_the_post_thumbnail_url($investigator->ID, 'full') : '/wp-content/themes/lowy/img/icons/abstract_user.svg'; ?>
            <div class="investigators">
                <div class="investigators__thumbs">
                <?php echo '<img src="'.$image_default.'">'; ?>
                </div>
                <div class="investigators__desc">
                    <div class="investigators__desc__title">
                        <h4><?php echo apply_filters( 'the_title', $investigator->post_title, $investigator->ID ); ?></h4>
                        <p>
                            <?php echo get_post_meta($investigator->ID, 'bio_title', $single = true);?>
                        </p>
                        <p>
                            <a href="<?php echo get_permalink($investigator->ID); ?>" class="read-more-btn">Read more</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
    <!-- 
        <div class="col-4">
            <h4>Investigators:</h4>
                <?php //get_template_part('partials/reading-centers/investigators', 'page'); ?>
            </div>
     -->
<!-- </aside>

</section> -->
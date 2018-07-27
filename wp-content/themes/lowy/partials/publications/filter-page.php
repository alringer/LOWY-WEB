<section class="single-page-template__filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchandfilter">
                        <ul>
                            <li>
                                <input type="hidden" name="cat" id="cat" value="20" />
                                <input type="text" size="16" name="s" value="" placeholder="SERCH TITLE OR AUTHOR" />
                            </li>
                            <li>
                                <input type="submit" value="Submit" />
                            </li>
                        </ul>
                        
                    </form>  
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12">  
                <br>
                    <?php //echo do_shortcode( '[searchandfilter fields="search" types=","]' ); ?>
                </div>
            </div> -->
        </div>
</section>
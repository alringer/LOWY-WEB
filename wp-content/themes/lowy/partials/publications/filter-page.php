<section class="single-page-template__filter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="searchandfilter">
                        <ul>
                            <li>
                                <!-- <input type="hidden" name="cat" id="cat" value="20" /> -->
                                <input type="text" size="16" name="s" value="" placeholder="Search" />
                            </li>
                            <li>
                            <select name="ofcategory" id="ofcategory" class="postform">
                                <option value="0" selected="selected">All Categories</option>
                                <!-- <option class="level-0" value="34">Australia</option>
                                <option class="level-0" value="16">BOD</option>
                                <option class="level-0" value="12">BSG</option> -->
                                <!-- <option class="level-0" value="15">Clinical Research</option>
                                <option class="level-0" value="27">Clinical Research Featured</option>
                                <option class="level-0" value="23">Clinician Perspectives</option>
                                <option class="level-0" value="21">Coordinators</option>
                                <option class="level-0" value="28">country</option>
                                <option class="level-0" value="22">Events</option>
                                <option class="level-0" value="14">Extramural Investigators</option>
                                <option class="level-0" value="25">featured publications</option>
                                <option class="level-0" value="35">France</option>
                                <option class="level-0" value="32">Germany</option>
                                <option class="level-0" value="10">Home Callout</option>
                                <option class="level-0" value="33">Israel</option>
                                <option class="level-0" value="9">Laboratory Research</option>
                                <option class="level-0" value="31">Netherlands</option>
                                <option class="level-0" value="17">News</option>
                                <option class="level-0" value="19">Patient Perspectives</option> -->
                                <option class="level-0" value="20">Publications</option>
                                <!-- <option class="level-0" value="11">Sponsors</option>
                                <option class="level-0" value="13">Staff</option>
                                <option class="level-0" value="1">Uncategorized</option>
                                <option class="level-0" value="30">United Kingdom</option>
                                <option class="level-0" value="29">United States</option> -->
                            </select>
                            </li>
                            <li>
                                <input type="submit" value="Submit" />
                            </li>
                        </ul>
                        
                    </form>  
                </div>
            </div>
            <div class="row">
                <div class="col-12">  
                <br>
                    <?php echo do_shortcode( '[searchandfilter fields="search,category" types=",select"]' ); ?>
                </div>
            </div>
        </div>
</section>
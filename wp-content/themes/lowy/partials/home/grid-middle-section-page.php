
 
<section class="container">

 <div class="row">
    <div class="col-12 col-md-6 col-lg-4" >
        <?php get_template_part('partials/home/clinical-research', 'page'); ?>
     
    </div>
    <!-- not visible on mobile -->
    <div class="col-12 col-md-6 d-none d-md-block d-lg-none"> 
        <?php  get_template_part('partials/home/clinical-research', 'page'); ?>
       
    </div>
    <!-- end not visible on mobile -->
    <div class="container col-lg-8">
        <div class="row">
            <!-- visible on tablet and desktop -->
            <div class="col-12 d-block d-sm-none d-lg-block d-xl-block">
                <?php  get_template_part('partials/home/about-mactel', 'page'); ?>
               
            </div>
            <!-- end of visible on tablet and desktop -->
            <div class="col-12">
                <?php  get_template_part('partials/home/clinical-research', 'page'); ?>
                
            </div>
        </div>
    </div>
</div>

</section>


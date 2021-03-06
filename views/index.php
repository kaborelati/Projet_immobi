<?php 
    include 'includes/header.php';
    ?>

 <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(http://localhost/Projet_immobi/framework/img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Trouver votre maison</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(http://localhost/Projet_immobi/framework/img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Trouver la maison de vos reve</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(http://localhost/Projet_immobi/framework/img/bg-img/hero3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="100ms">Trouver la maison parfaite</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->

    <div class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">

                                

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>Type maison</option>
                                            <?php
                                               if(isset($type_maison_listen)){
                                               foreach ($type_maison_listen as $key => $value) {

                                                       ?>
                                              
                                        <option value="<?php echo $value['id_typ'];?>"><?php echo $value['libelle'];?></option>
                                <?php                  
                                               }
                                                   
                                               }
                                                    ?>     
                                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-3">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>Quartiers</option>
                                             <?php
                                               if(isset($quatier_liste)){
                                               foreach ($quatier_liste as $key => $value) {

                                                       ?>
                                              
                                        <option value="<?php echo $value['id_quart'];?>"><?php echo $value['libelle'];?></option>
                                <?php                  
                                               }
                                                   
                                               }
                                                    ?>     
                                                        
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-12 col-lg-12 col-xl-5 d-flex">
                                    <!-- Space Range -->
                                    

                                    <!-- Distance Range -->
                                    <div class="slider-range">
                                        <div data-min="10" data-max="1300" data-unit=" mil" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="10" data-value-max="1300">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        </div>
                                        <div class="range">10 mil - 1300 mil</div>
                                    </div>
                                </div>

                              

                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    
                                    <!-- Submit -->
                                    <div class="form-group mb-1">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->

    <!-- ##### Featured Properties Area Start ##### -->
    <section class="featured-properties-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature1.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Villa in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="200ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature2.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature3.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature4.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Villa in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature5.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Featured Property -->
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature6.jpg" alt="">

                            <div class="tag">
                                <span>For Sale</span>
                            </div>
                            <div class="list-price">
                                <p>$945 679</p>
                            </div>
                        </div>
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5>Town House in Los Angeles</h5>
                            <p class="location"><img src="http://localhost/Projet_immobi/framework/img/icons/location.png" alt="">Upper Road 3411, no.34 CA</p>
                            <p>Integer nec bibendum lacus. Suspendisse dictum enim sit amet libero malesuada.</p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                                <div class="new-tag">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/new.png" alt="">
                                </div>
                                <div class="bathroom">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/bathtub.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="garage">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/garage.png" alt="">
                                    <span>2</span>
                                </div>
                                <div class="space">
                                    <img src="http://localhost/Projet_immobi/framework/img/icons/space.png" alt="">
                                    <span>120 sq ft</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(http://localhost/Projet_immobi/framework/img/bg-img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Suspendisse dictum enim sit amet libero malesuada feugiat.</h6>
                        <a href="#" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Search</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>Client testimonials</h2>
                        <p>Suspendisse dictum enim sit amet libero malesuada feugiat.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="http://localhost/Projet_immobi/framework/img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    
    <!-- ##### Editor Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
  <?php 
    include 'include/footer.php';
    ?>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="http://localhost/Projet_immobi/framework/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="http://localhost/Projet_immobi/framework/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="http://localhost/Projet_immobi/framework/js/plugins.js"></script>
    <script src="http://localhost/Projet_immobi/framework/js/classy-nav.min.js"></script>
    <script src="http://localhost/Projet_immobi/framework/js/jquery-ui.min.js"></script>
    <!-- Active js -->
    <script src="http://localhost/Projet_immobi/framework/js/active.js"></script>

</body>

</html>
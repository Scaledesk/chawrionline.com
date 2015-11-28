<?php
    $logout=$this->input->get('logout');
    if($logout){
        echo "<div style='text-align:center;' class=' container alert alert-success'>".'you are successfully logged out'."</div>";
    }else{
        getInformUser();
    }
    ?>
<div class="em-wrapper-area01-02-03">
                    <div class="container">
                  <!-- ..................................counter point .......................................................... -->  
                     <div class="row counter-row">
                      <div class="col-md-24 counter-24">
                        <div class="col-md-8 counter-box">
<!-- hitwebcounter Code START -->

<h3 class="counter-text">Members</h3>
    <span class="counter"><?php echo $counter['count'];?></span>
                           </div> 
                        <div class="col-md-8 counter-box">
                        <!-- hitwebcounter Code START -->
                         <h3 class="counter-text">Quantity on Offer</h3>
                            <span class="counter"> <?php echo $counter['products'];  ?></span>
                         </div>
                        <div class="col-md-8 counter-box">
                        <!-- hitwebcounter Code START -->
                     <h3 class="counter-text">Revenue </h3>
                            <span class="counter">9834789</span>


                        </div>
                        </div>
                     </div>
                     <!-- ............................end counter ................................................................ -->
                        <div class="row">

                        
                            <div class="col-sm-6">
                                <div class="em-wrapper-area01">
                                    <div class="menu-wrapper hidden-xs">
                                        <div id="menuleftText" class="all_categories">
                                            <div class="menuleftText-title">
                                                <div class="menuleftText"><span class="em-text-upercase">Categories</span> </div>
                                            </div>
                                        </div>
                                        <div class="menuleft">
                                            <div id="menu-default" class="mega-menu em-menu-icon">
                                                <div class="megamenu-wrapper wrapper-13_2552">
                                                    <div class="em_nav" id="toogle_menu_13_2552">
                                                        <ul class="vnav em-menu-icon effect-menu em-menu-long">


                                                            <?php

                                                            foreach($categories as $row){
                                                            ?>
                                                            <li class="menu-item-link menu-item-depth-0">

                                                            <a class="em-menu-link" href="<?php echo  base_url().'users/showCategoryProduct/'.$row->chawri_categories_id;?>"> <span><?php echo $row->chawri_categories_name; ?></span> </a>
                                                                
                                                            </li>

                                                            <?php } ?>
                                                            
                                                        </ul><!-- /.vnav -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.menuleft -->
                                    </div><!-- /.menu-wrapper -->
                                  
                                </div>
                            </div>
                            <div class="col-sm-18">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <li data-target="#carousel-example-generic" data-slide-to="4"></li>
      <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo  asset_url();?>images/chawri13.jpg" alt="...">
      <div class="carousel-caption">
        Chawri Online
      </div>
    </div>
    <div class="item">
      <img src="<?php echo  asset_url();?>images/chawri22.jpg" alt="...">
      <div class="carousel-caption">
        Chawri Online
      </div>
    </div>
    <div class="item">
      <img src="<?php echo  asset_url();?>images/chawri3.jpg" alt="...">
      <div class="carousel-caption">
        Chawri Online
      </div>
    </div>


      <div class="item">
          <img src="<?php echo  asset_url();?>images/slider5.jpg" alt="...">
          <div class="carousel-caption">
              Chawri Online
          </div>
      </div>
      <div class="item">
          <img src="<?php echo  asset_url();?>images/slider5.jpg" alt="...">
          <div class="carousel-caption">
              Chawri Online
          </div>
      </div>

      <div class="item">
          <img src="<?php echo  asset_url();?>images/chawri4.jpg" alt="...">
          <div class="carousel-caption">
              Chawri Online
          </div>
      </div>



  </div>


</div>
                                
                <div class="em-wrapper-area06">
                                <div class="em-wrapper-brands">
                                    <div class="slider-style02">
                                        <div class="em-slider em-slider-banners em-slider-navigation-icon" data-emslider-navigation="true" data-emslider-items="6" data-emslider-desktop="5" data-emslider-desktop-small="4" data-emslider-tablet="3" data-emslider-mobile="2">
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_01.jpg" src="<?php echo  asset_url();?>images/brand/brand1.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_02.jpg" src="<?php echo  asset_url();?>images/brand/brand2.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_03.jpg" src="<?php echo  asset_url();?>images/brand/brand3.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_04.jpg" src="<?php echo  asset_url();?>images/brand/brand4.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_05.jpg" src="<?php echo  asset_url();?>images/brand/brand5.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_06.jpg" src="<?php echo  asset_url();?>images/brand/brand6.gif"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_07.jpg" src="<?php echo  asset_url();?>images/brand/brand7.gif"> </a>
                                            </div>








                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_09.jpg" src="<?php echo  asset_url();?>images/brand/brand9.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_09.jpg" src="<?php echo  asset_url();?>images/brand/brand10.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_11.png" src="<?php echo  asset_url();?>images/brand/brand11.png"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_11.jpg" src="<?php echo  asset_url();?>images/brand/brand12.png"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_12.jpg" src="<?php echo  asset_url();?>images/brand/brand13.gif"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_13.jpg" src="<?php echo  asset_url();?>images/brand/brand14.gif"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_14.jpg" src="<?php echo  asset_url();?>images/brand/brand15.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_15.jpg" src="<?php echo  asset_url();?>images/brand/brand17.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_16.jpg" src="<?php echo  asset_url();?>images/brand/brand18.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_17.jpg" src="<?php echo  asset_url();?>images/brand/brand19.png"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_18.jpg" src="<?php echo  asset_url();?>images/brand/brand20.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_19.jpg" src="<?php echo  asset_url();?>images/brand/brand21.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_20.jpg" src="<?php echo  asset_url();?>images/brand/brand22.jpg"> </a>
                                            </div>

                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_21.jpg" src="<?php echo  asset_url();?>images/brand/brand23.jpg"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_22.jpg" src="<?php echo  asset_url();?>images/brand/brand24.gif"> </a>
                                            </div>
                                            <div class="em-banners-item">
                                                <a href="#"><img class="img-responsive" alt="<?php echo  asset_url();?>em_brand_23.jpg" src="<?php echo  asset_url();?>images/brand/brand26.png"> </a>
                                            </div>





                                        </div><!-- /.em-slider -->
                                    </div>
                                </div>
                            </div><!-- /.em-wrapper-area06 -->
                                
                    <div class="row">
                        
                        <div class="col-md-3" style="width:24%">
                                
                      
<div class="list-group">
  <li  class="list-group-item ">
    Packing
  </li>
  <a href="#" class="list-group-item">Less than 30</a>
  <a href="#" class="list-group-item">31 to 50</a>
  <a href="#" class="list-group-item">51-100</a>
  <a href="#" class="list-group-item">More...</a>

</div>
                    </div>
                        
            <div class="col-md-3" style="width:24%">
                                
            <div class="list-group">
  <li  class="list-group-item ">
    Size
  </li>
  <a href="#" class="list-group-item">Size 1</a>
  <a href="#" class="list-group-item">Size 2</a>
  <a href="#" class="list-group-item">Size 3</a>
  <a href="#" class="list-group-item">Size 4</a>
</div>
            
                </div>
                        
        <div class="col-md-3" style="width:24%" >
                                
                        <div class="list-group">
  <li  class="list-group-item ">
    Bulk
  </li>
  <a href="#" class="list-group-item">Bulk 1</a>
  <a href="#" class="list-group-item">Bulk 2</a>
  <a href="#" class="list-group-item">Bulk 3</a>
  <a href="#" class="list-group-item">Bulk 4</a>
</div>
                    </div>
                        
            <div class="col-md-3" style="width:24%">
                                
                        <div class="list-group">
  <li class="list-group-item ">
    Mills 
  </li>
  <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item">Morbi leo risus</a>
  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item">Vestibulum at eros</a>
</div>
                    </div>
                                
                                
                            </div>
                                
                <div class="row">
                        
                        <div class="col-md-3" style="width:24%">
                          

                           <div class="list-group">
  <li  class="list-group-item ">
    GSM
  </li>

  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 1 . '/'. 30; ?>" class="list-group-item">Less than 30</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 31 . '/'. 50; ?>" class="list-group-item">31 to 50</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 51 . '/'. 100; ?>" class="list-group-item">51-100</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 101 . '/'. 200; ?>" class="list-group-item">101-200</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 201 . '/'. 300; ?>" class="list-group-item">201-300</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 301 . '/'. 400; ?>" class="list-group-item">301-400</a>
  <a href="<?php  echo base_url().'users/searchProductByGSM/'. 401 . '/'. 500; ?>" class="list-group-item">Above 400</a>
</div>      
                        
                    </div>
                        
            <div class="col-md-3" style="width:24%">
                                
            <div class="list-group">
  <li  class="list-group-item ">
    Grain
  </li>
  <a href="#" class="list-group-item">Size 1</a>
  <a href="#" class="list-group-item">Size 2</a>
  <a href="#" class="list-group-item">Size 3</a>
  <a href="#" class="list-group-item">Size 4</a>
</div>
            
                </div>
                        
        <div class="col-md-3" style="width:24%" >
                                
                        <div class="list-group">
  <li  class="list-group-item ">
    Price
  </li>
  <a href="#" class="list-group-item">Bulk 1</a>
  <a href="#" class="list-group-item">Bulk 2</a>
  <a href="#" class="list-group-item">Bulk 3</a>
  <a href="#" class="list-group-item">Bulk 4</a>
</div>
                    </div>
                        
            <div class="col-md-3" style="width:24%">
                                
                        <div class="list-group">
  <li class="list-group-item">
    Availability - Location 
  </li>
  <a href="#" class="list-group-item">Delhi</a>
  <a href="#" class="list-group-item">Noida</a>
  <a href="#" class="list-group-item">Ghaziabad</a>
  <a href="#" class="list-group-item">Etc</a>
</div>
                    </div>
                                
                                
                            </div>
                           
                        </div>
                    </div>
                </div><!-- /.em-wrapper-area01-02-03 -->

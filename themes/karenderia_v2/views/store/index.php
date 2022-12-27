<style>
   .auto-complete{
   width: 100%;  
   }
   .position-relative.search-geocomplete
   {
   margin: 0 15px;
   }
   .position-relative.search-geocomplete .form-control.form-control-text
   {
   height: 47px;
   min-height: 47px;
   font-size: 13px;
   border-radius: 10px;
   color: #4b4342 !important;
   background-color: #fff;
   border: 1px solid #ced4da;
   }
</style>
<!--MAIN SEARCH BANNER-->
<section  data-aos="fade-right" class="banner container-fluid d-flex justify-content-center" id="main-search-banner">
   <div class="auto-container w100">
      <div class="row justify-content-center" data-aos="fade-right" data-aos-delay="600">
         <div class="col-sm-6 col-md-6 col-lg-5" >
            <div class="main-cov">
               <div class="header-main">
                  <h3>Welcome to the <br> Home Bakery Marketplace!</h3>
               </div>
              
               <div class="content-main">
                  <p>Enter your address to find talented bakers and creative treats near you!</p>
                  <!--<DIV id="vue-home-search" class="home-search-wrap position-relative d-none d-lg-block">  -->
                  <!--    <component-home-search-->
                  <!--    ref="childref"-->
                  <!--    next_url="<?php echo Yii::app()->createAbsoluteUrl('store/bakers')?>"-->
                  <!--    auto_generate_uuid = "true"-->
                  <!--    :label="{        -->
                  <!--    enter_address: '<?php echo CJavaScript::quote(t("Enter address"))?>',           -->
                  <!--    }"      -->
                  <!--    />-->
                  <!--    </component-home-search>   -->
                  <!--</DIV>--> 
                  <div class="form-group form-box">
                     <div id="vue-merchant-signup" class="row">
                        <div class="auto-complete position-relative">
                          
                            <input type="hidden" id="address" :value="address">
                           <component-auto-complete
                              v-model="address" 
                              :modelValue="address"
                              @update:modelValue="address = $event"
                              ref="auto_complete"  
                              @after-choose="afterChoose"  
                              :label="{          
                              enter_address: '<?php echo CJavaScript::quote(t("Enter address"))?>',          
                              }"     
                              />
                           </component-auto-complete>   
                        </div>
                     </div>
                  </div>
                  <?php  
                     $meta1=Yii::app()->db->createCommand('
                     SELECT *
                     FROM st_cuisine
                     ')->queryAll(); 
                     ?>
                  <div class="form-group form-box">
                     <select class="form-control product_type" name="type">
                        <option>Select product type</option>
                        <?php foreach($meta1 as $m){?>
                        <option value="<?php echo $m['cuisine_id'];?>"><?php echo $m['cuisine_name'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <button class="btn btn-green w-100 mt-3 btn-search"    
                     :class="{ loading: loading }" 
                     :disabled="checkForm"
                     >
                     <span v-if="loading==false"><?php echo t("Search")?></span>
                     <div v-cloak v-if="loading==true" class="m-auto" data-loader="circle-side"></div>
                  </button>
               </div>
              
            </div>
         </div>
         <!--h2 class="text-center mb-3"><?php echo t("Let's find best food for you")?></h2-->
      </div>
      <!--banner-center-->
   </div>
</section>
<!--banner-center -->
<section class="how-it-works" id="how-it-works" data-aos="fade-right" data-aos-delay="400">
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12 section-title titlewhite">
            <h2>How It Works</h2>
         </div>
      </div>
      <div class="row">
         <div class="col" data-aos="fade-right" data-aos-delay="600">
            <div class="iner-box">
               <div class="img-main"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/icon1.png"></div>
               <h4>Search</h4>
               <p>Smart search tools to browse talented bakers near you
               </p>
            </div>
         </div>
         <div class="col" data-aos="fade-right" data-aos-delay="800">
            <div class="iner-box">
               <div class="img-main"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/icon5.png"></div>
               <h4>Connect</h4>
               <p>Easily connect with bakers about available products or custom orders
               </p>
            </div>
         </div>
         <div class="col" data-aos="fade-right" data-aos-delay="1000">
            <div class="iner-box">
               <div class="img-main"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/icon3.png"></div>
               <h4>Order</h4>
               <p>Simply order online or place orders directly with bakers
               </p>
            </div>
         </div>
         <div class="col" data-aos="fade-right" data-aos-delay="1200">
            <div class="iner-box">
               <div class="img-main"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/icon4.png"></div>
               <h4>Enjoy</h4>
               <p>Choose from your baker’s options that may include pickup or delivery
               </p>
            </div>
         </div>
         <div class="col" data-aos="fade-right" data-aos-delay="1400">
            <div class="iner-box">
               <div class="img-main"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/icon2.png"></div>
               <h4>Review</h4>
               <p>Let your baker and others know how much you enjoyed their
                  products
               </p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--
   ABOUT US SECTION
    --> 
<section class="aboutus" data-aos="fade-right" data-aos-delay="400">
   <div class="shape_wrapper">
      <div class="shape_inner shape_two" 
         style="background-image: url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/aboutbanner.jpg');">   
      </div>
   </div>
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12 section-title titlewhite" data-aos="fade-right" data-aos-delay="600">
            <h2>About Your Baking Connection</h2>
         </div>
         <div class="col-sm-12" data-aos="fade-right" data-aos-delay="800">
            <p>Your Baking Connection will connect people like you with talented home bakers in
               your community operating regulated businesses! Gifted food artisans are ready to
               make your special event, holiday, occasion or any day a lot more delicious!
            </p>
            <p class="mt-2">Use our search tools to find custom, unique and delicious goods made with love!</p>
            <div class="btn-box" data-aos="fade-right" data-aos-delay="1000">
               <a href="<?php echo Yii::app()->createUrl("/store/aboutthebakers");?>" class="btn-more">Learn More</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--
   ABOUT US SECTION
    --> 
<!-- Portfolio Sections -->
<section class="portfolio-section" data-aos="fade-up" data-aos-delay="400">
   <div class="auto-container">
      <div class="sec-title text-center" data-aos="fade-up" data-aos-delay="400">
         <h2>Inspiration</h2>
      </div>
      <div class="row">
         <!-- Portfolio Block -->
         <?php foreach($data as $d){?>

               <div class="portfolio-block portfolio-block-four masonry-item s1 s13 s10  col-lg-3 col-md-6 col-sm-12">
               <div class="inner-box">
                  <div class="image-box">
                     <figure class="image"><img src="upload/1/<?php echo $d['image'];?>" alt=""></figure>
                    
                            <!--<div class="col"><button @click="submitFilter" class="btn btn-green w-100">Apply Filters</button></div>-->
                            <!--<component-save-store-->
                            <!-- :active="d.saved_store=='1'?true:false"-->
                            <!-- :merchant_id="d.merchant_id"-->
                            <!-- @after-save="afterSaveStore(d)"-->
                            <!--/>-->
                            <!--</component-save-store>-->
                            <!--<div class="hear-ic"><i class="fa fa-heart"></i></div>-->
                  </div>
                  <div class="portfolio-hover">
                     <div class="hover-effect">
                        <svg x="0px" y="0px" viewBox="79 -202.7 1000 1000">
                           <path d="M5459-1110.4L579.1-202.7c10.7,0,21.6,1.5,32.5,4.4c22.3,6,41.3,17,58,26.6c11.9,6.9,23,13.3,31.1,15.5 c6.8,1.8,19.4,1.8,26.2,1.8h12.9c27.5,0,59.4,1.4,89.3,18.7c32.8,19,50.2,49.3,64.1,73.7c6.2,10.9,12.6,22.1,17.8,27.3 c5.9,5.9,17.1,12.3,28.9,19.1c24,13.8,53.8,31,72.2,63c18.6,32.3,18.5,67,18.4,94.8c0,13.5-0.1,26.1,2,33.7 c2.1,7.7,8.4,18.7,15.2,30.3c14,24.1,31.4,54.1,31.4,91.3c0,36.8-17.2,66.6-31,90.6c-6.9,11.9-13.3,23-15.5,31.1 c-1.6,6.1-1.9,16.3-1.9,26.9c5.5,35.9-0.9,71-18.5,101.6c-18.9,32.7-49.1,50-73.4,63.9c-11.4,6.5-22.5,12.9-27.8,18.2 c-5.9,5.9-12.3,17-19,28.7c-14,24.2-31.1,54.1-63.1,72.5c-29.5,17-60.5,18.5-89.7,18.5h-10.3c-10.6,0-21.6,0.2-28.4,2 c-7.6,2-18.5,6.5-30.1,13.2c-24.1,14-54,29.6-91.3,29.6H579c-36.8,0-66.6-15.3-90.6-29.2c-11.8-6.8-22.9-12.3-31-14.4 c-6-1.6-16.1-1.4-26.1-1.4l-12.8,0.3c-17.5,0-37.9-0.3-58.4-5.8c-11.2-3-21.4-7.1-31-12.7c-33-19.1-50.3-49.4-64.3-73.8 c-6.2-10.8-12.6-22-17.8-27.2c-5.9-5.9-17-12.3-28.8-19.1c-24-13.8-53.8-31-72.3-63c-18.6-32.3-18.5-67-18.4-94.9 c0-13.4,0.1-26.1-2-33.7c-2-7.7-8.4-18.6-15.2-30.2c-14-24.1-31.4-54-31.4-91.3c0-36.8,17.2-66.7,31.1-90.7 c6.8-11.8,13.3-22.9,15.4-31c1.9-7.2,1.9-20.1,1.8-32.6c-0.1-28.1-0.2-63.1,18.8-95.9c19-32.9,49.3-50.2,73.6-64.2 c10.9-6.2,22.1-12.7,27.3-17.9c5.9-5.9,12.3-17.1,19.2-28.9c13.8-24,31-53.8,62.9-72.2c29.5-17,60.3-18.5,89.3-18.5h11 c10,0,21.3-0.2,28.2-2c7.6-2.1,18.6-8.4,30.1-15.1c24.3-14.1,54.3-31.5,91.4-31.6l4856-83.7l64-2888l-12016,96l-16,7000l7344,32 l4760,96L5459-1110.4z M909.2,106.8c-10.2-17.7-28.5-28.3-46.3-38.5c-12.2-7.1-23.8-13.7-32.4-22.3c-8.1-8.1-14.5-19.3-21.3-31.2 C798.8-3.3,788.1-22,769.7-32.7s-40-10.6-60.8-10.5c-13.7,0.1-26.6,0.1-37.7-2.9c-11.8-3.2-23.3-9.8-35.6-16.9 C623-70.3,610-77.8,596.2-81.5c-5.6-1.5-11.3-2.4-17.1-2.4c-20.7,0-39.2,10.8-57,21.1c-12.1,7-23.5,13.7-35,16.8s-24.7,3-38.6,3 c-20.6-0.1-42-0.1-59.9,10.3c-17.7,10.2-28.3,28.6-38.5,46.3c-7.1,12.3-13.7,23.8-22.3,32.5c-8.1,8.1-19.4,14.6-31.2,21.4 c-18.1,10.4-36.8,21.1-47.4,39.5c-10.7,18.5-10.6,40-10.5,60.9c0,13.7,0.1,26.6-2.9,37.8c-3.2,11.8-9.8,23.3-16.9,35.5 C208.6,259,198,277.4,198,297.8c0,20.8,10.7,39.2,21.1,57.1c7,12.1,13.6,23.5,16.7,35c3.1,11.5,3,24.6,3,38.6 c-0.1,20.7-0.1,42,10.2,60.1c10.2,17.7,28.5,28.3,46.3,38.5c12.2,7.1,23.8,13.7,32.4,22.3c8.1,8.1,14.5,19.3,21.3,31.2 c10.4,18.2,21.1,36.9,39.5,47.5c5.1,2.9,10.6,5.2,16.7,6.8c14.1,3.8,29.3,3.7,44,3.7c13.8-0.1,26.7-0.1,37.8,2.9 c11.8,3.2,23.3,9.8,35.5,16.9c17.8,10.3,36.1,20.9,56.6,20.9c20.8,0,39.2-10.8,57-21.2c12.1-7,23.5-13.7,35-16.7 c11.5-3.1,24.6-3,38.6-3c20.7,0,42.1,0.1,60.1-10.3c17.7-10.2,28.4-28.6,38.6-46.3c7.1-12.3,13.9-23.8,22.5-32.4 c8.1-8.1,19.6-14.5,31.5-21.3c18.2-10.4,37.7-21.1,48.4-39.6c10.6-18.5,8.9-87.6,11.9-98.7c3.2-11.8,9.8-23.3,16.9-35.6 c10.3-17.8,20.9-36.1,20.9-56.6c0-20.8-10.7-39.2-21.1-57.1c-7-12.1-13.6-23.5-16.7-35c-3.1-11.5-3-24.7-3-38.7 C919.5,146.2,919.5,124.8,909.2,106.8z"></path>
                        </svg>
                     </div>

                     <a href="upload/1/<?php echo $d['image'];?>" class="lightbox-image link" data-fancybox="portfolio"></a>
                     <h3><a href="#"><?php echo $d['restaurant_name'];?></a></h3>
                  </div>
               </div>
            </div>


         
         <?php }?>
         <div class="btn-box" data-aos="fade-up" data-aos-delay="400">
            <a href="<?php echo Yii::app()->createUrl("/store/inspirationgallery");?>" class="btn-more">See Our Inspiration Gallery</a>
         </div>
      </div>
   </div>
</section>
<!--End Projects Sections -->
<section class="download-our-app">
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-7 section-title text-left" data-aos="fade-right" data-aos-delay="400">
            <h2 class="text-left">DOWNLOAD OUR APP!</h2>
            <p>Connect with your favorite bakeries on the go! Place orders, discover new, delicious treats and manage all your favorites in one yummy place!
            </p>
            <div class="main-btns">
               <a href="#" class="btn-pics"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/google-1.png"></a>
               <a href="#" class="btn-pics"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/app-2.png"></a>
            </div>
         </div>
         <div class="col-sm-5" data-aos="fade-left" data-aos-delay="400">
            <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/up.jpg" class="img-fluid" />
         </div>
      </div>
   </div>
</section>
<section class="subscribe" id="subs" style="background-image: url(<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/bg.jpg);background-size: cover;background-position: center;height: 370px; align-items: center;display: flex;">
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12" data-aos="fade-up" data-aos-delay="400">
            <div class="inner-main-sec">
               <h2 class="text-left">Subscribe for Your Baking Connection News!</h2>
               <div class="sub-input">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--MAIN SEARCH BANNER-->
<!-- Mobile search  -->
<div class="d-block d-lg-none container mt-3">
   <DIV id="vue-home-search-mobile" class="position-relative">
      <component-home-search
         ref="childref"
         next_url="<?php echo Yii::app()->createAbsoluteUrl('store/restaurants')?>"
         auto_generate_uuid = "true"
         :label="{          
         enter_address: '<?php echo CJavaScript::quote(t("Enter delivery address"))?>',          
         }"     
         />
      </component-home-search>   
   </DIV>
</div>
<!-- mobile search -->
<DIV id="vue-home-widgets" >
   <div class="container " v-cloak >
      <h6 class="mb-3 d-none"><?php echo t("Cuisine type")?>:</h6>
      <!-- cuisine list -->
      <div class="d-none ">
         <div class="row no-gutters list-inline">
            <template v-for="(cuisine, index) in data_cuisine" >
               <div v-if="index<=7" class="col">
                  <a > {{ cuisine.cuisine_name }}</a>
               </div>
            </template>
            <template v-if="data_cuisine.length" >
               <template v-if="data_cuisine[8]" >
                  <div class="col">
                     <a class="btn btn-sm dropdown-toggle text-truncate shadow-none" 
                        href="javascript:;" id="dropdownCuisine" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo t("More")?>
                     </a>    
                     <div class="dropdown-menu" aria-labelledby="dropdownCuisine">
                        <template v-for="(cuisine, index) in data_cuisine.slice(8)" >
                           <a class="p-2 pl-2 d-block "  >
                           {{ cuisine.cuisine_name }}
                           </a>       
                        </template>
                     </div>
                  </div>
                  <!--col-->   
               </template>
            </template>
         </div>
         <!--row-->
      </div>
      <!-- cuisine list -->
      <div class="d-block d-lg-none">
         <component-cuisine
            :data="data_cuisine"
            :responsive='<?php echo json_encode($responsive);?>'
            >
         </component>
      </div>
      <!--COMPONENTS FEATURED LOCATION-->
      <component-carousel
         title="<?php echo t("Popular nearby")?>"
         featured_name="popular"
         :settings="{
         theme: '<?php echo CJavaScript::quote('rounded')?>',       
         items: '<?php echo CJavaScript::quote(5)?>', 
         lazyLoad: '<?php echo CJavaScript::quote(true)?>', 
         loop: '<?php echo CJavaScript::quote(true)?>', 
         margin: '<?php echo CJavaScript::quote(15)?>', 
         nav: '<?php echo CJavaScript::quote(false)?>', 
         dots: '<?php echo CJavaScript::quote(false)?>', 
         stagePadding: '<?php echo CJavaScript::quote(10)?>', 
         free_delivery: '<?php echo CJavaScript::quote( t("Free delivery") )?>',       
         }"
         :responsive='<?php echo json_encode($responsive);?>'
         />
      </component-carousel>  
      <!--COMPONENTS FEATURED LOCATION-->
      <!-- order 3 steps -->
      <div class="order-three-steps d-none">
         <div class="section-addons row mt-4 mb-0">
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="addons addons-1">
                  <div class="inner">
                     <h1>01</h1>
                     <h5><?php echo t("No Minimum Order")?></h5>
                     <p><?php echo t("Order in for yourself or for the group, with no restrictions on order value")?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="addons addons-2">
                  <div class="inner">
                     <h1>02</h1>
                     <h5><?php echo t("Live Order Tracking")?></h5>
                     <p><?php echo t("Know where your order is at all times, from the restaurant to your doorstep")?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="addons addons-3">
                  <div class="inner">
                     <h1>03</h1>
                     <h5><?php echo t("Lightning-Fast Delivery")?></h5>
                     <p><?php echo t("Experience karenderia superfast delivery for food delivered fresh & on time")?></p>
                  </div>
               </div>
            </div>
         </div>
         <!--ordering-steps-->
      </div>
      <!-- order 3 steps -->   
      <!-- order 3 steps mobile -->
      <div class="d-none">
         <component-three-steps      
            >      
         </component-three-steps>
      </div>
      <!-- order 3 steps mobile -->
      <!-- section-benefits -->
      <div class="section-benefits mt-3 mb-0 row d-none">
         <div class="col-lg-3 col-md-3 col-sm-6 mb-4 mb-lg-3">
            <div class="benefits benefits-1">
               <div class="inner">
                  <div class="d-flex align-items-start flex-column">
                     <div class="mb-auto">
                        <h4><?php echo t("Best promotions in your area")?></h4>
                     </div>
                     <div>
                        <p class="m-0"><?php echo t("Up to")?></p>
                        <h4>50%</h4>
                     </div>
                     <div class="mt-auto">
                        <div class="btn-white-parent"><a  class="btn btn-link"><?php echo t("Check")?></a></div>
                     </div>
                  </div>
               </div>
               <!--inner-->
            </div>
            <!--benefits-->
         </div>
         <!--col-->
         <div class="col-lg-3 col-md-3 col-sm-6 mb-4 mb-lg-3">
            <div class="benefits benefits-2">
               <div class="inner">
                  <div class="d-flex align-items-start flex-column">
                     <div class="mb-auto">
                        <h4><?php echo t("Rising stars restaurants")?></h4>
                     </div>
                     <div>
                        <p class="m-0"><?php echo t("Try something")?></p>
                        <h4><?php echo t("New")?></h4>
                     </div>
                     <div class="mt-auto">
                        <div class="btn-white-parent"><a class="btn btn-link"><?php echo t("Check")?></a></div>
                     </div>
                  </div>
               </div>
               <!--inner-->
            </div>
            <!--benefits-->
         </div>
         <!--col-->
         <div class="col-lg-3 col-md-3  col-sm-6 mb-4 mb-lg-3">
            <div class="benefits benefits-3">
               <div class="inner">
                  <div class="d-flex align-items-start flex-column">
                     <div class="mb-auto">
                        <h4><?php echo t("Fastest delivery for you!")?></h4>
                     </div>
                     <div>
                        <p class="m-0"><?php echo t("Best quick")?></p>
                        <h4><?php echo t("Lunch")?></h4>
                     </div>
                     <div class="mt-auto">
                        <div class="btn-white-parent"><a class="btn btn-link"><?php echo t("Check")?></a></div>
                     </div>
                  </div>
               </div>
               <!--inner-->
            </div>
            <!--benefits-->
         </div>
         <!--col-->
         <div class="col-lg-3 col-md-3  col-sm-6 mb-4 mb-lg-3">
            <div class="benefits benefits-3">
               <div class="inner">
                  <div class="d-flex align-items-start flex-column">
                     <div class="mb-auto">
                        <h4><?php echo t("Party night?")?></h4>
                     </div>
                     <div>
                        <p class="m-0"><?php echo t("Maybe")?></p>
                        <h4><?php echo t("Snacks?")?></h4>
                     </div>
                     <div class="mt-auto">
                        <div class="btn-white-parent"><a  class="btn btn-link"><?php echo t("Check")?></a></div>
                     </div>
                  </div>
               </div>
               <!--inner-->
            </div>
            <!--benefits-->
         </div>
         <!--col--> 
      </div>
      <!--section-benefits-->
      <div class="d-none">
         <!--COMPONENTS FEATURED LOCATION-->
         <component-carousel
            title="<?php echo t("New restaurant")?>"
            featured_name="new"
            :settings="{
            theme: '<?php echo CJavaScript::quote('rounded-circle')?>',      
            items: '<?php echo CJavaScript::quote(6)?>',      
            lazyLoad: '<?php echo CJavaScript::quote(true)?>', 
            loop: '<?php echo CJavaScript::quote(true)?>', 
            margin: '<?php echo CJavaScript::quote(15)?>', 
            nav: '<?php echo CJavaScript::quote(false)?>', 
            dots: '<?php echo CJavaScript::quote(false)?>', 
            stagePadding: '<?php echo CJavaScript::quote(10)?>', 
            free_delivery: '<?php echo CJavaScript::quote( t("Free delivery") )?>', 
            }"
            :responsive='<?php echo json_encode($responsive);?>'
            />
         </component-carousel>  
         <!--COMPONENTS FEATURED LOCATION-->
      </div>
      <!--JOIN US-->
      <div class="mt-4 d-none">
         <?php $this->renderPartial("//store/join-us")?>
      </div>
      <!--END JOIN US-->
   </div>
   <!--container-->
   <div class="section-mobileapp tree-columns-center d-none">
      <div class="container">
         <div class="mb-0 row">
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="d-flex align-items-center">
                  <div class="w-100 text-center text-md-left">
                     <h5><?php echo t("Best restaurants")?></h5>
                     <h1 class="mb-4"><?php echo t("In your pocket")?></h1>
                     <p class=""><?php echo t("Order from your favorite restaurants & track on the go, with the all-new K app.")?></p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="d-flex align-items-center">
                  <div class="w-100 text-center">
                     <img class="mobileapp" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/mobileapp.png"?>" />
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-3">
               <div class="d-flex align-items-center">
                  <div class="w-100 text-center text-md-right">
                     <h5><?php echo t("Download")?></h5>
                     <h1 class="mb-4"><?php echo t("K mobile app")?></h1>
                     <div class="app-store-wrap">
                        <a href="#" class="d-inline mr-2">
                        <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/app-store@2x.png">
                        </a>
                        <a href="#" class="d-inline">
                        <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/google-play@2x.png">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--row-->
      </div>
      <!--container-->
   </div>
   <!--sections-->
   <!-- section mobile app view -->
   <div class="d-none">
      <div class="section-mobileapp border">
         <div class="container text-center">
            <h5><?php echo t("Best restaurants")?></h5>
            <h1 class="mb-3"><?php echo t("In your pocket")?></h1>
            <p class=""><?php echo t("Order from your favorite restaurants & track on the go, with the all-new K app.")?></p>
            <div class="d-flex justify-content-center app-store-wrap mb-5 mt-4">
               <div class="mr-2">
                  <a href="#" class="d-inline mr-2">
                  <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/app-store@2x.png">
                  </a>
               </div>
               <div class="">
                  <a href="#" class="d-inline">
                  <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/google-play@2x.png">
                  </a>
               </div>
            </div>
            <img class="mobileapp" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/mobileapp-half.png"?>" />
         </div>
      </div>
   </div>
   <!-- section mobile app view -->
   <div class="container d-none">
      <!--COMPONENTS FEATURED LOCATION-->
      <component-carousel
         title="<?php echo t("Try something new in")?>"
         featured_name="best_seller"
         :settings="{
         theme: '<?php echo CJavaScript::quote('rounded')?>',       
         items: '<?php echo CJavaScript::quote(5)?>', 
         lazyLoad: '<?php echo CJavaScript::quote(true)?>', 
         loop: '<?php echo CJavaScript::quote(true)?>', 
         margin: '<?php echo CJavaScript::quote(15)?>', 
         nav: '<?php echo CJavaScript::quote(false)?>', 
         dots: '<?php echo CJavaScript::quote(false)?>', 
         stagePadding: '<?php echo CJavaScript::quote(10)?>', 
         free_delivery: '<?php echo CJavaScript::quote( t("Free delivery") )?>', 
         }"
         :responsive='<?php echo json_encode($responsive);?>'
         />
      </component-carousel>  
      <!--COMPONENTS FEATURED LOCATION-->
   </div>
   <!--container-->
</DIV>
<!--vue-home-widgets-->
<script type="text/x-template" id="three-steps-ordering">
   <div ref="carousel_three_steps" class="section-addons carousel-three-steps owl-carousel owl-theme">
   
     <div class="mr-2">
        <div class="addons addons-1">
          <div class="inner">
          <h1>01</h1>
          <h5><?php echo t("No Minimum Order")?></h5>
          <p><?php echo t("Order in for yourself or for the group, with no restrictions on order value")?></p>
          </div>
         </div>
     </div> 
     <!-- item -->
   
     <div class="mr-2">
        <div class="addons addons-2">
          <div class="inner">
          <h1>02</h1>
          <h5><?php echo t("Live Order Tracking")?></h5>
          <p><?php echo t("Know where your order is at all times, from the restaurant to your doorstep")?></p>
          </div>
         </div>
     </div>
     <!-- item -->
   
     <div class="">
        <div class="addons addons-3">
          <div class="inner">
          <h1>03</h1>
          <h5><?php echo t("Lightning-Fast Delivery")?></h5>
          <p><?php echo t("Experience karenderia superfast delivery for food delivered fresh & on time")?></p>
          </div>
         </div>
     </div>
     <!-- item -->
   
   </div> 
   <!-- carousel -->
</script>


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
    $( document ).ready(function() {
        
        $('body').on('click', '.btn-search', function() {
        var id=$(this).val();
         $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/api/getLocationsDetails",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({'q':  $('#address').val(),'type':$('.product_type').val(),'YII_CSRF_TOKEN':token}),
            
                success: function (response) {
                    
                    window.location.href="https://dev.indiit.solutions/your_baking_connection/store/bakers";
                  
               
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
        
        });
    });
</script>
<?php //echo $model->page_id;?>
<section class="page-title">
   <div class="auto-container">
      <h1><?php echo Yii::app()->input->xssClean($model->title)?></h1>
      <ul class="page-breadcrumb">
   </ul></div>
</section>
<?php if($model->page_id==4){?>
  <section class="terms">
   <div class="auto-container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                   <div class="col-sm-12 section-title3">
                      <h2>FAQs</h2>
                   </div>
                </div>
                <ul class="accordion-box mb-5">
               <!--Block-->
               <?php    
            $all=Yii::app()->db->createCommand('
            SELECT *
            FROM st_faq
            where type="Baker resources" or type="FAQ Page,Baker resources"
            order by id desc
            limit 0,8
            ')->queryAll(); 
           
            ?>
               
               <?php foreach($all as $al=>$val){?>
               <li class="accordion block">
                   <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> <?php echo $val['title'];?></div>
                   <div class="acc-content current" style="display: none;">
                       <div class="content">
                           <div class="text"><?php echo $val['description'];?></div>
                       </div>
                   </div>
               </li>
               <?php } ?>
               <!--<li class="accordion block">-->
               <!--    <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> Etiam hendrerit auctor feugiat</div>-->
               <!--    <div class="acc-content current" style="display: none;">-->
               <!--        <div class="content">-->
               <!--            <div class="text">Nunc pharetra nisl non tellus venenatis, sit amet maximus libero bibendum. Nulla ac mattis eros, id malesuada dolor. Nulla sodales massa ipsum.</div>-->
               <!--        </div>-->
               <!--    </div>-->
               <!--</li>-->

               <!--Block-->
               <!--<li class="accordion block">-->
               <!--    <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div>Maecenas ullamcorper lectus finibus</div>-->
               <!--    <div class="acc-content" style="display: none;">-->
               <!--        <div class="content">-->
               <!--            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>-->
               <!--        </div>-->
               <!--    </div>-->
               <!--</li>-->
               
               <!--Block-->
               <!--<li class="accordion block">-->
               <!--    <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> Nam cursus lacus malesuada ullamcorper</div>-->
               <!--    <div class="acc-content" style="display: none;">-->
               <!--        <div class="content">-->
               <!--            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>-->
               <!--        </div>-->
               <!--    </div>-->
               <!--</li>-->

               <!--Block-->
               <!--<li class="accordion block active-block">-->
               <!--    <div class="acc-btn active"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> Nulla erat nibh, tempus in commodo rutrum</div>-->
               <!--    <div class="acc-content" style="display: block;">-->
               <!--        <div class="content">-->
               <!--            <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>-->
               <!--        </div>-->
               <!--    </div>-->
               <!--</li>-->
                </ul>
            </div>
        </div>
    </div>
</section> 
<section class="aboutus" data-aos="fade-right" data-aos-delay="400">
   <div class="shape_wrapper">
      <div class="shape_inner shape_two" 
         style="background-image: url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/aboutbanner.jpg');">   
      </div>
   </div>
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12 section-title" data-aos="fade-right" data-aos-delay="600">
            <h2 class="text-white">Login to Access Discounts</h2>
         </div>
         <div class="col-sm-12" data-aos="fade-right" data-aos-delay="800">
            <p><?php echo Yii::app()->input->xssClean($model->text1)?></p>
            <div class="btn-box" data-aos="fade-right" data-aos-delay="1000">
               <a href="#" class="btn-more">Login</a>
            </div>
         </div>
      </div>
   </div>
</section>
<?php
} 
if($model->page_id==6){
    ?>
    
<section class="about-section-two alternate" style="background-image: url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/36.jpg');">
<div class="auto-container">
<div class="sec-title text-center">
<h2>About The Bakers</h2>
</div>
<div class="content-box">
<!--span class="devider_icon_one" style="background-image: url(<?php echo Yii::app()->theme->baseUrl?>/assets/images/icon-devider.png);"></span-->
<p><?php echo $model->long_content;?></p>
</div>
</div>
</section>


<?php
}
?>

<?php if($model->page_id!=6 && $model->page_id!=5){?>
<section class="terms">
  <?php echo Yii::app()->input->xssClean($model->long_content)?>
  </section>
  
  <?php } ?>
  
  
  <?php if($model->page_id==5){?>
 <section class="login-section aboutbox">
   <div class="container">
      <div class="row align-items-center">
         <div class="content-column col-lg-8 col-md-12 col-sm-12">
            <div class="inner-column">
               <div class="content">
                  <!--<div class="section-title">-->
                  <!--   <h2 class="text-left mb-3">Ericka Johnson</h2>-->
                  <!--</div>-->
                  <!--<h4>Masterchef</h4>-->
                  <!--<div class="divider border-0 mb-4"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/icon-devider.png" width="80" alt=""></div>-->
                  <p><?php echo Yii::app()->input->xssClean($model->long_content)?></p>
               </div>
            </div>
         </div>
         <div class="image-column col-lg-4 col-md-12 col-sm-12">
            <div class="inner-column">
               <figure class="image"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/about-intro.png" alt=""></figure>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="features-section style-two" id="ab-sec">
   <div class="shape_wrapper shape_one">
      <div class="shape_inner shape_two" style="background-image: url(<?php echo Yii::app()->theme->baseUrl?>/assets/images/37img.jpg);">
         <div class="overlay"></div>
      </div>
   </div>
   <div class="container posrel">
      <div class="sec-title text-center light">
         <h2>Our Mission</h2>
         <div class="text"><?php echo Yii::app()->input->xssClean($model->our_mission)?></div>
      </div>
      <div class="row">
         <!-- Feature Block -->
         <div class="feature-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
               <div class="icon-box">
                  <div class="icon-frame">
                     <svg x="0px" y="0px" viewBox="0 0 500 500">
                        <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                     </svg>
                  </div>
                  <!-- cake img -->
                  <div class="icon flaticon-technology"></div>
               </div>
               <!--h3>Tradition</h3-->
               <p><?php echo Yii::app()->input->xssClean($model->text1)?>
               </p>
            </div>
         </div>
         <!-- Feature Block -->
         <div class="feature-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
               <div class="icon-box">
                  <div class="icon-frame">
                     <svg x="0px" y="0px" viewBox="0 0 500 500">
                        <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                     </svg>
                  </div>
                  <!-- cake img -->
                  <div class="icon flaticon-food-7"></div>
               </div>
               <!--h3>Quality</h3-->
               <p><?php echo Yii::app()->input->xssClean($model->text2)?></p>
            </div>
         </div>
         <!-- Feature Block -->
         <div class="feature-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
               <div class="icon-box">
                  <div class="icon-frame">
                     <svg x="0px" y="0px" viewBox="0 0 500 500">
                        <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                     </svg>
                  </div>
                  <!-- cake img -->
                  <div class="icon flaticon-strawberry"></div>
               </div>
               <!--h3>Creatuvity</h3-->
               <p><?php echo Yii::app()->input->xssClean($model->text3)?></p>
            </div>
         </div>
         <!-- Feature Block -->
         <div class="feature-block col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
               <div class="icon-box">
                  <div class="icon-frame">
                     <svg x="0px" y="0px" viewBox="0 0 500 500">
                        <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                     </svg>
                  </div>
                  <!-- cake img -->
                  <div class="icon flaticon-cake"></div>
               </div>
               <!--h3>Creatuvity</h3-->
               <p><?php echo Yii::app()->input->xssClean($model->text4)?></p>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Testimonial Section -->
<section class="testimonial-section">
   <div class="auto-container">
      <div class="section-title light text-center">
         <h2>Clients Say</h2>
      </div>
      <!-- Testimonial Carousel -->
      <div class="testimonial-carousel owl-carousel owl-theme">
         <!-- Testimonial Block -->
          <?php    
            $test=Yii::app()->db->createCommand('
            SELECT *
            FROM st_testimonials
            order by id desc
            limit 0,8
            ')->queryAll(); 
           foreach($test as $t){
            ?>
            
         <div class="testimonial-block">
            <div class="inner-box">
               <div class="testimonial_img">
                  <img src="./<?php echo $t['image'];?>" class="img-fluid" alt="">
               </div>
               <div class="text"><?php echo $t['description'];?></div>
               <div class="name"><?php echo $t['name'];?></div>
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
</section>
<section class="subscribe" id="subs" style="background-image: url(<?php echo Yii::app()->theme->baseUrl?>/assets/images/img/bg.jpg);background-size: cover;background-position: center;height: 370px; align-items: center;display: flex;">
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12">
            <div class="inner-main-sec">
               <h2 class="text-left">Subscribe for Your Baking Connection News!</h2>
               <div class="sub-input">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address"> 
                  <button type="submit" class="btn btn-primary submit_subscribe">Submit</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Testimonial Section -->
  <?php } ?>
<div class="container mt-5 mb-5 d-none">

<!--div class="row">
  <div class="col-md-8 border-right">
     
   <div class="text-center mb-4">
      <h3><?php echo Yii::app()->input->xssClean($model->title)?></h3>  
   </div>
   
   <div class="text-left">
     <?php echo Yii::app()->input->xssClean($model->long_content)?>
  </div>
  
  
  </div> 
  <div class="col-md-4"> 
  
  </div> 
</div-->
<!--row--> 
</div> <!--container-->


<div class="container-fluid m-0 p-0 full-width d-none"">
 <?php $this->renderPartial("//store/join-us")?>
</div>
  

<div id="vue-carousel" class="container d-none"">

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

</div> <!--vue-carousel-->  


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
// $( document ).ready(function() {
//     alert();
// });
</script>

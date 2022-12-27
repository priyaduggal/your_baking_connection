<style>
.pricing-table .table-content ul {
    list-style: disc;
    text-align: left;
    padding-left: 20px;
}

    .pricing-table h3.prebox {
    font-size: 15px;
    padding-top: 16px;
    
    margin-top: 50px;
}
    .pricing-table .title-box h3
    {
           
    }
    .pricing-table .btn.btn-sm.clickmerchant {
        padding: 0;
        font-size: 20px;
        position: relative;
        top: -4px;
    }
    .pricing-table .btn.btn-sm.clickmerchant:focus{
        outline: none;
        box-shadow: none;
    }
    .pricing-table .btn.btn-sm.clickmerchant:hover{
        color: #a7e8d4;
    }
    .pricing-table .table-content 
    {
        padding: 15px;
    }
    .pricing-table .table-content .checkgreen li {
    position: relative;
    padding: 11px 0px;
    font-size: 15px;
    border-bottom: 1px solid #a7e8d4;
    color: #4b4342;
}
    .pricing-table .table-content .pink li {
        position: relative;
        padding: 11px 0;
        font-size: 15px;
        border-bottom: 1px solid #f8b4cb;
        color: #4b4342;
         
    }
    .pricing-table .price {
        position: relative;
        font-size: 48px;
        line-height: 1em;
        color: #4b4342;
        vertical-align: middle;
        margin-bottom: 20px;
        

    }
    .pricing-table .pricing-svg svg {
      fill: #a7e8d4;
    width: 100%;
    height: 100%;
    position: relative;
    top: 38px;
    z-index: 2;
    }
    .pricing-table .pricing-svg.pink svg {
        fill: #f8b4cb;
          width: 100%;
        height: 100%;
    }
</style>
<section class="page-title">
   <div class="auto-container">
      <h1>Baker Membership</h1>
      <ul class="page-breadcrumb"></ul>
   </div>
</section>
<section class="pricing-section contactus">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-md-6">
            <div class="section-title2">
               <h2 class="text-center">Welcome to the future of <br /> the home bakery industry! </h2>
            </div>
            <p>As a home cottage baker interested in growing your business, you’ve come to the right place! Your Baking Connection was thoughtfully created for you to provide a marketplace to connect with consumers looking for your incredible products!</p>
         </div>
         <div class="col-md-6">
            <div class="image-box1">
               <figure class="image">
                  <img src="
                     <?php echo Yii::app()->theme->baseUrl?>/assets/images/ab1.jpg" alt="">
               </figure>
            </div>
         </div>
      </div>
      <div class="row align-items-center my-5">
         <div class="col-md-6">
            <div class="image-box1">
               <figure class="image">
                  <img src="
                     <?php echo Yii::app()->theme->baseUrl?>/assets/images/ab2.jpg" alt="">
               </figure>
            </div>
         </div>
         <div class="col-md-6 parabefore">
            <div class="section-title2">
               <h2 class="text-left">What makes Your Baking Connection special? Many things!</h2>
            </div>
            <p>A marketplace specifically created for regulated, home-based, talented bakers</p>
            <p>No need to waste time and money creating a website to maintain and promote</p>
            <p>Have your virtual storefront up and running in minutes</p>
            <p>Immediately expand your reach and exposure to new customers</p>
            <p>Manage your business from our app</p>
            <p>Features and tools you need to efficiently run your business and focus on what you do best while we do the rest</p>
         </div>
      </div>
      <div class="row mt-4">
         <div class="col-sm-12 section-title3">
            <h2>We offer two membership plans to meet your needs – Basic and Premium</h2>
         </div>
      </div>

         <div id="vue-subscription" class="mt-3 mb-3 row" v-cloak>
          <!--   <div class="text-center">
               <h4 class="mb-4 mt-4"> <?php echo t("Subscription Plans")?> </h4>
            </div> -->
               
            <input type="hidden" ref="merchant" value="
                     <?php echo $merchant_uuid?>">
                <div class="col-md-12">
                  <div class="row">
                    <div v-for="item in data" class="col-md-12" :class="isActive(item)">
                     <div class="pricing-table col-md-12 col-sm-12" v-if="item.package_id==2">
                        <div class="inner-box">
                           <div class="image-box">
                              <figure class="image" v-if="item.package_id==2">
                                 <img src="
                                    <?php echo Yii::app()->theme->baseUrl?>/assets/images/pr-table1.png" alt="">
                              </figure>
                              <figure class="image" v-if="item.package_id==1">
                                 <img src="
                                    <?php echo Yii::app()->theme->baseUrl?>/assets/images/pr-table3.png" alt="">
                              </figure>
                           </div>
                           <div class="pricing-svg">
                               <svg viewBox="0 0 1000 690">
                                   <path class="st0" d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z"></path>
                               </svg>
                           </div>
                           <div class="title-box">
                              <h3>{{item.title}}<br><span style="font-size:14px">Already have a business website or established method for receiving orders but looking to grow your customer base?</span></h3>
                              
                           </div>
                           <!--h4 class="head4 cursorimg">{{item.description}}
                           </h4-->
                           <h3 class="prebox">The {{item.title}} may be best for you!<br>$12 monthly or get 2 months free when you join annually ($120)</h3>
                           <div class="table-content  showdata " :data-id="item.package_id" style="display:none">
                              <!--<ul v-if="plan_details[item.package_id]" class="checkgreen list-group list-group-flush ">-->
                              <!--    <li v-for="details in plan_details[item.package_id]" -->
                              <!--    class="list-group-item font-weight-light">-->
                              <!--    {{details}}-->
                              <!--    </li>        -->
                              <!--</ul> -->
                              <!--<div class="price-box">-->
                              <!--   <div class="price"> {{item.price}}-->
                                  
                              <!--   </div>-->
                              <!--</div>-->
                              <ul v-if="plan_details[item.package_id]" class="checkgreen list-group list-group-flush "  style="list-style-type: none;">
                                 <h3>
                                    <strong>Features include:</strong>
                                 </h3>
                                 <li v-for="details in plan_details[item.package_id]">
                                    <i class="fa fa-check mr-2" style="color:#a7e8d4 !important;"></i>
                                    <span>
                                    {{details}}</span>
                                 </li>
                              </ul>
                              <div class="price-box  mt-3">
                                 <div class="price"></div>
                              </div>
                           </div>
                           <div class="portfolio-section p-3">
                              <div class="btn-box my-3">
                                 <a href="javascript: void(0)" data-toggle="collapse" :data-id="item.package_id" data-target="#demo
                                    <?php echo $item->package_id;?>" class="btn-more learn_more">Learn More </a>
                                 <!--<a href="#" class="btn-more ml-2">Join Now</a>-->
                                 <div class="btn-more ml-2">
                                     <button class="btn btn-sm clickbasic" data-type="basic" data-month="fbcc4ec5-5cd0-11ed-b019-00163c6ba7cd" 
                                     data-year="46a7fa97-77bb-11ed-92c4-00163c6ba7cd">&nbsp; <?php echo t("Join Now")?>&nbsp; </button>
                                    <!--<button class="btn btn-sm clickmerchant" :data-id="item.package_uuid">&nbsp; <?php echo t("Join Now")?>&nbsp; </button>-->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12"></div>
                           <!--<div class="col-lg-4 col-md-12">-->
                           <!--   <button @click="setPlan(item.package_id,item.package_uuid)" -->
                           <!--   :disabled="package_id==item.package_id"-->
                           <!--   class="btn btn-sm btn-green">&nbsp;<?php echo t("Select")?>&nbsp;-->
                           <!--   </button>-->
                           <!--</div>-->
                        </div>
                     </div>
                     <div class="pricing-table tagged col-md-12 col-sm-12" v-if="item.package_id==1">
                        <div class="inner-box">
                           <div class="image-box">
                              <figure class="image" v-if="item.package_id==2">
                                 <img src="
                                    <?php echo Yii::app()->theme->baseUrl?>/assets/images/pr-table1.png" alt="">
                              </figure>
                              <figure class="image" v-if="item.package_id==1">
                                 <img src="
                                    <?php echo Yii::app()->theme->baseUrl?>/assets/images/pr-table3.png" alt="">
                              </figure>
                           </div>
                           <div class="pricing-svg pink">
                   <svg viewBox="0 0 1000 690">
                       <path class="st0" d="M1503-747c-669.3,0-1338.7,0-2008,0c0.3,425,0.7,850,1,1275c0,7.7,0,15.3,0,23c168.3,0.1,336.7,0.3,505,0.4 c18.1-10.6,32.9-15.9,58.4-10.8c80.7,16.2,160.7,100.3,240.4,93.8c93-7.5,184.6-116.6,284.6-96c88.9,18.3,101.9,175.6,227.2,147.5 c79.9-17.9,68.2-118.2,149.1-138.7c12.8-3.3,20.2-4.2,38.4-3.4c167.7,0.7,335.3,1.5,503,2.2c0.3-6,0.7-12,1-18 C1503,103,1503-322,1503-747z"></path>
                   </svg>
               </div>
                           <div class="title-box">
                              <h3>{{item.title}}<br><span style="font-size:14px">Looking for a one-stop shop to market and manage your business?</span></h3>
                           </div>
                          <!--  <h4 class="head4 cursorimg">{{item.description}}
                           </h4> -->
                           <h3 class="prebox">The {{item.title}} may be best for you!<br>$24 monthly or get 2 months free when you join annually ($240)</h3>
                           <div class="table-content  showdata1" :data-id="item.package_id" style="display:none">
                              <!--<ul v-if="plan_details[item.package_id]" class="checkgreen list-group list-group-flush ">-->
                              <!--    <li v-for="details in plan_details[item.package_id]" -->
                              <!--    class="list-group-item font-weight-light">-->
                              <!--    {{details}}-->
                              <!--    </li>        -->
                              <!--</ul> -->
                              <!--<div class="price-box">-->
                              <!--   <div class="price"> {{item.price}}-->
                                  
                              <!--   </div>-->
                              <!--</div>-->
                              <ul v-if="plan_details[item.package_id]" class="pink list-group list-group-flush " style="list-style-type: none;">
                                 <li>
                                    <strong>Features include:</strong>
                                 </li>
                                 <li v-for="details in plan_details[item.package_id]">
                                    <i class="fa fa-check mr-2" style="color:#f8b4cb !important;"></i>
                                    <span>
                                    {{details}}</span>
                                 </li>
                              </ul>
                              <div class="price-box  mt-3">
                                 <div class="price"></div>
                              </div>
                              <!--  <div class="price-box"><div class="price"> 15<sup>$</sup></div></div> -->
                              <!--<ul class="checkgreen">-->
                              <!--    <li>-->
                              <!--        <strong>Features include:</strong> -->
                              <!--    </li>-->
                              <!--    <li><i class="fa fa-check"></i><span>Inclusion in the online home bakery marketplace</span></li>-->
                              <!--    <li><i class="fa fa-check"></i><span>Custom virtual storefront</span></li>-->
                              <!--    <li><i class="fa fa-check"></i><span>Photo gallery of your work</span></li>-->
                              <!--    <li><i class="fa fa-check"></i><span>Links to your website or your preferred method of contact</span></li>-->
                              <!--    <li><i class="fa fa-check"></i><span>Links to your social media accounts, as desired</span></li>-->
                              <!--    <li class="priceli">-->
                              <!--         <span>-->
                              <!--             <strong>$12</strong> -->
                              <!--             monthly or get 2 months free with an annual membership-->
                              <!--             <strong>($120)</strong>-->
                              <!--         </span>-->
                              <!--     </li>-->
                              <!--</ul>-->
                              <!--    
                                 <div class="price-box  mt-3"><div class="price"></div></div> 
                                 -->
                           </div>
                           <div class="portfolio-section p-3">
                              <div class="btn-box my-3">
                                 <a href="javascript: void(0)" data-toggle="collapse" :data-id="item.package_id" data-target="#demo
                                    <?php echo $item->package_id;?>" class="btn-more learn_more1">Learn More </a>
                                 <!--<a href="#" class="btn-more ml-2">Join Now</a>-->
                                 <div class="btn-more ml-2">
                                    <!--<button @click="setPlan(item.package_id,item.package_uuid)" -->
                                    <!--:disabled="package_id==item.package_id"-->
                                    <!--class="btn btn-sm ">&nbsp;<?php echo t("Join Now")?>&nbsp;-->
                                    <!--</button>-->
                                    
                                    <button class="btn btn-sm clickpremium" data-type="premium" data-month="59533dd3-5ccf-11ed-b019-00163c6ba7cd" 
                                     data-year="77293889-77bb-11ed-92c4-00163c6ba7cd">&nbsp; <?php echo t("Join Now")?>&nbsp; </button>
                                     
                                     
                                    <!--<button class="btn btn-sm clickmerchant" :data-id="item.package_uuid">&nbsp; <?php echo t("Join Now")?>&nbsp; </button>-->
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12"></div>
                           <!--<div class="col-lg-4 col-md-12">-->
                           <!--   <button @click="setPlan(item.package_id,item.package_uuid)" -->
                           <!--   :disabled="package_id==item.package_id"-->
                           <!--   class="btn btn-sm btn-green">&nbsp;<?php echo t("Select")?>&nbsp;-->
                           <!--   </button>-->
                           <!--</div>-->
                        </div>
                     </div>
                   </div>
                   <div class="m-0 text-left">
                     <!--div class="form-check mb-4"><input v-model="agree" class="form-check-input" type="checkbox" value="1" id="agree"><label class="form-check-label" for="agree">
                        <?php echo t("I have read and agree to {{site_name}} Auto Renewal Terms, {{terms}}Terms of Service{{end_terms}} and {{cancellation}}Cancellation Policy{{end_cancellation}} and acknowledge receipt of the {{privacy}}Privacy Notice{{end_privacy}}",array(
                           '{{site_name}}'=> isset(Yii::app()->params['settings']['website_title'])?Yii::app()->params['settings']['website_title']:'' ,
                           '{{terms}}'=>'',
                           '{{end_terms}}'=>"",
                           '{{cancellation}}'=>"",
                           '{{end_cancellation}}'=>"",
                           '{{privacy}}'=>"",
                           '{{end_privacy}}'=>"",
                           ))?>
                        .
                        </label></div-->
                     <!--button 
                        :disabled="canContinue"
                        @click="showPayment"
                        class="btn btn-green pl-5 pr-5">
                                                                <?php echo t("Submit")?></button-->
                   </div>
                 </div>
               </div> 
            <?php CComponentsManager::renderComponents($payments,$payments_credentials,$this,'plans')?>
         </div>
    
      <div class="row mt-4">
         <div class="col-sm-12 section-title3">
            <h2>See Some of the Features for Yourself!</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 mb-5 justify-content-center d-flex">
            <video class="videob" width="900" height="350" controls style="object-fit: cover;">
               <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            </video>
         </div>
      </div>
   </div>
</section>
<!--End Projects Sections -->
<!-- Services Section -->
<section class="services-section" style="background-color: rgb(167 232 212) !important">
   <div class="auto-container">
      <div class="row">
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-shopping-basket image" aria-hidden="true"></i>
                  </div>
                  <h3>Virtual Storefront</h3>
                  <p>Your custom online bakery case will feature your beautiful creations</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-file-image-o image" aria-hidden="true"></i>
                  </div>
                  <h3>Photo Gallery</h3>
                  <p>Showcase your work in your personal gallery</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-list-alt image" aria-hidden="true"></i>
                  </div>
                  <h3>Product Listings</h3>
                  <p>Feature your amazing products in your custom shop</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-credit-card-alt image" aria-hidden="true"></i>
                  </div>
                  <h3>Payments</h3>
                  <p>Promptly receive online payments via Stripe</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-th-list image" aria-hidden="true"></i>
                  </div>
                  <h3>Custom Order Requests</h3>
                  <p>Efficiently receive detailed custom requests</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-truck image" aria-hidden="true"></i>
                  </div>
                  <h3>Custom Fulfillment</h3>
                  <p>Personalize your pick up or delivery options</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-comment image" aria-hidden="true"></i>
                  </div>
                  <h3>Reviews</h3>
                  <p>Increase sales with our own review system</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-briefcase image" aria-hidden="true"></i>
                  </div>
                  <h3>Business Management</h3>
                  <p>Product, sales and order management tools</p>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <!-- Service Block -->
            <div class="service-block">
               <div class="inner-box">
                  <div class="image-box">
                     <div class="services_frame">
                        <svg viewBox="0 0 500 500">
                           <path d="M488.5,274.5L488.5,274.5l1.8-0.5l-2,0.5c-2.4-8.7-4.5-16.9-4.5-24.5c0-8,2.3-16.5,4.7-25.5 c3.5-13,7.1-26.5,3.7-39.5c-3.6-13.2-13.5-23.1-23.1-32.7c-6.5-6.5-12.6-12.6-16.6-19.4c-3.9-6.8-6.1-15.2-8.5-24.1 c-3.5-13.1-7.1-26.7-16.7-36.3c-9.5-9.5-22.9-13.1-35.9-16.6c-9-2.4-17.5-4.6-24.4-8.7c-6.5-3.8-12.5-9.8-18.9-16.2 c-9.7-9.8-19.6-19.8-33.2-23.4c-13.5-3.7-27.3,0.1-40.4,3.7c-8.7,2.4-16.9,4.6-24.5,4.6c-8,0-16.5-2.3-25.5-4.7 c-9.3-2.5-18.8-5-28.1-5c-3.8,0-7.6,0.4-11.3,1.4C172,11.1,162,21.1,152.4,30.7c-6.5,6.5-12.6,12.6-19.4,16.6 c-6.8,3.9-15.2,6.1-24.1,8.5c-13.1,3.5-26.7,7.1-36.3,16.7c-9.5,9.5-13.1,23-16.6,36c-2.4,9-4.6,17.5-8.7,24.4 c-3.8,6.5-9.8,12.5-16.2,18.9c-9.8,9.7-19.7,19.6-23.4,33.2c-3.7,13.5,0.1,27.3,3.7,40.5c2.4,8.7,4.6,16.9,4.6,24.5 c0,8-2.3,16.5-4.6,25.5c-3.5,13-7.1,26.6-3.7,39.5c3.6,13.2,13.5,23.1,23.1,32.7c6.5,6.5,12.6,12.6,16.6,19.4 c3.9,6.8,6.1,15.1,8.5,24c3.5,13.1,7.1,26.8,16.7,36.4c9.5,9.5,23,13.1,35.9,16.6c9,2.4,17.5,4.6,24.4,8.7 c6.5,3.8,12.5,9.8,18.9,16.2c9.7,9.8,19.6,19.8,33.2,23.5c3.8,1,7.6,1.5,11.8,1.5c9.6,0,19.3-2.7,28.5-5.1c8.8-2.4,17-4.6,24.5-4.6 c8,0,16.5,2.3,25.5,4.6c13,3.6,26.6,7.1,39.5,3.7c13.2-3.6,23.1-13.5,32.7-23.1c6.5-6.5,12.6-12.6,19.4-16.6 c6.7-3.9,15.1-6.1,24-8.5c13.1-3.5,26.8-7.1,36.4-16.8c9.5-9.5,13.1-23,16.6-36c2.4-9,4.6-17.5,8.7-24.4c3.8-6.5,9.8-12.5,16.2-18.9 c9.8-9.7,19.9-19.7,23.6-33.3C495.7,301.4,494.4,287.7,488.5,274.5z"></path>
                        </svg>
                     </div>
                     <!-- cake img -->
                     <i class="fa fa-flag image" aria-hidden="true"></i>
                  </div>
                  <h3>Resources</h3>
                  <p>Insider information, sale alerts and member discounts</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End Services Section -->
<section class="subscribe" id="subs" style="background-image: url(
   <?php echo Yii::app()->theme->baseUrl?>/assets/images/img/bg.jpg);background-size: cover;background-position: center;height: 370px; align-items: center;display: flex;">
   <div class="auto-container">
      <div class="row">
         <div class="col-sm-12">
            <div class="inner-main-sec">
               <h2 class="text-left">Subscribe for Your Baking Connection News!</h2>
               <div class="sub-input">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Choose <span id="type"></span> Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <input type="radio" name="basic" class="basicradio" value="" package-uuid="" id="basicann" >Annually
       <input type="radio" name="basic" class="basicradio" value="" package-uuid="" id="basicmon">Monthly
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_package" >Save</button>
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
    $( document ).ready(function() {
       
        $('body').on('click', '.save_package', function() {
            
            var id=$('input[class="basicradio"]:checked').val();
            if(!empty(id)){
             $('#exampleModal').modal('hide');
             window.location.href = 'signup?id='+id;
            }else{
                alert('Choose Plan');
            }
        });
        $('body').on('click', '.clickpremium', function() {
             var type=$(this).attr('data-type');
            var month=$(this).attr('data-month');
            var year=$(this).attr('data-year');
            $('#type').html(type);
            $('#exampleModal').modal('show');
            $('#basicann').val(year);
            $('#basicmon').val(month);
        });
        $('body').on('click', '.clickbasic', function() {
            var type=$(this).attr('data-type');
            var month=$(this).attr('data-month');
            var year=$(this).attr('data-year');
            $('#type').html(type);
            $('#exampleModal').modal('show');
            $('#basicann').val(year);
            $('#basicmon').val(month);
        });
    });
</script>
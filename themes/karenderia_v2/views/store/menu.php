<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style><style>
.error{
    width: 100%;
    color: red;
}
</style><section class="loginbox sliderbox">
     <div id="owl-carousel" class="owl-carousel2 owl-carousel owl-theme">    
         <?php if($gallery):?>
  
       <?php $x=1;?>
       <?php foreach ($gallery as $gallery_item):?>
           <?php if($x<=5):?>           
	       <div class="item">   
		       <img class="rounded lazy" data-src="<?php echo $gallery_item['thumbnail']?>"/>
		     </div>
	       <?php endif;?>
	       
	       <?php if($x>5):?>
	              <div class="item">      
			       <img class="rounded lazy" data-src="<?php echo $gallery_item['image_url']?>"/>
			       </div>
	          <?php break;?>
	       <?php endif;?>
	       
       <?php $x++;?>
       <?php endforeach;?>
    
    <?php endif;?>
      </div>                      
	<?php //print_r($data);?>  
   <!--<div id="owl-carousel" class="owl-carousel2 owl-carousel owl-theme">-->
   <!--   <div class="item">       -->
		 <!--<img-->
			<!--style="width: 100%;"-->
			<!--src="<?php echo $data['url_logo'];?>"-->
		 <!--/>-->
		 <!--</div>-->
   <!--   <div class="item">-->
   <!--    <img-->
			<!--style="width: 100%;"-->
			<!--src="<?php echo $data['url_logo'];?>"-->
		 <!--/>-->
   <!--   </div>-->
   <!--   <div class="item">-->
   <!--     <img-->
			<!--style="width: 100%;"-->
			<!--src="<?php echo $data['url_logo'];?>"-->
		 <!--/>-->
   <!--   </div>-->
   <!--   <div class="item">-->
   <!--        <img-->
			<!--style="width: 100%;"-->
			<!--src="<?php echo $data['url_logo'];?>"-->
		 <!--/>-->
   <!--   </div>-->
   <!--</div>-->
</section>
<section class="viewbaker contactus">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1>
               <?php echo $data['restaurant_name']?>
               <span class="ratings">
               <i class="fa fa-star"></i>
               <span><?php echo Price_Formatter::convertToRaw($data['ratings'],1)?></span>
               </span>
            </h1>
            <h3 class="text-uppercase"><?php echo Yii::app()->input->xssClean(nl2br($data['short_description']))?> 	</h3>
           <p><?php echo Yii::app()->input->xssClean($data['description'])?> </p>
         </div>
      </div>
<div class="row mt-2">
         <div class="col-md-8">
             <div class="mylocation">
               <ul>
                  <li class="based">
                     <i class="fa fa-map-marker"></i> <?php echo $data['merchant_address']?>
                  </li>
                  <li class="collection-delivery">
                     <i class="fa fa-truck"></i> Collection &amp; Delivery Available
                  </li>
               </ul>
               <ul class="tag-list mt-3 clearfix">
                   <?php foreach($data['cuisine'] as $c){?>
                  <li><span> <?php echo $c; ?></span></li>
                  <?php } ?>
                  
                
                  
               </ul>
            </div>
            <div class="shop-single mt-4">
               <div class="product-info-tabs">
                  <!--Product Tabs-->
                  <div class="prod-tabs tabs-box">
                     
                     <ul class="nav nav-tabs clearfix">
                         <?php if($data['package_id']==1 || $data['package_id']==4){?>
                        <li class="tab-btn  text-uppercase active"   data-toggle="tab" >
                            <a href="#tab_default_1" data-toggle="tab">Available Products</a>
                        </li>
                        <?php } ?>
                        <?php if($data['package_id']==1 || $data['package_id']==4){?>
                         <li class="tab-btn text-uppercase" data-toggle="tab"> 
                        <a href="#tab_default_2"  data-toggle="tab">Gallery of Work</a></li>
                        
                        <?php } ?>
                        
                         <?php if($data['package_id']==2 || $data['package_id']==3){?>
                        
                        <li class="tab-btn text-uppercase active" data-toggle="tab"> 
                        <a href="#tab_default_2"  data-toggle="tab">Gallery of Work</a></li>
                        
                        <?php } ?>
                        
                         <?php if($data['package_id']==1 || $data['package_id']==4){?>
                        <li class="tab-btn text-uppercase" data-toggle="tab"><a href="#tab_default_3"  data-toggle="tab">Reviews</a></li>
                         <?php } ?>
                     </ul>
                 
                     <div class="tab-content">
                     
                        <div class="tab-pane active " id="tab_default_1">
                         
                           <div class="related-products">
                              <div  id="vue-merchant-menu">
							    <?php $this->renderPartial("//store/item-details",array(
			   'is_mobile'=>Yii::app()->params['isMobile']
		   ))?>

        
		  <el-affix 
		  position="bottom" :offset="20" v-if="item_in_cart>0" 
		  z-index="9"
		  v-cloak >
			  <div class="floating-cart d-block d-md-none">				  
		      <button @click="showDrawerCart" class="btn btn-black small rounded w-100 position-relative">				  
			      <p class="m-0"><?php echo t("View order")?></p>
				  <h5 class="m-0">{{merchant_data.restaurant_name}}</h5>
				  <count>{{item_in_cart}}</count>
			  </button>			  
		      </div>
		  </el-affix>
							  <el-skeleton :count="12" :loading="menu_loading" animated>
										  <template #template>
											  <div class="row m-0">  
												  <div class="col-lg-3 col-md-3 p-0 mb-2">
													 <el-skeleton-item variant="image" style="width: 95%; height: 140px" />
												  </div> <!-- col -->
												  <div class=" col-lg-9 col-md-9 p-0">					  
													<div class="row m-0 p-0">
														<div class="col-lg-12">							
														<el-skeleton :rows="2" />
														</div>							
													</div>
													<!-- row -->
												  </div> <!-- col --> 					  
											  </div> <!--  row -->
										  </template>

										  <template #default>
											  <?php $this->renderPartial("//store/menu-data")?>
										  </template>

									   </el-skeleton>
                              
                               </div>
                           </div>
                           <!-- End Related Products -->
                        </div>
                        
                        <?php if($data['package_id']==2 || $data['package_id']==3){?>
                        <div class="tab-pane active" id="tab_default_2">
                            <?php }else{ ?>
                            <div class="tab-pane " id="tab_default_2">
                                <?php } ?>  
                            
                            <?php 
                            $meta1=Yii::app()->db->createCommand('
                            SELECT *
                            FROM st_merchant_inspiration_gallery
                            Where gallerywork=1 and 
                            merchant_id ='.$data['merchant_id'].'
                            
                            ')->queryAll(); 
                            
                          
            
            ?>
                           <div class="grid-wrapper">
                              <?php if($meta1):?>
    <div class="gallery gallery_magnific row w-50 hover13">
       <?php $x=1;?>
       <?php foreach ($meta1 as $gallery_item):?>
           <?php if($x<=5):?>           
	       <div class="col-lg-4 col-md-5 col-sm-6 col-6 mb-0 mb-lg-0  p-1">
	         <div class="position-relative"> 
	           <figure>
		       <div class="skeleton-placeholder"></div>
		       <a href="upload/<?php echo $gallery_item['merchant_id']?>/<?php echo $gallery_item['image']?>">
		       <img class="rounded lazy" data-src="upload/<?php echo $gallery_item['merchant_id']?>/<?php echo $gallery_item['image']?>"/>
		       </a>
		       </figure>
		     </div>  
	       </div>   
	       <?php endif;?>
	       
	       <?php if($x>5):?>
	          <div class="col-lg-4 col-md-5 col-sm-6 col-6 mb-0 mb-lg-0  p-1">
		         <div class="position-relative"> 
			       <div class="skeleton-placeholder"></div>
			       <a href="upload/1/<?php echo $gallery_item['image']?>">
			       <div class="gallery-more d-flex align-items-center justify-content-center">+<?php echo count($meta1)-5;?></div>	       
			       <img class="rounded lazy" data-src="upload/1/<?php echo $gallery_item['image']?>"/>
			       </a>
			     </div>  
		       </div>
	          <?php break;?>
	       <?php endif;?>
	       
       <?php $x++;?>
       <?php endforeach;?>
    </div> <!--gallery-->
    <?php endif;?>
                           </div>
                        </div>
                         <div class="tab-pane"  id="tab_default_3">
                          <section id="section-review" class=" mb-4" >


 <div class="row mb-4">
	 <div class="col-3 p-lg-0">
	    <div class="d-flex align-items-center" style="height:28px;">
          <div class="m-0 mr-3"><img class="img-20" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/star.png"?>"/></div>
          <div><h5 class="m-0"><?php echo t("Reviews")?></h5></div>
        </div> <!--d-flex-->
	 </div> <!--col-->
	 
	 <div class="col-9">
	     <div class="d-flex justify-content-between align-items-center" style="height:28px;">
	       <div class="flex-fill">
	         <!--<a href="javascript:;" @click="openFormReview" class="a-12"><u><?php echo t("Add your opinion")?></u></a>-->
	       </div>
	       <div class=""><p class="m-0 mr-5"><?php echo t("Based on")?> <u><?php echo t("{{review_count}} reviews",array('{{review_count}}'=>$data['review_count']))?></u></p></div>
	       <div><span class="badge badge-yellow rounded-pill"><?php echo Price_Formatter::convertToRaw($data['ratings'],1)?></span></div>
	     </div> <!--flex-->
	 </div> <!--col-->
 </div> <!--row-->
  
 
 <el-skeleton :count="4" :loading="review_loading" animated>
 <template #template>
    <div class="row items-review mb-4"  >
	  <div class="col-lg-3 col-md-3 p-lg-0 mb-2 mb-lg-0">
	      <div class="d-flex align-items-center">
		    <div class="mr-3"><el-skeleton-item variant="circle" style="width: 60px; height: 60px" /></div>
			<div class="flex-grow-1">				
				<el-skeleton-item variant="h3" style="width: 50%" />				
			</div>
	      </div>

	  </div>
	  <div class="col-lg-9 col-md-9">
	       <el-skeleton :rows="2" />
	  </div>
	</div>
 </template>
 <template #default>

 <!--items-review-->
 <template v-for="data in review_data" >
 <div class="row items-review mb-4" v-for="reviews in data" >
	 <div class="col-lg-12 col-md-12 p-lg-0 mb-2 mb-lg-0">
	    <div class="d-flex align-items-center">
          <div class="mr-3"><img class="img-60" :src="reviews.url_image" /></div>
          <div>
          
            <h6 class="m-0">  {{ reviews.fullname }}</h6>
            <p v-html="reviews.review" ></p>            
            <div class="star-rating"
            data-totalstars="5"
            :data-initialrating="reviews.rating"
            data-strokecolor="#fedc79"
            data-ratedcolor="#fedc79"
            data-strokewidth="10"
            data-starsize="15"
            data-readonly="true"
            ></div>            
            
          </div>
        </div> <!--d-flex-->
	 </div> <!--col-->
	 

 </div> 
 </template>
 <!--items-review-->

 </template>
 </el-skeleton>
 

 
 <div class="row mb-3" v-if="review_loadmore" >
	 <div class="col-lg-3 col-md-3 p-0"></div>
	 <div class="col-lg-9 col-md-9 ">
	    <a href="javascript:;" @click="loadMore" class="btn btn-black m-auto w25"><?php echo t("Load more")?></a>
	 </div>
</div><!-- row-->	 


</section>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <?php if($data['package_id']==1  || $data['package_id']==4){?>
            <div class=" trem-conditiom">
               <h2>Terms &amp; Conditions</h2>
               <?php echo Yii::app()->input->xssClean($data['terms'])?>
            </div>
            <hr class="seprations">
            <div class=" vir-dlt">
         <h2>Allergen information</h2>
         <?php echo Yii::app()->input->xssClean($data['allergen'])?>
      </div>
       <hr class="seprations">
      <?php } ?>
       
            <!--div class=" vir-dlt">
         <h2><?php echo t("Opening hours")?></h2>
           <div class="flex-fill">
             <?php if(is_array($opening_hours) && count($opening_hours)>=1):?>
             <table class="w-100">              
             <?php foreach ($opening_hours as $opening_hours_val):?>
                <tr >
                <td class="align-top pb-1"><?php echo ucwords(t($opening_hours_val['day']))?></td>
                 <td class="bold align-top pb-1">
                  <p class="m-0">
                  <?php echo t("[start] - [end]",
                       array(
                       '[start]'=>Date_Formatter::Time($opening_hours_val['start_time']),
                       '[end]'=>Date_Formatter::Time($opening_hours_val['end_time'])) )
                  ?>
                  </p>
                  <?php if(!empty($opening_hours_val['start_time_pm'])):?>
                  
	                  <p class="m-0">
	                  <?php echo t("[start] - [end]",
	                       array(
	                       '[start]'=>Date_Formatter::Time($opening_hours_val['start_time_pm']),
	                       '[end]'=>Date_Formatter::Time($opening_hours_val['end_time_pm'])) )
	                  ?>
	                  </p>  
                  
                  <?php endif;?>
                  
                  <?php if(!empty($opening_hours_val['custom_text'])):?>
                  <p class="m-0"><?php echo $opening_hours_val['custom_text'];?></p>
                  <?php endif;?>
                  
                 </td>
                </tr>
             <?php endforeach;?>
             </table>
             <?php endif;?>
          </div>
      </div-->
         </div>
      
         <div class="col-md-4 profilebox loginbox pt-0">
             <div class="card boxsha">
                 <?php if($data['package_id']==1 || $data['package_id']==4 ){ ?>
                 <div class="card-body">
                      <?php $this->renderPartial("//store/cart",array(
	        'checkout'=>false,
	        'checkout_link'=>$checkout_link
	      ))?>	
                 </div>
                 <?php }else{ ?>
                 <div class="card-body">
                      <!--div id="vue-cart" class="sticky-cart" -->
<div id="vue-cart" data-v-app=""><div class="cartinner"><h5>Cart</h5>
<div class="cart-empty text-center"><div class="mt-5"><div class="no-results m-auto"></div><h6 class="m-0 mt-3">
    You can't order anything from this bakery.!</h6></div></div><div class="section-cart"><div class="cart-summary mt-2 mb-3"></div></div></div></div> <!--sticky-->	
                 </div>
                 <?php } ?>
             </div>
            <div class="card boxsha py-4 mt-4">
               <div class="card-body text-center">
                  <img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/bakerlogo.jpg" class="bklogo" alt="">
               </div>
            </div>
           
            <div class="card boxsha mt-4">
               <div class="card-body text-center" id="first-items">
                  <h2 class="text-uppercase mt-4 mb-4">Connect with Baker</h2>
                 <?php if($data['package_id']==1 || $data['package_id']==4){?> <a href="#"><?php echo $data['contact_email'];?></a>
                 <?php } ?>
                 
                 <?php if($data['package_id']==2 || $data['package_id']==3){?>
        <?php     $all=Yii::app()->db->createCommand('
        SELECT *
        FROM st_option
        Where  option_name="facebook_page" and merchant_id='.$data['merchant_id'].'
        
        ')->queryAll(); 
         $all1=Yii::app()->db->createCommand('
        SELECT *
        FROM st_option
        Where  option_name="twitter_page" and merchant_id='.$data['merchant_id'].'
        
        ')->queryAll(); 
         $all2=Yii::app()->db->createCommand('
        SELECT *
        FROM st_option
        Where  option_name="google_page" and merchant_id='.$data['merchant_id'].'
        
        ')->queryAll(); 
         $all3=Yii::app()->db->createCommand('
        SELECT *
        FROM st_option
        Where  option_name="instagram_page" and merchant_id='.$data['merchant_id'].'
        
        ')->queryAll(); 
    
        ?>
        
        
      
                  <ul class="list-unstyled mb-0 social-icons fc">
                    <?php if(count($all)>0){?>
                     <li><a target="_blank" href="<?php echo $all['option_value'];?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <?php } ?>
                      <?php if(count($all3)>0){?>
                     <li><a target="_blank" href="<?php echo $all['option_value'];?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                      <?php } ?>
                        <?php if(count($all1)>0){?>
                     <li><a target="_blank" href="<?php echo $all['option_value'];?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                      <?php } ?>
                       <?php if(count($all2)>0){?>
                     <li><a target="_blank" href="<?php echo $all['option_value'];?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li> <?php } ?>
                  </ul>
                  
                  <?php } ?>
               </div>
            </div>
             <?php if($data['package_id']==1 || $data['package_id']==4){?>
           <div class="card boxsha mt-4">
               <div class="card-body text-center" id="first-items">
                  <h2 class="text-uppercase mt-4 mb-4">Custom Order Request</h2>
                  <div class="checkout-form payment-box">
                      <form id="addrequest">
                        <div class="form-group">
                           <div class="field-label">Name <sup>*</sup></div>
                           <input type="text" id="request_name" name="request_name" required value="" placeholder="">
                           <input type="hidden" id="YII_CSRF_TOKEN" name="YII_CSRF_TOKEN"  value="" placeholder="">
                           <input type="hidden" id="merchant_id" name="merchant_id"  value="<?php echo $data['merchant_id'];?>" placeholder="">
                        </div>
                        <!--Form Group-->
                        <div class="form-group">
                           <div class="field-label">Email <sup>*</sup></div>
                           <input type="email" id="request_email" name="request_email" required value="" placeholder="">
                        </div>
                        <!--Form Group-->
                        <div class="form-group">
                           <div class="field-label">Phone Number <sup>*</sup></div>
                           <input type="text"id="request_phone" name="request_phone" required value="" placeholder="">
                        </div>
                        <div class="form-group">
                           <div class="field-label">Requested Order Date <sup>*</sup></div>
                           <input class="form-control flatpickr-input"id="request_order_date" name="request_order_date" required type="date" id="datetime" >
                        </div>
                        <div class="form-group">
                           <div class="field-label">Occasion <sup>*</sup></div>
                           <input type="text" name="occasion" value=""  required placeholder="" id="occasion">
                        </div>
                        <div class="form-group">
                           <div class="field-label">Requested Quantity <sup>*</sup></div>
                           <input type="text" name="requested_quantity" required value="" placeholder="" id="requested_quantity">
                        </div>
                        <div class="form-group">
                           <div class="field-label">Request Details (product, colors, flavors and any other specific details)<sup>*</sup></div>
                           <input type="text" name="requested_details" id="requested_details" value="" placeholder="">
                        </div>
                       <!--COMPONENTS REVIEW -->
                        <div>
                           <div class="form-group">
                            <div class="field-label">Inspiration Photo<sup>*</sup></div>
                              <div class="upload__box">
                                <div class="upload__btn-box">
                                  <label class="upload__btn">
                                    <i class="fa fa-upload" aria-hidden="true"></i>
                                    <p class="mb-0">Upload image</p>
                                    <input type="file" name="images"data-max_length="20" class="upload__inputfile">
                                  </label>
                                </div>
                                <div class="upload__img-wrap"></div>
                              </div>
                           </div>
                           <!--div class="or-div">
                               <span>or</span>
                           </div>
                           <a href="#" class="btn btn-success addbtn mb-3">Select a photo from favorites saved</a-->
                        </div>

                       
                        <div class="lower-box">
                          <button type="submit" class="btn theme-btn">Send Message</button>
                           <!--<a class="theme-btn" data-toggle="modal" href="#exampleModalToggle" role="button">Send Message</a>-->
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <?php } ?>
          
         </div>
      </div>
     <?php $this->renderPartial("//store/item-details",array(
			   'is_mobile'=>Yii::app()->params['isMobile']
		   ))?>

           
		  <el-affix 
		  position="bottom" :offset="20" v-if="item_in_cart>0" 
		  z-index="9"
		  v-cloak >
			  <div class="floating-cart d-block d-md-none">				  
		      <button @click="showDrawerCart" class="btn btn-black small rounded w-100 position-relative">				  
			      <p class="m-0"><?php echo t("View order")?></p>
				  <h5 class="m-0">{{merchant_data.restaurant_name}}</h5>
				  <count>{{item_in_cart}}</count>
			  </button>			  
		      </div>
		  </el-affix>
</section>

<div class="d-none">

<div id="components-modal-neworder">
<components-neworder 
	@new-order="onConfirm"
	@close-order="onClose"
	:title="title"
	:content="content"
	:is_loading="is_loading"
></components-neworder>
</div>

<?php $this->renderPartial("//components/vue-bootbox")?>

<DIV id="vue-merchant-details">
<div class="top-merchant-details d-none d-lg-block">
	<div class="container pt-3">
	 <div class="row">
	   <div class="col-lg-3 col-md-3 mb-4 mb-lg-3 list-items">
	   
	    <div class="merchant-image-preview">        
		 <el-image
			style="width: 100%; height: 170px"
			src="<?php echo $data['url_logo'];?>"
			fit="cover"
			lazy
		 >
		 </el-image>
		 </div>
	     
	   </div> <!--col-->
	   
	   <div class="col-lg-9 col-md-9 mb-4 mb-lg-3" >
	   
	    <div class="d-flex merchant-details" v-cloak >
	      <div class="align-self-center w-100" >	      
	       <div class="d-flex justify-content-start mb-2">
	        <div class="w-50 align-self-center"><h5><?php echo $data['restaurant_name']?></h5></div>
	        
	        <?php if(isset($data['cuisine'][0])):?>
	        <div class="w-25 align-self-center"><span class="badge badge-white"><?php echo $data['cuisine'][0]?></span></div>
	        <?php endif;?>
	        
	        <div class="w-25 align-self-center">
	        <span class="badge badge-white rounded-pill">
	           <?php echo Price_Formatter::convertToRaw($data['ratings'],1)?>
	        </span>
	        </div>
	        <div class="w-25 align-self-center">
	         	         
	         <template v-if="!is_loading"> 
	         <!--COMPONENTS-->	         
	        <component-save-store
	         :active="found"
	         :merchant_id="<?php echo intval($data['merchant_id'])?>"
	         @after-save="getSaveStore"
	        />
	        </component-save-store>
	        <!--COMPONENTS-->
	        </template>
	        
	        </div>
	       </div> <!--d-flex-->
	       
	       <div class="d-flex justify-content-start mb-3">
	       	        
	        <div class="w-50 align-self-center"><p class="m-0">$ - <?php echo t("low cost restaurant")?></p></div>
	        
			<div class="w-25 align-self-center">&nbsp;</div>
	        <div class="w-25 align-self-center">
	           <p class="m-0">
	           <?php echo t("Based on")?> <a href="#section-review"><u><?php echo t("{{review_count}} reviews",array('{{review_count}}'=>$data['review_count']))?></u>
	           </a>
	           </p>
	        </div>
	        <div class="w-25 align-self-center">		        
	           <template v-if="!is_loading">	        
	           <p v-if="!found" class="m-0"><?php echo t("Save store")?></p>
	           <p v-else class="m-0"><?php echo t("Saved")?></p>
	           </template>
	        </div>
	       </div> <!--d-flex-->
	       
	       
	       <?php if (is_string($data['description']) && strlen($data['description']) > 0):?>
	       <div class="readmore">
	       <div class="collapse" id="collapse-content" aria-expanded="false">	       
	       <?php echo Yii::app()->input->xssClean($data['description'])?>	       
	       </div>
	       <a role="button" class="collapsed" data-toggle="collapse" href="#collapse-content" aria-expanded="false" aria-controls="collapse-content"></a>
	       </div>
	       <?php endif;?>
	       	      
	      </div> <!--cente-->
	    </div> <!--flex-->
	  	       
	    <component-merchant-services
	    ref="ref_services"
	    @after-update="afterUpdateServices"
		:label="{
			min:'<?php echo CJavaScript::quote(t("min"))?>', 			
		}"
	    >
	    </component-merchant-services>
	     
	   </div> <!--col-->
	   
	   
	 </div> <!--row-->
	</div> <!--container-->
</div><!--top-merchant-details-->

<!-- mobile view -->
<div class="d-block d-lg-none">
 <div class="top-merchant-details mobile-merchant-details position-relative">

 <!-- <el-image
	style="width: 100%; height: 100%"
	:src=""
	fit="cover"
 ></el-image> -->
 
 <div class="sub">
	 <div class="container p-4">
     <div class="d-flex justify-content-end">		
		<template v-if="!is_loading"> 	          
		<component-save-store
			:active="found"
			:merchant_id="<?php echo intval($data['merchant_id'])?>"
			@after-save="getSaveStore"
		/>
		</component-save-store>	        
		</template>
	</div>  <!-- d-flex -->	
	</div> <!--  container -->
 </div> 
 <!-- sub -->
</div>   
<!-- top-merchant-details -->


<div class="container pt-2 pb-2">
   <h5 class="m-0"><?php echo $data['restaurant_name']?></h5> 
   
   <a href="#section-address" class="d-block chevron center position-relative no-hover">
	    <p class="font-weight-bolder m-0">
			<span class="mr-1"><i class="zmdi zmdi-star"></i></span>
			<span class="mr-1">(<?php echo t("{{rating}} ratings",array('{{rating}}'=>$data['review_count']))?>)</span>
			<span>&bull; <?php echo $data['cuisine'][0]?> &bull; $<span>
		</p>		
		<p class="font-weight-light m-0"><?php echo t("Tap for hours,address, and more")?></p>
	</a>

	<div class="text-center">
	<component-merchant-services
	ref="ref_services"
	@after-update="afterUpdateServices"
	:label="{
		min:'<?php echo CJavaScript::quote(t("min"))?>', 			
	}"
	>
	</component-merchant-services>
    </div>

</div>
<!-- container-fluid -->
 
</div>
<!-- mobile view -->

</DIV>
<!-- vue-merchant-details -->


<!--SHOW CHANGE ADDRESS IF OUT OF COVERAGE-->
<?php $this->renderPartial("//components/change-address")?>
<?php $this->renderPartial("//components/address-needed")?>
<?php $this->renderPartial("//components/schedule-order",array(
  'show'=>true
))?>


<div class="section-menu mt-4" >
	<div class="container">
	  <div class="row">
	  	  
	    <div id="vue-merchant-category" class="col-lg-2 col-md-12 mb-3 mb-lg-3 pr-lg-0 menu-left">	    	     
	    		
			<div  id="sticky-sidebar" class="sticky-sidebar d-none d-lg-block" v-cloak>
			<el-skeleton :count="10" :loading="category_loading"  animated> 
				<template #template>			      
					<div class="mb-2"><el-skeleton-item variant="caption" style="width: 50%" /></div>
					<el-skeleton-item variant="text" style="width: 90%" /> 
				</template>
				<template #default>					
					<h5><?php echo t("Menu")?></h5>
					<ul id="menu-category" class="list-unstyled menu-category">
					<li v-for="val in category_data">
					<a :href="'#'+val.category_uiid" class="nav-link" >{{ val.category_name }}</a>
					</li>
					</ul>
				</template>
			</el-skeleton>
			</div>	      
			<!-- sticky	 -->

			<!-- mobile view category -->
			<div class="d-block d-lg-none">
			
			  <components-category-carousel
			  :data="category_data"
			  restaurant_name="<?php echo CHtml::encode($data['restaurant_name'])?>"
			  >
			  </components-category-carousel>

			</div>
			<!-- mobile view category -->

	    </div> <!--col menu-left-->
	    	    
	    <div id="vue-merchant-menu"  class="col-lg-7 col-md-12 mb-3 mb-lg-3 menu-center position-relative">	    	    			    

		<!--CHANGE ADDRRESS-->      
		<component-change-address
		ref="address"
		@set-location="afterChangeAddress"
		@after-close="afterCloseAddress"	
		@set-placeid="afterSetAddress"	
		@set-edit="editAddress"
		@after-delete="afterDeleteAddress"
		:label="{
			title:'<?php echo CJavaScript::quote(t("Delivery Address"))?>', 
			enter_address: '<?php echo CJavaScript::quote(t("Enter your address"))?>',	    	    
		}"
		:addresses="addresses"
		:location_data=""
		>
		</component-change-address>
	    	                  		    
		   <el-skeleton :count="12" :loading="menu_loading" animated>
		      <template #template>
			      <div class="row m-0">  
				      <div class="col-lg-3 col-md-3 p-0 mb-2">
			             <el-skeleton-item variant="image" style="width: 95%; height: 140px" />
	                  </div> <!-- col -->
					  <div class=" col-lg-9 col-md-9 p-0">					  
					    <div class="row m-0 p-0">
						    <div class="col-lg-12">							
							<el-skeleton :rows="2" />
	                        </div>							
	                    </div>
						<!-- row -->
	                  </div> <!-- col --> 					  
 	              </div> <!--  row -->
	          </template>

			  <template #default>
			      <?php $this->renderPartial("//store/menu-data")?>
			  </template>

		   </el-skeleton>
	    
		   <?php $this->renderPartial("//store/item-details",array(
			   'is_mobile'=>Yii::app()->params['isMobile']
		   ))?>

           
		  <el-affix 
		  position="bottom" :offset="20" v-if="item_in_cart>0" 
		  z-index="9"
		  v-cloak >
			  <div class="floating-cart d-block d-md-none">				  
		      <button @click="showDrawerCart" class="btn btn-black small rounded w-100 position-relative">				  
			      <p class="m-0"><?php echo t("View order")?></p>
				  <h5 class="m-0">{{merchant_data.restaurant_name}}</h5>
				  <count>{{item_in_cart}}</count>
			  </button>			  
		      </div>
		  </el-affix>
		   
	    </div> <!--col menu center-->
	  
	    <div class="col-lg-3 col-md-12 mb-3 mb-lg-3 menu-right p-0 d-none d-lg-block">
		  		  
	      <?php $this->renderPartial("//store/cart",array(
	        'checkout'=>false,
	        'checkout_link'=>$checkout_link
	      ))?>	   
		  
	    </div> <!--col menu right-->
	   
	    
	  </div> <!--row-->
	</div> <!--container-->
</div> <!--section-menu-->
<!--SECTION MENU-->
  

<!--SECTION RESTAURANT DETAILS-->

<div class="container mt-0 mt-lg-5" >

  <section id="section-about" class="mb-3 p-2 p-lg-0">
  <div class="row">
    <div class="col-lg-3 col-md-3 p-0 mb-2 mb-lg-0">
        <div class="d-flex">
          <div class="mr-3"><img class="img-20" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/comment-more.png"?>"/></div>
          <div><h5><?php echo t("Few words about {{restaurant_name}}",array('{{restaurant_name}}'=>$data['restaurant_name']))?></h5></div>
       </div> <!--d-flex-->
    </div> <!--col-->
    <div class="col-lg-9 col-md-9">
       <p><?php echo Yii::app()->input->xssClean(nl2br($data['short_description']))?></p>
    </div> <!--col-->
  </div> <!--row-->
  </section>
  
  
  <section id="section-gallery" class="mb-5 p-2 p-lg-0" >
  <div class="row">
    <div class="col-lg-3 col-md-3 p-0 mb-2 mb-lg-0">
        <div class="d-flex">
          <div class="mr-3"><img class="img-20" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/image-gallery.png"?>"/></div>
          <div><h5><?php echo t("Gallery")?></h5></div>
       </div> <!--d-flex-->
    </div> <!--col-->
    <div class="col-lg-9 col-md-9">

    <?php if($gallery):?>
    <div class="gallery gallery_magnific row w-50 hover13">
       <?php $x=1;?>
       <?php foreach ($gallery as $gallery_item):?>
           <?php if($x<=5):?>           
	       <div class="col-lg-4 col-md-5 col-sm-6 col-6 mb-0 mb-lg-0  p-1">
	         <div class="position-relative"> 
	           <figure>
		       <div class="skeleton-placeholder"></div>
		       <a href="<?php echo $gallery_item['image_url']?>">
		       <img class="rounded lazy" data-src="<?php echo $gallery_item['thumbnail']?>"/>
		       </a>
		       </figure>
		     </div>  
	       </div>   
	       <?php endif;?>
	       
	       <?php if($x>5):?>
	          <div class="col-lg-4 col-md-5 col-sm-6 col-6 mb-0 mb-lg-0  p-1">
		         <div class="position-relative"> 
			       <div class="skeleton-placeholder"></div>
			       <a href="<?php echo $gallery_item['image_url']?>">
			       <div class="gallery-more d-flex align-items-center justify-content-center">+<?php echo count($gallery)-5;?></div>	       
			       <img class="rounded lazy" data-src="<?php echo $gallery_item['image_url']?>"/>
			       </a>
			     </div>  
		       </div>
	          <?php break;?>
	       <?php endif;?>
	       
       <?php $x++;?>
       <?php endforeach;?>
    </div> <!--gallery-->
    <?php endif;?>
    
    </div> <!--col-->
  </div> <!--row-->
  </section>
  
  <section id="section-address" class="mb-4 p-2 p-lg-0">
   <div class="row">
    <div class="col-lg-3 col-md-12 p-0 mb-3 mb-lg-0">
        <div class="d-flex">
          <div class="mr-3"><img class="img-20 contain" style="height:28px;" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/location.png"?>"/></div>
          <div>
            <h5><?php echo t("Address")?>:</h5>
            <div class="mb-3">
	            <p class="m-0"><?php echo $data['merchant_address']?></p>
	            <?php if($map_direction):?>
	            <a href="<?php echo $map_direction;?>" target="_blank" class="a-12"><u><?php echo t("Get direction")?></u></a>
	            <?php endif;?>
            </div>
            
          </div>
       </div> <!--d-flex-->
       
       <div class="d-flex">
          <div class="mr-3"><img class="img-20" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/clock.png"?>"/></div>
          <div class="flex-fill">
             <h5><?php echo t("Opening hours")?>:</h5>
             <?php if(is_array($opening_hours) && count($opening_hours)>=1):?>
             <table class="w-100">              
             <?php foreach ($opening_hours as $opening_hours_val):?>
                <tr >
                <td class="align-top pb-1"><?php echo ucwords(t($opening_hours_val['day']))?></td>
                 <td class="bold align-top pb-1">
                  <p class="m-0">
                  <?php echo t("[start] - [end]",
                       array(
                       '[start]'=>Date_Formatter::Time($opening_hours_val['start_time']),
                       '[end]'=>Date_Formatter::Time($opening_hours_val['end_time'])) )
                  ?>
                  </p>
                  <?php if(!empty($opening_hours_val['start_time_pm'])):?>
                  
	                  <p class="m-0">
	                  <?php echo t("[start] - [end]",
	                       array(
	                       '[start]'=>Date_Formatter::Time($opening_hours_val['start_time_pm']),
	                       '[end]'=>Date_Formatter::Time($opening_hours_val['end_time_pm'])) )
	                  ?>
	                  </p>  
                  
                  <?php endif;?>
                  
                  <?php if(!empty($opening_hours_val['custom_text'])):?>
                  <p class="m-0"><?php echo $opening_hours_val['custom_text'];?></p>
                  <?php endif;?>
                  
                 </td>
                </tr>
             <?php endforeach;?>
             </table>
             <?php endif;?>
          </div>
       </div> <!--d-flex-->
       
       
    </div> <!--col-->
    
    <div class="col-lg-9 col-md-12">
      <?php if(!empty($static_maps)):?>
      <img class="rounded w-100"  src="<?php echo $static_maps?>" alt="<?php echo $data['restaurant_name']?>">
      <?php endif;?>     
    </div> <!--col-->
    
  </div> <!--row-->
  </section>
  
</div> <!--container-->

<!--END SECTION RESTAURANT DETAILS-->



<!--SECTION REVIEW-->
<section id="section-review" class="container mb-4" >


 <div class="row mb-4">
	 <div class="col-3 p-lg-0">
	    <div class="d-flex align-items-center" style="height:28px;">
          <div class="m-0 mr-3"><img class="img-20" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/star.png"?>"/></div>
          <div><h5 class="m-0"><?php echo t("Reviews")?></h5></div>
        </div> <!--d-flex-->
	 </div> <!--col-->
	 
	 <div class="col-9">
	     <div class="d-flex justify-content-between align-items-center" style="height:28px;">
	       <div class="flex-fill">
	         <!--<a href="javascript:;" @click="openFormReview" class="a-12"><u><?php echo t("Add your opinion")?></u></a>-->
	       </div>
	       <div class=""><p class="m-0 mr-5"><?php echo t("Based on")?> <u><?php echo t("{{review_count}} reviews",array('{{review_count}}'=>$data['review_count']))?></u></p></div>
	       <div><span class="badge badge-yellow rounded-pill"><?php echo Price_Formatter::convertToRaw($data['ratings'],1)?></span></div>
	     </div> <!--flex-->
	 </div> <!--col-->
 </div> <!--row-->
  
 
 <el-skeleton :count="4" :loading="review_loading" animated>
 <template #template>
    <div class="row items-review mb-4"  >
	  <div class="col-lg-3 col-md-3 p-lg-0 mb-2 mb-lg-0">
	      <div class="d-flex align-items-center">
		    <div class="mr-3"><el-skeleton-item variant="circle" style="width: 60px; height: 60px" /></div>
			<div class="flex-grow-1">				
				<el-skeleton-item variant="h3" style="width: 50%" />				
			</div>
	      </div>

	  </div>
	  <div class="col-lg-9 col-md-9">
	       <el-skeleton :rows="2" />
	  </div>
	</div>
 </template>
 <template #default>

 <!--items-review-->
 <template v-for="data in review_data" >
 <div class="row items-review mb-4" v-for="reviews in data" >
	 <div class="col-lg-3 col-md-3 p-lg-0 mb-2 mb-lg-0">
	    <div class="d-flex align-items-center">
          <div class="mr-3"><img class="img-60 rounded rounded-pill" :src="reviews.url_image" /></div>
          <div>
            
            <h6 class="m-0" v-if="reviews.as_anonymous==0">{{ reviews.fullname }}</h6>
            <h6 class="m-0" v-if="reviews.as_anonymous==1">{{ reviews.hidden_fullname }}</h6>
                        
            <div class="star-rating"
            data-totalstars="5"
            :data-initialrating="reviews.rating"
            data-strokecolor="#fedc79"
            data-ratedcolor="#fedc79"
            data-strokewidth="10"
            data-starsize="15"
            data-readonly="true"
            ></div>            
            
          </div>
        </div> <!--d-flex-->
	 </div> <!--col-->
	 
	 <div class="col-lg-9 col-md-9">
	     <div class="d-flex justify-content-between ">
	       <div class="flex-fill mr-4" >
			 		     
	         <p class="d-none d-lg-block" v-html="reviews.review" ></p>
			 <div class="d-block d-lg-none"> 
				 <div class="row no-gutters">
				   <div class="col pr-2"><p v-html="reviews.review" ></p></div>
				   <div class="col-1"><span class="badge  rounded-pill">{{ reviews.rating }}</span></div>
				 </div>
			 </div>
	         	         
	         <div v-if="reviews.meta.tags_like" class="d-flex flex-row mb-3">
	           <div v-for="tags_like in reviews.meta.tags_like" class="mr-2">
	             <span v-if="tags_like" class="rounded-pill bg-lighter p-1 a-12 pl-2 pr-2">{{ tags_like }}</span>
	           </div>	           
	         </div>  
	         
	         <div v-if="reviews.meta.upload_images" class="gallery review_magnific row m-0">
	           <div v-for="upload_images in reviews.meta.upload_images" class="col-lg-2 col-md-3 col-sm-6 col-6 mb-0 mb-lg-0 p-1">
	             <figure class="m-0">
	                <a :href="upload_images">
		             <img class="rounded" :src="upload_images">
		           </a>	  	       
	             </figure>
	           </div>	           	           
	         </div> <!--gallery-->
	         
	       </div>	       
	       <div class="d-none d-lg-block"><span class="badge badge-yellow rounded-pill">{{ reviews.rating }}</span></div>
	     </div> <!--flex-->
	 </div> <!--col-->
 </div> 
 </template>
 <!--items-review-->

 </template>
 </el-skeleton>
 

 
 <div class="row mb-3" v-if="review_loadmore" >
	 <div class="col-lg-3 col-md-3 p-0"></div>
	 <div class="col-lg-9 col-md-9 ">
	    <a href="javascript:;" @click="loadMore" class="btn btn-black m-auto w25"><?php echo t("Load more")?></a>
	 </div>
</div><!-- row-->	 


</section>
<!--END SECTION REVIEW-->


<!--COMPONENTS REVIEW -->
<div id="components-modal-review">
<components-review 
	@add-review="onConfirm"
	@close-order="onClose"	
	@remove-upload="onRemove"	
	
	:title="title"
	:is_loading="is_loading"	
	:required_message="required_message"
	:upload_images="upload_images"
	
	:review-value="review_content"
    @update:review-value="review_content = $event"
    
    :rating-value="rating_value"
    @update:rating-value="rating_value = $event"
    
></components-review>
</div>


<div class="container-fluid m-0 p-0 full-width">
 <?php $this->renderPartial("//store/join-us")?>
</div>
</div>
<div class="modal fade fd" id="exampleModalToggle"  tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
 
        <button type="button" class="close btn-close closings" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        Thank you for submitting a custom order request! You will be hearing from the baker soon!
      </div>
      
    </div>
  </div>
</div>
<?php if($data['popup_status']==1){ ?>
<div class="modal fade fd" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close btn-close closings" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
       <?php echo $data['popup_text'];?>
      </div>
     
    </div>
  </div>
</div>
<?php } ?>
<div id="snackbar">Some text some message..</div>

<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
<script>
  jQuery(function($) {
  	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
 
  	$('#YII_CSRF_TOKEN').val(token);
    $("#addrequest").validate({
        
        
          rules: {
     request_name: {
        required: true
      },
      request_email:{
          required: true
      },
       request_phone:{
          required: true
      },
      request_order_date:{
          required: true
      },
      occasion:{
          required: true
      }, requested_quantity:{
          required: true
      },requested_details:{
          required: true
      }
       
    },
    messages: {
     
       request_name: {
        required: "Enter Name",
      
      },
      request_email: {
        required: "Enter Email",
      
      },
       request_phone: {
        required: "Enter Phone",
      
      },  request_order_date: {
        required: "Enter Order Date",
      
      }, occasion: {
        required: "Enter Occasion",
      
      }, requested_quantity: {
        required: "Enter Quantity",
      
      }, requested_details: {
        required: "Enter Details",
      
      },
     
    },
    submitHandler: function (form) {
        
        var formData = new FormData(form);
        $.ajax({
        url: "https://dev.indiit.solutions/your_baking_connection/api/saveRequest",
        type: 'post',
        processData: false,
        contentType: false,
        dataType: 'json',
        data: formData,
        success: function(result) {
        console.log(result);
        if(result.code == 1){
            var x = document.getElementById("snackbar");
            $('#snackbar').html('Request saved successfully');
            x.className = "show";
            setTimeout(function(){
            x.className = x.className.replace("show", ""); }, 2000);
            form.reset();
        }
        else if(result.code == 2){
            var x = document.getElementById("snackbar");
            $('#snackbar').html(result.msg);
            x.className = "show";
            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);

        }
        else{
        
        }
        }
        });
     }
     
     });
        
    });
    </script>
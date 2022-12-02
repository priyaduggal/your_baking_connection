<style>
.searchbakery .bakerysearch #vue-search-nav{

    top: 145px;
}

div#vue-home-search {
    position: relative;
    top: 78px;
    z-index:188;
}

.searchbakery {
    position: relative;
    margin-top: -50px;
}

.search-geocomplete input {
    line-height: 20px;
    height: 50px;
    color: #4b4342;
    font-size: 14px;
    border-radius: 0px;
    border: 1px solid #edecec;
    background: #fff;
    box-shadow: none;
    width: 100%;
}

.search-geocomplete .form-control:focus
{
  box-shadow:none;
  border:1px solid #edecec;
  
}

</style>


<section class="page-title">
   <div class="auto-container">
      <h1>Find Your Baker</h1>
   </div>
</section>
<style>
    .headfont {
    font-family: 'OneWishPrint';
    font-weight: 500;
    font-size: 28px !important;
    text-align: center;
    color: #212529;
}
.feature-info .el-image
{
   width: initial !important;
    height: initial !important;
    position: absolute;
    right: 5px;
    bottom: 5px;
}

.feature-info .el-image .el-image__inner
{
  width: 70px;
    height: 70px;
    object-fit: cover;
    border-radius: 100px;
}

.feature-card.style1 .feature-info .feature-meta .feature-price
{
    min-height: 50px;
}
</style>


 


             
               
               
                  

  <!--h2 class="text-center mb-3"><?php echo t("Let's find best food for you")?></h2-->
  

</div>
<!--banner-center-->




  <p class="mb-3 mt-5 headfont">You are one search away from finding amazing, talented bakers in your
community!</p>
<div class="searchbakery">
    
    <div class="col-lg-3 col-md-3 bakerysearch">
        <DIV id="vue-home-search" class="home-search-wrap position-relative d-none d-lg-block">  
                        <component-home-search
                        ref="childref"
                        next_url="<?php echo Yii::app()->createAbsoluteUrl('store/bakers')?>"
                        auto_generate_uuid = "true"
                        :label="{		    
                        enter_address: '<?php echo CJavaScript::quote(t("Enter address"))?>', 		    
                        }"	    
                        />
                        </component-home-search>   
                    </DIV>
                 
 
     <?php $this->renderPartial("//components/search-nav")?>
    </div>
<div id="vue-feed" class="container-fluid" >


<!-- search and filter mobile view -->
<div id="feed-search-mobile" class="d-block d-lg-none mt-2 mb-3">

  <div class="position-relative inputs-box-wrap">
     <input @click="showSearchSuggestion" class="inputs-box-grey rounded" placeholder="<?php echo t("Search")?>">
     <div class="search_placeholder pos-right img-15"></div>       
	 <div class="filter_wrap"><a @click="showFilter" class="filter_placeholder btn"></a></div>
  </div>

</div>
<!-- search and filter mobile view -->

<component-filter-feed
ref="filter_feed"
@after-filter="afterApplyFilter"
:data_attributes="data_attributes"
:data_cuisine="data_cuisine"
:label="{		    
	filters: '<?php echo CJavaScript::quote(t("Filters"))?>', 
	price_range: '<?php echo CJavaScript::quote(t("Price range"))?>', 		    
	cuisine: '<?php echo CJavaScript::quote(t("Cuisines"))?>', 
	max_delivery_fee: '<?php echo CJavaScript::quote(t("Max Delivery Fee"))?>', 
	delivery_fee: '<?php echo CJavaScript::quote(t("Delivery Fee"))?>', 
	ratings: '<?php echo CJavaScript::quote(t("Ratings"))?>', 
	over: '<?php echo CJavaScript::quote(t("Over"))?>', 
	done: '<?php echo CJavaScript::quote(t("Done"))?>', 
	clear_all: '<?php echo CJavaScript::quote(t("Clear all"))?>', 	
}"	    
>
</component-filter-feed>

<component-mobile-search-suggestion
ref="search_suggestion"
ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 
:tabs_suggestion='<?php echo json_encode($tabs_suggestion)?>'
:label="{		    
	clear: '<?php echo CJavaScript::quote(t("Clear"))?>', 
	search: '<?php echo CJavaScript::quote(t("Search"))?>', 		    
	no_results: '<?php echo CJavaScript::quote(t("No results"))?>',	
}"	    
>
</component-mobile-search-suggestion>

<template v-if="response_code==1">
<div class="row mt-2 mt-lg-4 row mb-4">
  
 <div class="col-lg-3 col-md-3 d-none d-lg-block column-1">

   <el-skeleton :loading="data_attributes_loading" animated :count="4">
   <template #template>
       <div class="mb-2"><el-skeleton :rows="5" /></div>
   </template>
   
   
   
   
   <template #default>   

   <!--div class="d-flex justify-content-between align-items-center mb-2" >
     <div class="flex-col"><h4 class="m-0" v-cloak >{{this.total_message}}</h4></div>
     <div class="flex-col" v-if="hasFilter"  v-cloak  >
       <a href="javascript:;" @click="clearFilter" ><p class="m-0" ><u><?php echo t("Clear all")?></u></p></a>
     </div>
   </div-->

  <!--<div class=" mb-4" style="    margin-top: 80px;">-->
  <!-- <div class="form-group">-->
  <!--     <input type="text" class="form-control" placeholder="Enter zip code"/>-->
  <!-- </div>-->
  <!-- </div>-->
   <div class="accordion section-filter" id="sectionFilter" style="margin-top: 130px;">
   
   
   
   
   
   <!--CUISINE-->
   
     <div class="filter-row border-bottom pb-2 pt-2">
     <h5>
     <a href="#filterCuisine" class="d-block collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="filterCuisine"  >
     <?php echo t("Product Type")?>
     </a>
     </h5>   
   
     <div id="filterCuisine" class="collapse" :class="{show:collapse}" aria-labelledby="headingOne" >
            
        <div class="row ">              
            <template v-for="(item_cuisine, index) in data_cuisine" >         
	        <div class="col-lg-6 col-md-6 mb-4 mb-lg-3" v-if="index<=5">
	         <div class="custom-control custom-checkbox">	          
	          <input @click="AutoFeed" type="checkbox" class="custom-control-input cuisine" :id="'cuisine'+item_cuisine.cuisine_id" 
              :value="item_cuisine.cuisine_id"
              v-model="cuisine"
	           >
	          <label class="custom-control-label" :for="'cuisine'+item_cuisine.cuisine_id">
	          {{item_cuisine.cuisine_name}}
	          </label>
	         </div>   		      
	        </div> <!--col-->	         	       
	        </template>	       	      	       
	    </div><!-- row-->
	    	   
	    <div class="collapse" id="moreCuisine">
	      <div class="row m-0">
	       
	         <template v-if="data_cuisine[6]">
	         <template v-for="(item_cuisine, index) in data_cuisine.slice(6)" >
	         <div class="col-lg-6 col-md-6 mb-4 mb-lg-3"> 	         
	         <div class="custom-control custom-checkbox">	          
	          <input @click="AutoFeed"  v-model="cuisine" type="checkbox" class="custom-control-input cuisine" :id="'cuisine'+item_cuisine.cuisine_id"
	          :value="item_cuisine.cuisine_id" >
	          <label class="custom-control-label" :for="'cuisine'+item_cuisine.cuisine_id" >
	           {{item_cuisine.cuisine_name}}
	          </label>
	         </div>   		   	         
	         </div> <!--col-->
	         </template>
	         </template>
	         
	      </div> <!--row-->
	    </div> <!--collapse-->
	    
	    <template v-if="data_cuisine[6]">
	    <div class="row ml-0 mt-1 mt-0 mb-2">
		 <a class="btn link more-cuisine" data-toggle="collapse" href="#moreCuisine" role="button" aria-expanded="false" aria-controls="collapseExample">
		  <u><?php echo t("Show more +")?></u>
		 </a>
		</div>
		</template>
		  	    
     
     </div> <!-- filterCuisine-->  
   </div> <!--filter-row-->

   <!--END CUISINE-->
   
   
   <!--MAX DELIVERY FEE-->
   <!--div class="filter-row border-bottom pb-2 pt-2">
     <h5>
     <a href="#filterMinimum" class="d-block collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="filterMinimum"  >
     <?php echo t("Max Delivery Fee")?>
     </a>
     </h5>   
   
     <div id="filterMinimum" class="collapse" :class="{show:collapse}" aria-labelledby="headingOne" >       
     
     <div class="form-group">
	    <label for="formControlRange"><?php echo t("Delivery Fee")?> <b><span class="min-selected-range"></span></b></label>
	    <input v-model="max_delivery_fee" 
	          id="min_range_slider" value="10" type="range" class="custom-range" id="formControlRange"  min="1" max="20" >
	  </div>
     
     </div>
   </div--> 
   <!--END MAX DELIVERY FEE-->
   
   
   <!--RATINGS-->
    <!--div class="filter-row border-bottom pb-2 pt-2">
     <h5>
     <a href="#filterRating" class="d-block collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="filterRating"  >
     <?php echo t("Ratings")?>
     </a>
     </h5>   
   
     <div id="filterRating" class="collapse" :class="{show:collapse}" aria-labelledby="headingOne" >    
       
         <p class="bold"><?php echo t("Over")?> {{rating}}</p>
         <star-rating  
         v-model:rating="rating"
		 :star-size="30"
		 :show-rating="false" 
		 @update:rating="rating = $event"
		 >
		 </star-rating>

     </div>
    
     
     
   </div--> <!--filter-row-->
   <!--END RATINGS-->
   
   
   </div> <!--section-filter-->
  
 
   
   </template>
   </el-skeleton>

  </div> <!--column-1-->
  <!--FILTERS-->

  
 <!--SEARCH RESULTS-->  
 <div class="col-lg-9 col-md-12 column-2 ">
 
 <div class="d-block d-lg-none"><h4 class="m-0" v-cloak >{{this.total_message}}</h4></div>

 <!--div class="mt-1 mt-lg-5"></div-->
 
    <el-skeleton :loading="is_loading" animated :count="4" >
	<template #template>
	   <div class="row equal align-items-center">	  
			<div v-for="dummy_index in 3" class="col-lg-4  col-md-6 mb-3 list-items">
				<div><el-skeleton-item variant="image" style="width: 100%; height: 170px" /></div>
				<div><el-skeleton-item style="width: 50%;" variant="text" /></div>
				<div><el-skeleton-item  variant="text" /></div>
			</div>
       </div>
	</template>  
	<template #default>
		
	<div class="row equal position-relative">
	
	<!-- <DIV v-if="is_loading" class="overlay-loader">
	  <div class="loading mt-5">      
	    <div class="m-auto circle-loader" data-loader="circle-side"></div>
	  </div>
	</DIV>   -->	
	
	   <template v-for="(data,data_index) in datas"  >
	       <div class="col-md-4 list-items"  v-for="item in data" 
	   :class="{ 'make-grey': item.merchant_open_status=='0' || item.close_store=='1' || item.disabled_ordering=='1' }"  >
	           
            <div class="feature-card style1">
               <div class="feature-img">
                  <a :href="item.merchant_url">
			   <!-- <img class="rounded lazy" :data-src="item.url_logo"/> -->
			   <el-image
					style="width: 100%; "
					:src="item.header_logo"
					:fit="cover"
					lazy
				></el-image>
			</a>
                  <div class="hear-ic">  
				  <!--COMPONENTS-->
	        <component-save-store
	         :active="item.saved_store=='1'?true:false"
	         :merchant_id="item.merchant_id"
	         @after-save="afterSaveStore(item)"
	        />
	        </component-save-store>
	        <!--COMPONENTS--></div>
               </div>
               <div class="feature-info">
                  <h3 class="feature-title"><a :href="item.merchant_url">{{item.restaurant_name}}</a></h3>
                  <div class="feature-meta">
                     <p class="feature-price"> <template  v-for="(cuisine,index) in item.cuisine_name"  >	        
	         <span class=" mr-1">{{cuisine.cuisine_name}},</span>	      	         
	        </template></p>
                     <div class="ratings">
                        <i class="fa fa-star"></i>
                        <span>{{item.ratings.rating}}</span>
                     </div>
                  </div>
                  <a class="btn style2" :href="item.merchant_url">View Baker</a>
                   <el-image
					style="width: 50%; height:50px"
					:src="item.url_logo"
					:fit="cover"
					:class="bklogo"
					lazy
				></el-image>
                  <!--<img src="https://dev.indiit.solutions/YourBakingConnection/dev/assets//img/bakerlogo.jpg" class="bklogo" alt="">-->
               </div>
            </div>
         </div>
	   <div class="col-lg-4 mb-3 col-md-6 list-items d-none"  v-for="item in data" 
	   :class="{ 'make-grey': item.merchant_open_status=='0' || item.close_store=='1' || item.disabled_ordering=='1' }"  >  
	   	   
	     <!--IMAGE-->
	     <div class="position-relative"> 
	       <!-- <div class="skeleton-placeholder"></div> -->
	       <a :href="item.merchant_url">
			   <!-- <img class="rounded lazy" :data-src="item.url_logo"/> -->
			   <el-image
					style="width: 100%; height: 170px"
					:src="item.url_logo"
					:fit="cover"
					lazy
				></el-image>
			</a>
	       
	       <a :href="item.merchant_url">
	       
	         <div v-if="item.merchant_open_status=='0'" class="layer-grey"></div>
	         <div v-else-if="item.close_store == '1' || item.disabled_ordering == '1' || item.disabled_ordering=='1' || item.pause_ordering=='1'  " 
	          class="layer-black d-flex align-items-center justify-content-center" >
	         </div>
	         
	         <div v-if="item.close_store == '1' || item.disabled_ordering=='1'" 
	          class="layer-content d-flex align-items-center justify-content-center">
	           <p class="bold"><?php echo t("Currently unavailable")?></p>
	         </div>
	         
	         <div v-if="item.pause_ordering=='1' && item.disabled_ordering!='1' && item.close_store!='1' " 
	          class="layer-content d-flex align-items-center justify-content-center">
	             <p class="bold" v-if="pause_reason_data[item.merchant_id]">{{pause_reason_data[item.merchant_id]}}</p>
	             <p class="bold" v-else><?php echo t("Currently unavailable")?></p>
	         </div>
	         
	       </a>
	     </div>  
	     <!--END IMAGE-->
	     
	     <div class="row align-items-center mt-2" >
	      <div class="col text-truncate">
	       <h6 v-if="item.merchant_open_status=='0'" class="m-0">
	       {{item.next_opening}}
	       </h6> 
	       <a :href="item.merchant_url">
	         <h5 class="m-0 text-truncate">{{item.restaurant_name}}</h5>
	       </a>
	      </div>
	      <div class="col col-md-auto text-right">
	           	      	      
	        <!--COMPONENTS-->
	        <component-save-store
	         :active="item.saved_store=='1'?true:false"
	         :merchant_id="item.merchant_id"
	         @after-save="afterSaveStore(item)"
	        />
	        </component-save-store>
	        <!--COMPONENTS-->
	        
	      </div>
	     </div> <!--flex-->
	     
	     
	     <div class="row align-items-center" >
	      <div class="col text-truncate">
       
	        <template  v-for="(cuisine,index) in item.cuisine_name"  >	        
	         <span>{{cuisine.cuisine_name}},</span>	      	         
	        </template>
	        
	      </div>
	      <div class="col col-md-auto text-right">
	       <p class="m-0 bold">
	         <template v-if="estimation[item.merchant_id]">
	           <template v-if="services[item.merchant_id]">
	             <template v-for="(service_name,index_service) in services[item.merchant_id]"  >
	               <template v-if="index_service<=0">
	               
	                <template v-if=" estimation[item.merchant_id][service_name][item.charge_type] "> 
	                   {{ estimation[item.merchant_id][service_name][item.charge_type].estimation }} <?php echo t("min")?>
	                </template>
	                   
	               </template>
	             </template>
	           </template>
	         </template>
	       </p>
	      </div>
	    </div> <!--flex-->
	     
	    
	    <div class="row align-items-center">
	      <div class="col text-truncate">
	      <p class="m-0">
	      <b class="mr-1">{{item.ratings.rating}}</b> 
	      <i class="zmdi zmdi-star mr-1 text-grey"></i>
	        
	       <u v-if="item.ratings.review_count>0">{{item.ratings.review_count}}+ <?php echo t("Ratings")?></u>
	       <u v-else>{{item.ratings.review_count}} <?php echo t("rating")?></u>
	       
	      </p>	      
	      </div>
	      
	      <div class="col-md-auto text-right">
	        <p class="m-0" v-if="item.free_delivery==='1'" ><?php echo t("Free delivery")?></p>
	      </div>
	    </div> <!--flex-->
	   
	   </div> <!--col-->
	   </template>
	</div> <!--row-->
	
	</template>
	</el-skeleton>
	
 
    
	<!--LOAD MORE-->	
	<div class="d-flex justify-content-center mt-2 mt-lg-5">
	  <template v-if="hasMore">
	  <a href="javascript:;" @click="ShowMore" class="btn btn-black m-auto w25"
	    :class="{ loading: is_loading }"       
	  >	     
	     <span class="label"><?php echo t("Show more")?></span>
         <div class="m-auto circle-loader" data-loader="circle-side"></div>
	  </a>
	  </template>
	  
	  <template v-else>
	  <template v-if="hasData">
	    <p class="text-muted" v-if="page>1"><?php echo t("end of result")?></p>
	  </template>
	  </template>
	  
	</div>	
	<!--END LOAD MORE-->
		


 
 </div><!--column-2-->
 <!--END SEARCH RESULTS-->
 
</div> <!--section-results-->



<div class="section-fast-delivery tree-columns-center d-none ">
  <div class="row">
  
  <div class="col col-4">
      <div class="d-flex align-items-center">
       <div class="w-100">      
        <img class="rider mirror" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/rider.png"?>" />
       </div>
      </div>
   </div>  
   
   <div class="col col-4">
      <div class="d-flex align-items-center">
       <div class="w-100 text-center">
       
         <h5><?php echo t("Fastest delivery in")?></h5>
         <h1 class="mb-4">Los angeles, california</h1>
         <p><?php echo t("Receive food in less than 20 minutes")?></p>   
       
         <a href="" class="btn btn-black w25"><?php echo t("Check")?></a>
         
       </div>
      </div>
   </div>
   
   <div class="col col-4">
      <div class="d-flex align-items-center">
       <div class="w-100 text-right">      
       <img class="rider" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/rider.png"?>" />
       </div>
      </div>
   </div>   
  
  </div> <!--row-->
</div> <!--section-fast-delivery-->

<!-- mobile view -->
<div class="d-none rounded mb-3 section-fast-delivery-mobile">

     <div class="w-100 text-center pt-3 pt-md-5">       
	   <h5><?php echo t("Fastest delivery in")?></h5>
	   <h1 class="mb-4">Los angeles, california</h1>
	   <p><?php echo t("Receive food in less than 20 minutes")?></p>   
	 
	   <a href="" class="btn btn-black w25"><?php echo t("Check")?></a>	   
	 </div>

</div>
<!-- mobile view -->

</template>

<!--NO RESULTS-->
<template v-else>

<div class="container mt-3 mb-5" v-if="!is_loading">

<div class="no-results-section mb-4 mt-5">
  <img class="img-350 m-auto d-block" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/404@2x.png"?>" />
</div>

<div class="text-center w-50 m-auto">
  <h3><?php echo t("Sorry! We're not there yet")?></h3>
  <p><?php echo t("We're working hard to expand our area. However, we're not in this location yet. So sorry about this, we'd still love to have you as a customer.")?></p>
  <!--<a href="<?php echo Yii::app()->createUrl("/")?>" class="btn btn-green w25">Go home</a>-->
</div>
 
</div> <!--container-->

</template>
<!--NO RESULTS END-->


</div> <!--container-->


<div class="container-fluid m-0 p-0 full-width d-none">
 <?php $this->renderPartial("//store/join-us")?>
</div>



<div id="vue-carousel" class="container">

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

</div>
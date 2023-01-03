
<ul id="vue-cart-preview" class="top-menu list-unstyled navbar-nav me-auto mb-2 mb-lg-0" v-cloak>
	
 <!--li class="d-none d-lg-inline mr-3">      
      <?php $this->widget('application.components.WidgetLangselection');?>
 </li>

 <li class="d-inline notification-dropdown mr-3 mr-lg-0">
    
   <components-notification
     ref="notification"
     avatar="<?php echo Yii::app()->user->avatar?>"
     image_background="<?php echo websiteDomain().Yii::app()->theme->baseUrl."/assets/images/placeholder.png"?>"	
     ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 		     
     view_url="<?php echo Yii::app()->createUrl("/account/notifications-list")?>" 
     :realtime="{
	   enabled : '<?php echo Yii::app()->params['realtime_settings']['enabled']==1?true:false ;?>',  
	   provider : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['provider'] )?>',  			   
	   key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['key'] )?>',  			   
	   cluster : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['cluster'] )?>', 
	   ably_apikey : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['ably_apikey'] )?>', 
	   piesocket_api_key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_api_key'] )?>', 
	   piesocket_websocket_api : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_websocket_api'] )?>', 
	   piesocket_clusterid : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_clusterid'] )?>', 	   
	   channel : '<?php  echo isset(Yii::app()->user->client_uuid ) ? CJavaScript::quote( Yii::app()->user->client_uuid ) : ''?>', 		   
	   event : '<?php echo CJavaScript::quote( Yii::app()->params->realtime['notification_event'] )?>',  
	 }"  			 
     :label="{
	  title : '<?php echo CJavaScript::quote(t("Notification"))?>',  
	  clear : '<?php echo CJavaScript::quote(t("Clear all"))?>',  
	  view : '<?php echo CJavaScript::quote(t("View all"))?>',  			  
	  pushweb_start_failed : '<?php echo CJavaScript::quote(t("Could not push web notification"))?>',  			  
	  no_notification : '<?php echo CJavaScript::quote(t("No notifications yet"))?>',  	
	  no_notification_content : '<?php echo CJavaScript::quote(t("When you get notifications, they'll show up here"))?>',  	
	}"  			 
     >		      
     </components-notification>
    
 </li-->
 <li class="nav-item d-none d-lg-inline Active ">
    <a href="<?php echo Yii::app()->createUrl("/")?>" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="<?php echo Yii::app()->createUrl("/store/bakers")?>" class="nav-link">Search</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="<?php echo Yii::app()->createUrl("/store/inspirationgallery")?>" class="nav-link">Inspiration Gallery</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="<?php echo Yii::app()->createUrl("/store/bakermembership")?>" class="nav-link">Baker Membership</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="<?php echo Yii::app()->createUrl("/about-the-bakers")?>" class="nav-link">About The Bakers</a>
</li>
 <li class="d-none d-lg-inline nav-item lastchild ">
 
 <div class="dropdown userprofile d-lg-inline">	      
   
      <a class="btn btn-sm dropdown-toggle nav-link text-truncate shadow-none " href="javascript:;"
      role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	   <!--img class="img-30 rounded-pill" src="<?php echo Yii::app()->user->avatar?>"/--> <?php echo Yii::app()->input->xssClean(Yii::app()->user->first_name)?>
	  </a>
	  
	 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	    <a class="dropdown-item with-icon-account" href="<?php echo Yii::app()->createUrl("/account/profile");?>">
	    <?php echo t("Profile Settings")?>
	    </a>
	    <a class="dropdown-item with-icon-orders" href="<?php echo Yii::app()->createUrl("/account/orders");?>">
	    <?php echo t("My Orders")?>
	    </a>
	    <a class="dropdown-item with-icon-addresses" href="<?php echo Yii::app()->createUrl("/account/addresses");?>">
	    <?php echo t("Addresses")?>
	    </a>
	    <a class="dropdown-item with-icon-payments" href="<?php echo Yii::app()->createUrl("/account/payments");?>">
	    <?php echo t("Payment Methods")?>
	    </a>
	    <a class="dropdown-item with-icon-savedstore" href="<?php echo Yii::app()->createUrl("/account/favourites");?>">
	    <?php echo t("My Favorites")?>
	    </a>
	    <a class="dropdown-item with-icon-logout" href="<?php echo Yii::app()->createUrl("/account/logout")?>">
	    <?php echo t("Logout")?>
	    </a>			    
	  </div> 
	  
 </div> <!--dropdown-->
 
 
 </li>
 <!--li class="d-none d-lg-inline line-left">
 <a 
   href="<?php echo $cart_preview==true?'javascript:;':'#vue-cart'?>"
   class="<?php echo $cart_preview==true?'ssm-toggle-navx':''?>"
   <?php if($cart_preview):?>
    @click="showCartPreview"  
    <?php endif?>
   >
   <?php echo t("Cart")?>
 </a>
 </li-->

 <!--li class="d-inline  mr-3 mr-lg-0">
 <a 
   href="<?php echo $cart_preview==true?'javascript:;':'#vue-cart'?>"
   class="cart-handle <?php echo $cart_preview==true?'ssm-toggle-navx':''?>"
   <?php if($cart_preview):?>
    @click="showCartPreview"  
    <?php endif?>
   >
    <img src="<?php echo Yii::app()->theme->baseUrl."/assets/images/shopping-bag.svg"?>" />
    <span class="badge small badge-dark rounded-pill">{{items_count}}</span>
 </a>
 </li-->

 <li class="d-inline d-lg-none">
 <div @click="drawer=true" class="hamburger hamburger--3dx">
   <div class="hamburger-box">
      <div class="hamburger-inner"></div>
   </div>
  </div> 
 </li>
 
<?php Yii::app()->controller->renderPartial("//components/cart-preview",array(
 'cart_preview'=>$cart_preview
))?>

<el-drawer v-model="drawer"
 direction="ltr" 
 custom-class="drawer-menu"
 :with-header="true"
 :show-close="true"
 size="60%"
 >
 
 <template #default>
 
 

 <div class="mt-1">    
   <ul class="list-unstyled with-icons">
	<li>
		<a class="with-icon-account" href="<?php echo Yii::app()->createUrl("/account/profile");?>">
		<?php echo t("Manage my account")?>
		</a>
	</li> 
	<li>
		<a class="with-icon-orders" href="<?php echo Yii::app()->createUrl("/account/orders");?>">
		<?php echo t("My orders")?>
		</a>
	</li>
	<li>
		<a class="with-icon-addresses" href="<?php echo Yii::app()->createUrl("/account/addresses");?>">
		<?php echo t("Addresses")?>
		</a>
	</li>
	<li>
		<a class="with-icon-payments" href="<?php echo Yii::app()->createUrl("/account/payments");?>">
		<?php echo t("Payments Options")?>
		</a>
	</li>
	<li>
		<a class="with-icon-savedstore" href="<?php echo Yii::app()->createUrl("/account/favourites");?>">
		<?php echo t("Saved Stores")?>
		</a>
	</li>
	<li>
		<a class="with-icon-logout" href="<?php echo Yii::app()->createUrl("/account/logout")?>">
		<?php echo t("Logout")?>
		</a>			         
	</li>
   </ul>
 </div>
 <hr/>
 
 <div class="mb-3">
   <components-language
   ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 
   >
   </components-language>
 </div>

 <ul class="list-unstyled">
      <li><a href="<?php echo Yii::app()->createUrl("/merchant")?>"><?php echo t("Add your restaurant")?></a></li>
      <li><a href="<?php echo Yii::app()->createUrl("/deliver")?>"><?php echo t("Sign up to deliver")?></a></li>
   </ul>
 </template>

 <template #footer >
  
 </template>

</el-drawer>
 
</ul>
<ul id="vue-cart-preview" class="top-menu list-unstyled navbar-nav me-auto mb-2 mb-lg-0" v-cloak> 
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
    <a href="<?php echo Yii::app()->createUrl("/store/aboutthebakers")?>" class="nav-link">About The Bakers</a>
</li>
  <!--li class="d-none d-lg-inline  ">      
      <?php $this->widget('application.components.WidgetLangselection');?>
  </li--->

 <!--li class="d-none d-lg-inline">
 
 <a href="<?php echo $cart_preview==true?'javascript:;':'#vue-cart'?>" 
   class="<?php echo $cart_preview==true?'ssm-toggle-navx':''?>"
   <?php if($cart_preview):?>
    @click="showCartPreview"  
    <?php endif?>
   >
   <?php echo t("Cart")?>
 </a>
 
 </li>
 <li class="d-inline pr-2">     
 <a href="<?php echo $cart_preview==true?'javascript:;':'#vue-cart'?>" 
    class="cart-handle <?php echo $cart_preview==true?'ssm-toggle-navx':''?>"
    <?php if($cart_preview):?>
    @click="showCartPreview"  
    <?php endif?>
    >
    <img src="<?php echo Yii::app()->theme->baseUrl."/assets/images/shopping-bag.svg"?>" />
    <span class="badge small badge-dark rounded-pill">
    {{items_count}}
    </span>
 </a>
 
 </li--->
<li class="d-none d-lg-inline nav-item lastchild">
   <a class="nav-link" href="<?php echo Yii::app()->createUrl("/account/login")?>"><?php echo t("Join/Login")?></a>  
 </li>

 <li class="ml-3 ml-xs-1  d-inline d-lg-none">
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
 :with-header="false"
 size="60%"
 >
 
 <template #default>
 <a href="<?php echo Yii::app()->createUrl("/account/login")?>" class="btn btn-black text-white w-100 rounded-0"><?php echo t("Sign in")?></a>
 <div class="mt-4">    
   <ul class="list-unstyled">
      <li><a href="<?php echo Yii::app()->createUrl("/merchant")?>"><?php echo t("Add your restaurant")?></a></li>
      <li><a href="<?php echo Yii::app()->createUrl("/deliver")?>"><?php echo t("Sign up to deliver")?></a></li>
   </ul>

   <hr/>

   <components-language
   ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 
   >
   </components-language>
 

 </div>
 </template>

 <template #footer >
  
 </template>

</el-drawer>
 
</ul>
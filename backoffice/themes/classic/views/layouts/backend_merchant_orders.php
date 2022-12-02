<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex, nofollow" />
<meta name="<?php echo Yii::app()->request->csrfTokenName?>" content="<?php echo Yii::app()->request->csrfToken?>" />    
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/merchant.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/themify-icons.css"/>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="<?php echo $this->getBodyClasses(); ?>">
    <div class="loader"></div>  
  <?php $this->renderPartial("/layouts/header");?>
  <section class="page-title">
   <div class="auto-container">
      <h1>Orders</h1>
   </div>
</section>
<section class="accountinfo contactus  merchantmain">
    <div class="container merchantcontainer">
        <div class="row">
            <div class="col-lg-4 col-md-3 merchantleft">
            <?php $this->renderPartial("/layouts/sidebar");?>
             </div>
            <div class="col-lg-8 col-md-9 profilebox pt-0 loginbox tabs-box merchantright">   
               <?php echo $content;?>
            </div>
        </div> 
  </div>
</section>
<div class="container-fluid m-0 p-0  d-none">
 
 <div class="sidebar-panel nice-scroll">
	 <div class="sidebar-wrap">
	 
	  <div class="sidebar-logo">
	   <a href="<?php echo Yii::app()->createUrl($this->ctr_name."/dashboard")?>">
	     <img class="img-200" src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/logo@2x.png" />
	   </a>
	  </div>
	  
	  <div class="sidebar-profile">
	     <div class="row m-0">
	       <div class="col-md-3 m-0 p-0" >
	         <img class="rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />
	       </div>
	       <div class="col-md-9 m-0 p-0" >
	         <h6><?php echo MerchantTools::displayAdminName();?></h6>
	         <p class="dim">	         
	         <?php 
	         if(!empty(Yii::app()->merchant->contact_number)){
	         	echo t("T.")." ".Yii::app()->merchant->contact_number;
	         }
	         if(!empty(Yii::app()->merchant->email_address)){
	         	echo '<br/>'.t("E.")." ".Yii::app()->merchant->email_address;
	         }	        	        
	         ?>
	         </p>
	       </div>
	     </div> <!--row-->
	  </div> 
	  <!--sidebar-profile-->
	  
	  <div id="vue-siderbar-menu" class="siderbar-menu">	  
	   <?php 
	   $this->widget('application.components.WidgetMenu',array(
	     'menu_type'=>"merchant"
	   ));
	   ?>
	  </div> <!--siderbar-menu-->
	   
	 </div> <!--sidebar-wrap-->
 </div> <!--sidebar-panel-->
 
 
 <div class="main-container e">
    <div class="main-container-wrap">
       <div class="container-fluid">
       <?php echo $content;?>
       </div> <!--container-->
    </div> <!--main-container-wrap-->
 </div><!-- main-container-->
 
 <div class="ssm-overlay ssm-toggle-nav"></div>
 
</div><!--container-->

</body>
            <script type="text/javascript">
// All objects loaded, animate left/ fade

$(window).on("load",function(){ 
  
  //Fade Out
  //$(".loader").delay(1500).fadeOut(500);
  
  //Slide Left
  $(".loader").delay(1500).animate({width:'toggle'},2000);
  
});
</script>
</html> 
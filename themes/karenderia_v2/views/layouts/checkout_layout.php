<?php $this->beginContent('/layouts/main-layout'); ?>
<!--TOP NAV-->
<!--TOP SECTION-->
<!--div class="container-fluid">
 <div id="top-navigation" class="row" >
    <div id="vue-checkout-back" v-cloak class="col-lg-auto col-md-6 col-6 d-flex justify-content-start align-items-center">    
      <a :href="back_url" class="back-arrow text-green"><?php echo t("Back to Menu");?></a>
    </div>
    <div class="col-lg-9 col-md-6 col-6 d-flex justify-content-start justify-content-lg-center align-items-center">            
       <?php 
       //$this->widget('application.components.WidgetSiteLogo',array(
        // 'class_name'=>'top-logo'
      // ));
       ?>
    </div>         
 </div>
</div-->
<!--END TOP SECTION-->
<!--END TOP NAV-->
<!--TOP SECTION-->
<div class="logo-main" data-aos="fade-down" data-aos-delay="400" style="background-image:url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/web.gif')">
      <?php 
       $this->widget('application.components.WidgetSiteLogo',array(
         'class_name'=>'top-logo'
       ));
       ?>
    
</div>
<nav  class="navbar navbar-expand-xl navbar-light">
<div class="auto-container">
 <div id="top-navigation" class="p-0">
   
     <?php $this->widget('application.components.WidgetUserNav');?>    

 </div>

 <!-- mobile view --> 
 <?php 
 $action_id = Yii::app()->controller->action->id;
 if($action_id=="restaurants" || $action_id=="menu"){
    $this->renderPartial("//components/widget-subnav");
 }
 ?>
 <!-- mobile view -->
</div>
</nav> 
<!--MAIN CONTENT-->
<div class="page-content">
<section class="page-title">
   <div class="auto-container">
      <h1>Checkout</h1>
   </div>
</section>    
<?php echo $content; ?>

</div>
<!--END MAIN CONTENT-->

<!--SUB FOOTER-->
<?php $this->renderPartial("//layouts/sub-footer")?>
<!--END SUB FOOTER-->

<!--FOOTER-->
<?php $this->renderPartial("//layouts/footer")?>
<!--END FOOTER-->

<?php $this->endContent(); ?>
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

    <!--div class=" col-lg-auto col-md-6 col d-flex justify-content-start align-items-center">          
       <?php 
       $this->widget('application.components.WidgetSiteLogo',array(
         'class_name'=>'top-logo'
       ));
       ?>
    </div--> <!--col-->
        
    <!--div id="vue-widget-nav" class=" col d-none d-lg-block">    
      <div class="d-flex justify-content-start align-items-center">
      <?php       
      if(!empty($widget_col1)){
         $this->renderPartial("//components/$widget_col1");
      }
      ?>   
      </div>     
    </div--> <!--col-->

    <!--div class=" col-lg-auto col-md-6 col d-flex justify-content-end align-items-center"--->          
   
     <?php $this->widget('application.components.WidgetUserNav');?>    
    <!--/div--> <!--col-->

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
<!--END TOP SECTION-->
  <?php           
     //if(!empty($widget_col2)){        
    	 ///$this->renderPartial("//components/$widget_col2");
     //}
     ?>
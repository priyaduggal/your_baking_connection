<?php $this->beginContent('/layouts/main-layout'); ?>



<div class="logo-main" data-aos="fade-down" data-aos-delay="400" style="background-image:url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/web.gif')">
      <?php 
       $this->widget('application.components.WidgetSiteLogo',array(
         'class_name'=>'top-logo'
       ));
       ?>
    
</div>
<nav  class="navbar navbar-expand-xl navbar-light">
    <div class="auto-container">
<div id="top-nav" class="headroomx">
  <div class="row">
    <div class="col d-block d-lg-none">
      <?php 
      $this->widget('application.components.WidgetSiteLogo',array(
      'class_name'=>'top-logo'
      ));
      ?>
    </div>
    <div class="col d-flex justify-content-end align-items-center">          
    <?php $this->widget('application.components.WidgetUserNav');?>    
    </div> <!--col-->   
  </div> <!--row-->
</div> <!--top-nav-->
</div>
</nav>
<div class="page-content">

<?php echo $content; ?>

<!--END MAIN CONTENT-->

</div> 
<!--SUB FOOTER-->
<?php $this->renderPartial("//layouts/sub-footer")?>
<!--END SUB FOOTER-->

<!--FOOTER-->
<?php $this->renderPartial("//layouts/footer")?>

<?php $this->endContent(); ?>
    
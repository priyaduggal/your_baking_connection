 <nav  class="dashboard-nav mb-10 mb-md-0">

<!--div class="mb-5">
<?php 
$this->widget('application.components.WidgetSiteLogo',array(
 'class_name'=>'top-logo'
));
?>
</div-->
<div class="d-flex ">
  <!--div class="mr-2 position-relative">
  
   <div class="skeleton-placeholder rounded-pill img-50"></div>
   <img class="lazy img-50 rounded-pill" data-src="<?php echo Yii::app()->user->avatar?>" />   
  
  </div>
  <div class="">
    <h6><?php echo Yii::app()->input->xssClean(Yii::app()->user->first_name)?></h6>
    <p class="text-grey">
    
    <?php if(!empty(Yii::app()->user->contact_number)):?>
    <?php echo Yii::app()->input->xssClean(Yii::app()->user->contact_number)?><br/>
    <?php endif;?>
    
    <?php if(!empty(Yii::app()->user->email_address)):?>
    <?php echo Yii::app()->input->xssClean(Yii::app()->user->email_address)?>
    <?php endif;?>
    
    </p>
  </div>
</div---> 

<?php $this->widget('application.components.WidgetCustomerMenu',array());?>

</nav>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'frm-merchant',
	'enableAjaxValidation'=>false,
)); ?>

<?php if(Yii::app()->user->hasFlash('success')): ?>
	<div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif;?>

<?php if(Yii::app()->user->hasFlash('error')): ?>
	<div class="alert alert-danger">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif;?>

<div class="row">
<div class="col-md-6">


<h6 class="mb-4"><?php echo t("Enabled Payment gateway")?></h6>

</div> <!--col-->

<div class="col-md-6">

<div class="d-flex flex-row justify-content-end">
  <div class="p-2">
  
  <a type="button" class="btn btn-success addbtn checkbox_select_all" 
  href="javascript:;">
    <i class="zmdi zmdi-check mr-3"></i> <?php echo t("Check All")?>
  </a>
  
  </div>
</div> <!--flex-->

</div> <!--col-->
</div><!-- row-->


<?php if(is_array($provider) && count($provider)>=1):?>
<?php foreach ($provider as $payment_code=>$payment_name):
?>

<div class="custom-control custom-switch custom-switch-md">  
  <?php echo $form->checkBox($model,"payment_gateway[$payment_code]",array(
     'class'=>"custom-control-input checkbox_child",     
     'id'=>"payment_gateway[$payment_code]",
     'value'=>$payment_code,
     'checked'=>in_array($payment_code,(array)$model->payment_gateway)?true:false
   )); ?>   
  <label class="custom-control-label" for="payment_gateway[<?php echo $payment_code?>]">
   <?php echo $payment_name?>
  </label>
</div>    

<?php endforeach;?>
<?php endif;?>
	
<div class="row text-left mt-4">
<div class="col-md-12 m-0">
<?php echo CHtml::submitButton('save',array(
'class'=>"btn btn-submit",
'value'=>CommonUtility::t("Save")
)); ?>
</div>
</div>

<?php $this->endWidget(); ?>
 
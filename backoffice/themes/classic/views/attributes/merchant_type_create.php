<nav class="navbar navbar-light justify-content-between">
<?php
$this->widget('zii.widgets.CBreadcrumbs', 
array(
'links'=>$links,
'homeLink'=>false,
'separator'=>'<span class="separator">
<i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>'
));
?>
</nav>
  
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>

<div class="card">
  <div class="card-body">

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
<div class="form-label-group">  
 <label>Title</label>
   <?php echo $form->textField($model,'title',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'title'),     
   )); ?>   
  
   <?php echo $form->error($model,'title'); ?>
</div>

<div class="form-label-group">  
 <label>Description</label>
   <?php echo $form->textField($model,'description',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'description'),     
   )); ?>   
  
   <?php echo $form->error($model,'description'); ?>
</div>

<?php //print_r($commission_based);?>
<h6 class="mb-4"><?php echo t("Type")?></h6>
<div class="form-label-group">    
   <?php echo $form->dropDownList($model,'type', (array) $commission_based,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'type'),
   )); ?>         
   <?php echo $form->error($model,'type'); ?>
</div>

  </div> <!--body-->
</div> <!--card-->

<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>
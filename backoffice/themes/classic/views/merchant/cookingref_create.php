<div class="categorylist card boxsha default-tabs tabs-box">
      <div class="card style-2">
           <div class="card-body">
<h4 class="mb-0">
<?php
$this->widget('zii.widgets.CBreadcrumbs', 
array(
'links'=>$links,
'homeLink'=>false,
'separator'=>'<span class="separator">
<i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>'
));
?>
</h4>

  
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>

<div class="card p-0">
  <div class="card-body  p-0">
 
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
 <?php    
    echo $form->labelEx($model,'cooking_name'); ?>
   <?php echo $form->textField($model,'cooking_name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'cooking_name')     
   )); ?>   
  
   <?php echo $form->error($model,'cooking_name'); ?>
</div>

<h6 class="mb-4"><?php echo t("Status")?></h6>
<div class="form-label-group">    
   <?php echo $form->dropDownList($model,'status', (array) $status,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'status'),
   )); ?>         
   <?php echo $form->error($model,'status'); ?>
</div>


  </div> <!--body-->
</div> <!--card-->


<!--TRANSLATION-->
<?php //if($multi_language && is_array($language) && count($language)>=1 ):?>
<?php 
//$this->widget('application.components.WidgetTranslation',array(
  //'form'=>$form,
//  'model'=>$model,
 // 'language'=>$language,
 // 'field'=>$fields,
//  'data'=>$data
//));
?>   
<?php //endif;?>
<!--END TRANSLATION-->
  
  
<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-submit mt-3",
'value'=>t("Submit")
)); ?>


<?php $this->endWidget(); ?>
</div>
</div>
</div>
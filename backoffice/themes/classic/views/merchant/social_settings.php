<style>
@media (min-width: 768px)
.col-md-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 100% !important;
    max-width: 100% !important;
}

</style>
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>
<?php //echo Yii::app()->merchant->merchant_id;?>
<?php
  $all=Yii::app()->db->createCommand('SELECT * FROM `st_merchant` where merchant_id='.Yii::app()->merchant->merchant_id.'
            ')->queryAll(); 
           // print_r($all);
   if($all[0]['package_id']==2){     
           
            ?>
          <style>
          .taxes{
              display:none;
          }
          </style>
            
            
            <?php } ?>

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
  




<h6 class="mt-3"><?php echo t("Social URL Page")?></h6>

<div class="form-label-group">    
   <?php echo $form->textField($model,'facebook_page',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'facebook_page')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'facebook_page'); ?>
   <?php echo $form->error($model,'facebook_page'); ?>
</div>
<div class="form-label-group">    
   <?php echo $form->textField($model,'instagram_page',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'instagram_page')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'instagram_page'); ?>
   <?php echo $form->error($model,'instagram_page'); ?>
</div>

<div class="form-label-group">    
   <?php echo $form->textField($model,'twitter_page',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'twitter_page')     
   )); ?>   
   <label>Tiktok Page</label>
   <?php echo $form->error($model,'twitter_page'); ?>
</div>


<div class="form-label-group">    
   <?php echo $form->textField($model,'google_page',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'google_page')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'google_page'); ?>
   <?php echo $form->error($model,'google_page'); ?>
</div>




  </div> <!--body-->
</div> <!--card-->



<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>  
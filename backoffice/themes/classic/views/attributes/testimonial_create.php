<style>
.accountinfo.contactus form label.custom-file-label.image_label{
    padding: 10px !important;
}
</style><nav class="navbar navbar-light justify-content-between">
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
 <label>Name</label>
   <?php echo $form->textField($model,'name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'name'),     
   )); ?>   
  
   <?php echo $form->error($model,'name'); ?>
</div>

<div class="form-label-group">  
 <label>Description</label>
   <?php echo $form->textField($model,'description',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'description'),     
   )); ?>   
  
   <?php echo $form->error($model,'description'); ?>
</div>
<div class="form-label-group">
    <label>Image</label>
    
<div class="upload__box">
    
<div id="vue-uploader" style="width: 100%;">
<component-uploader
ref="uploader"
max_file="<?php echo Yii::app()->params->dropzone['max_file'];?>"
max_file_size = "<?php echo Yii::app()->params->dropzone['max_file_size']?>"
select_type="single"
field = "photo"
field_path = "path"
inline="false"
selected_file="<?php echo $model->image;?>"
upload_path="<?php echo $upload_path?>"
save_path="<?php echo $model->path?>"

@set-afer-upload="afterUpload"
@set-afer-delete="afterDelete"
:label="{
select_file:'<?php echo CJavaScript::quote(t("Select File"))?>',       
upload_new:'<?php echo CJavaScript::quote(t("Upload New"))?>',     
upload_button:'<?php echo CJavaScript::quote(t("Upload Images"))?>',

add_file:'<?php echo CJavaScript::quote(t("Add Files"))?>',
previous:'<?php echo CJavaScript::quote(t("Previous"))?>',
next:'<?php echo CJavaScript::quote(t("Next"))?>',
search:'<?php echo CJavaScript::quote(t("Search"))?>',    
delete_file:'<?php echo CJavaScript::quote(t("Delete File"))?>',   
drop_files:'<?php echo CJavaScript::quote(t("Drop files anywhere to upload"))?>',   
or:'<?php echo CJavaScript::quote(t("or"))?>',   
select_files:'<?php echo CJavaScript::quote(t("Select Files"))?>',   
}"
>
</component-uploader>

</div>
</div>
</div>
			  
<?php //print_r($commission_based);?>

  </div> <!--body-->
</div> <!--card-->

<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>
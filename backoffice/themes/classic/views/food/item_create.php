<style>
.profilebox.loginbox .card-body {
    box-shadow: none;
}
.addMoreTeamDiv {
    display: flex;
}
.append_divs input.form-control.mb-0 {
    margin-bottom: 12px !important;
}.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
}
.plus-icon .addMoreTeam {
    background: #a7e8d4;
    height: 50px;
    width: 50px;
    margin-left: 12px;
    text-align: center;
    line-height: 50px;
    border-radius: 100px;
    color: #fff;
}
</style><div  class="categorylist card boxsha default-tabs tabs-box">
       <div class="card style-2">


  <div class="card-body">
<?php if($model->isNewRecord):?>
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
<?php endif;?>
  
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array('enctype' => 'multipart/form-data'),				
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
    echo $form->labelEx($model,'item_name'); ?>
   <?php echo $form->textField($model,'item_name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'item_name')     
   )); ?>   
  
   <?php echo $form->error($model,'item_name'); ?>
</div>


<h6 class="mb-2 mt-2"><?php echo t("Short Description")?></h6>
<div class="form-label-group mt-2">    
   <?php echo $form->textArea($model,'item_short_description',array(
     'class'=>"form-control form-control-text short_description",     
   )); ?>      
   <?php echo $form->error($model,'item_short_description'); ?>
</div>

<h6 class="mb-2 mt-2"><?php echo t("Long Description")?></h6>
<div class="form-label-group mt-2">    
   <?php echo $form->textArea($model,'item_description',array(
     'class'=>"form-control form-control-text summernote",     
     'placeholder'=>t("Description")
   )); ?>      
   <?php echo $form->error($model,'item_description'); ?>
</div>


<?php if($model->isNewRecord):?>
<div class="d-flex">

<div class="form-label-group w-50 mr-3">   

<?php    
    echo $form->labelEx($model,'item_price'); ?>
   <?php echo $form->textField($model,'item_price',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'item_price')     
   )); ?>   
   
   <?php echo $form->error($model,'item_price'); ?>
</div>

<div class="form-label-group w-50">    <label>&nbsp;</label>
   <?php echo $form->dropDownList($model,'item_unit', (array) $units,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'item_unit'),
   )); ?>         
   <?php echo $form->error($model,'item_unit'); ?>
</div>


</div> <!--flex-->
<?php endif;?>


<h6 class="mb-4 mt-0"><?php echo t("Category")?></h6>
<div class="form-label-group">    
   <?php echo $form->dropDownList($model,'category_selected', (array)$category,array(
     'class'=>"form-control custom-select form-control-select select_two",
     'multiple'=>true,
     'placeholder'=>$form->label($model,'category_selected'),
   )); ?>         
   <?php echo $form->error($model,'category_selected'); ?>
</div>

<div id="vue-uploader">
<component-uploader
ref="uploader"
max_file="<?php echo Yii::app()->params->dropzone['max_file'];?>"
max_file_size = "<?php echo Yii::app()->params->dropzone['max_file_size']?>"
select_type="single"
field = "photo"
field_path = "path"
inline="false"
selected_file="<?php echo $model->photo;?>"
upload_path="<?php echo $upload_path?>"
save_path="<?php echo $model->path?>"

@set-afer-upload="afterUpload"
@set-afer-delete="afterDelete"
:label="{
    select_file:'<?php echo CJavaScript::quote(t("Select File"))?>',       
    upload_new:'<?php echo CJavaScript::quote(t("Upload New"))?>',     
    upload_button:'<?php echo CJavaScript::quote(t("Featured Image"))?>',     
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

<!--h6 class="mb-4 mt-4"><?php echo t("Featured")?></h6>
<div class="form-label-group">    
   <?php echo $form->dropDownList($model,'item_featured', (array)$item_featured,array(
     'class'=>"form-control custom-select form-control-select select_two",
     'multiple'=>true,
     'placeholder'=>$form->label($model,'item_featured'),
   )); ?>         
   <?php echo $form->error($model,'item_featured'); ?>
</div>

<h6 class="mb-4 mt-4"><?php echo t("Background Color Hex")?></h6>
<div class="form-label-group">    
   <?php echo $form->textField($model,'color_hex',array(
     'class'=>"form-control form-control-text colorpicker",
     'placeholder'=>$form->label($model,'color_hex'),
     'readonly'=>false
   )); ?>      
   <?php echo $form->error($model,'color_hex'); ?>
</div-->

<h6 class="mb-3 mt-4"><?php echo t("Status")?></h6>
<div class="form-label-group">    
   <?php echo $form->dropDownList($model,'status', (array) $status,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'status'),
   )); ?>         
   <?php echo $form->error($model,'status'); ?>
</div>


  </div> <!--body-->
</div> <!--card-->

  <div class="card boxsha mt-3">
               <div class="card-body">
                  <h4 class="card-title">Custom Fields</h4>
                  <form>
                      <div class="all-m">
                     <div class="row">
                         
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Label</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                               <label class="col-form-label">Type</label>
                               <select class="form-control">
                                   <option>Select Type</option>
                                   <option>Radio Button</option>
                                   <option>Check Box</option>
                                   <option>Dropdown</option>
                               </select>
                           </div>
                        </div>
                        <div class="col-xl-12">
                           
                           <div class="form-group row append_divs">
                              <label class="col-lg-12 col-form-label">Value</label>
                             <div class="dis-flx">
                                 <input type="text" class="form-control mb-0">
                                  <div class="plus-icon"> <div class="addMoreTeamDiv">
                        <a href="javascript:void(0)" class="addMoreTeam" type="button" >
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                        <a href="javascript:void(0)" class="minus-fun" type="button" >
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        </a>
                     </div></div>
                              </div>
                          
                         

                        </div>
                        </div> </div></div>
                      <div class="row">
                     <div class="col-xl-12"><a href="javascript:void(0)" class="add-new-my pull-right mt-3 mb-3 text-right" type="button" >
                        <i class="fa fa-plus" aria-hidden="true"></i> Add More
                        </a></div></div>
                  </form>
                  <div class="text-right">
                        <div class="form-group mt-3 d-flex justify-content-md-end">
                      <button class="btn w-auto d-inline-block btn-primary btn-lg btn-theme"><span>Submit</span></button>
                    </div>
                     </div>
               
            </div>
         </div>
<!--TRANSLATION-->
<?php //f($multi_language && is_array($language) && count($language)>=1 ):?>
<?php 
//$this->widget('application.components.WidgetTranslation',array(
 // 'form'=>$form,
 // 'model'=>$model,
  //'language'=>$language,
 // 'field'=>$fields,
 // 'data'=>$data
//));
?>   
<?php //endif;?>
<!--END TRANSLATION-->
  
  
<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-submit  mt-3",
'value'=>t("Submit")
)); ?>


<?php $this->endWidget(); ?>
</div>
</div>
</div>
<?php $this->renderPartial("/admin/modal_delete_image");?>
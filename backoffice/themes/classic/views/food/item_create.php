<style>
.minus-fun {
  background: #dc3545;
    height: 50px;
    width: 50px;
    min-width:50px;
    margin-left: 12px;
    text-align: center;
    line-height: 50px;
    border-radius: 100px;
    color: #fff;
}a.minus-fun.removemaindiv {
   /* top: 16px;*/
    /*position: absolute;*/
    float: right;
   /* right: 18px;*/
    z-index: 15;
}
.profilebox .col-form-label {
    font-family: 'ABeeZee', sans-serif;
    font-size: 14px;
}
.plus-icon .minus-fun {
      min-width:50px;
    background:  #dc3545;
    height: 50px;
    width: 50px;
    margin-left: 12px;
    text-align: center;
    line-height: 50px;
    border-radius: 100px;
    color: #fff;
}
.dis-flx {
    margin-bottom: 12px;
}
.dis-flx {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0;
}
.show{
    display:block !important;
}
.hide{
    display:none !important; 
}
.profilebox.loginbox .card-body {
    box-shadow: none;
}
.addMoreTeamDiv {
    display: flex;
}
.append_divs input.form-control.mb-0 {
    margin-bottom: 0 !important;
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
</style>
<div  class="categorylist card boxsha default-tabs tabs-box">
<div class="card style-2">
<div class="card-body">
<?php //print_r($model);?>
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
<?php if($model->scenario=='create'){?>
<div class="form-label-group">   
<label>Quantity</label>
   <?php echo $form->textField($model,'inventory_stock',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'inventory_stock')     
   )); ?>   
  
   <?php echo $form->error($model,'inventory_stock'); ?>
</div>
<?php } ?>
<?php if($model->isNewRecord):?>
<div class="d-flex">

<div class="form-label-group w-100 mr-3">   

<?php    
    echo $form->labelEx($model,'item_price'); ?>
   <?php echo $form->textField($model,'item_price',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'item_price')     
   )); ?>   
   
   <?php echo $form->error($model,'item_price'); ?>
</div>

<!--div class="form-label-group w-50">    <label>&nbsp;</label>
   <?php echo $form->dropDownList($model,'item_unit', (array) $units,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'item_unit'),
   )); ?>         
   <?php echo $form->error($model,'item_unit'); ?>
</div-->


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


  </div> <!--body-->
</div> <!--card-->
<input type="hidden" ref="available_at_specific" value="<?php echo $model->available_at_specific==1?true:false?>">

<div class="custom-control custom-switch custom-switch-md mr-4 mt-2">  
  <?php echo $form->checkBox($model,"non_taxable",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"non_taxable",
     'checked'=>$model->non_taxable==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="non_taxable">
   <?php echo t("Taxable")?>
  </label>
</div>   


<div class="custom-control custom-switch custom-switch-md mr-4 ">  
  <?php echo $form->checkBox($model,"available",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"available",
     'checked'=>$model->available==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="available">
   <?php echo t("Available")?>
  </label>
</div>   



<div class="custom-control custom-switch custom-switch-md mr-4">  
  <?php echo $form->checkBox($model,"not_for_sale",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"not_for_sale",
     'checked'=>$model->not_for_sale==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="not_for_sale">
   <?php echo t("Not for sale")?>
   <span class="ml-2 font14"><i data-toggle="tooltip" title="<?php echo t("The menu item will be visible in the menu but your customers will not be able to buy it")?>" class="zmdi zmdi-help"></i></span>
  </label> 
</div>  
<div class="custom-control custom-switch custom-switch-md mr-4">  
  <?php echo $form->checkBox($model,"available_at_specific",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"available_at_specific",
     'checked'=>$model->available_at_specific==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="available_at_specific">
   <?php echo t("Available at specified times")?>
  </label>
</div> 


<!--DAY LIST-->
<div class="availability_wrap 
<?php if($model->available_at_specific=='1'){
    echo 'show';
}?>
<?php if($model->available_at_specific=='0'){
    echo 'hide';
}?>

" > 
<div class="d-flex flex-row justify-content-end">
  <div class="p-2">
  
  <a type="button" class="btn btn-black btn-circle checkbox_select_all" 
  href="javascript:;">
    <i class="zmdi zmdi-check"></i>
  </a>
  
  </div>
  <div class="p-2 d-flex align-items-center"><h5 class="mb-0"><?php echo t("Check All")?></h5></div>
</div> <!--flex-->

<?php foreach ($days as $key=> $item):?>
<div class="row mt-3 ">
 <div class="col-md-3">
 
   <div class="custom-control custom-switch custom-switch-md mr-4">  
  <?php echo $form->checkBox($model,"available_day[$key]",array(
     'class'=>"custom-control-input checkbox_child",     
     'value'=>1,
     'id'=>"available_day".$key,    
     'checked'=>in_array($key,$data['day'])?true:false,
   )); ?>   
  <label class="custom-control-label" for="available_day<?php echo $key?>">
   <?php echo $item?>
  </label>
</div>    
 
 </div>
 <div class="col-md-5">
 
   <div class="form-label-group mr-3 mb-0">    
	   <?php echo $form->textField($model,  "available_time_start[$key]"  ,array(
	     'class'=>"form-control form-control-text timepick datetimepicker-input",     
	     'placeholder'=>$form->label($model, "available_time_start[$key]" ),       
	     'readonly'=>true,
	     'data-toggle'=>'datetimepicker',
	     'value'=>isset($data['start'][$key])?$data['start'][$key]:'',
	   )); ?> 
	   
	   <label>From</label>
	 
	   <?php echo $form->error($model, "available_time_start[$key]" ); ?>
	</div>
 
 </div>
 <div class="col-md-4">
 
   <div class="form-label-group mr-3  mb-0">    
	   <?php echo $form->textField($model,  "available_time_end[$key]"  ,array(
	     'class'=>"form-control form-control-text timepick datetimepicker-input",     
	     'placeholder'=>$form->label($model, "available_time_end[$key]" ),       
	     'readonly'=>true,
	     'data-toggle'=>'datetimepicker',
	     'value'=>isset($data['end'][$key])?$data['end'][$key]:'',
	   )); ?> 
	    <label>To</label>
	   
	   <?php echo $form->error($model, "available_time_end[$key]" ); ?>
	</div>
 
 </div>
</div>
<?php endforeach;?>
</div>



<!--DAY LIST-->

  <div class="card boxsha mt-3">
               <div class="card-body">
                  <h4 class="card-title">Custom Fields</h4>
                  <?php if(count($subcategory)==0){?>
                   <div class="row appendhtml" >
                         
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Label</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" name="label[]" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="form-group">
                               <label class="col-form-label">Type</label>
                               <select class="form-control" name="multi_option[]" required>
                                   <option value="">Select Type</option>
                                   <option value="one">Radio Button</option>
                                   <option value="multiple">Check Box</option>
                                   <option value="one">Dropdown</option>
                               </select>
                           </div>
                        </div>
                        
                        <div class="row appendrow0 m-0  w-100">
                            <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Price</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" name="price[0][]" required>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 ">
                           <div class="form-group row append_divs">
                              <label class="col-lg-12 col-form-label">Value</label>
                              <div class="col-lg-12">
                             <div class="dis-flx">
                                 <input type="text" class="form-control mb-0" name="value[0][]" required>
                                    <div class="plus-icon">
                                    <div class="addMoreTeamDiv">
                                    <a href="javascript:void(0)" class="addMoreTeam" type="button" data-id="0">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                    <!--a href="javascript:void(0)" class="minus-fun" type="button">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                    </a-->
                                    </div>
                                    </div>
                              </div>
                              </div>
                        </div>
                        </div>
                        </div>
                            
                        
                        </div>
                        <?php } ?>
                  <?php //print_r($subcategory);?>
                <div class="all-m">
                <?php foreach($subcategory as $sub){?>
                         
                <?php   
                
                $all1=Yii::app()->db->createCommand('
                SELECT st_subcategory_item.sub_item_name,st_subcategory_item.price,st_subcategory_item_relationships.*
                FROM st_subcategory_item_relationships
                inner join st_subcategory_item on st_subcategory_item.sub_item_id=st_subcategory_item_relationships.sub_item_id
                Where  st_subcategory_item_relationships.subcat_id='.$sub['subcat_id'].' 
                limit 0,8
                ')->queryAll();  
                
                $option=Yii::app()->db->createCommand('
                SELECT *
                FROM st_item_relationship_subcategory
                Where  item_id='.$sub['item_id'].' and subcat_id='.$sub['subcat_id'].'
                limit 0,8
                ')->queryAll(); 
               $random1=rand(100,999);
                ?>
                <div class="row appendhtml appendhtml<?php echo $random1;?>" >
                         
                        <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Label</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" name="label[]" required value="<?php echo $sub['subcategory_name'];?>">
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-xl-6">
                          <div class="form-group">
                               <label class="col-form-label">Type</label>
                               <select class="form-control" name="multi_option[]" required>
                                   <option value="">Select Type</option>
                                   <option value="one"
                                   <?php if($option[0]['multi_option']=='one'){
                                       echo 'selected';}?>>Radio Button</option>
                                   <option value="multiple" <?php if($option[0]['multi_option']=='multiple'){
                                       echo 'selected';}?>>Check Box</option>
                                   <option value="one" <?php if($option[0]['multi_option']=='one'){
                                       echo 'selected';}?>>Dropdown</option>
                               </select>
                           </div>
                        </div>
                        <?php 
                        foreach($all1 as $al=>$value){
                         $random=rand(100,999);
                        ?>
                        <div class="row appendrow<?php echo $random;?> m-0  w-100">
                            <div class="col-xl-6">
                           <div class="form-group row">
                              <label class="col-lg-12 col-form-label">Price</label>
                              <div class="col-lg-12">
                                 <input type="text" class="form-control" name="price[<?php echo $sub['subcat_id'];?>][]" value="<?php echo $value['price'];?>"required >
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 ">
                           <div class="form-group row append_divs">
                              <label class="col-lg-12 col-form-label">Value</label>
                              <div class="col-lg-12">
                             <div class="dis-flx">
                                 <input type="text" class="form-control mb-0" name="value[<?php echo $sub['subcat_id'];?>][]" value="<?php echo $value['sub_item_name'];?>" required>
                                    <div class="plus-icon">
                                    <div class="addMoreTeamDiv">
                                    <a href="javascript:void(0)" class="minus-fun removedivupdate" type="button" data-id="<?php echo $random;?>">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                    </a>
                                    </div>
                                    </div>
                              </div>
                              </div>
                            <?php 
                            $a=$al+1;
                            if(count($all1)==$a){?>
                            <a href="javascript:void(0)" class="addMoreTeamUpdate" type="button" data-id="<?php echo $random;?>" data-subid="<?php echo $sub['subcat_id'];?>">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                            <?php } ?>
                        </div>
                        </div>
                        </div>
                        <?php } ?>
                            
                        
                        </div>
                        <?php } ?>
                        
                            <?php if(count($subcategory)==0){?>
                            <div class="row">
                                <div class="col-xl-12"><a href="javascript:void(0)" class="add-new-my btn btn-primary  btn-theme pull-right mt-3 mb-3 text-right add_more" type="button"  data-id="<?php echo rand(100,999);?>">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add More
                                </a>
                                </div>
                            </div>
                            <?php } ?>
                            </div>
                             <?php if(count($subcategory)>0){?>
                             <div class="row">
                                <div class="col-xl-12"><a href="javascript:void(0)" class="add-new-my btn btn-primary  btn-theme pull-right mt-3 mb-3 text-right add_more_with_update" type="button"  data-id="<?php echo rand(100,999);?>">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add More
                                </a>
                                </div>
                            </div>
                            <?php } ?>
                  
                  <!--div class="text-right">
                        <div class="form-group mt-3 d-flex justify-content-md-end">
                      <button class="btn w-auto d-inline-block btn-primary btn-lg btn-theme"><span>Submit</span></button>
                    </div>
                     </div-->
               
            </div>
         </div>
  <div class="form-label-group">           
  <label>Status</label>       
   <?php echo $form->dropDownList($model,'status', (array) $status,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'status'),
   )); ?>         
   <?php echo $form->error($model,'status'); ?>
</div>

  
<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-submit  mt-3",
'value'=>t("Submit")
)); ?>


<?php $this->endWidget(); ?>
</div>
</div>
</div>
<?php $this->renderPartial("/admin/modal_delete_image");?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$( document ).ready(function() {
      $('#available_at_specific').change(function() {
        if($(this).prop('checked') == true){
            $('.availability_wrap').addClass('show');
            $('.availability_wrap').removeClass('hide');
            //do something
        }else{
            $('.availability_wrap').addClass('hide');
              $('.availability_wrap').removeClass('show');
            //do something
        }
});

$('body').on('click','.removedivupdate',function(){
     var id=$(this).attr('data-id');
      $('.appendrow'+id).remove();
});
$('body').on('click','.removemaindiv',function(){
     var id=$(this).attr('data-id');
   $('.rm'+id).remove();
});
$('body').on('click','.removediv',function(){
   var id=$(this).attr('data-id');
   $('.remove'+id).remove();
});
$('body').on('click','.addMoreTeamUpdate',function(){
    var id=$(this).attr('data-id');
    var subid=$(this).attr('data-subid');
    var number = Math.floor(Math.random()*90000) + 10000;
    $('.appendrow'+id).append('<div class="col-xl-6 remove'+number+'"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control"  required name="price['+subid+'][]"></div></div></div><div class="remove'+number+' col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" name="value['+subid+'][]" required ><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removediv" type="button"><i class="fa fa-minus"  aria-hidden="true"></i></a></div></div></div></div>');
});
$('body').on('click','.addMoreTeam',function(){
    var id=$(this).attr('data-id');
    var number = Math.floor(Math.random()*90000) + 10000;
    $('.appendrow'+id).append('<div class="col-xl-6 remove'+number+'"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control"  required name="price['+id+'][]"></div></div></div><div class="remove'+number+' col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" name="value['+id+'][]" required ><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removediv" type="button"><i class="fa fa-minus"  aria-hidden="true"></i></a></div></div></div></div>');
});
$('body').on('click','.add_more_with_update',function(){
      var id=$(this).attr('data-id');
    var number = Math.floor(Math.random()*90000) + 10000;
    $('.all-m').append('<div class="row appendrow'+id+' rm'+number+' m-0  w-100"><div class="col-xl-6 "><div class="form-group row"><label class="col-lg-12 col-form-label">Label</label><div class="col-lg-12"><input type="text" class="form-control mb-0" name="label['+id+']" required></div></div></div><div class="col-xl-6"><div class="form-group"><label class="col-form-label">Type</label><div class="dis-flx"><select class="form-control mb-0" name="multi_option['+id+']" required><option value="">Select Type</option><option value="one">Radio Button</option><option value="multiple">Check Box</option><option value="one">Dropdown</option></select><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removemaindiv" type="button"><i class="fa fa-times"  aria-hidden="true"></i></a></div></div></div><div class="col-xl-6"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control" required name="price['+id+'][]"></div></div></div><div class="col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" reuired  name="value['+id+'][]"><div class="plus-icon"><div class="addMoreTeamDiv"><a href="javascript:void(0)" class="addMoreTeam" data-id="'+id+'" type="button"><i class="fa fa-plus" aria-hidden="true"></i></a></div></div></div></div></div></div></div> ')
});
$('body').on('click','.add_more',function(){
    var id=$(this).attr('data-id');
    var number = Math.floor(Math.random()*90000) + 10000;
    $('.appendhtml').append('<div class="row appendrow'+id+' rm'+number+' m-0  w-100"><div class="col-xl-6 "><div class="form-group row"><label class="col-lg-12 col-form-label">Label</label><div class="col-lg-12"><input type="text" class="form-control mb-0" name="label['+id+']" required></div></div></div><div class="col-xl-6"><div class="form-group"><label class="col-form-label">Type</label><div class="dis-flx"><select class="form-control mb-0" name="multi_option['+id+']" required><option value="">Select Type</option><option value="one">Radio Button</option><option value="multiple">Check Box</option><option value="one">Dropdown</option></select><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removemaindiv" type="button"><i class="fa fa-times"  aria-hidden="true"></i></a></div></div></div><div class="col-xl-6"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control" required name="price['+id+'][]"></div></div></div><div class="col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" reuired  name="value['+id+'][]"><div class="plus-icon"><div class="addMoreTeamDiv"><a href="javascript:void(0)" class="addMoreTeam" data-id="'+id+'" type="button"><i class="fa fa-plus" aria-hidden="true"></i></a></div></div></div></div></div></div></div> ')
    
});
});
</script>

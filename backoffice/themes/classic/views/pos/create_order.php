<style>
.custom-file-label,
.custom-file{
    display: inline-block;
    font-weight: 600;
    color: #000 !important;
    text-align: center;
    height: 200px;
    padding: 5px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #FFD9E4;
    border-color: #FFD9E4;
    border-radius: 0;
    line-height: 26px;
    font-size: 17px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.custom-file-label::after
{
    opacity:0;
}

.custom-file-label:hover {
    border: 2px dashed;
    transition: all 0.3s ease;
}
.breadcrumbs{
    display:none;
}
.in{
    display:none;
}
.show{
    display:block !important;
}
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
    /*top: 16px;
    position: absolute;*/
    float: right;
    /*right: 18px;*/
    z-index: 15;
}
.profilebox .col-form-label {
    font-family: 'ABeeZee', sans-serif;
    font-size: 14px;
}
.plus-icon .minus-fun {
    background: #dc3545;
      min-width:50px;
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
    min-width: 50px;
    margin-left: 12px;
    text-align: center;
    line-height: 50px;
    border-radius: 100px;
    color: #fff;
}
</style>
 <input type="hidden"name="_csrf" id="text" value="<?php echo Yii::app()->request->getCsrfToken() ?>">
<DIV id="vue-pos">
<div class="text-right mb-3 d-block d-lg-none">
<div class="hamburger hamburger--3dx ssm-toggle-nav">
  <div class="hamburger-box">
    <div class="hamburger-inner"></div>
  </div>
</div> 
</div>
<div class="row">
  <div class="col-md-8">
    <div class="boxsha posordercreate">
        <ul class="nav nav-pills customstyle-nav-tabs mt-2 mb-2 pt-3  px-3">
            <li class="active"><a data-toggle="pill" href="#home" class="active">New Product</a></li>
            <li><a data-toggle="pill" href="#menu1">Added Products</a></li>
        </ul>
        <div class="tab-content">
   <div id="home" class="tab-pane fade in active show">   
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

<div class="form-group">   
 <?php    
    echo $form->labelEx($model,'item_name'); ?>
   <?php echo $form->textField($model,'item_name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>t("")
   )); ?>   
  
   <?php echo $form->error($model,'item_name'); ?>
</div>

<h6 class="mb-2 mt-2"><?php echo t("Short Description")?></h6>
<div class="form-group mt-2">    
   <?php echo $form->textArea($model,'item_short_description',array(
     'class'=>"form-control form-control-text short_description",     
   )); ?>      
   <?php echo $form->error($model,'item_short_description'); ?>
</div>

<h6 class="mb-2 mt-2"><?php echo t("Long Description")?></h6>
<div class="form-group mt-2">    
   <?php echo $form->textArea($model,'item_description',array(
     'class'=>"form-control form-control-text summernote",     
     'placeholder'=>t("Description")
   )); ?>      
   <?php echo $form->error($model,'item_description'); ?>
</div>

<!--div class="form-group">   
<label>Quantity</label>
   <?php echo $form->textField($model,'inventory_stock',array(
     'class'=>"form-control form-control-text",
      'placeholder'=>t("")
   )); ?>   
  
   <?php echo $form->error($model,'inventory_stock'); ?>
</div-->

<?php if($model->isNewRecord):?>
<div class="d-flex">

<div class="form-group w-100 mr-3">   

<?php    
    echo $form->labelEx($model,'item_price'); ?>
   <?php echo $form->textField($model,'item_price',array(
     'class'=>"form-control form-control-text",
    'placeholder'=>t("")   
   )); ?>   
   
   <?php echo $form->error($model,'item_price'); ?>
</div>
<!--div class="form-label-group w-50">    <label>&nbsp;</label>
   <?php echo $form->dropDownList($model,'item_unit', (array) $units,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>t("")
   )); ?>         
   <?php echo $form->error($model,'item_unit'); ?>
</div-->
</div> <!--flex-->
<?php endif;?>
<h6 class="mb-4 mt-0"><?php echo t("Category")?></h6>
<div class="form-group">    
   <?php echo $form->dropDownList($model,'category_selected', (array)$category,array(
     'class'=>"form-control custom-select form-control-select select_two",
     'multiple'=>true,
     'placeholder'=>$form->label($model,'category_selected'),
   )); ?>         
   <?php echo $form->error($model,'category_selected'); ?>
</div>

 <div class="form-group">           
  <label>Service</label>       
   <select class="form-control" name="service_code" id="service_code" required >
       <option value="">Select Service </option>
       <option value="delivery">Delivery</option>
       <option value="pickup">Pickup</option>
       </select>
</div>

		<?php
         $date=date('Y-m-d');
       
		$all=Yii::app()->db->createCommand('SELECT * FROM st_delivery_times where merchant_id='.$merchant_id.' and date > "'.$date.'"  
        ')->queryAll();
        
      
        $pickups=Yii::app()->db->createCommand('SELECT * FROM st_pickup_times where merchant_id='.$merchant_id.' and date > "'.$date.'" 
        ')->queryAll(); 
        
        
        $intervals=Yii::app()->db->createCommand('SELECT * FROM st_intervals where merchant_id='.$merchant_id.'
        ')->queryAll();
    
        ?>
        <div class="form-group delivery_dates" style="display:none">
        <label>Delivery Date/Time</label>
         <select  class="form-control custom-select mb-3" name="delivery_date" id="" >
            <?php if(count($all)==0){?>
            <option value="">No record found</option>   
            <?php }?>
            <?php foreach($all as $a){?>
            <option  value="<?php echo $a['date'];?>-(<?php echo $a['title'];?>)">
            <?php echo $a['date'];?> (<?php echo $a['title'];?>)
            </option> 
            <?php } ?>
		 </select> 
		 </div>
		 <div class="form-group pickup_dates"  style="display:none">
		      <label>Pickup Date</label>
		     <select  class="form-control custom-select mb-3" name="delivery_pickup_date" id="delivery_date">
		          <?php if(count($pickups)==0){?>
              <option value="">No record found</option>   
            <?php }?>			
		     <?php foreach($pickups as $a){?>
		     <option  value="<?php echo $a['id'];?>">
		    <?php echo $a['date'];?>
		     </option> 
		     <?php } ?>
		 </select> 
		</div>
		
		 <div class="form-group pickup_times"  style="display:none">
		      <label>Pickup Time</label>
		     <select  class="form-control custom-select mb-3" name="delivery_time" id="delivery_time">
		         
		 </select> 
		</div>
		

  </div> <!--body-->
</div> <!--card-->

<input type="hidden" ref="available_at_specific" value="<?php echo $model->available_at_specific==1?true:false?>">

<!--div class="custom-control custom-switch custom-switch-md mr-4 mt-2">  
  <?php echo $form->checkBox($model,"non_taxable",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"non_taxable",
     'checked'=>$model->non_taxable==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="non_taxable">
   <?php echo t("Taxable")?>
  </label>
</div-->   
<!--div class="custom-control custom-switch custom-switch-md mr-4 ">  
  <?php echo $form->checkBox($model,"available",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"available",
     'checked'=>$model->available==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="available">
   <?php echo t("Available")?>
  </label>
</div-->   

<!--div class="custom-control custom-switch custom-switch-md mr-4">  
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
</div-->  
 <!--div class="custom-control custom-switch custom-switch-md mr-4">  
  <?php echo $form->checkBox($model,"available_at_specific",array(
     'class'=>"custom-control-input",     
     'value'=>1,
     'id'=>"available_at_specific",
     'checked'=>$model->available_at_specific==1?true:false,     
   )); ?>   
  <label class="custom-control-label" for="available_at_specific">
   <?php echo t("Available at specified times")?>
  </label>
</div--> 
<!--DAY LIST-->
<!--div class="availability_wrap 
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
  <div class="p-2"><h5><?php echo t("Check All")?></h5></div>
</div> 

<?php foreach ($days as $key=> $item):?>
<div class="row mt-3 align-items-center">
 <div class="col">
 
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
 <div class="col">
 
   <div class="form-group mr-3">    
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
 <div class="col">
 
   <div class="form-group mr-3">    
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
</div-->


  <!--div class="form-group">           
  <label>Status</label>       
   <?php echo $form->dropDownList($model,'status', (array) $status,array(
     'class'=>"form-control custom-select form-control-select",
     'placeholder'=>$form->label($model,'status'),
   )); ?>         
   <?php echo $form->error($model,'status'); ?>
</div-->

<!--DAY LIST-->
<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-submit  mt-3",
'value'=>t("Submit")
)); ?>


<?php $this->endWidget(); ?>
</div>
  </div>
   <div id="menu1" class="tab-pane fade">
 <components-menu
  ref="menu"    
  ajax_url="<?php echo $ajax_url?>"
  @show-item="showItemDetails"
  
  image_placeholder="<?php echo websiteDomain().Yii::app()->theme->baseUrl."/assets/images/placeholder.png"?>"
  merchant_id="<?php echo $merchant_id?>"    
  :label="{
    previous:'<?php echo CJavaScript::quote(t("Previous"))?>', 
    next:'<?php echo CJavaScript::quote(t("Next"))?>',     
  }"    
  :responsive='<?php echo json_encode($responsive);?>'
  >
 </components-menu>
  <components-item-details
  ref="item"    
  ajax_url="<?php echo $ajax_url?>"
  @go-back="showMerchantMenu"
  @close-menu="hideMerchantMenu"
  @refresh-order="refreshOrderInformation"  
  
  image_placeholder="<?php echo websiteDomain().Yii::app()->theme->baseUrl."/assets/images/placeholder.png"?>"
  merchant_id="<?php echo $merchant_id?>"  
  :order_type="order_type"
  :order_uuid="order_uuid"
  >
  </components-item-details>     

</div>
</div>
  </div>
  
  </div>
  <!--left col-->
  
  <!--CART SECTION-->
  <div class="col-md-4 position-relative rightposorder">
  
   <div v-if="is_loading" class="loading cover-loader d-flex align-items-center justify-content-center">
    <div>
      <div class="m-auto circle-loader medium" data-loader="circle-side"></div> 
    </div>
  </div>   
  
  <components-order-pos
  ref="pos_details"    
  ajax_url="<?php echo $ajax_url?>"
  :order_uuid="order_uuid"
  :label="{
    clear_items:'<?php echo CJavaScript::quote(t("Clear all items"))?>', 
    are_you_sure:'<?php echo CJavaScript::quote(t("are you sure?"))?>', 
    cancel:'<?php echo CJavaScript::quote(t("Cancel"))?>', 
    confirm:'<?php echo CJavaScript::quote(t("Confirm"))?>', 
    searching:'<?php echo CJavaScript::quote(t("Searching..."))?>', 
    no_results:'<?php echo CJavaScript::quote(t("No results"))?>', 
    walkin_customer:'<?php echo CJavaScript::quote(t("Walk-in Customer"))?>',     
  }"  
  @refresh-order="refreshOrderInformation" 
  @after-reset="afterReset" 
  @after-createorder="afterCreateorder"
  >
  </components-order-pos>
  
  </div>
  <!--right col-->
  
</div> <!--row-->


<components-order-print
  ref="print"      
  :order_uuid="order_uuid_print"
  mode="popup"
  :line="75"
  ajax_url="<?php echo $ajax_url?>"  
  >
</components-order-print>

</DIV>
<!--vue-->

<?php $this->renderPartial("/pos/template_menu_pos");?>
<?php $this->renderPartial("/orders/template_item");?>
<?php $this->renderPartial("/pos/order-details-pos");?>
<?php $this->renderPartial("/orders/template_print");?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$( document ).ready(function() {
      var token=$('#text').val();
    //var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
     $('body').on('change', '#delivery_date', function() {
        var id=$(this).val();
       // alert(id);
        
         $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/gettimings",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({'id':  id,'YII_CSRF_TOKEN':token}),
            
                success: function (response) {
                    $('.pickup_times').show();
                    $('#delivery_time').html(response);
                  
               
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
        

        });
      $('#service_code').change(function() {
            var val=$(this).val();
            if(val=='delivery'){
            $('.delivery_dates').show();
            $('.pickup_dates').hide();
            $('.pickup_times').hide();
             $('#delivery_time').attr('required',false);
            }else{
            $('.pickup_dates').show();   
            $('.pickup_times').show();  
            $('#delivery_time').attr('required',true);
            $('.delivery_dates').hide();
            }
      });
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
    $('.all-m').append('<div class="row appendrow'+id+' rm'+number+' m-0"><div class="col-xl-6 "><div class="form-group row"><label class="col-lg-12 col-form-label">Label</label><div class="col-lg-12"><input type="text" class="form-control mb-0" name="label['+id+']" required></div></div></div><div class="col-xl-6"><div class="form-group"><label class="col-form-label">Type</label><div class="dis-flx"><select class="form-control mb-0" name="multi_option['+id+']" required><option value="">Select Type</option><option value="one">Radio Button</option><option value="multiple">Check Box</option><option value="one">Dropdown</option></select><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removemaindiv" type="button"><i class="fa fa-times"  aria-hidden="true"></i></a></div></div></div><div class="col-xl-6"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control" required name="price['+id+'][]"></div></div></div><div class="col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" reuired  name="value['+id+'][]"><div class="plus-icon"><div class="addMoreTeamDiv"><a href="javascript:void(0)" class="addMoreTeam" data-id="'+id+'" type="button"><i class="fa fa-plus" aria-hidden="true"></i></a></div></div></div></div></div></div></div> ')
});
$('body').on('click','.add_more',function(){
    var id=$(this).attr('data-id');
    var number = Math.floor(Math.random()*90000) + 10000;
    $('.appendhtml').append('<div class="row appendrow'+id+' rm'+number+' m-0"><div class="col-xl-6 "><div class="form-group row"><label class="col-lg-12 col-form-label">Label</label><div class="col-lg-12"><input type="text" class="form-control mb-0" name="label['+id+']" required></div></div></div><div class="col-xl-6"><div class="form-group"><label class="col-form-label">Type</label><div class="dis-flx"><select class="form-control mb-0" name="multi_option['+id+']" required><option value="">Select Type</option><option value="one">Radio Button</option><option value="multiple">Check Box</option><option value="one">Dropdown</option></select><a href="javascript:void(0)" data-id="'+number+'" class="minus-fun removemaindiv" type="button"><i class="fa fa-times"  aria-hidden="true"></i></a></div></div></div><div class="col-xl-6"><div class="form-group row"><label class="col-lg-12 col-form-label">Price</label><div class="col-lg-12"><input type="text" class="form-control" required name="price['+id+'][]"></div></div></div><div class="col-xl-6"><div class="form-group row append_divs"><label class="col-lg-12 col-form-label">Value</label><div class="col-lg-12"><div class="dis-flx"><input type="text" class="form-control mb-0" reuired  name="value['+id+'][]"><div class="plus-icon"><div class="addMoreTeamDiv"><a href="javascript:void(0)" class="addMoreTeam" data-id="'+id+'" type="button"><i class="fa fa-plus" aria-hidden="true"></i></a></div></div></div></div></div></div></div> ')
    
});
});
</script>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            $('#uploadPreview').show();
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
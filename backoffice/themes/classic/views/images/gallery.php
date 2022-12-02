
<div class="card boxsha default-tabs tabs-box">
    <div class="card style-2">
      <div class="card-header d-flex justify-content-between  align-items-center">
 <h4 class="mb-0"><?php echo CHtml::encode($this->pageTitle)?></h4>
     
    <div class="d-flex flex-row justify-content-end align-items-center">
	  <div class="">  
	  <a type="button" class="btn btn-success addbtn" href="<?php echo Yii::app()->createUrl('/images/addgallery')?>">
	     Add To Gallery	 
	  </a>  
	  </div>
	
	</div> <!--flex-->     
   	
</div>
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
<div class="table-responsive">
                        <table class="table tbbox">
                           <thead>
                              <tr>
                                 <th scope="col">Image</th>
                                 <th scope="col">Title</th>
                                 <th scope="col">Category</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                               <?php foreach($gallery as $gall){?>
                              <tr>
                                 <td scope="row">
                                    <div class="tbl_cart_product">
                                       <div class="tbl_cart_product_thumb m-0">
                                          <img src="../../upload/<?php echo $gall['merchant_id'];?>/<?php echo $gall['image'];?>" class="img-fluid" alt="">
                                       </div>
                                    </div>
                                 </td>
                                 <td><?php echo $gall['title'];?></td>
                                 <td><?php echo $gall['dish_name'];?></td>
                                 <td>
                                    <div class="loginbox">
                                       <a href="<?php echo Yii::app()->createUrl('images/editGallery',array('id'=>$gall['id']));?>" class="btn btn-primary btn-lg btn-theme">Edit</a>
                                       <a href="<?php echo Yii::app()->createUrl('images/deleteGallery',array('id'=>$gall['id']));?>" class="btn btn-danger" style="margin-left: 8px;">Delete</a>
                                    </div>
                                 </td>
                              </tr>
                            <?php } ?>
                          
                           </tbody>
                        </table>
                     </div>
    </div>
   </div>
</div>

<div class="d-none">
<nav class="navbar navbar-light justify-content-between">
<a class="navbar-brand">
<h5><?php echo CHtml::encode($this->pageTitle)?></h5>
</a>
</nav>

<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'form',
		'enableAjaxValidation' => false,			
	)
);
?>

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


<div id="vue-uploader">
<component-uploader
ref="uploader"
max_file="<?php echo Yii::app()->params->dropzone['max_file'];?>"
max_file_size = "<?php echo Yii::app()->params->dropzone['max_file_size']?>"
select_type="multiple"
field = "merchant_gallery"
field_path = "path"
inline="false"
selected_file=""
:selected_multiple_file='<?php echo json_encode($gallery)?>'
upload_path="<?php echo $upload_path?>"
save_path="<?php echo $upload_path?>"

@set-afer-upload="afterUpload"
@set-afer-delete="afterDelete"
:label="{
    select_file:'<?php echo CJavaScript::quote(t("Select File"))?>',       
    upload_new:'<?php echo CJavaScript::quote(t("Upload New"))?>',     
    upload_button:'<?php echo CJavaScript::quote(t("Gallery Image"))?>',     
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

<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>
</div>
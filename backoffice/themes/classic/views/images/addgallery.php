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
</style>

<div class="card boxsha">
               <div class="card-body">
                  <h4 class="mb-4 d-flex justify-content-between align-items-center">
                     Add Inspiration Gallery
                     <a href="<?php echo Yii::app()->createUrl('/images/gallery')?>" class="btn btn-success addbtn">Back To Gallery</a>
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
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="col-form-label">Title</label>
                              <input type="text" class="form-control" value="" placeholder="Enter Title" name="title" required> 
                           </div>
                        </div>
                        
                        <div class="col-md-6">
                           <div class="form-group">
                               <label class="col-form-label">Category </label>
                               <select class="form-control" name="category_id" required>
                                   <option value="">Select Category</option>
                                   <?php foreach($model as $m){?>
                                   <option value="<?php echo $m->dish_id;?>"><?php echo $m->dish_name;?></option>
                                   <?php } ?>
                               </select>
                           </div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label class="col-form-label">Visibility</label>
                              <div class="d-flex align-items-center">
                                 <div class="custom-control custom-checkbox ml-0">
                                     <input type="checkbox" checked="" class="custom-control-input" value="1" id="inspiration" name="inspiration">
                                     <label class="custom-control-label clable" for="inspiration">Main Inspiration</label>
                                 </div>

                                 <div class="custom-control custom-checkbox ml-3">
                                     <input type="checkbox" checked="" class="custom-control-input"  value="1"  id="gallerywork" name="gallerywork">
                                     <label class="custom-control-label clable" for="gallerywork">Gallery of Work</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br/>
<!--<div class="col-md-12">-->
<!--	   <div class="form-group">-->
<!--		  <div class="upload__box">-->
<!--			<div class="upload__btn-box">-->
<!--			  <label class="upload__btn">-->
<!--				<i class="fa fa-upload" aria-hidden="true"></i>-->
<!--				<p class="mb-0">Upload images</p>-->
<!--				<input type="file" multiple=""  name="images[]" data-max_length="20" class="upload__inputfile">-->
<!--			  </label>-->
<!--			</div>-->
<!--			<div class="upload__img-wrap"></div>-->
<!--		  </div>-->
<!--	   </div>-->
<!--	</div>-->
	
	<div class="col-md-12">
	   <div class="form-group">
		  <div class="upload__box">
		      			  
<div id="vue-uploader" style="width: 100%;">
<component-uploader
ref="uploader"
max_file="<?php echo Yii::app()->params->dropzone['max_file'];?>"
max_file_size = "<?php echo Yii::app()->params->dropzone['max_file_size']?>"
select_type="multiple"
field = "photo"
field_path = "path"
inline="false"
selected_file=""
upload_path="<?php echo $upload_path?>"
save_path="upload/all"

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
			  


</div> <!--vue-->
                     </div>

                     <div class="form-group mt-3 d-flex justify-content-md-end">
                      <input class="btn btn-submit mt-3" value="Save" type="submit" name="submit">
                    </div>
                 <?php $this->endWidget(); ?>
               </div>
            </div>
           
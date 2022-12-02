<style>
  #modalUploader .modal-dialog{
    margin-top: 0;
  }

   #modalUploader .modal-header
  {
    background-color: transparent !important;
    border: none;
  }

   #modalUploader .modal-content
  {
       border: 0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgb(0 0 0 / 10%);
    overflow: hidden;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  #modalUploader .modal-body .form-group.has-search .form-control
  {
       padding-left: 40px;
  }

  #modalUploader .modal-body .has-search .form-control-feedback
  {
         top: 6px;
  }
</style>

<div class="profilebox loginbox p-0">
   <div class="card style-2">
      <div class="card-header">
         <h4 class="mb-0"><?php echo CHtml::encode($this->pageTitle)?></h4>
      </div>
   </div>
</div>

<div id="vue-uploader">
<component-uploader
ref="uploader"
max_file="<?php echo Yii::app()->params->dropzone['max_file'];?>"
max_file_size = "<?php echo Yii::app()->params->dropzone['max_file_size']?>"
select_type="multiple"
field = "photo"
selected_file=""
inline="true"
upload_path="<?php echo $upload_path?>"
@set-afer-upload="afterUpload"
@set-afer-delete="afterDelete"
:label="{
    select_file:'<?php echo CJavaScript::quote(t("Media List"))?>',     
    upload_new:'<?php echo CJavaScript::quote(t("Upload New"))?>',     
    upload_button:'<?php echo CJavaScript::quote(t("Media Image"))?>',     
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
</div> <!--vue-uploader-->


<DIV id="vue-bootbox">
<component-bootbox
ref="bootbox"
@callback="Callback"
size='medium'
:label="{
  confirm: '<?php echo CJavaScript::quote(t("Delete Confirmation"))?>',
  are_you_sure: '<?php echo CJavaScript::quote(t("Are you sure you want to continue?"))?>',
  yes: '<?php echo CJavaScript::quote(t("Yes"))?>',
  cancel: '<?php echo CJavaScript::quote(t("Cancel"))?>',  
  ok: '<?php echo CJavaScript::quote(t("Okay"))?>',  
}"
>
</component-bootbox>
</DIV>



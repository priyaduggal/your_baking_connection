<div class="card boxsha default-tabs tabs-box">
    <div class="card style-2">
      <div class="card-header">
         <h4 class="mb-0">Manage Popup</h4>
      </div>
      <?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>
    <div class="card-body">      
       <div class="d-flex togler-btns">
                  <p class="mb-0">Active</p><div class="toggle-button-cover">
                      <div class="button-cover">
                       
                          <div class="custom-control custom-switch custom-switch-md">  
  <?php echo $form->checkBox($model,"popup_status",array(
     'class'=>"custom-control-input checkbox_child",     
     'value'=>1,
     'id'=>"is_ready",
     'checked'=>$model->popup_status==1?true:false
   )); ?>   
  <label class="custom-control-label" for="is_ready">
   Active
  </label>
</div> 
                          <!--<div class="knobs"></div>-->
                          <!--<div class="layer"></div>-->
                        
                      </div>
                    </div>
              </div>
      
            <div class="form-label-group"> 
            
            <?php echo $form->textArea($model,'popup_text',array(
            'class'=>"form-control form-control-text summernote",     
            'placeholder'=>t("Contact Content")
            )); ?>      
            <?php echo $form->error($model,'popup_text'); ?>
            </div>
   
        <!--<div class="form-label-group mt-2">    -->
        <!--   <div  class="form-control form-control-text summernote" id="summernote"><div class="text-center"><img src="<?php echo Yii::app()->theme->baseUrl?>/assets/images/logonew.png">-->
        <!--      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamr.</p></div> </div>-->
        <!--</div>-->
        <!--<a href="#" class="btn btn-success addbtn pull-right mt-3" > Save</a>-->
        <input class="btn btn-submit mt-3" value="Save" type="submit" name="submit">
    </div>
    <?php $this->endWidget(); ?>
   </div>
</div>

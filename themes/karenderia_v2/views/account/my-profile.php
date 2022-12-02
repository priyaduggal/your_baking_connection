<section class="page-title">
   <div class="auto-container">
      <h1>Profile Settings</h1>
   </div>
</section>
<section class="accountinfo contactus">
<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-3  d-none d-lg-block">
   <?php $this->renderPartial("//layouts/sidebar")?>
</div>
<div class="col-lg-8 col-md-9 profilebox pt-0 loginbox">
<?php 
$this->renderPartial('//account/my-profile-header',array(
	'avatar'=>$avatar,
	'model'=>$model,
	'menu'=>$menu
));
?>


<div class="card boxsha">
  <div class="card-body ">
  
  <div class="row">
    <div class="col-md-12 d-none d-lg-block">
     <div class="attributes-menu-wrap">
    <?php $this->widget('application.components.WidgetUserProfile',array());?>
    </div>
    <div class="preview-image mb-2">
     <div class="col-lg-7">
      
	    <?php 
		//$this->renderPartial('//account/my-profile-photo',array(
		//	'avatar'=>$avatar,			
		//));
		?>
      
     </div>     
    </div>
     
   
    
    </div> <!--col-->

    <div class="col-lg-12 col-md-12">    
    
	<div class="card p-0">
	  <div class="card-body p-0" id="vue-update-profile" v-cloak>
	
	  <form 
       @submit.prevent="checkForm" 
       method="POST" >
	  
	   <h5 class="mt-2 mb-2 mb-lg-4 d-none d-lg-block"><?php echo t("Personal Information")?></h5>
	    
	   <div class="row">
	     <div class="col-lg-6">	     

	      <div class="form-group">  
	       <label class="col-form-label" for="first_name" class="required"><?php echo t("First name")?></label> 
           <input class="form-control" placeholder="" v-model="first_name" id="first_name" type="text"  >   
          
          </div>    
	     
	     </div> <!--col-->
	     <div class="col-lg-6">	     
	     
	     <div class="form-group">   
	      <label class="col-form-label" for="last_name" class="required"><?php echo t("Last name")?></label> 
           <input class="form-control" placeholder="" v-model="last_name" id="last_name" type="text"  >   
          
          </div>    
	     
	     </div> <!--col-->
	   </div> <!--row-->
	   
	    <div class="row">
	     <div class="col-lg-6">	     
	     <div class="form-group">   
	     <label class="col-form-label" for="email_address"><?php echo t("Email address")?></label> 
           <input  class="form-control" placeholder=""
        v-model="email_address" id="email_address" type="text" >              
           
          </div>   	     
	     </div> <!--col-->
	     <div class="col-lg-6">	     
	     <div class="form-group">
	           <label class="col-form-label"><?php echo t("Phone Number")?></label> 
	              <!--COMPONENTS-->
        <component-phone
	    default_country="<?php echo CJavaScript::quote($phone_default_country);?>"    
	    :only_countries='<?php echo json_encode($phone_country_list)?>'	
	    v-model:mobile_number="mobile_number"
	    v-model:mobile_prefix="mobile_prefix"
	    >
	    </component-phone>
	    <!--END COMPONENTS-->	
	    <component-change-phoneverify
         ref="cphoneverify"
         @after-submit="saveProfile"
          :label="{
		    steps: '<?php echo t("2-Step Verification")?>',
		    for_security: '<?php echo CJavaScript::quote(t("For your security, we want to make sure it's really you."))?>', 
		    enter_digit: '<?php echo CJavaScript::quote(t("Enter 6-digit code"))?>',  			    
		    resend_code: '<?php echo CJavaScript::quote(t("Resend Code"))?>',
		    resend_code_in: '<?php echo CJavaScript::quote(t("Resend Code in"))?>',
		    code: '<?php echo CJavaScript::quote(t("Code"))?>',
		    submit: '<?php echo CJavaScript::quote(t("Submit"))?>',			    
		 }"
         >   
        </component-change-phoneverify>
	    
	     </div>
	   
	    
	    
	    
	     </div> <!--col-->
	     <div class="col-md-12">
                   <div class="form-group">
                      <label class="col-form-label">Notification</label>
                      <div class="d-flex align-items-center">
                         <div class="custom-control custom-checkbox">
                             <input type="checkbox" class="custom-control-input" id="phnotif" name="noti">
                             <label class="custom-control-label clable" for="phnotif">Allow Phone Notifications related to your orders</label>
                         </div>
                      </div>
                   </div>
          </div>
	   </div> <!--row-->
	  	   	
	   <div v-cloak v-if="error.length>0" class="alert alert-warning mb-2" role="alert">
		    <p v-cloak v-for="err in error" class="m-0">{{err}}</p>	    
	   </div>   
	   
	   <div  v-cloak v-if="success" class="alert alert-success" role="alert">
	    <p class="m-0">{{success}}</p>	    
	   </div>
	   <div class="text-right">
	   <button class="mt-3 btn btn-submit" :class="{ loading: is_loading }" :disabled="!DataValid"  >
          <span class="label"><?php echo t("Save")?></span>
          <div class="m-auto circle-loader" data-loader="circle-side"></div>
       </button>
       </div>
      </form> 
	
	  </div> <!--body-->
	</div> <!--card-->
    
    </div> <!--col-->
  </div> <!--row-->
  
  </div> <!--card-body-->
</div> <!--card-->

<DIV id="vue-bootbox">
<component-bootbox
ref="bootbox"
@callback="Callback"
size='small'
:label="{
  confirm: '<?php echo CJavaScript::quote(t("Confirm account deletion"))?>',
  are_you_sure: '<?php echo CJavaScript::quote(t("Are you sure you want to delete your account and customer data from {{site_title}}?{{new_line}} This action is permanent and cannot be undone.",array(
      '{{site_title}}'=> Yii::app()->params['settings']['website_title'],
      '{{new_line}}'=>"<br/><br/>"
   )))?>',
  yes: '<?php echo CJavaScript::quote(t("Delete Account"))?>',
  cancel: '<?php echo CJavaScript::quote(t("Don't Delete"))?>',  
  ok: '<?php echo CJavaScript::quote(t("Okay"))?>',  
}"
>
</component-bootbox>
</DIV>
</div>
</div>

</div>
</section>
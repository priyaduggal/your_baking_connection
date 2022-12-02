<div class="page-content">
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
  <div class="card-body p-0 p-lg-3">
  
  <div class="row">
    <div class="col-md-12 d-none d-lg-block">
    
    <!--div class="preview-image mb-2">
     <div class="col-lg-7">
      
      <?php 
      //$this->renderPartial('//account/my-profile-photo',array(
       // 'avatar'=>$avatar,			
      //));
      ?>
      
     </div>     
    </div-->
     
    <div class="attributes-menu-wrap">
    <?php $this->widget('application.components.WidgetUserProfile',array());?>
    </div>
    
    </div> <!--col-->

    <div class="col-lg-12 col-md-12">    
    
	<div class="card p-0">
	  <div class="card-body p-0" id="vue-update-password" v-cloak>
	    
    <form 
       @submit.prevent="updatePassword" 
       method="POST" >
	   <h5 class="mt-2 mb-2 mb-lg-4 d-none d-lg-block"><?php echo t("Password Settings")?></h5>
	   	  	    
	   <div class="form-group">    
	     <label class="col-form-label" for="old_password" class="required"><?php echo t("Old password")?></label> 
        <input class="form-control" placeholder="" v-model="old_password" id="old_password" type="password"  >   
      
        <div class="row">
	     <div class="col-lg-6">
       <div class="form-group">  
       <label class="col-form-label" for="new_password" class="required"><?php echo t("New password")?></label> 
        <input class="form-control" placeholder="" v-model="new_password" id="new_password" type="password">  
       </div>   
        </div>  
         <div class="col-lg-6">
       <div class="form-group">    
         <label class="col-form-label" for="confirm_password" class="required"><?php echo t("Confirm Password")?></label> 
        <input class="form-control" placeholder="" v-model="confirm_password" 
       id="confirm_password" type="password">  
       </div>   
       </div>   
        </div> 
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
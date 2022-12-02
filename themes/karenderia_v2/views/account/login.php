<section class="page-title">
   <div class="auto-container">
      <h1><?php echo t("Login")?></h1>
   </div>
</section>
<section class="login-section loginbox">
<div class="auto-container">
 
<!--div class="login-container m-auto pt-5 pb-5 p-2"-->
<div class="form-inner">
  <!--h5 class="text-center mb-4"><?php echo t("Login")?></h5-->
  <p><?php echo t("Login or create a profile to connect with bakers, save your favorites and leave reviews!")?></p>
  <div class="forms-center">
  
       <DIV id="vue-login" v-cloak >       
       <form @submit.prevent="login">
                     
       <div class="form-group form-box clearfix">    
        <label for="username" class="required"><?php echo t("Email")?></label> 
         <input class="form-control "
           id="username" type="text" autocomplete="new-username" placeholder="Email Address" v-model="username" maxlength="100" >   
        
       </div>   
       
        <div class="form-group form-box clearfix change_field_password">    
          <label for="password" class="required"><?php echo t("Password")?></label>      
		   <input class="form-control" autocomplete="new-password" 
           placeholder="Password"  :type="password_type" placeholder="Password" id="password" v-model="password" maxlength="100"  >
		 
		   <a href="javascript:;" @click="showPassword" >
		      <i v-cloak v-if="show_password==false" class="zmdi zmdi-eye"></i>
		      <i v-cloak v-if="show_password==true" class="zmdi zmdi-eye-off"></i>
		   </a>
		</div> 
		
		  <!--COMPONENTS--> 
       <components-recapcha  
         sitekey="<?php echo $captcha_site_key;?>"
		 size="normal" 
		 theme="light"
		 :tabindex="0"
		 is_enabled="<?php echo CJavaScript::quote($capcha)?>"
		 @verify="recaptchaVerified"
		 @expire="recaptchaExpired"
		 @fail="recaptchaFailed"
		 ref="vueRecaptcha">
       </components-recapcha>		
       <!--END COMPONENTS-->
		
	   <div class="row m-0">
	      <div class="col-6 p-0"> 
	         <div class="custom-control custom-checkbox text-left">
		      <input type="checkbox" id="rememberme" v-model="rememberme"  class="custom-control-input">
		      <label class="custom-control-label" for="rememberme"><?php echo t("Remember me")?></label>
		    </div>   
	      </div>
	      <div class="col-6 mb-4 mb-lg-3 d-flex justify-content-end p-0 "> 
	       <a href="<?php echo Yii::app()->createUrl("account/forgot_pass")?>" class="forgot-password"><u><?php echo t("Forgot password?")?></u></a>
	      </div>
	   </div><!-- row-->
	   
	   <div  v-cloak v-if="error.length>0" class="alert alert-warning" role="alert">
	    <p v-cloak v-for="err in error">{{err}}</p>	    
	   </div>
	   
	   <div  v-cloak v-if="success" class="alert alert-success" role="alert">
	    <p class="m-0">{{success}}</p>	    
	   </div>
	   	   
	   <button class="btn btn-submit w-100"  :class="{ loading: loading }" :disabled="!formValid" >
	      <span v-if="loading==false"><?php echo t("Login")?></span>
	      <div v-cloak v-if="loading==true" class="m-auto" data-loader="circle-side"></div>
	   </button>
	   	   
	   
	   <div class="text-center">
	     <p class="pt-4 mb-0 acctext"><?php echo t("Don’t have a Profile?")?>   <a  href="<?php echo Yii::app()->createUrl("/account/signup",array(
	      'redirect'=>$redirect_to,
	      //'next_url'=>$next_url,
	     ))?>" class=""><?php echo t("Create one here")?></a></p>
	   
	   </div>
	   
	   </form>
	   
	   <div class="mt-4 text-center">
	     <component-facebook
	     app_id="<?php echo $fb_app_id;?>"	     
	     :show_button="<?php echo $fb_enabled==1?true:false;?>"	     
	     version="v12.0"
	     verification="<?php echo $enabled_verification?>"
	     redirect_to="<?php echo $redirect_to?>"
	     @social-registration="SocialRegister"
	     :errors="{		    
			 user_cancelled: '<?php echo CJavaScript::quote(t("User cancelled login or did not fully authorize."))?>', 		    
		  }"	    
		 :label="{		    
			 title: '<?php echo CJavaScript::quote(t("Login with Facebook"))?>', 		    
		 }"	    
	     >
	     </component-facebook>
	   </div>
	   	    
	    <div class="mt-4 text-center">
	     <component-google
	     client_id="<?php echo $google_client_id;?>"	     
	     :show_button="<?php echo $google_enabled==1?true:false;?>"	     
	     cookiepolicy="single_host_origin"
	     scope = "profile"
	     verification="<?php echo $enabled_verification?>"
	     redirect_to="<?php echo $redirect_to?>"
	     @social-registration="SocialRegister"
	     :errors="{		    
			 user_cancelled: '<?php echo CJavaScript::quote(t("User cancelled login or did not fully authorize."))?>', 		    
		  }"	    
		 :label="{		    
			 title: '<?php echo CJavaScript::quote(t("Login with Google"))?>', 		    
		 }"	    
	     >
	     </component-google>
	   </div>
	   
	   </DIV> <!--vue-login-->
	   	  
  
  </div> <!--center-->
   </div>
<!--/div--> 
</div> <!--containter-->
</section>
<?php $this->renderPartial("//components/vue-bootbox")?>
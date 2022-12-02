<section class="page-title">
   <div class="auto-container">
      <h1><?php echo t("Join")?></h1>
   </div>
</section>

<section class="login-section loginbox">
<div class="auto-container">
 <div class="form-inner">
<!--div class="login-container m-auto pt-5 pb-5">

  <h5 class="text-center mb-4">Register</h5-->
  <h3 class="mb-4"><?php echo t("Joining is quick and easy")?></h3>
  <div class="forms-center">
  
       <DIV id="vue-register"> 
       
       <form 
       @submit.prevent="onRegister" 
       method="POST" >
       
       <div class="row p-0">
         <div class="col pr-0">
         
          <div class="form-group form-box clearfix">    
           <label for="firstname" class="required">First Name</label> 
           <input class="form-control " placeholder="First Name" v-model="firstname" id="firstname" type="text"  >   
          
          </div>    
         
         </div> <!--col-->
         <div class="col">
         
          <div class="form-group form-box clearfix">    
           <label for="lastname" class="required">Last Name</label>
           <input class="form-control" placeholder="Last Name" v-model="lastname" id="lastname" type="text" >   
           
         </div>   
         
         </div> <!--col-->
       </div> <!--row-->
       
       <div class="form-group form-box clearfix">    
          <label for="email_address" class="required">Email</label> 
         <input class="form-control" placeholder="Email Address" v-model="email_address" id="email_address" type="email" maxlength="50" >   
      
       </div>   
       
        <!--COMPONENTS-->                
        <component-phone
	    default_country="<?php echo CJavaScript::quote($phone_default_country);?>"    
	    :only_countries='<?php echo json_encode($phone_country_list)?>'	
	    v-model:mobile_number="mobile_number"
	    v-model:mobile_prefix="mobile_prefix"
	    >
	    </component-phone>
	    <!--END COMPONENTS-->
       
       
        <div class="form-group form-box clearfix change_field_password">    
          <label for="password" class="required">Password</label>      
		   <input class="form-control " autocomplete="new-password" 
           placeholder="Password"  :type="password_type" id="password" v-model="password"  >
		 
		   <a href="javascript:;" @click="showPassword" >
		      <i v-if="show_password==false" class="zmdi zmdi-eye"></i>
		      <i v-cloak v-if="show_password==true" class="zmdi zmdi-eye-off"></i>
		   </a>
		</div> 
		
		<div class="form-group form-box clearfix">    
		   <label for="cpassword" class="required">Confirm Password</label>  
		   <input class="form-control " autocomplete="new-password" 
           placeholder="Confirm Password"  type="password" id="cpassword" v-model="cpassword"  >
		    		   
		</div> 
       	
	   <!--COMPONENTS--> 
       <vue-recaptcha v-if="show_recaptcha" 
         sitekey="<?php echo $captcha_site_key;?>"
		 size="normal" 
		 theme="light"
		 :tabindex="0"
		 is_enabled="<?php echo CJavaScript::quote($capcha)?>"
		 @verify="recaptchaVerified"
		 @expire="recaptchaExpired"
		 @fail="recaptchaFailed"
		 ref="vueRecaptcha">
       </vue-recaptcha>		
       <!--END COMPONENTS-->
		
        <?php if($enabled_terms):?>
	    <p class="m-0 mt-3 mb-3"><?php echo $signup_terms;?></p>
	    <?php endif;?>
	   
	   <div  v-cloak v-if="error.length>0" class="alert alert-warning" role="alert">
	    <p v-cloak v-for="err in error" class="m-1">{{err}}</p>	    
	   </div>
	   
	   <div  v-cloak v-if="success" class="alert alert-success" role="alert">
	    <p class="m-0">{{success}}</p>	    
	   </div>
	   
	   <button class="btn btn-submit w-100  mt-3" :class="{ loading: loading }" :disabled="ready==false" >
	      <span v-if="loading==false">Register</span>
	      <div v-cloak v-if="loading==true" class="m-auto" data-loader="circle-side"></div>
	   </button>
	   	   
	  </form> 
	   
	   <div class=" text-center">
	     <p class="pt-4 mb-0 acctext  text-left">Already a member? <a  href="<?php echo Yii::app()->createUrl("/account/login",array(
	      'redirect'=>$redirect_to
	     ))?>" >Login here</a></p>
	    
	   </div>
	   
	   </DIV> <!--vue-register-->
	   	  
  
  </div> <!--center-->
</div>
<!--/div--> 

</div>
</section>
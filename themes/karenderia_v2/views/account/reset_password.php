<section class="page-title">
   <div class="auto-container">
      <h1><?php echo t("Reset Password")?></h1>
   </div>
</section>
<section class="login-section loginbox">
<div class="auto-container">
 
<!--div class="login-container m-auto pt-5 pb-5"-->
   <div class="form-inner">
  
  <DIV id="vue-reset-password" v-cloakx >       
       
          
     <form @submit.prevent="resetPassword">

      <h3 class="mb-4 text-center">Reset Password</h3>
      
      <template v-if="steps==1"> 
      <p style="font-size: 15px;color: #4b4342;line-height: 24px;margin-bottom: 29px;"><?php echo t("Please enter a new password for your account, [first_name]",array(
        '[first_name]'=>isset($first_name)?$first_name:''
      ))?></p>
     
       <div class="form-group form-box clearfix">    
        <label for="password" class="required">New password</label> 
         <input class="form-control form-control-text" placeholder="Enter new password" 
           id="password" type="password"  v-model="password"  >   
        
       </div> 
       
       <div class="form-group form-box clearfix">    
          <label for="cpassword" class="required">Confirm New Password</label> 
         <input class="form-control form-control-text" placeholder="Confirm new password" 
           id="cpassword" type="password"  v-model="cpassword"  >   
      
       </div> 
       
        <div v-cloak v-if="error.length>0" class="alert alert-warning mb-2" role="alert">
		    <p v-cloak v-for="err in error" class="m-0">{{err}}</p>	    
	   </div>        
	   	    
       <button class="btn btn-submit w-100"  :class="{ loading: loading }" :disabled="!checkForm" >
	      <span v-if="loading==false">Submit</span>
	      <div v-cloak v-if="loading==true" class="m-auto" data-loader="circle-side"></div>
	   </button>
	   
	   </template>
	   
	   <template v-else-if="steps==2"> 
	   
	    <div  v-cloak v-if="success" class="alert alert-success" role="alert">
		    <p class="m-0">{{success}}</p>	    
		 </div>
		 
		<div class="mt-3 text-center">
	     <span>You can continue to login <a  href="<?php echo Yii::app()->createUrl("/account/login")?>" class="btn btn-white p-0 font14">click here</a></span>
	   </div>
	   
	   </template>
	   
       
     </form>       
     
     
  </DIV>     
  
  
  </div> 

<!--/div--> <!--login container-->

</div> <!--containter-->
</section>
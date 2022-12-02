<style>
   @import url('https://fonts.googleapis.com/css2?family=Merienda+One&display=swap');
  .loginbox .form-inner
  {
    text-align: left;
  }
  .loginbox h3
  {
    text-align: center;
    font-family: 'Merienda One', cursive;
    margin-bottom: 20px;
  }
  .pin_placeholder.icon{
    display: none;
  }
  .form-group > label
  {
position: relative;
    padding: 0;
        text-align: left;
    width: 100%;
    font-size: 13px;
    margin-bottom: 3px;
    color: #8f8f8f;
    font-family: 'Merienda One', cursive;
  }
  .form-group {
    position: relative;
    margin-bottom: 1px;
}
.pra
{
  font-size: 13px;
   font-family: 'Merienda One', cursive;
}
.search-geocomplete input {
    text-indent: 0;
}
</style>
<!--register-section-->
<div class="register-section login-section loginbox">
   <div class="form-inner">
      <h3><?php echo t("Register user")?></h3>
       <div id="vue-merchant-user">
            <form 
               @submit.prevent="onRegister" 
               method="POST" >
               <div class="row p-0">
                  <div class="col pr-0">
                     <div class="form-group">    
                     	     <label for="first_name" class="required"><?php echo t("First name")?></label> 
                        <input class="form-control form-control-text" placeholder="" v-model="first_name" id="first_name" type="text" maxlength="50"   >   
                   
                     </div>
                  </div>
                  <!--col-->
                  <div class="col">
                     <div class="form-group"> 
                       <label for="last_name" class="required"><?php echo t("Last name")?></label>    
                        <input class="form-control form-control-text" placeholder="" v-model="last_name" id="last_name" type="text" maxlength="50"  >   
                      
                     </div>
                  </div>
                  <!--col-->
               </div>
               <!--row-->
               <div class="form-group d-none">    
               	     <label for="contact_email" class="required"><?php echo t("Email address")?></label> 
                  <input class="form-control form-control-text" placeholder="" v-model="contact_email" id="contact_email" type="email" maxlength="255" >   
             
               </div>
               <!--COMPONENTS-->
               <div class="form-group d-none"> 
                 <label class="required"><?php echo t("Mobile Number")?></label>  
		               <component-phone
		                  default_country="<?php echo CJavaScript::quote($phone_default_country);?>"    
		                  :only_countries='<?php echo json_encode($phone_country_list)?>'	
		                  v-model:mobile_number="mobile_number"
		                  v-model:mobile_prefix="mobile_prefix"
		                  >
		               </component-phone>
		             </div>
               <!--END COMPONENTS-->
               <div class="form-group"> 
                 <label for="username" class="required"><?php echo t("Username")?></label>    
                  <input class="form-control form-control-text" placeholder="" v-model="username" id="username" type="text" maxlength="50" >   
                
               </div>
               <div class="form-group change_field_password">    
               	 <label for="password" class="required"><?php echo t("Password")?></label> 
                  <input class="form-control form-control-text" autocomplete="new-password" 
                     placeholder="Password"  :type="password_type" id="password" v-model="password"  maxlength="32" >
                      
                  <a href="javascript:;" @click="showPassword" >
                  <i v-if="show_password==false" class="zmdi zmdi-eye"></i>
                  <i v-cloak v-if="show_password==true" class="zmdi zmdi-eye-off"></i>
                  </a>
               </div>
               <!--<div class="form-group">    
                  <input class="form-control form-control-text" autocomplete="new-password" 
                        placeholder="Password"  type="password" id="cpassword" v-model="cpassword"  >
                  <label for="cpassword" class="required">Confirm Password</label>      		   
                  </div> -->
               <div class="form-group change_field_password">    
               	 <label for="cpassword" class="required"><?php echo t("Confirm Password")?></label>
                  <input class="form-control form-control-text" autocomplete="new-password" 
                     placeholder="Password"  :type="password_type" id="cpassword" v-model="cpassword" maxlength="32"  >
                       
                  <a href="javascript:;" @click="showPassword" >
                  <i v-if="show_password==false" class="zmdi zmdi-eye"></i>
                  <i v-cloak v-if="show_password==true" class="zmdi zmdi-eye-off"></i>
                  </a>
               </div>
               <?php if(!empty($terms)):?>
               <p class="m-0 mt-3 mb-3 pra"><?php echo $terms;?></p>
               <?php endif;?>
               <div  v-cloak v-if="error.length>0" class="alert alert-warning" role="alert">
                  <p v-cloak v-for="err in error" class="m-1">{{err}}</p>
               </div>
               <div  v-cloak v-if="success" class="alert alert-success" role="alert">
                  <p class="m-0">{{success}}</p>
               </div>
               <button class="btn btn-green w-100 signup_merchnat" :class="{ loading: is_loading }"   >
                  <span class="label"><?php echo t("Signup")?></span>
                  <div class="m-auto circle-loader" data-loader="circle-side"></div>
               </button>
            </form>
         </div>
         
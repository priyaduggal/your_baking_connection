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
  <div class="container">
    <div id="vue-merchant-signup" class="form-inner">
    <h3><?php echo t("Baker Signup")?></h3>
    <!--p class="text-grey font-weight-bold"><?php echo t("Get a sales boost of up to 30% from takeaways")?></p-->
    <form 
       @submit.prevent="verifyForms" 
       method="POST"  v-cloak >
       <!--<input type="text" value="<?php echo $package_id;?>" name="package_id"  >-->
       <div class="form-group">
           <label for="restaurant_name" class="required"><?php echo t("Store name")?></label> 
          <!--<input class="form-control" placeholder="" value="<?php echo $package_id;?>" v-model="package_id" id="package_id" type="text" >   -->
          <input class="form-control" placeholder="" v-model="restaurant_name" id="restaurant_name" type="text" >   
       
       </div>
       <div class="auto-complete form-group position-relative">
          <label class="required"><?php echo t("Store address")?></label> 
          <component-auto-complete
             v-model="address" 
             :modelValue="address"
             @update:modelValue="address = $event"
             ref="auto_complete"  
             @after-choose="afterChoose"  
             :label="{        
             enter_address: '',        
             }"     
             />
          </component-auto-complete>   
       </div>
       <div class="form-group"> 
       <label for="contact_email" class="required"><?php echo t("Email address")?></label>   
          <input class="form-control" placeholder="" v-model="contact_email" id="contact_email" type="text" >   
           
       </div>
         <div class="form-group"> 
          <label class="required"><?php echo t("Mobile Number")?></label> 
       <component-phone
          default_country="<?php echo CJavaScript::quote($phone_default_country);?>"    
          :only_countries='<?php echo json_encode($phone_country_list)?>' 
          v-model:mobile_number="mobile_number"
          v-model:mobile_prefix="mobile_prefix"
          >
       </component-phone>
     </div>
       <!--<div class="form-group">-->
       <!--    <label class="required"><?php echo t("Choose your membership program")?></label>-->
       <!--<div v-for="item in membership_list" class="custom-control custom-radio mb-1">-->
       <!--   <input type="radio" :id="item.type_id" :value="item.type_id" v-model="membership_type" checked="checked" class="radiomember custom-control-input">-->
       <!--   <label class="custom-control-label" :for="item.type_id">{{item.description}}</label>-->
       <!--</div>-->
       <!--</div>-->
       
       
       <vue-recaptcha v-if="show_recaptcha" 
       sitekey="<?php echo CJavaScript::quote($captcha_site_key);?>"
       size="normal" 
       theme="light"     
       is_enabled="<?php echo CJavaScript::quote($capcha)?>"
       :tabindex="0"
       @verify="recaptchaVerified"
       @expire="recaptchaExpired"
       @fail="recaptchaFailed"
       ref="vueRecaptcha">
       </vue-recaptcha>
       <div v-if="response.code==1" class="alert alert-success" role="alert">
          <p class="m-0">{{response.msg}}</p>
       </div>
       <div v-else-if="response.code==2" class="alert alert-warning" role="alert">
          <p v-cloak v-for="err in response.msg" class="m-1">{{err}}</p>
       </div>
       <?php if(!empty($terms)):?>
       <p class="m-0 mt-3 pra">    
          <?php echo $terms;?>
       </p>
       <?php endif;?>
       <button class="btn btn-green w-100 mt-3"    
          :class="{ loading: loading }" 
         
          >
          <span v-if="loading==false"><?php echo t("Submit")?></span>
          <div v-cloak v-if="loading==true" class="m-auto" data-loader="circle-side"></div>
       </button>
    </form>
    </div>
    <!--row-->
  </div>
</div>

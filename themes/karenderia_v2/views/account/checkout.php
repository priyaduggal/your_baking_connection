<div class="container-fluid checkoutpage">
<style>
    .add-pay-card .btn.btn-pay i {
    width: 80px;
    height: 80px;
    background: #ffffff;
    border: 1px solid #eaecef;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}
.add-pay-card .btn.btn-pay {
    width: auto;
    height: auto;
    border: none;
    font-size:26px;
    border-radius: 0;
}.add-payment-card.center  .add-pay-card {
    margin-bottom: 0;
}
.add-pay-card .btn.btn-pay span
{
    font-size: 14px;
    color: #000;
}.add-payment-card.center {
    height: 156px;
    min-height: 156px;
}
</style>
<div class="auto-container">
   <div class="row">
     <div class="col-lg-12 col-md-12">
        <div class="card">
                       
          <!--Delivery method and time-->
          <div class="card-body">
          
          <?php $this->renderPartial("//components/schedule-order",array(
            'show'=>false
          ))?>
          
          <div class="row mb-3" >    
			     <div class="col d-flex justify-content-start align-items-center" >
			         <span class="badge badge-dark rounded-pill">1</span>
			         <h5 class="m-0 ml-2 section-title"><?php echo t("Order type and time")?></h5>			         
			     </div>		     
 		   </div> <!--row-->  
 		   
 		   <!--vue-transaction-->
 		   <DIV id="vue-transaction" v-cloak  >
 		   
		   <el-skeleton :loading="is_loading" animated>
		   <template #template>
		       <div class="border rounded p-1 mb-2">
			     <el-skeleton :rows="1" />
			   </div>
		   </template>		   
		   <template #default>

			<!--transaction-section-->
			<a href="javascript:;" class="d-block chevron-section transaction-section d-flex align-items-center rounded mb-2"
			@click="show" > 		   
				<div class="flexcol mr-2"> 		       
					<i  v-if="display_transaction_type==='dinein'" class="fas fa-chair"></i>
					<i  v-else-if="display_transaction_type === 'delivery'" class="fas fa-biking"></i>
					<i  v-else-if="display_transaction_type === 'pickup'" class="fas fa-walking"></i>
				</div>
				<div class="flexcol">
				
				<span  class=" mr-1" v-if="transactions[display_transaction_type]" >
					{{ transactions[display_transaction_type].service_name }}
				</span>
							
				<p class="m-0 text-muted"  v-if="delivery_option[display_data.whento_deliver]" >
					{{ delivery_option[display_data.whento_deliver].name }}
					
					<span v-if="display_data.whento_deliver=='now'">
						<template v-if="display_data.estimation!=''">{{ display_data.estimation }}</template> 
					</span>
					
					<span v-if="display_data.whento_deliver=='schedule'">
					<!--{{ display_data.pretty_delivery_date }} -->
					{{ display_data.pretty_delivery_time }}
					</span>
					
				</p>
				
				<p  class="m-0 text-muted" v-if="display_transaction_type=='delivery'">
					<template v-if="display_data.delivery_distance">
					{{ display_data.delivery_distance }}
					</template>
				</p>
							
				<div  class="alert alert-warning m-0 p-0" v-if="checkout_error.length>0">
					<p class="m-0" v-for="error in checkout_error">
					{{ error }}
					</p>
				</div>
				
				</div>
			</a>
			<!--transaction-section-->

		   </template>
		   </el-skeleton>

 		   <?php $this->renderPartial("//account/checkout-transaction")?>	   
 		   
           		  
 		   </DIV>
 		   <!--vue-transaction-->
 		   
 		   <!--CHANGE PHONE showChangePhone-->
 		   <DIV id="vue-contactphone" v-cloak  > 	
				
			<el-skeleton :loading="is_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>
				<a @click="showChangePhone()" 
				href="javascript:;" class="d-block chevron-section promo-section d-flex align-items-center rounded mb-2">
				<div class="flexcol mr-2"><i class="zmdi zmdi-phone"></i></div>
				<div class="flexcol" > 
					<span class="bold">{{contact_number}}</span>
				</div>
				</a>
			</template>
			</el-skeleton>
			  
             <!--COMPONETS CHANGE PHONE-->			 
             <component-change-phone 
             ref="cphone"
             @set-phone="loadVerification"
			 is_mobile="<?php echo Yii::app()->params['isMobile'];?>"
			 default_country="<?php echo CJavaScript::quote($phone_default_country);?>"    
	         :only_countries='<?php echo json_encode($phone_country_list)?>'	
             :label="{
			    edit_phone: '<?php echo t("Edit phone number")?>',
			    country: '<?php echo CJavaScript::quote(t("Country"))?>', 
			    mobile_number: '<?php echo CJavaScript::quote(t("Mobile number"))?>',  
			    enter_ten_digit: '<?php echo CJavaScript::quote(t("enter a 10 digit phone number"))?>',
			    continue: '<?php echo CJavaScript::quote(t("Continue"))?>',
			    cancel: '<?php echo CJavaScript::quote(t("Cancel"))?>',
			 }"
             >                                    
             </component-change-phone>
             <!--END COMPONETS CHANGE PHONE-->
             
             <component-change-phoneverify
             ref="cphoneverify"
             @after-submit="ChangePhone"
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
                        
           </DIV>           
           <!--CHANGE PHONE-->
 		   <div class="d-none">
 		   <!--promo-section--> 	
 		   <DIV v-cloak id="vue-promo">  
			 
			<el-skeleton :loading="is_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>

			<template v-if="data.length>0">
			  <a @click="show" href="javascript:;" class="d-block chevron-section promo-section d-flex align-items-center rounded mb-2">
				<div class="flexcol mr-2"><i class="zmdi zmdi-label"></i></div>
				<div class="flexcol"> 		     		    
				<template v-if="promo_id.length<=0">
				<span class="bold">{{ data.length }}</span> <?php echo t("Promotion available")?>
				</template> 		       
				<template v-if="promo_id.length>0">
					<?php echo t("Promotion applied")?>
				</template>
							
				<p v-if="promo_id.length>0" class="m-0 text-success">{{promo_id[2]}}</p>
				
				</div> 		    		   
			</a>  		  
			<?php $this->renderPartial("//account/checkout-promo")?>
			</template>

			</template>
			</el-skeleton>
			 		 
 		   
 		    <!--COMPONENT PROMO CODE--> 		   
 		   <component-promocode 
 		   ref="childref"
 		   title="<?php echo t("Have a promo code?")?>"
 		   add_promo_code="<?php echo t("Add promo code")?>"
 		   apply_text="<?php echo t("Apply")?>"
 		   @back="show"
 		   @set-loadpromo="loadPromo"
			is_mobile="<?php echo Yii::app()->params['isMobile'];?>"
 		   >
 		   </component-promocode>
 		   <!--END COMPONENT PROMO CODE-->
 		   
 		   </DIV>	   		   
 		   <!--promo-section-->
 		   
 		   
 		   <!--add promo code manually--> 	
 		   <DIV v-cloak id="vue-add-promocode">   		   
 		   <template v-if="enabled"> 		   
 		   <a @click="show" href="javascript:;" class="d-block chevron-section promo-section d-flex align-items-center rounded mb-2">
 		    <div class="flexcol mr-2"><i class="zmdi zmdi-label"></i></div>
 		    <div class="flexcol"> 	 		       
 		       <span v-if="has_promocode===false"><?php echo t("Add promo code")?></span>
 		       <span v-else><?php echo t("Remove promo code")?></span>
 		       
 		       <p v-if="has_promocode" class="m-0 text-success">{{saving}}</p>
 		       
 		    </div> 		    		   
 		   </a>  		   		   
 		   </template>
 		   
 		    <!--COMPONENT PROMO CODE--> 		   
 		   <component-apply-promocode 
 		   ref="childref"
 		   title="<?php echo t("Have a promo code?")?>"
 		   add_promo_code="<?php echo t("Add promo code")?>"
 		   apply_text="<?php echo t("Apply")?>" 		   
 		   @back="show"
 		   @set-loadpromo="loadPromo"
 		   >
 		   </component-apply-promocode>
 		   <!--END COMPONENT PROMO CODE-->
 		   
 		   </DIV>	   		   
 		   <!--end add promo code-->
 		   
 		   
 		   <!--ADD UTENSILS-->
 		   <DIV v-cloak id="vue-utensils">  		   
 		   <div v-if="visible" class="d-block chevron-section d-flex align-items-center justify-content-between rounded mb-2"> 		     
 		      <div class="flexcol">
 		       <?php echo t("Include utensils and condoments")?>
 		     </div>
 		      		    
 		     <div>  		     
 		     <div class="custom-control custom-switch custom-switch-md">  			  
			  <input v-model="include_utensils" 
 		     id="include_utensil" type="checkbox" class="custom-control-input checkbox_child">
			  <label class="custom-control-label" for="include_utensil">
			   &nbsp;
			  </label>
			</div>        
 		     
 		     </div>
 		   </div>
 		   </DIV> <!--vue-utensils-->
 		   <!--END ADD UTENSILS-->
 		   
 		   <!--tips-->
 		   <DIV v-cloak id="vue-tips">   
			
			<el-skeleton :loading="is_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>

			 <!-- TIPS -->

			 <template v-if="ifDelivery">
 		   <div class="d-block chevron-section d-flex align-items-center justify-content-between rounded mb-2"> 		    		    
 		    <div class="flexcol">
 		      <?php echo t("Tip the courier")?>
 		      <p class="m-0 mb-2"><?php echo t("Optional tip for the courier")?></p>
 		      
 		       <!--tips-->
		        <div class="btn-group btn-group-toggle input-group-small mb-3" >
		        
		           <label  class="btn" v-for="tip in data" :class="{ active: tips==tip.value }"  >
		             <input type="radio" :value="tip.value" v-model="tips" @click="checkoutAddTips(tip.value)"> 
		             {{ tip.name }}
		           </label>		        
		           
		        </div>
		        <!--tips-->
		        
		       <!--tips-other-->		       
		       <div v-if="ifOthers">
		       <div class="d-flex align-items-center">
		         <div class="flexcol mr-2">
		         
		           <input type="text" class="form-control form-control-text text-center" 
 		            type="text" v-model="manual_tip"  maxlength="2" style="width:80px;">   
		         
		         </div> <!--flexcol-->
		         <div class="flexcol">
		         <button @click="checkoutAddTips(manual_tip)" class="btn btn-green" :class="{ loading: is_loading }" >
		           <span class="label" ><?php echo t("Add tip")?></span>
		           <div class="m-auto circle-loader" data-loader="circle-side"></div>
		         </button>
		         </div>
		       </div>   
		       </div> 
		       <!--tips-other-->
		        
 		      
 		    </div> <!--flexcol-->	    
 		   </div>
 		   </template>

			 <!-- TIPS -->

			</template>
			</el-skeleton>
			 		   
 		   </DIV>
 		   <!--tips-->
 		   
 		   <!--ITEM SUGGESTION-->			
 		   <DIV id="vue-item-suggestion"> 		     
 		   <components-item-suggestion
 		   title="<?php echo t("People also ordered")?>" 
 		   merchant_id="<?php echo $merchant_id;?>"		 
 		   image_use="thumbnail"
 		   :settings="{		      
		      items: '<?php echo CJavaScript::quote(3)?>',      
		      lazyLoad: '<?php echo CJavaScript::quote(true)?>', 
		      loop: '<?php echo CJavaScript::quote(false)?>', 
		      margin: '<?php echo CJavaScript::quote(5)?>', 
		      nav: '<?php echo CJavaScript::quote(false)?>', 
		      dots: '<?php echo CJavaScript::quote(false)?>', 
		      stagePadding: '<?php echo CJavaScript::quote(0)?>',				  
		  }"  		  
 		   >
 		   </components-item-suggestion>
 		   
 		    		   
 		   </DIV> 		   
 		   <?php $this->renderPartial("//components/item-suggestion")?>
 		   <!--END ITEM SUGGESTION-->
 		   
 		   </div>
          </div>
          <!--Delivery method and time-->
          
          <!--div class="divider p-0"></div-->
         
          <!--vue-manage-address-->
          <DIV id="vue-manage-address" v-cloak >
          <input type="hidden" id="autoload" value="1">	
          <template v-if="ifDelivery">
           <div class="card-body">
           
             <div class="row mb-3" >    
			     <div class="col-lg-6 col-md-6 col d-flex justify-content-start align-items-center" >
			         <span class="badge badge-dark rounded-pill">2</span>
			         <h5 class="m-0 ml-2 section-title"><?php echo t("Delivery details")?></h5>			         
			     </div>		     
			     
			     <div class="col-lg-6 col-md-6 col-1 d-flex justify-content-end"> 
			       <a href="javascript:;"  @click="showNewAddress" class="d-flex align-items-center" >
			        <span class="bold d-none d-md-block"><?php echo t("Add new address")?></span>  
			        <span class="badge btn-black rounded-pill ml-1 font20">+</span>
			       </a>
			     </div>			     
	 		 </div> <!--row-->    
	 		 
	 		 <!--COMPONENTS CHANGE ADDRESS-->	 		    
			<component-address 
			ref="childref"
			:label="{
			    title:'<?php echo CJavaScript::quote(t("Change address"))?>', 
			    enter_address: '<?php echo CJavaScript::quote(t("Enter delivery address"))?>',	    	    
			}"
			:addresses="addresses"
			:location_data="location_data"
			@set-location="setLocationDetails"
			@set-edit="setLocationDetails"
			@set-placeid="setPlaceData"
			@load-data="loadData"
			>
			</component-address>
			<!--END COMPONENTS CHANGE ADDRESS-->
	 		  
	 		<template v-if="hasLocationData">
	 		   <a @click="show" href="javascript:;" class="d-block chevron-section promo-section d-flex align-items-center rounded mb-2">
	 		    <div class="flexcol mr-2"><i class="zmdi zmdi-pin"></i></div>
	 		    <div class="flexcol" > 		     		     		      
	                <span  class="bold mr-1">{{ location_data.address.formatted_address }}</span>
	                <p   class="m-0 text-muted" v-if="delivery_options!== ''">
	                 <?php echo t("Delivery options")?>: {{delivery_options}}
	                </p>
	                
	                <div  v-if="error.length>0" class="alert alert-warning mb-2" role="alert">
			          <p  v-for="err in error" class="m-0">{{err}}</p>	    
			       </div>   			   
			   
	 		    </div> 		    		    		    
	 		   </a>   		    		    	
	 		 </template>	    
	 		 
             <?php $this->renderPartial("//account/checkout-address")?>
            
           </div> <!--card body-->
           <!--div class="divider p-0"></div-->
          </template>
          </DIV> 
          <!--vue-manage-address-->
          
          <!--PAYMENT METHOD-->
          <div class="card-body">
          <DIV id="vue-payment-list" v-cloak>
             <div class="row mb-3" >              
              <div class="col d-flex justify-content-start align-items-center" >              
		         <span class="badge badge-dark rounded-pill">
		         <template v-if="transaction_type==='delivery'">
		         3
		         </template>
		         <template v-else>
		         2
		         </template>
		         </span>
		         <h5 class="m-0 ml-2 section-title"><?php echo t("Payment Methods")?></h5>			         
			  </div>	             
             </div> <!--row-->
             
             <!--SAVE PAYMENT METHOD-->        			 
			<el-skeleton :count="3" :loading="saved_payment_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>
    <div  class="row mb-2" >  
			<template v-if="hasSavedPayment">
             <!--h5 class="mb-3"><?php echo t("Saved Payment Methods")?></h5--> 
                      
             <div class="col-md-6 col-lg-4" v-for="saved_payment in data_saved_payment"  :class="{ selected: saved_payment.as_default==1 }" >
             <div class="add-payment-card" style="min-height: 155px;">
   <div class="card " >
   
     <div class="d-flex">
        <div class="flex-col">
            <div class="btnvisa">
            <span>
          <i v-if="saved_payment.logo_type=='icon'" :class="saved_payment.logo_class"></i>
	 		      <img v-else class="img-35 contain" :src="saved_payment.logo_image" /> 		 
	      </span>
	      <h5> {{saved_payment.attr1}}  <span v-if="saved_payment.as_default==1">                    
             <i class="zmdi zmdi-check text-white font20 ml-2"></i>
            </span> </h5>
	      </div>
        </div>
     
        <div class="flex-col   flex-grow-1 d-flex justify-content-end">
		   <template v-if="saved_payment.as_default==1">
                 <!--div class="mr-1 d-none d-md-block"><i class="zmdi zmdi-check text-success"></i></div-->
                 <div class="mr-3 d-none d-md-block"><p class="m-0"><?php echo t("Default")?></p></div>
                 </template>
        	             <div class="dropdown">
	             <a href="javascript:;" class="rounded-pill rounded-button-icon d-inline-block" 
	             id="dropdownMenuLink" data-toggle="dropdown" >
	               <i class="zmdi zmdi-more" style="font-size: inherit;"></i>
	             </a>
	                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a  v-if="saved_payment.as_default!=1" 
	             @click="setDefaultPayment(saved_payment.payment_uuid)"
	             class="dropdown-item a-12" href="javascript:;"><?php echo t("Set Default")?></a>
					    
					    <a @click="deleteSavedPaymentMethod(saved_payment.payment_uuid,saved_payment.payment_code)" class="dropdown-item a-12" href="javascript:;"><?php echo t("Delete")?></a>				    
					  </div>
	             </div> <!--dropdown-->

        
        
        </div> <!--flex col-->
	 </div> <!--flex-->     
     <div class="w-100 mb-3 mt-3">
                           <label>Card Number</label>
                           <div class="card-caption">
                               <div class="text-truncate">
                            {{saved_payment.attr2}}
                           </div>
                           </div>
                        </div>

     

   </div> <!--card-->
   </div> <!--card-->              
     </div>
       </template>
     <div class="col-lg-4 col-md-6">
         
         	<el-skeleton :count="3" :loading="payment_list_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>
<template v-if="hasData">
<div class="add-payment-card center">
<div class="add-pay-card">
   
             <a v-for="payment in data" @click="showPayment(payment.payment_code)" class="btn btn-pay mb-2">
	 		        <i class="ti-credit-card"></i>
	 		       <span>{{payment.payment_name}}</span>       
	 		 </a> 
	 		 </div>
	 		 </div>
             </template>            

			</template>
			</el-skeleton>
     </div>
     </div>
             <div v-for="saved_payment in data_saved_payment" class=" d-none row no-gutters align-items-center chevron-section medium rounded mb-2"  :class="{ selected: saved_payment.as_default==1 }" >
             
              <div class="col-lg-8 col-md-8 col-10 d-flex align-items-center">
                <div class="flexcol mr-0 mr-lg-2 payment-logo-wrap">
	 		      <i v-if="saved_payment.logo_type=='icon'" :class="saved_payment.logo_class"></i>
	 		      <img v-else class="img-35 contain" :src="saved_payment.logo_image" /> 		      
	 		    </div> <!--flex-col-->
	 		    <div class="flexcol" > 		     		     		      
	 		       <span class=" mr-1">{{saved_payment.attr1}}</span>       
	 		       <p class="m-0 text-muted">{{saved_payment.attr2}}</p>   
	 		    </div> 		    		    		    
              </div> <!--col-->
              <div class="col-lg-4 col-md-4 col-2  d-flex align-items-center justify-content-end">
                         
                 <template v-if="saved_payment.as_default==1">
                 <div class="mr-1 d-none d-md-block"><i class="zmdi zmdi-check text-success"></i></div>
                 <div class="mr-3 d-none d-md-block"><p class="m-0"><?php echo t("Default")?></p></div>
                 </template>
                 
	             <div class="dropdown">
	             <a href="javascript:;" class="rounded-pill rounded-button-icon d-inline-block" 
	             id="dropdownMenuLink" data-toggle="dropdown" >
	               <i class="zmdi zmdi-more" style="font-size: inherit;"></i>
	             </a>
	                 <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a  v-if="saved_payment.as_default!=1" 
	             @click="setDefaultPayment(saved_payment.payment_uuid)"
	             class="dropdown-item a-12" href="javascript:;"><?php echo t("Set Default")?></a>
					    
					    <a @click="deleteSavedPaymentMethod(saved_payment.payment_uuid,saved_payment.payment_code)" class="dropdown-item a-12" href="javascript:;"><?php echo t("Delete")?></a>				    
					  </div>
	             </div> <!--dropdown-->
	              
              </div> <!--col-->
             </div> <!--row-->
             
             <!--/template-->
             <!--END SAVE PAYMENT METHOD-->

			</template>
			</el-skeleton>

             <div class="d-none">
             <h5 class="mb-3 mt-4"><?php echo t("Add New Payment Method")?></h5>

			<el-skeleton :count="3" :loading="payment_list_loading" animated>
			<template #template>
			<div class="border rounded p-1 mb-2">
				<el-skeleton :rows="1" />
			</div>
			</template>		   
			<template #default>

			<template v-if="hasData">
             <a v-for="payment in data" @click="showPayment(payment.payment_code)" class=" d-block chevron-section medium d-flex align-items-center rounded mb-2">
	 		    <div class="flexcol mr-0 mr-lg-2  payment-logo-wrap">
	 		      <i v-if="payment.logo_type=='icon'" :class="payment.logo_class"></i>
	 		      <img v-else class="img-35 contain" :src="payment.logo_image" />
	 		    </div>
	 		    
	 		    <div class="flexcol" > 		     		     		      
	 		       <span class="mr-1">{{payment.payment_name}}</span>          
	 		    </div> 		    		    		    
	 		 </a> 
             </template>            

			</template>
			</el-skeleton>
			 </div>
                   
             <!--RENDER PAYMENT COMPONENTS-->       
             <?php CComponentsManager::renderComponents($payments,$payments_credentials,$this)?>                          
          	 
          </DIV> <!-- vue-payment-list-->
          </div> <!--card-body-->                               
          <!--END PAYMENT METHOD-->
           		 
          
        </div> <!--card-->
     </div> <!--col-->
     
     
     <!--RIGHT SIDE PANEL-->
     <div class="col-lg-12 col-md-12 mb-4 mb-lg-3  p-0 p-lg-2">
     
      <!--vue-cart-->       
      <div id="vue-cart"  v-cloak >
     
		 <div class="card">     		  
		   <div class="card-body d-none pb-3"   v-if="cart_items.length>0" >      
		     <div class="items d-flex justify-content-between">
		        <div>		       		            
					 <el-image
						style="width: 50px; height: 50px"
						class="rounded-pill"
						:src="cart_merchant.logo"
						fit="cover"
						lazy
					></el-image>
		        </div> <!--col-->
		        <div class=" flex-fill pl-2">
		          		          
		          <a :href="cart_merchant.restaurant_slug" class="m-0 p-0">
                  <h5 class="m-0 chevron d-inline position-relative">{{ cart_merchant.restaurant_name }}</h5>
                  </a>  
                  
                  <template v-for="(cuisine, index) in cart_merchant.cuisine"  >
                  <div>
		          <span v-if="index <= 0" class="badge mr-1" 
	             :style="'background:'+cuisine.bgcolor+';font-color:'+cuisine.fncolor" >
		            {{ cuisine.cuisine_name }}
		          </span>
		          </div>
		          </template>
                  
		          <p class="m-0">{{ cart_merchant.merchant_address }}</p>
		        </div> <!--col-->
		     </div> <!--items-->                
		   </div> <!--card body-->
		   		   
		   <!--div class="divider p-0"></div-->
		   
		   <div class="card-body pt-0">		     
		     <?php $this->renderPartial("//store/cart",array(
		      'checkout'=>true
		     ))?>	      
		   </div> <!--card body-->
		   
		 </div> <!--card-->       
		 </div> <!--sticky-sidebar-->
     <!--end vue-cart-->
     
     </div> <!--col-->
     <!--END RIGHT SIDE PANEL-->
     
   </div> <!--row-->
</div><!-- container-->

</div> <!--container-fluid--> 

<?php $this->renderPartial("//components/loading-box")?>
<?php $this->renderPartial("//components/vue-bootbox")?>
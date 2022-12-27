
<div class="page-content">
    <section class="page-title">
   <div class="auto-container">
      <h1>Order History</h1>
   </div>
</section>
<section class="accountinfo contactus">
<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-3  d-none d-lg-block">
   <?php $this->renderPartial("//layouts/sidebar")?>
</div>
<div class="col-lg-8 col-md-9 profilebox pt-0 loginbox">
<div id="vue-orders-track" class="container" v-cloak  >
    <button class="btn btn-black normal"data-toggle="modal" data-target="#print_modal"><?php echo t("Print")?></button>
<components-order-print
  ref="print"      
  :order_uuid="order_uuid"
  mode="popup"
  :line="75"
  ajax_url="<?php echo $ajax_url?>"  
  >
</components-order-print>
 <component-order-tracking
 ref="tracking" 
 ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 		      
 :realtime="{
   enabled : '<?php echo Yii::app()->params['realtime_settings']['enabled']==1?true:false ;?>',  
   provider : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['provider'] )?>',  			   
   key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['key'] )?>',  			   
   cluster : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['cluster'] )?>', 
   ably_apikey : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['ably_apikey'] )?>', 
   piesocket_api_key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_api_key'] )?>', 
   piesocket_websocket_api : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_websocket_api'] )?>', 
   piesocket_clusterid : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_clusterid'] )?>', 
   channel : '<?php echo CJavaScript::quote( Yii::app()->user->client_uuid  )?>',  			   
   event : '<?php echo CJavaScript::quote( Yii::app()->params->realtime['event_tracking_order'] )?>',  
 }"  			      
 @after-receive="afterProgress"
 >		      
 </component-order-tracking>
 
 <!--COMPONENTS REVIEW-->
<components-review
ref="ReviewRef"
accepted_files = "image/jpeg,image/png,image/gif/mage/webp"
:max_file = "2"
:label="{
  write_review: '<?php echo CJavaScript::quote(t("Leave Your Rating"))?>',
  //what_did_you_like: '<?php echo CJavaScript::quote(t("What did you like?"))?>',  
  //what_did_you_not_like: '<?php echo CJavaScript::quote(t("What did you not like?"))?>',
  //add_photo: '<?php echo CJavaScript::quote(t("Add Photos"))?>',
  //write_your_review: '<?php echo CJavaScript::quote(t("Write your review"))?>',
  post_review_anonymous: '<?php echo CJavaScript::quote(t("post review as anonymous"))?>',
  review_helps: '<?php echo CJavaScript::quote(t("Your review helps us to make better choices"))?>',  
  drop_files_here: '<?php echo CJavaScript::quote(t("Drop files here to upload"))?>', 
  add_review: '<?php echo CJavaScript::quote(t("Add Review"))?>',  
  max_file_exceeded : '<?php echo CJavaScript::quote(t("Maximum files exceeded"))?>',  
  dictDefaultMessage : '<?php echo CJavaScript::quote(t("Drop files here to upload"))?>',  
  dictFallbackMessage : '<?php echo CJavaScript::quote(t("Your browser does not support drag'n'drop file uploads."))?>',  dictFallbackText : '<?php echo CJavaScript::quote(t("Please use the fallback form below to upload your files like in the olden days."))?>',  
  dictFileTooBig: '<?php echo CJavaScript::quote(t("File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.w"))?>',  
  dictInvalidFileType: '<?php echo CJavaScript::quote(t("You can't upload files of this type."))?>',  
  dictResponseError: '<?php echo CJavaScript::quote(t("Server responded with {{statusCode}} code."))?>',  
  dictCancelUpload: '<?php echo CJavaScript::quote(t("Cancel upload"))?>',  
  dictCancelUploadConfirmation: '<?php echo CJavaScript::quote(t("Are you sure you want to cancel this upload?"))?>',  
  dictRemoveFile: '<?php echo CJavaScript::quote(t("Remove file"))?>',  
  dictMaxFilesExceeded: '<?php echo CJavaScript::quote(t("You can not upload any more files."))?>',   
  search_tag: '<?php echo CJavaScript::quote(t("Search tag"))?>',   
}"
:rating-value="rating_value"
@update:rating-value="rating_value = $event"
>
</components-review>

<div class="row no-gutters" v-if="merchant_info" >
     <template  v-if="order_progress===4">
         <div class="mt-0 mb-3 w-100" >
        <div class="d-flex justify-content-end w-100">
         <a @click="writeReview(order_uuid)" class="btn link text-green"><?php echo t("Add Rating")?></a></div>
         
       </div>    
    <div  class="divider p-0 mt-2 mb-2"></div>
    </template>
   
   
   
   
 
  <div class="col-lg-12 col-md-12">
      
          <div class="row">
               <div class="col-md-12">
                  <div class="card-body orderbox bg-white mb-2">
                     <div class="row justify-content-between">
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Order No:</h6>
                           <p class="mb-lg-0 ">{{order_info.order_id}}</p>
                        </div>
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Order date:</h6>
                           <p class="mb-lg-0 ">
                              <span>{{order_info.place_on}}</span>
                           </p>
                        </div>

                        <div class="col-6 col-lg-2"   v-if="order_info.paid_on!=''" >
                           <h6 class="text-muted mb-1">Receive Date:</h6>
                           <p class="mb-lg-0 ">
                              <span>{{order_info.paid_on}}</span>
                           </p>
                        </div>
                        
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Status:</h6>
                           <p class="mb-0 "> {{order_info.status}}</p>
                        </div>
                        
                        <div class="col-6 col-lg-3">
                           <h6 class="text-muted mb-1">Order Amount:</h6>
                           <p class="mb-0 ">{{order_info.sub_total}}</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
     <div class="row mt-3">
               <div class="col-md-6">
                  <div class="boxsha">
                     <div class="card border-0 style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Items</h4>
                        </div>
                        <div class="card-body">
						        <ul class="list-unstyled m-0 p-0 item-groups" v-if="items.length>0" >
								  <template v-for="(item, index) in items"  >
								  <li> <img class="rounded-pill lazy" :data-src="item.url_image"/>
								  <div>
								  <p class="m-0">
								   {{item.qty}}x {{item.item_name}}   
								   <template v-if=" item.size_name!='' "> 
									  ({{item.size_name}})
								   </template>      
								  </p><!--span class="theme-cl">$80.00</span--></div></li>      
								  </template>
								 </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="boxsha">
                    <div class="card border-0 style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Total Order</h4>
                        </div>
                        <div class="card-body">
                           <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                              <li class="list-group-item d-flex justify-content-between">
                                 <span>Subtotal</span>
                                 <span class="ml-auto">{{order_info.sub_total}}</span>
                              </li>
                           
                              <!--li class="list-group-item d-flex justify-content-between">
                                 <span>Tax</span>
                                 <span class="ml-auto">$02.00</span>
                              </li>
                              
                              <li class="list-group-item d-flex justify-content-between">
                                 <span>Shipping</span>
                                 <span class="ml-auto">$15.10</span>
                              </li-->
                              
                              <li class="list-group-item d-flex justify-content-between font-size-lg font-weight-bold">
                                 <span>Total</span>
                                 <span class="ml-auto">{{order_info.sub_total}}</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="boxsha mt-4">
               <div class="row orderfonts">
                  <div class="col-md-12">
                     <div class="card style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Payment Method</h4>
                        </div>
                        <div class="card-body">
                           <div class="row">                          
                              <div class="col-12 col-md-4"  v-if="order_info.delivery_address!=''">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Address:
                                 </p>

                                 <p class="mb-7 mb-md-0" >{{order_info.delivery_address}}
                                 </p>
                              </div>
                              <div class="col-12 col-md-4">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Payment Method:
                                 </p>

                                 <p class="mb-0">
                                   {{order_info.payment_name}}
                                 </p>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
             <div class="boxsha mt-4">
               <div class="row orderfonts">
                  <div class="col-md-12">
                     <div class="card style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Fullfillment Method</h4>
                        </div>
                       
                        <div class="card-body">
                           <div class="row">                          
                              <div class="col-12 col-md-4"  v-if="order_info.whento_deliver=='schedule'">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Date:
                                 </p>

                                 <p class="mb-7 mb-md-0" >{{order_info.delivery_date}} {{order_info.delivery_time}}
                                 </p>
                              </div>
                              <div class="col-12 col-md-4">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Method:
                                 </p>

                                 <p class="mb-0">
                                   {{order_info.order_type}}
                                 </p>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
<div  id="print_modal" class="modal" tabindex="-1" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-md modal-dialog-centered modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
              
        <h5 class="modal-title" id="exampleModalLabel">Print Order #{{order_info.order_id}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
     
      <div class="modal-body printhis" id="outprint">
      
      
      <div  class="receipt-container m-autox pt-2">
	      <div class="text-center mb-3">
		      <h5 class="m-0 mb-1">{{merchant_info.restaurant_name}}</h5>
		      <p class="m-0">{{merchant_info.merchant_address}}</p>
		      <p class="m-0">Phone : {{merchant_info.contact_phone}} /  Email : {{merchant_info.contact_phone}}</p>
	      </div>
	      <div class="col-md-12">
                  <div class="card-body orderbox bg-white mb-2">
                     <div class="row justify-content-between">
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Order No:</h6>
                           <p class="mb-lg-0 ">{{order_info.order_id}}</p>
                        </div>
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Order date:</h6>
                           <p class="mb-lg-0 ">
                              <span>{{order_info.place_on}}</span>
                           </p>
                        </div>

                        <div class="col-6 col-lg-2"   v-if="order_info.paid_on!=''" >
                           <h6 class="text-muted mb-1">Receive Date:</h6>
                           <p class="mb-lg-0 ">
                              <span>{{order_info.paid_on}}</span>
                           </p>
                        </div>
                        
                        <div class="col-6 col-lg-2">
                           <h6 class="text-muted mb-1">Status:</h6>
                           <p class="mb-0 "> {{order_info.status}}</p>
                        </div>
                        
                        <div class="col-6 col-lg-3">
                           <h6 class="text-muted mb-1">Order Amount:</h6>
                           <p class="mb-0 ">{{order_info.sub_total}}</p>
                        </div>
                     </div>
                  </div>
               </div>
	      <span v-for="index in line">-</span>
	      	      
	      <template v-if="order_info.service_code=='pos'">
	      <div class="details mt-2 mb-2">	     
	         <div class="row">
	           <div class="col">Order ID : {{order_info.order_id}}</div>	         
	          </div>	         	        	        
	          <div class="row">
	           <div class="col">Date : {{order_info.place_on_raw}}</div>	         
	          </div>	         	        	        
	          <div class="row">
	           <div class="col">Customer : 
	             <span v-if="order_info.client_id>0">{{order_info.customer_name}}</span>
	             <span v-else>Walk-in Customer</span>
	           </div>	         
	          </div>	         	        	        
	          
	          <div v-if="order_info.order_notes!=''" class="row">
	           <div class="col">Notes : {{order_info.order_notes}}</div>	         
	          </div>	         	        	        
	          
	      </div> <!-- order details -->
	      </template>
	      
	      <template v-else>
	  
	      </template>
	      
	      <span v-for="index in line">-</span>
	      
	      
	      <div class="items-details mt-2 mb-2"> 
	      <div class="col-md-12">
                  <div class="boxsha">
                     <div class="card border-0 style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Items</h4>
                        </div>
                        <div class="card-body">
						        <ul class="list-unstyled m-0 p-0 item-groups" v-if="items.length>0" >
								  <template v-for="(item, index) in items"  >
								  <li> <img class="rounded-pill lazy" :data-src="item.url_image"/>
								  <div>
								  <p class="m-0">
								   {{item.qty}}x {{item.item_name}}   
								   <template v-if=" item.size_name!='' "> 
									  ({{item.size_name}})
								   </template>      
								  </p><!--span class="theme-cl">$80.00</span--></div></li>      
								  </template>
								 </ul>
                        </div>
                     </div>
                  </div>
               </div>
	  
	       	       
	      
	      </div>
	      <!-- items-details -->
	      
	      <span v-for="index in line">-</span>
	      <div class="col-md-12">
                  <div class="boxsha">
                    <div class="card border-0 style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Total Order</h4>
                        </div>
                        <div class="card-body">
                           <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                              <li class="list-group-item d-flex justify-content-between">
                                 <span>Subtotal</span>
                                 <span class="ml-auto">{{order_info.sub_total}}</span>
                              </li>
                           
                              
                              <li class="list-group-item d-flex justify-content-between font-size-lg font-weight-bold">
                                 <span>Total</span>
                                 <span class="ml-auto">{{order_info.sub_total}}</span>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
                <div class="boxsha mt-4">
               <div class="row orderfonts">
                  <div class="col-md-12">
                     <div class="card style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Payment Method</h4>
                        </div>
                        <div class="card-body">
                           <div class="row">                          
                              <div class="col-12 col-md-4"  v-if="order_info.delivery_address!=''">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Address:
                                 </p>

                                 <p class="mb-7 mb-md-0" >{{order_info.delivery_address}}
                                 </p>
                              </div>
                              <div class="col-12 col-md-4">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Payment Method:
                                 </p>

                                 <p class="mb-0">
                                   {{order_info.payment_name}}
                                 </p>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
             <div class="boxsha mt-4">
               <div class="row orderfonts">
                  <div class="col-md-12">
                     <div class="card style-2">
                        <div class="card-header">
                           <h4 class="mb-0">Fullfillment Method</h4>
                        </div>
                       
                        <div class="card-body">
                           <div class="row">                          
                              <div class="col-12 col-md-4"  v-if="order_info.whento_deliver=='schedule'">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Date:
                                 </p>

                                 <p class="mb-7 mb-md-0" >{{order_info.delivery_date}} {{order_info.delivery_time}}
                                 </p>
                              </div>
                              <div class="col-12 col-md-4">
                                 <!-- Heading -->
                                 <p class="mb-2 font-weight-bold">
                                   Method:
                                 </p>

                                 <p class="mb-0">
                                   {{order_info.order_type}}
                                 </p>

                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
	      <div class="summary mt-2 mb-2"> 
	      	       
	       <div class="row" v-for="summary in order_summary" >	         
	         
	         <template v-if=" summary.type=='total' ">
	         
	         <div class="col">	           
	           <h5 class="m-0">{{summary.name}}</h5>
	         </div>
	         <div class="col text-right"><h5 class="m-0">{{summary.value}}</h5></div>
	         
	         </template>
	         <template v-else>
	         
	         <div class="col">	           
	           {{summary.name}}
	         </div>
	         <div class="col text-right">{{summary.value}}</div>
	         
	         </template>
	         
	       </div>	      	      
	      
	      </div>
	      <!-- summary -->
	      	      
	      <template v-if="order_info.service_code=='pos'">
	          <div  class="row">
	            <div v-if="payment_list[order_info.payment_code]" class="col">{{payment_list[order_info.payment_code]}}</div>	         
	            <div v-else class="col">{{order_info.payment_code}}</div>	         
	            <div class="col text-right">	              
	              <money-format :amount="order_info.receive_amount" ></money-format>
	            </div>	         
	          </div>	         	        	        
	          <span v-for="index in line">-</span>
	          <div class="row">
	            <div class="col">Total Tendered</div>	         
	            <div class="col text-right"><money-format :amount="order_info.receive_amount" ></money-format></div>	         
	          </div>	         	        	        
	          <div class="row">
	            <div class="col">Change</div>	         
	            <div class="col text-right"><money-format :amount="order_info.order_change" ></money-format></div>	         
	          </div>	         	        	        
	      </template>
	      
	      
	      <span v-for="index in line">-</span>
	      <!--<div class="footer text-center mt-2 mb-2">-->
	      <!--  <h4>{{print_settings.receipt_thank_you}}</h4>	        -->
	      <!--</div>-->
	      <span v-for="index in line">-</span>
	      
	      
      </div>
      <!-- receipt-container -->
      
        
      
      </div> <!-- body -->    
      
      <div class="modal-footer justify-content-end border-0">            
         <button class="btn btn-black" data-dismiss="modal" >&nbsp;&nbsp;Close&nbsp;&nbsp;</button>
         <button  ref="print_button"
          class="btn btn-green printMe" >&nbsp;&nbsp;Print&nbsp;&nbsp;</button>
      </div>
      <!-- footer -->
        
    </div> <!-- content -->      
  </div> <!-- dialog -->      
</div>  <!-- modal -->              


     <div class="d-none">    
    <h5 class="m-0 mb-1">{{order_status}}</h5>    
    <p class="m-0">{{order_status_details}}</p>        
        
    <template v-if="order_info.order_type=='delivery'">       
    <div class="mt-3 mb-5">
	    <ul id="progressbar" class="text-center">
	        <li class="step-order" :class="{ active: order_progress>='1', 'progressing': order_progress=='1' , 'order_failed': order_progress=='0'  }" >
	          <div class="progress-value"></div>
	        </li>  
	        <li class="step-merchant" :class="{ active: order_progress>='2', 'progressing': order_progress=='2' , 'order_failed': order_progress=='0'  }"  >
	           <div class="progress-value"></div>
	        </li>        
	        <li class="step-car " :class="{ active: order_progress>='3' , 'progressing': order_progress=='3' , 'order_failed': order_progress=='0'   }" >
	           <div class="progress-value"></div>
	        </li>
	        <li class="step-home" :class="{ active: order_progress>='4', 'order_failed': order_progress=='0' }" ></li>
	    </ul>
    </div>
    </template>
    
    <template v-else>       
       <div class="mt-3 mb-5">
	    <ul id="progressbar" class="text-center three-column">
	        <li class="step-order" :class="{ active: order_progress>='1', 'progressing': order_progress=='1' , 'order_failed': order_progress=='0'  }" >
	          <div class="progress-value"></div>
	        </li>  
	        <li class="step-merchant" :class="{ active: order_progress>='2', 'progressing': order_progress=='2' , 'order_failed': order_progress=='0'  }"  >
	           <div class="progress-value"></div>
	        </li>        	        
	        <li class="step-home" :class="{ active: order_progress>='3', 'order_failed': order_progress=='0' }" ></li>
	    </ul>
    </div>
    </template>
    
    <div class="card body mt-5"  >      
     <div class="items d-flex justify-content-between">
        <div>
            <div class="position-relative"> 
			   <div class="skeleton-placeholder"></div>
			   <img class="rounded-pill lazy" :data-src="merchant_info.url_logo"/>
			 </div>
			 
			 
		
			 
        </div> <!--col-->
        <div class=" flex-fill pl-2">
          <a target="_blank"  :href="merchant_info.restaurant_url"><h6 class="d-inline mr-1">{{merchant_info.restaurant_name}}</h6></a>
          <template v-for="(cuisine, index) in merchant_info.cuisine"  >
          <span v-if="index <= 0" class="badge mr-1" :style="'background:'+cuisine.bgcolor+';font-color:'+cuisine.fncolor" >
            {{ cuisine.cuisine_name }}
          </span>
          </template>
          <p class="m-0">{{ merchant_info.merchant_address }}</p>
          
          <!--DIRECTIONS -->
          <div v-if="order_info.order_type=='pickup'" class="mt-2">            
            <a :href="'tel:'+ merchant_info.contact_phone"  class="btn btn-circle btn-white border mr-2"><i class="zmdi zmdi-phone"></i></a>
            <a :href="merchant_info.restaurant_direction" target="_blank" class="btn btn-circle btn-white border"><i class="zmdi zmdi-turning-sign"></i></a>
          </div>          
          <div v-else-if="order_info.order_type=='dinein'" class="mt-2">            
            <a :href="'tel:'+ merchant_info.contact_phone"  class="btn btn-circle btn-white border mr-2"><i class="zmdi zmdi-phone"></i></a>
            <a :href="merchant_info.restaurant_direction" target="_blank" class="btn btn-circle btn-white border"><i class="zmdi zmdi-turning-sign"></i></a>
          </div>
          
        </div> <!--col-->
     </div> <!--items-->                
   </div> <!--card body-->
    
    <div class="divider p-0 mt-2 mb-2"></div>
        
    <template  v-if="order_progress===4">
    <div class="mt-3 mb-3" >
        <h6><?php echo t("HOWS WAS YOUR ORDER?")?></h6>
        <p><?php echo t("let us know how your delivery wen and how you liked your order!")?></p>
        <div class="d-flex justify-content-end">
          <div><a @click="writeReview(order_uuid)" class="btn link text-green"><?php echo t("Rate Your Order")?></a></div>
        </div>
    </div> <!--review-->     
    <div  class="divider p-0 mt-2 mb-2"></div>
    </template>
        
    <template v-if="hasInstructions">   
    <div class="mt-3 mb-3" >
      <h6><?php echo t("UPON ARRIVAL")?></h6>
      <p>{{instructions.text}}</p>
    </div>
    <div class="divider p-0 mt-2 mb-2"></div>
    </template>
           
   <div class="mt-3 items">   
    <div class="d-flex justify-content-between ">
       <div>       
       <h6 class="font13 m-0 badge" 
       :style="{background:order_info.background_color_hex,color:order_info.font_color_hex}"      
       >
        {{order_info.status}}
       </h6>
       </div>
       <div><p class="m-0 badge"
       :style="{background:order_info.background_color_hex,color:order_info.font_color_hex}"      
       >
        {{order_info.service_name}}</p>
       </div>
    </div> <!--flex-->   
    
     <div class="items" v-if="order_info.customer_name!=''"  >   
     <h6 class="font13 m-0">{{order_info.customer_name}} 
        <span class="text-muted a-12 ml-2" v-if="order_info.contact_number!=''">{{order_info.contact_number}}</span>
     </h6>
     <p class="m-0 text-muted"  v-if="order_info.delivery_address!=''" >{{order_info.delivery_address}}</p>
     
     <p v-if="order_info.whento_deliver=='now'" class="m-0 text-muted">{{order_info.schedule_at}}</p>
     <p v-if="order_info.whento_deliver=='schedule'" class="m-0 text-muted">Scheduled at {{order_info.schedule_at}}</p>
   </div>
   <h6 class="font13 m-0"><?php echo t("Order #")?>{{order_info.order_id}}</h6> 
   <p class="m-0 text-muted">{{order_info.payment_name}}</p>
   <p class="m-0 text-muted">{{order_info.place_on}}</p>
   <p class="m-0 text-muted" v-if="order_info.paid_on!=''" >{{order_info.paid_on}}</p>
   </div>
    
    <div class="mt-3 mb-3" >
     <a target="_blank" :href="merchant_info.restaurant_url"><h6>{{merchant_info.restaurant_name}}</h6></a>
     <p class="m-0 mb-1 bold"><?php echo t("Order #")?>{{order_info.order_id}}</p>
     <p class="m-0 mb-1 bold">{{items_count}} items</p>
     <p class="m-0 mb-1">{{order_info.sub_total}} <?php echo t("Subtotal")?></p>
     
     
     <?php //print_r($items);?>
     
     <ul class="list-unstyled m-0 p-0" v-if="items.length>0" >
      <template v-for="(item, index) in items"  >
        
         <img class="rounded-pill lazy" :data-src="item.url_image"/>
      <li><p class="m-0">
       {{item.qty}}x {{item.item_name}}   
       <template v-if=" item.size_name!='' "> 
          ({{item.size_name}})
       </template>      
      </p></li>      
      </template>
     </ul>
    </div>
    
    <div class="divider p-0 mt-2 mb-2"></div>
        
    <div class="mt-3 mb-3" v-if="meta">
      <h6><?php echo t("Delivery Address")?></h6>
      <p class="m-0">{{meta.formatted_address}}</p>
    </div>
    </div>
    
  </div> <!--col-->
  
  
</div> <!--row-->



</div> <!--container-->
</div>
</div>
</div>
</section>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
    $( document ).ready(function() {
$('.printMe').click(function(){
  
   var DocumentContainer = document.getElementById('outprint');
    var WindowObject = window.open('', "PrintWindow", "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.writeln(DocumentContainer.innerHTML);
    WindowObject.document.close();
    WindowObject.focus();
    WindowObject.print();
    WindowObject.close();  
});

});
</script>
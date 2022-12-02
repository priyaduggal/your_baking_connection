<style>
    .modal .modal-body form .form-label-group {
    display: flex;
    flex-direction: column;
    }
    .modal .modal-body form .form-label-group label {
        order: 1;
        padding-left: 0;
        font-weight: 800;
        margin-bottom: 4px;
        position: relative;
        text-transform: uppercase;
        font-size: 10px;
        color: #212529;
    }
    .modal .modal-body form .form-label-group .form-control{
       order:2;    padding: 0px 10px;
    }
    .modal .modal-body h4 {
    font-size: 1.5em;
    text-align: center;
    margin: 0rem 0 0em 0;
    font-family: 'OneWishPrint';
    font-weight: 500;
    color: #212529;
}
    .modal .modal-body a.btn.btn-black.btn-circle.rounded-pill {
    width: 35px;
    height: 35px;
    position: absolute;
    top: 15px;
    right: 15px;
    background: #e6eaef;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    border-radius: 4px!important;
    font-size: 13px;
    color: #1a1e2b !important;
    cursor: pointer;
    z-index: 1;
}
.modal .modal-footer button.btn.btn-green{
    background-color: #a7e8d4;
    font-size: 16px;
    border: 1px solid #a7e8d4;
}.modal .modal-footer button.btn.btn-green:hover{
    background-color: #fff;
    color:#a7e8d4!important;
    border: 1px solid #a7e8d4;
}
</style>
<section class="page-title">
   <div class="auto-container">
      <h1>Payment Methods</h1>
   </div>
</section>
<section class="accountinfo contactus">
<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-3  d-none d-lg-block">
   <?php $this->renderPartial("//layouts/sidebar")?>
</div>
<div class="col-lg-8 col-md-9 profilebox pt-0 loginbox">
<DIV id="vue-my-payments" v-cloak >


<el-skeleton animated :loading="is_loading" >
<template #template>
  
  <div class="m-3 mb-4">
    <div><el-skeleton-item style="width: 100%;" variant="button" /></div>
    <div><el-skeleton-item style="width: 100%;" variant="text" /></div>
  </div>

  <el-skeleton :count="3" >
  <template #template>
  <div class="row m-0">
  <div class="col-lg-6 mb-3 col-md-6">
         <div><el-skeleton-item style="width: 100%;height:120px" variant="button" /></div>
    </div>
    <div class="col-lg-6 mb-3 col-md-6">
        <div><el-skeleton-item style="width: 100%;height:120px" variant="button" /></div>
    </div>
    <div class="col-lg-6 mb-3 col-md-6">
       <div><el-skeleton-item style="width: 100%;height:120px" variant="button" /></div>
    </div>
    <div class="col-lg-6 mb-3 col-md-6">
       <div><el-skeleton-item style="width: 100%;height:120px" variant="button" /></div>
    </div>
  </div>
  </template>
  </el-skeleton>

</template>
  <template #default>

<div class="card p-0 mb-3 d-none" v-if="!is_loading"  >
 <div class="rounded p-3 grey-bg" >
  <div class="row no-gutters align-items-center">
    <div class="col-md-2">
       <div class="header_icon _icons credit_card d-flex align-items-center justify-content-center">         
       </div>
    </div>
    
    <div class="col-md-6">             
       <h5><?php echo t("Payment")?></h5>
       <p class="m-0"><?php echo t("You can add your payment info here")?></p>
    </div>
    
    <div class="col-md-4 text-center">
      <a class="btn btn-green"  href="javascript:;" @click="payment_method = !payment_method">
        <template v-if="!payment_method"><?php echo t("Add new payment")?></template>
        <template v-if="payment_method"><?php echo t("Close Payment")?></template>
      </a>
    </div>
    
  </div>
 </div>
</div> <!--card -->

<!-- mobile view -->
<div class="card mb-3 mt-3 d-block d-lg-none">
<div class="rounded p-3 grey-bg" >
   <div class="d-flex justify-content-between align-items-center w-100">
     <div>       
        <h5><?php echo t("Payment")?></h5>
        <p class="m-0"><?php echo t("You can add your payment info here")?></p>
     </div>
     <div>
      <a class="btn btn-green"  href="javascript:;" @click="payment_method = !payment_method">
          <template v-if="!payment_method"><?php echo t("Add new payment")?></template>
          <template v-if="payment_method"><?php echo t("Close Payment")?></template>
        </a>
     </div>
   </div>
 </div>
</div>
<!-- mobile view -->

<!--COMPONENTS PAYMENT METHOD-->
<components-payment-method
ref="payment_method"
payment_type='default'
@set-Payment="showPayment"
:label="{
  add_new_payment: '<?php echo CJavaScript::quote(t("Add New Payment Method"))?>',
}"
>
</components-payment-method>
<!--COMPONENTS PAYMENT METHOD-->

<div class="row equal align-items-center position-relative">

<DIV v-if="reload_loading" class="overlay-loader">
  <div class="loading mt-5">      
    <div class="m-auto circle-loader" data-loader="circle-side"></div>
  </div>
</DIV>  



<div class="col-lg-6 mb-3 col-md-6" v-for="item in data" >   

   <!--div class="card p-3 fixed-height card-listing" -->
   <div class="add-payment-card">
   <div class="card " >
   
     <div class="d-flex">
        <div class="flex-col">
            <div class="btnvisa">
            <span>
          <i v-if="item.logo_type=='icon'" :class="item.logo_class" class="font20"></i>
	      <img v-else class="img-35" :src="item.logo_image" /> 
	      </span>
	      <h5> {{item.attr1}}  <span v-if="item.as_default==1">                    
             <i class="zmdi zmdi-check text-white font20 ml-2"></i>
            </span> </h5>
	      </div>
        </div>
        <!--div class="flex-col flex-grow-1">
            
          <h5 class="ml-2">{{item.attr1}} 
            <span v-if="item.as_default==1">                    
             <i class="zmdi zmdi-check text-success font20 ml-2"></i>
            </span>
          </h5>
        </div-->
        <div class="flex-col   flex-grow-1">
        
        <div class="dropdown text-right">
         <a href="javascript:;" class="rounded-pill rounded-button-icon d-inline-block" 
         id="dropdownMenuLink" data-toggle="dropdown" >
           <i class="zmdi zmdi-more" style="font-size: inherit;"></i>
         </a>
             <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			    <a  v-if="item.as_default!=1" 
         @click="setDefaultPayment(item.payment_uuid)"
         class="dropdown-item a-12" href="javascript:;"><?php echo t("Set Default")?></a>
			    			   
			  </div>
         </div> <!--dropdown-->
        
        
        </div> <!--flex col-->
	 </div> <!--flex-->     
     <div class="w-100 mb-3 mt-3">
                           <label>Card Number</label>
                           <div class="card-caption">
                               <div class="text-truncate">
                             {{item.attr2}}
                           </div>
                           </div>
                        </div>
     <!--div class="text-truncate">
     <p>{{item.attr2}}&nbsp;</p>
     </div-->
     
     <div class="row mt-2">
<!--       <div class="col-md-6"><a class="btn btn-md1 w-100" @click="editPayment(item)" href="javascript:;" :disabled="item.reference_id==0"-->
<!--class="btn normal small"><?php echo t("Edit")?> </a>-->
       
<!--       </div>-->
       
       <div class="col-md-6"><a class="btn btn-md2 w-100" @click="ConfirmDelete(item.payment_uuid)" 
href="javascript:;" class="btn normal small"><?php echo t("Delete")?></a></div>
       
     </div> <!--flex-->
     
   </div> <!--card-->
   </div>
  </div> 

            
			
			<!--col-->  
<div class="col-lg-6 col-md-6">
                  <div class="add-payment-card center">
                     <div class="add-pay-card">
                         
                        <a  @click="showPayment('ocr')"   class="btn btn-pay"><i class="ti-credit-card"></i></a>
                       
                     </div>
                   
                     <span>Add Debit/Credit Card</span>
                     
                  </div>
               </div>
</div> <!--row-->

<!--RENDER PAYMENT COMPONENTS-->
<?php CComponentsManager::renderComponents($payments,$payments_credentials,$this)?>

  </template>
</template>

</DIV>
<!--vue-my-payments-->

<?php $this->renderPartial("//components/vue-bootbox")?>
</div>
</div>
</div>
</section>
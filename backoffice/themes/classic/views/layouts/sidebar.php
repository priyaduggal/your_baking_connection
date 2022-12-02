
            <!--div class="container-fluid m-0 p-0"-->
             
             <!--div class="sidebar-panel nice-scroll"-->
                  <div class="sidebar-panel dashboard-nav">
            	 <div class="sidebar-wrap">
            	 
            	  <!--div class="sidebar-logo d-none d-lg-block">	   
            	   <?php 
                   //$this->widget('application.components.WidgetLogo',array(
                     //'class_name'=>'top-logo',
            		 //'link'=>Yii::app()->createUrl("/merchant/dashboard")
                   //));
                   ?>
            	  </div-->
            
            	  <!-- pause order -->
            	  <div id="vue-pause-ordering-panel" class="d-block d-lg-none">
                   
            	  </div>
            	  <!-- pause order -->
            	  
            	  <!--div class="sidebar-profile">
            	     <div class="row m-0">
            	       <div class="col-md-3 m-0 p-0" >
            	         <img class="rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />
            	       </div>
            	       <div class="col-md-9 m-0 p-0" >
            	         <h6><?php echo MerchantTools::displayAdminName();?></h6>
            	         <p class="dim">	         
            	         <?php 
            	         if(!empty(Yii::app()->merchant->contact_number)){
            	         	echo t("T.")." ".Yii::app()->merchant->contact_number;
            	         }
            	         if(!empty(Yii::app()->merchant->email_address)){
            	         	echo '<br/>'.t("E.")." ".Yii::app()->merchant->email_address;
            	         }	        	        
            	         ?>
            	         </p>
            	       </div>
            	     </div>
            	  </div--> 
            	  <!--sidebar-profile-->
                    <?php  $all=Yii::app()->db->createCommand('
                    SELECT *
                    FROM st_merchant
                    Where  merchant_id='.Yii::app()->merchant->id.' 
                    limit 0,8
                    ')->queryAll();
                   
                    ?>
                    <?php if($all[0]['package_id']==2){ ?>
                    <style>
                    .merchant_taxes,.merchant_orders,.merchnat_fulfillment,.pos,.attributes,.food,.customer_reviews,.merchant_dashboard,.food_item_gallery,.merchant_managepopup,.merchant_payment_list {
                        display:none;
                    }
                    .sidebar-nav li:nth-child(3){
                        display:none;
                    }
                    /*.sidebar-nav li:nth-child(4){*/
                    /*    display:none;*/
                    /*}*/
                    
                    </style>
                        
                    <?php }else{ ?>
                    <style>
                    .merchant_social_settings{
                        display:none;
                    }
                    </style>
                    
                    <?php } ?>
                    <div id="vue-siderbar-menu" class="siderbar-menu">	  
                    <?php 
                    $this->widget('application.components.WidgetMenu',array(
                    'menu_type'=>"merchant"
                    ));
                    ?>
                    </div> <!--siderbar-menu-->
                   
            	 </div> <!--sidebar-wrap-->
             </div> <!--sidebar-panel-->
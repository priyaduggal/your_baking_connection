<style>
.colgreen{
    border: 1px solid #a7e8d4;
    background-color: #a7e8d4;
    margin-right: 6px;
    border-radius: 50%!important;
    padding: 0px!important;
    width: 40px;
    height: 40px;
    line-height: 40px;
    color:#fff;
}
    .profilebox.pt-0.loginbox.tabs-box {
    background: transparent;
    box-shadow: none;
    border-radius: 0;
}
td.text-right.align-middle.pr-0 a.btn.btn-sm.text-muted.btn-light.hover-bg-primary.hover-text-secondary.py-1.px-3.mr-2 , td.text-right.align-middle.pr-0 a.btn.btn-sm.text-muted.btn-light.hover-bg-primary.hover-text-secondary.py-1.px-3 {
    border: 1px solid #a7e8d4;
    background-color: #a7e8d4;
    margin-right: 6px;
    border-radius: 50%!important;
    padding: 0px!important;
    width: 40px;
    height: 40px;
    line-height: 40px;
}
td.text-right.align-middle.pr-0 a.btn.btn-sm.text-muted.btn-light.hover-bg-primary.hover-text-secondary.py-1.px-3.mr-2 i.zmdi  , td.text-right.align-middle.pr-0 a.btn.btn-sm.text-muted.btn-light.hover-bg-primary.hover-text-secondary.py-1.px-3 i.zmdi{
    color:#fff;
}
</style>
<DIV id="vue-dashboard">

<div class="row ">
 <div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r1">   
      <div class="report-inner">
          <div>
              <h5><?php echo t("Total Sales")?></h5>
              <p ref="summary_sales">0</p>
          </div>
          <span><i class="zmdi zmdi-chart"></i></span>
      </div>
    
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r2">   
   
     <div class="report-inner">
          <div>
            <h5><?php echo t("Total Basic Bakers")?></h5>
            <?php    $basic=Yii::app()->db->createCommand('
                       SELECT * from st_merchant where status="active" and package_id in (2,3)
                        limit 0,8
                        ')->queryAll();
                        echo count($basic);
                        ?>
            <p ></p>
          </div>
         <span><i class="zmdi zmdi-cake"></i></span>
      </div>  
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 <div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r2">   
   
     <div class="report-inner">
          <div>
            <h5><?php echo t("Total Premium Bakers")?></h5>
              <?php    $basic=Yii::app()->db->createCommand('
                       SELECT * from st_merchant where status="active" and package_id in (1,4)
                        limit 0,8
                        ')->queryAll();
                        echo count($basic);
                        ?>
            <p ></p>
          </div>
         <span><i class="zmdi zmdi-cake"></i></span>
      </div>  
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <!--div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r3">   
   
    <div class="report-inner">
        <div>
            <h5><?php echo t("Total Commission")?></h5>
            <p ref="summary_commission">0</p>
        </div>
          <span><i class="zmdi zmdi-money-box"></i></span>
      </div>  
  
   </div> <!--rounded-status-report--> 
 </div--> <!--col-->
 
 <div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r4">   
   
   
    <div class="report-inner">
        <div>
            <h5><?php echo t("Total Subscriptions")?></h5>
            <p ref="summary_subscriptions">0</p>
        </div>
        <span><i class="zmdi zmdi-money"></i></span>
      </div> 
    
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
</div> <!--row-->

<div class="row">
 <div class="col-lg-8 mb-3 mb-xl-0">

    <!--div class="position-relative">
      <components-sales-summary
      ref="sales_overview"
      ajax_url="<?php echo $ajax_url?>"        
      :label="{    
	    commission_week : '<?php echo CJavaScript::quote(t("Commission this week"));?>',    
	    commission_month : '<?php echo CJavaScript::quote(t("Commission this month"));?>',    
	    subscription_month : '<?php echo CJavaScript::quote(t("Subscriptions this month"));?>',    
	    }"       
      domain="<?php echo Yii::app()->request->getServerName()?>"        
      >
      </components-sales-summary>
     </div-->
     
     <!--div class="dashboard-statistic position-relative mb-3">
     <components-daily-statistic
        ref="daily_statistic"
        ajax_url="<?php echo $ajax_url?>"  
        :label="{    
		    order_received : '<?php echo CJavaScript::quote(t("Order received"));?>',    
		    today_delivered : '<?php echo CJavaScript::quote(t("Today delivered"));?>',    
		    new_customer : '<?php echo CJavaScript::quote(t("New customer"));?>',    
		    total_refund : '<?php echo CJavaScript::quote(t("Total refund"));?>',    
		}"            
     />
     </components-daily-statistic>            
     </div-->     
     
     <div class="position-relative mb-3">
      <components-last-orders
      ref="last_order"
      ajax_url="<?php echo $ajax_url?>"       
      :orders_tab='<?php echo json_encode($orders_tab)?>'
      :limit="<?php echo intval($limit)?>"
      :label="{    
	    title : '<?php echo CJavaScript::quote(t("Last Orders"));?>',    
	    sub_title : '<?php echo CJavaScript::quote(t("Quick management of the last {{limit}} orders", array('{{limit}}'=>$limit) ));?>',    	    
	  }"  
	  @view-customer="viewCustomer"
      >
      </components-last-orders>
      </div>

    <div class="card mb-3">
        <div class="card-body">
            <div class="row">
                <div class="col mb-3 mb-xl-0">
                    <h5 class="m-0">Recent Bakers</h5>
                    <p class="m-0 text-muted">Quick management of the last 5 bakers</p>
                    </div><div class="col"><div class="d-none d-sm-block">
                        <!--<ul class="nav nav-pills justify-content-md-end justify-content-sm-start">-->
                        <!--    <li class="nav-item">-->
                                
                        <!--        <a class="active nav-link py-1 px-3">All</a></li>-->
                        <!--        <li class="nav-item"><a class="nav-link py-1 px-3">Processing</a></li>-->
                        <!--        <li class="nav-item"><a class="nav-link py-1 px-3">Ready</a></li>-->
                        <!--        <li class="nav-item"><a class="nav-link py-1 px-3">Completed</a></li>-->
                        <!--        </ul>-->
                                </div>
                                <div class="d-block d-sm-none text-right">
                                    <div class="dropdown btn-group dropleft">
                                        <button class="btn btn-sm dropdown-togglex dropleft" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                            </button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item active">All</a>
                                                <a class="dropdown-item">Processing</a>
                                                <a class="dropdown-item">Ready</a>
                                                <a class="dropdown-item">Completed</a>
                                                </div></div></div></div></div>
                                                <div class="mt-3 table-orders table-responsive">
                                                    <table class="table"><thead>
                                                        <tr><th class="p-0 mw-200">
                                                        
                                                    </th>
                                                    <th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th></tr></thead>
                                                    <tbody>
                        <?php    $recent=Yii::app()->db->createCommand('
                      SELECT * from st_merchant order by  merchant_id DESC limit 0,5
                        ')->queryAll();
                        
                      foreach($recent as $re){?>
                      
                                                        <tr>
                                                            <td class="pl-0 align-middle">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="mr-2"><!----><!----></div>
                                                                    <div><div><a 
                                                                    href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=d054802b-5b6c-11ed-b019-00163c6ba7cd" 
                                                                    class="font-weight-bold hover-text-primary mb-1">ID #<?php echo $re['merchant_id'];?></a></div>
                                                                    <div><a class="text-muted font-weight-bold hover-text-primary" 
                                                                    href="javascript:;">
                                                                        <?php echo $re['restaurant_name'];?></a></div><div 
                                                                    class="text-muted font11"></div></div></div></td>
                                                                    <td width="15%" class="text-left align-middle"><?php echo $re['contact_email'];?></td>
                                                                   <td width="15%" class="text-left align-middle"><?php echo $re['contact_phone'];?></td>
                                                                        <td>
                                                                            <div><a 
                                                                    href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=d054802b-5b6c-11ed-b019-00163c6ba7cd" 
                                                                    class="font-weight-bold hover-text-primary mb-1"> 
                                          <?php if($re['package_id']=='1' || $re['package_id']=='4'){
                                              ?>
                                              <?php echo 'Premium Membership';?>
                                         <?php } ?>
                                         
                                           <?php if($re['package_id']=='2' || $re['package_id']=='3'){
                                              ?>
                                              <?php echo 'Basic Membership';?>
                                         <?php } ?>
                                               
                                        <?php if($re['package_id']==0){
                                            
                                            
                                        }   ?>                  
                                        </a></div>
                                                                        </td>
                                                                        <td>
                                           <?php if($re['status']=='active'){
                                           ?>
                                          <span class="badge order_status complete"><?php echo $re['status'];?></span> 
                                           
                                           <?php }else{?><span class="badge payment unpaid"><?php echo $re['status'];?></span>
                                           <?php } ?>
                                                                        </td>
                                                                        <td>
             <a href="<?php echo Yii::app()->createUrl("/vendor/edit",array(		  
			'id'=>$re['merchant_id'],				 
		  ));   ?>" class="colgreen btn btn-light tool_tips" 
		  data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
			<i class="zmdi zmdi-border-color"></i>
			</a>
		
                                                                            </td>
                                                                        
                                                                        
                                                                        
                                                                        
                                                                      
                                                                    
                                                          
                                                                    </tr>
                      
                      
                      
                          
                      <?php } ?>
                        
                        </tbody></table></div><!----></div></div>
                        
                        
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col mb-3 mb-xl-0">
                    <h5 class="m-0">Auto Renewals</h5>
                    <p class="m-0 text-muted">Auto Renewals in coming  month</p>
                    </div><div class="col"><div class="d-none d-sm-block">
                     
                                </div>
                                <div class="d-block d-sm-none text-right">
                                    <div class="dropdown btn-group dropleft">
                                        <button class="btn btn-sm dropdown-togglex dropleft" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="zmdi zmdi-more-vert"></i>
                                            </button><div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item active">All</a>
                                                <a class="dropdown-item">Processing</a>
                                                <a class="dropdown-item">Ready</a>
                                                <a class="dropdown-item">Completed</a>
                                                </div></div></div></div></div>
                                                <div class="mt-3 table-orders table-responsive">
                                                    <table class="table"><thead>
                                                        <tr>
                                                   <th class="p-0 mw-200">Baker ID</th>
                                                    <th class="p-0 mw-200">
                                                        Baker Name
                                                    </th>
                                                    <th class="p-0 mw-200">
                                                       Payment Method
                                                    </th>
                                                    <th class="p-0 mw-200">
                                                        Amount
                                                    </th>
                                                     <th class="p-0 mw-200">
                                                        Package Name
                                                    </th>
                                                    <th class="p-0 mw-200">
                                                        Due Date 
                                                    </th>
                                                   </tr></thead>
                                                    <tbody>
                        <?php   
                        
                        $recent1=Yii::app()->db->createCommand('
                        SELECT st_merchant.restaurant_name,st_plans_invoice.*,st_plans.title,st_plans.package_period from  st_plans_invoice 
                        inner join st_merchant 
                        on 
                        st_plans_invoice.merchant_id=st_merchant.merchant_id
                        inner join st_plans
                        on
                        st_plans.package_id=st_plans_invoice.package_id
                        
                        order by  invoice_number DESC limit 0,5
                        ')->queryAll();
                        
                      foreach($recent1 as $re){
                           if($re['package_period']=='anually'){
                                              
                                                 $newDate = date('Y-m-d', strtotime($re['date_created']. ' + 1 year'));
                                               
                                          }else if($re['package_period']=='monthly'){
                                              
                                                 $newDate = date('Y-m-d', strtotime($re['date_created']. ' + 1 months'));
                                               
                                          }           
                         // echo $re['package_period'];
                         // echo  $newDate = date('Y-m-d', strtotime($re['date_created']. ' + 1 months'));
                         $next_month = date('Y-m-d', strtotime('+1 month'));
                         //echo $next_month;
                         //echo date('Ym',strtotime($next_month));
                         
                                $testdate=strtotime($newDate); // this will be converted to 2018-07-01
                                if (date('Ym',strtotime($next_month))==date('Ym', $testdate)) {
                                 $curr=true;
                                } else {
                                $curr=false;
                                }
                                if($curr==true){
                      ;?>
                      
                                                        <tr>
                                                            <td class="pl-0 align-middle"><?php echo $re['invoice_number'];?></td>
                                                                    <td width="15%" class="text-left align-middle"><?php echo $re['restaurant_name'];?></td>
                                                                      <td>
                                         
                                          <span class="badge order_status complete"><?php echo $re['payment_code'];?></span> 
                                           
                                                                        </td>
                                                                   <td width="15%" class="text-left align-middle">$<?php echo $re['amount'];?></td>
                                                                   
                                                                   
                                                                        <td>
                         <div><a 
                                     href="#" 
                                                                    class="font-weight-bold hover-text-primary mb-1"> 
                                          <?php if($re['package_id']=='1' || $re['package_id']=='4'){
                                              ?>
                                              <?php echo 'Premium Membership';?>
                                         <?php } ?>
                                         
                                           <?php if($re['package_id']=='2' || $re['package_id']=='3'){
                                              ?>
                                              <?php echo 'Basic Membership';?>
                                         <?php } ?>
                                               
                                        <?php if($re['package_id']==0){
                                            
                                            
                                        }   ?>                  
                                        </a></div>
                                                                        </td>
                                                                        <td>
                                                                            <?php 
                                          if($re['package_period']=='anually'){
                                              
                                               echo  $newDate = date('Y-m-d', strtotime($re['date_created']. ' + 1 year'));
                                               
                                          }else if($re['package_period']=='monthly'){
                                              
                                               echo  $newDate = date('Y-m-d', strtotime($re['date_created']. ' + 1 months'));
                                               
                                          }                                 
                                                                            
                                                                            ?>
                                                                        </td>
                                                                       
                                                                        
                                      
                                        </tr>
              <?php } } ?>
                        
                        </tbody></table></div><!----></div></div>
      
      <components-customer-details
	  ref="customer"    
	  :client_id="client_id"
	  ajax_url="<?php echo $ajax_url?>"  
	  merchant_id="<?php echo 0?>"  
	  image_placeholder="<?php echo websiteDomain().Yii::app()->theme->baseUrl."/assets/images/placeholder.png"?>"
	  page_limit = "<?php echo Yii::app()->params->list_limit?>"  
	  :label="{
	    block_customer:'<?php echo CJavaScript::quote(t("Block Customer"))?>', 
	    block_content:'<?php echo CJavaScript::quote(t("You are about to block this customer from ordering to your restaurant, click confirm to continue?"))?>',     
	    cancel:'<?php echo CJavaScript::quote(t("Cancel"))?>',     
	    confirm:'<?php echo CJavaScript::quote(t("Confirm"))?>',     
	  }"    
	  >
	  </components-customer-details>
	             
        
      <!--div class="position-relative mb-3">
	    <components-popular-items   
	       ref="popular_items"
	       ajax_url="<?php echo $ajax_url?>"       
	       :limit="<?php echo intval($limit)?>"
	       :item_tab='<?php echo json_encode($item_tab)?>'
	       :label="{    	          
	          sold : '<?php echo CJavaScript::quote(t("Sold"));?>',	          
	       }"  
	    >
	    </components-popular-items>
	  </div-->  
	  
	  <!--div class="position-relative">
	  <components-popular-merchant   
	       ref="popular_merchant"
	       ajax_url="<?php echo $ajax_url?>"       
	       :limit="<?php echo intval($limit)?>"
	       :item_tab='<?php echo json_encode($popular_merchant_tab)?>'
	       :label="{    	          
	          ratings : '<?php echo CJavaScript::quote(t("ratings"));?>',	          
	       }"  
	    >
	    </components-popular-items>
	  </div-->  
 
 </div> <!--col-->
 
 <div class="col-lg-4">
 
   <div class="position-relative">
   <components-chart-sales
   ref="chart"
   ajax_url="<?php echo $ajax_url?>"   
   :months="<?php echo intval($months)?>"
   :label="{    
      sales : '<?php echo CJavaScript::quote(t("sales"));?>',    	    
      sales_overview : '<?php echo CJavaScript::quote(t("Sales overview"));?>',    	        
   }"      
   >
   </components-chart-sales>
   </div>
   
   
   <!--div class="position-relative mb-3">
    <components-popular-customer   
       ref="popular_customer"
       ajax_url="<?php echo $ajax_url?>"       
       :limit="<?php echo intval($limit)?>"
       :label="{    
       title : '<?php echo CJavaScript::quote(t("Top Customers"));?>',    	    
     }"  
     @view-customer="viewCustomer"
    >
    </components-popular-customer>
    </div-->   
 
    <div class="position-relative mb-3">
    <components-latest-review   
       ref="latest_review"
       ajax_url="<?php echo $ajax_url?>"       
       :limit="<?php echo intval($limit)?>"
       :label="{    
          title : '<?php echo CJavaScript::quote(t("Overview of Review"));?>',    	    
          star : '<?php echo CJavaScript::quote(t("Star"));?>',  
          all_review : '<?php echo CJavaScript::quote(t("Checkout All Reviews"));?>',            
     }"       
     @view-customer="viewCustomer"
    >
    </components-latest-review>
    </div>   
    
    <!--div class="position-relative mb-3">
    <components-recent-payout
      ref="recent_payout"
      ajax_url="<?php echo $ajax_url?>"       
      :limit="<?php echo intval($limit)?>"
      :label="{    
          recent_payout : '<?php echo CJavaScript::quote(t("Recent payout"));?>',    	              
     }"       
     @view-payout="viewPayout"
    >
    </components-recent-payout>
    </div>
    
    <components-payout-details
	ref="payout"
	ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 
	:label="{    
	    title : '<?php echo t("Withdrawals Details")?>',
	    close : '<?php echo t("Close")?>',
	    approved : '<?php echo t("Process this payout")?>',
	    cancel_payout : '<?php echo t("Cancel this payout")?>',
	    set_paid : '<?php echo t("Set status to paid")?>',
	  }"  
	@after-save="afterSave"  
	>
	</components-payout-details-->
   
    
 </div> <!--col-->
 
</div> <!--row--> 

</DIV> <!--vue-->

<?php $this->renderPartial("/orders/template_customer_all");?>
<style>
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
            <h5><?php echo t("Total Bakers")?></h5>
            <p ref="summary_merchant">0</p>
          </div>
         <span><i class="zmdi zmdi-cake"></i></span>
      </div>  
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <div class="col col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0"> 
   <div class="rounded-status-report rounded r3">   
   
    <div class="report-inner">
        <div>
            <h5><?php echo t("Total Commission")?></h5>
            <p ref="summary_commission">0</p>
        </div>
          <span><i class="zmdi zmdi-money-box"></i></span>
      </div>  
  
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
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

    <div class="position-relative">
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
     </div>
     
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

    <div class="card">
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
                                                    <table class="table"><thead><tr><th class="p-0 mw-200">
                                                        
                                                    </th>
                                                    <th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th><th class="p-0 mw-200">
                                                        
                                                    </th></tr></thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="pl-0 align-middle">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="mr-2"><!----><!----></div>
                                                                    <div><div><a 
                                                                    href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=d054802b-5b6c-11ed-b019-00163c6ba7cd" 
                                                                    class="font-weight-bold hover-text-primary mb-1">Order #10024</a></div>
                                                                    <div><a class="text-muted font-weight-bold hover-text-primary" 
                                                                    href="javascript:;">Walk-in Customer</a></div><div 
                                                                    class="text-muted font11">Yesterday</div></div></div></td>
                                                                    <td width="15%" class="text-left align-middle">Nick Bakers</td>
                                                                    <td class="text-right align-middle">
                                                                        <span class="font-weight-bold d-block">350.00$</span>
                                                                        <span class="badge payment paid">Paid</span></td><td class="text-right align-middle"><span class="text-muted font-weight-500">Credit/Debit Card</span></td><td class="text-right align-middle"><span class="badge order_status complete">complete</span></td><td class="text-right align-middle pr-0"><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=d054802b-5b6c-11ed-b019-00163c6ba7cd" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3 mr-2"><i class="zmdi zmdi-eye"></i></a><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/preprint/pdf?order_uuid=d054802b-5b6c-11ed-b019-00163c6ba7cd" target="_blank" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3"><i class="zmdi zmdi-download"></i></a></td></tr><tr><td class="pl-0 align-middle"><div class="d-flex align-items-center"><div class="mr-2"><!----><!----></div><div><div><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=b4acbdda-5943-11ed-b019-00163c6ba7cd" class="font-weight-bold hover-text-primary mb-1">Order #10023</a></div><div><a class="text-muted font-weight-bold hover-text-primary" href="javascript:;">Walk-in Customer</a></div><div class="text-muted font11">3 days ago</div></div></div></td><td width="15%" class="text-left align-middle">Nick Bakers</td><td class="text-right align-middle"><span class="font-weight-bold d-block">120.00$</span><span class="badge payment paid">Paid</span></td><td class="text-right align-middle"><span class="text-muted font-weight-500">Credit/Debit Card</span></td><td class="text-right align-middle"><span class="badge order_status complete">complete</span></td><td class="text-right align-middle pr-0"><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=b4acbdda-5943-11ed-b019-00163c6ba7cd" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3 mr-2"><i class="zmdi zmdi-eye"></i></a><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/preprint/pdf?order_uuid=b4acbdda-5943-11ed-b019-00163c6ba7cd" target="_blank" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3"><i class="zmdi zmdi-download"></i></a></td></tr><tr><td class="pl-0 align-middle"><div class="d-flex align-items-center"><div class="mr-2"><!----><div class="blob red"></div></div><div><div><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=7608f503-58e9-11ed-b019-00163c6ba7cd" class="font-weight-bold hover-text-primary mb-1">Order #10022</a></div><div><a class="text-muted font-weight-bold hover-text-primary" href="javascript:;">test1 user</a></div><div class="text-muted font11">4 days ago</div></div></div></td><td width="15%" class="text-left align-middle">Nick Bakers</td><td class="text-right align-middle"><span class="font-weight-bold d-block">123.00$</span><span class="badge payment unpaid">Unpaid</span></td><td class="text-right align-middle"><span class="text-muted font-weight-500">Credit/Debit Card</span></td><td class="text-right align-middle"><span class="badge order_status new">new</span></td><td class="text-right align-middle pr-0"><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=7608f503-58e9-11ed-b019-00163c6ba7cd" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3 mr-2"><i class="zmdi zmdi-eye"></i></a><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/preprint/pdf?order_uuid=7608f503-58e9-11ed-b019-00163c6ba7cd" target="_blank" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3"><i class="zmdi zmdi-download"></i></a></td></tr><tr><td class="pl-0 align-middle"><div class="d-flex align-items-center"><div class="mr-2"><!----><div class="blob red"></div></div><div><div><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=6f62908d-510e-11ed-b019-00163c6ba7cd" class="font-weight-bold hover-text-primary mb-1">Order #10021</a></div><div><a class="text-muted font-weight-bold hover-text-primary" href="javascript:;">test1 user</a></div><div class="text-muted font11">2 weeks ago</div></div></div></td><td width="15%" class="text-left align-middle">Nick Bakers</td><td class="text-right align-middle"><span class="font-weight-bold d-block">120.00$</span><span class="badge payment unpaid">Unpaid</span></td><td class="text-right align-middle"><span class="text-muted font-weight-500">Credit/Debit Card</span></td><td class="text-right align-middle"><span class="badge order_status new">new</span></td><td class="text-right align-middle pr-0"><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=6f62908d-510e-11ed-b019-00163c6ba7cd" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3 mr-2"><i class="zmdi zmdi-eye"></i></a><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/preprint/pdf?order_uuid=6f62908d-510e-11ed-b019-00163c6ba7cd" target="_blank" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3"><i class="zmdi zmdi-download"></i></a></td></tr><tr><td class="pl-0 align-middle"><div class="d-flex align-items-center"><div class="mr-2"><div class="blob green mb-1"></div><div class="blob red"></div></div><div><div><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=cac5d063-5047-11ed-b019-00163c6ba7cd" class="font-weight-bold hover-text-primary mb-1">Order #10020</a></div><div><a class="text-muted font-weight-bold hover-text-primary" href="javascript:;">test1 user</a></div><div class="text-muted font11">2 weeks ago</div></div></div></td><td width="15%" class="text-left align-middle">Cake My Day Bakery</td><td class="text-right align-middle"><span class="font-weight-bold d-block">245.00$</span><span class="badge payment unpaid">Unpaid</span></td><td class="text-right align-middle"><span class="text-muted font-weight-500">Credit/Debit Card</span></td><td class="text-right align-middle"><span class="badge order_status new">new</span></td><td class="text-right align-middle pr-0"><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/order/view?order_uuid=cac5d063-5047-11ed-b019-00163c6ba7cd" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3 mr-2"><i class="zmdi zmdi-eye"></i></a><a href="https://dev.indiit.solutions/your_baking_connection/backoffice/preprint/pdf?order_uuid=cac5d063-5047-11ed-b019-00163c6ba7cd" target="_blank" class="btn btn-sm text-muted btn-light hover-bg-primary hover-text-secondary py-1 px-3"><i class="zmdi zmdi-download"></i></a></td></tr></tbody></table></div><!----></div></div>
      
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
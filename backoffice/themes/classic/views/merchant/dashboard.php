<div class="card boxsha default-tabs tabs-box">
            <div class="card style-2">
               <div class="card-header">
                  <h4 class="mb-0">Reports</h4>
                  <div class="my-or reflex">
                     <div class="form-group">
                        <label class="col-form-label">Start Date</label>
                        <input type="text" class="form-control" placeholder="22-06-2021">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">End Date</label>
                        <input type="text" class="form-control" placeholder="22-06-2022">
                     </div>
                     <div class="export-btn">
                        <a href="" class="btn btn-success addbtn">Export</a>
                     </div>
                  </div>
               </div>
<DIV id="vue-dashboard" class="dashboard-desktopx mt-3">

<div class="row m-0 p-0 ">
     <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
        <div class="card boxsha">
            <div class="card-body">
            <div id="boxes" class="d-flex align-items-center">
            <div class="mr-2"><div class="rounded box box-1 d-flex align-items-center justify-content-center">
            <i class="zmdi zmdi-money-box"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total Orders")?></h6>
            <h6 class="m-0 position-relative" ref="summary_orders">0</h6>
            </div>
            </div>
         </div>
        </div>
    </div>
    <!--     <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">-->
    <!--    <div class="card boxsha">-->
    <!--        <div class="card-body">-->
    <!--        <div id="boxes" class="d-flex align-items-center">-->
    <!--        <div class="mr-2"><div class="rounded box box-2 d-flex align-items-center justify-content-center">-->
    <!--        <i class="zmdi zmdi-money-box"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total Cancel")?></h6>-->
    <!--        <h6 class="m-0 position-relative" ref="summary_cancel">0</h6>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--     </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-6 ">-->
    <!--    <div class="card boxsha">-->
    <!--        <div class="card-body">-->
    <!--        <div id="boxes" class="d-flex align-items-center">-->
    <!--        <div class="mr-2"><div class="rounded box box-3 d-flex align-items-center justify-content-center">-->
    <!--        <i class="zmdi zmdi-money-box"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total refund")?></h6>-->
    <!--        <h6 class="m-0 position-relative" ref="total_refund">0</h6>-->
    <!--        </div>-->
    <!--        </div>-->
    <!--     </div>-->
    <!--    </div>-->
    <!--</div>-->
     <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
        <div class="card boxsha">
            <div class="card-body">
            <div id="boxes" class="d-flex align-items-center">
            <div class="mr-2"><div class="rounded box box-4 d-flex align-items-center justify-content-center">
            <i class="zmdi zmdi-money-box"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total Sales")?></h6>
            <h6 class="m-0 position-relative" ref="summary_total">0</h6>
            </div>
            </div>
         </div>
        </div>
    </div>
<div class="col p-0 col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0 d-none"> 
   <div class="rounded-status-report rounded r1">   
      <div class="report-inner">
        <h5><?php echo t("Total Orders")?></h5>
        <p ref="summary_orders">0</p>
      </div>
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <div class="col p-0 col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0 d-none"> 
   <div class="rounded-status-report rounded r2">   
   
     <div class="report-inner">
        <h5><?php echo t("Total Cancel")?></h5>
        <p ref="summary_cancel">0</p>
      </div>  
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <div class="col p-0 col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0 d-none"> 
   <div class="rounded-status-report rounded r3">   
   
    <div class="report-inner">
        <h5><?php echo t("Total refund")?></h5>
        <p ref="total_refund">0</p>
      </div>  
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
 <div class="col p-0 col-lg-3 col-md-3 col-sm-6 col-6  mb-3 mb-xl-0 d-none"> 
   <div class="rounded-status-report rounded r4">   
   
   
    <div class="report-inner">
        <h5><?php echo t("Total Sales")?></h5>
        <p ref="summary_total">0</p>
      </div> 
   
   </div> <!--rounded-status-report--> 
 </div> <!--col-->
 
</div> <!--row-->


<div class="row mt-3">
   <div class="col-lg-12 mb-3 mb-xl-0 d-none">

 		
      <div class="position-relative mb-3">
      <components-sales-summary
      ref="sales_overview"
      ajax_url="<?php echo $ajax_url?>"  
      merchant_type="<?php echo $merchant_type;?>"
      :label="{    
	    sales_this_week : '<?php echo CJavaScript::quote(t("Sales this week"));?>',    
	    earning_this_week : '<?php echo CJavaScript::quote(t("Earning this week"));?>',    
	    your_balance : '<?php echo CJavaScript::quote(t("Your balance"));?>',    
	  }"       
      >
      </components-sales-summary>
      </div>
 
     <div class="dashboard-statistic position-relative mb-3 ">
     <components-daily-statistic
        ref="daily_statistic"
        ajax_url="<?php echo $ajax_url?>"  
        :label="{    
		    order_received : '<?php echo CJavaScript::quote(t("Order received"));?>',    
		    today_delivered : '<?php echo CJavaScript::quote(t("Today delivered"));?>',    
		    today_sales : '<?php echo CJavaScript::quote(t("Today sales"));?>',    
		    total_refund : '<?php echo CJavaScript::quote(t("Today refund"));?>',    
		}"            
     />
     </components-daily-statistic>            
     </div>     
      
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
  
	 <components-customer-details
	  ref="customer"    
	  :client_id="client_id"
	  ajax_url="<?php echo $ajax_url?>"       
	  merchant_id="<?php echo $merchant_id?>"  
	  image_placeholder="<?php echo websiteDomain().Yii::app()->theme->baseUrl."/assets/images/placeholder.png"?>"
	  page_limit = "<?php echo Yii::app()->params->list_limit?>"  
	  :label="{
	    block_customer:'<?php echo CJavaScript::quote("Block Customer")?>', 
	    block_content:'<?php echo CJavaScript::quote("You are about to block this customer from ordering to your restaurant, click confirm to continue?")?>',     
	    cancel:'<?php echo CJavaScript::quote("Cancel")?>',     
	    confirm:'<?php echo CJavaScript::quote("Confirm")?>',     
	  }"    
	  >
	  </components-customer-details>
   
	  <div class="position-relative">
	    <components-popular-items   
	       ref="popular_items"
	       ajax_url="<?php echo $ajax_url?>"       
	       :limit="<?php echo intval($limit)?>"
	       :item_tab='<?php echo json_encode($item_tab)?>'
	       :label="{    
	          title : '<?php echo CJavaScript::quote(t("Popular items"));?>',    	    
	          sub_title : '<?php echo CJavaScript::quote(t("latest popular items"));?>',  
	          sold : '<?php echo CJavaScript::quote(t("Sold"));?>',  
	       }"  
	    >
	    </components-popular-items>
	  </div>
              
 </div> <!--col-->
 
 <div class="col-lg-12">
 
   
              
   <div class="position-relative titledash">
       <div class="chart-sales">
   <components-chart-sales
   ref="chart"
   ajax_url="<?php echo $ajax_url?>"   
   :months="<?php echo intval($months)?>"
   :label="{    
      sales : '<?php echo CJavaScript::quote(t("sales"));?>',    	    
      sales_overview : '<?php echo CJavaScript::quote(t("Total Sales"));?>',    	        
   }"      
   >
   </components-chart-sales>
</div>
    <div class="tabs-content main-g" style="padding: 20px;">
                  <div class="covrx">
                     <h5 class="m-0 titledash"> Product Sales </h5>
                     <div class="main-dr">
                        <select name="orderbyz" class="sortby-selectz df">
                           <option value="">Yearly</option>
                           <option value="Vanilla">Monthly</option>
                           <option value="chocolate">Weekly</option>
                        </select>
                     </div>
                  </div>
                  <figure class="highcharts-figure">
                     <div id="container"></div>
                  </figure>
               </div>
                   <div class="tabs-content main-g" style="padding: 20px;">
                  <div class="covrx">
                      <h5 class="m-0 titledash"> Sales Tax Report </h5>
                     <div class="main-dr">
                        <select name="orderbyz" class="sortby-selectz df">
                           <option value="">Yearly</option>
                           <option value="Vanilla">Monthly</option>
                           <option value="chocolate">Weekly</option>
                        </select>
                     </div>
                  </div>
                  <figure class="highcharts-figure">
                    <div id="taxreport"></div>
                  </figure>
               </div>
	 
   <div class="position-relative mb-3 d-none">
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
    </div>   
    
    <div class="position-relative mb-3 d-none">
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
 
 </div> <!--col-->
 
</div> <!--row--> 

<!--END SECTION SALES OVER VIEW-->
 

</DIV> <!--vue dashboard-->
</div>
</div>
<?php $this->renderPartial("/orders/template_customer");?>
	<script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/highcharts.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/exporting.js"></script>
		<script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/export-data.js"></script>
	<script>Highcharts.chart('container', {
	  chart: {
			type: 'line'
		  },
		  title: {
			text: ' Product Sales'
		  },
		  
		  xAxis: {
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		  },
		  yAxis: {
			title: {
			  text: 'Values'
			}
		  },
		  plotOptions: {
			line: {
			  dataLabels: {
				enabled: true
			  },
			  enableMouseTracking: false
			}
		  },
		  series: [{
			name: 'French Macaroon',
			data: [100, 60, 50, 40, 50, 60, 70,80, 90, 100, 110, 120]
		  }, {
			name: 'Happy Ninja',
			data: [120, 110, 90, 80, 70, 60, 60, 50, 40, 60, 70,80]
		  },
		  {
			name: 'Hearts Lollipop',
			data: [150, 160, 150, 140, 150, 160, 170,180, 190, 100, 110, 120]
		  }]
		});
	</script> 
	  
  <script>
  	const chart = Highcharts.chart('taxreport', {
	    title: {
	        text: 'Tax Report'
	    },
	    xAxis: {
	        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	    },
	    yAxis: {
	      labels: {
	        formatter: function() {
	          return '$' + this.axis.defaultLabelFormatter.call(this);
	        }
	      },
	        title: {
	          text: 'Tax Amount'
	        }
	    }, 
	    tooltip: {
          formatter: function () {
              return '<b>' + this.series.name + '</b> $' + 
              Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + 
              + Highcharts.numberFormat(this.y, 2);
          }
      },
	    series: [{
	        type: 'column',
	        name:'',
	        colorByPoint: true,
	        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
	        showInLegend: false,
	        tooltip: {
		        valuePrefix: '$'
		      },
	    }]
	});

  </script>
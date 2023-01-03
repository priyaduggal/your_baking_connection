<style>
#vue-order-history .dataTables_wrapper {
    visibility:hidden;
    height:0px;
}
</style>
<!--nav class="navbar navbar-light justify-content-between">
  <a class="navbar-brand">
  <h5><?php echo CHtml::encode($this->pageTitle)?></h5>
  </a>     
</nav-->

<div id="vue-order-history" class="card boxsha default-tabs tabs-box">
    
                       
                         <div class="export-btn">
 <a  href="#" id="btnExport" class="btn btn-success addbtn ml-3">
                           <span>Export</span>
                        </a>
                     
                     </div>
<div class="card style-2">
    <div class="card-header">
     <h4 class="mb-0 mr20"><?php echo CHtml::encode($this->pageTitle)?></h4></div>
    <div class="card-body">
<div class="mb-3">
  
  
  <div class="row  d-none">
   <div class="col">
	  <div class="bg-light p-3 mb-3 rounded">   
	   <div class="d-flex">
        <p class="m-0 mr-2 text-muted text-truncate"><?php echo t("Orders")?></p><h5 ref="summary_orders" class="m-0">0</h5>
       </div>  	  
	  </div><!-- bg-light-->
	</div> <!--col-->
	
	<div class="col">
	  <div class="bg-light p-3 mb-3 rounded">   
	   <div class="d-flex">
        <p class="m-0 mr-2 text-muted text-truncate"><?php echo t("Cancel")?></p><h5 ref="summary_cancel" class="m-0">0</h5>
       </div>  	  
	  </div><!-- bg-light-->
	</div> <!--col-->
	
	<div class="col">
	  <div class="bg-light p-3 mb-3 rounded">   
	   <div class="d-flex">
        <p class="m-0 mr-2 text-muted text-truncate"><?php echo t("Total refund")?></p><h5 ref="total_refund" class="m-0">0</h5>
       </div>  	  
	  </div><!-- bg-light-->
	</div> <!--col-->
	
	<div class="col">
	  <div class="bg-light p-3 mb-3 rounded">   
	   <div class="d-flex">
        <p class="m-0 mr-2 text-muted text-truncate"><?php echo t("Total Orders")?></p><h5 ref="summary_total" class="m-0">0</h5>
       </div>  	  
	  </div><!-- bg-light-->
	</div> <!--col-->
	
  </div> <!--row-->



<components-datatable
ref="datatable"
ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>" 
actions="reportSales"
:table_col='<?php echo json_encode($table_col)?>'
:columns='<?php echo json_encode($columns)?>'
:export="<?php echo true; ?>"
:settings="{
 export:'<?php echo true;?>',
    filter : '<?php echo false;?>',   
    ordering :'<?php echo true;?>',    
    order_col :'<?php echo intval($order_col);?>',   
    sortby :'<?php echo $sortby;?>',    
    placeholder : '<?php echo t("Start date -- End date")?>',  
    separator : '<?php echo t("to")?>',
    all_transaction : '<?php echo t("All transactions")?>',
    searching : '<?php echo t("Searching...")?>',
    no_results : '<?php echo t("No results")?>'
  }"  
page_limit = "<?php echo Yii::app()->params->list_limit?>"  
>
</components-datatable>

</div> <!--mb-3-->

</div> <!--body-->
</div> <!--card-->
</div> <!--card-->

<div class="card boxsha default-tabs tabs-box">
            <div class="card style-2">
               <!--div class="card-header">
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
               </div-->
               
<DIV id="vue-dashboard" class="dashboard-desktopx mt-3">

<div class="row m-0 p-0 ">
     <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
        <div class="card boxsha">
            <div class="card-body">
            <div id="boxes" class="d-flex align-items-center">
            <div class="mr-2"><div class="rounded box box-1 d-flex align-items-center justify-content-center">
            <!--<i class="zmdi zmdi-money-box"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total Orders")?></h6>-->
             <div class="d-flex">
        
       </div>  
            <i class="zmdi zmdi-shopping-cart"></i></div></div><div><h6 class="m-0 text-muted font-weight-normal"><?php echo t("Total Orders")?></h6>
            <h6 class="m-0 position-relative" ref="summary_orders"><?php echo $orders;?></h6>
            
            
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
            <h6 class="m-0 position-relative" ref="summary_total">$<?php echo $total;?></h6>
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
<div id="vue-report-sales-summary" class="card">
<div class="card-body">

<div class="mb-3">
  
<div class="row">
<div class="col"></div>
<div class="col">

  <div class="d-none d-md-block">    
  <ul class="nav nav-pills justify-content-end">			  
	  <li class="nav-item">
    <a href="<?php echo Yii::app()->createUrl("/merchantreport/summary")?>" class="nav-link py-1 px-3">
      <?php echo t("Sales summary")?>
    </a>	    
	  </li>			  
	  <li class="nav-item">
	    <a class="nav-link py-1 px-3 active">
      <?php echo t("Sales chart")?></a>	    
	  </li>			  
  </ul>
  </div>

  <div class="d-block d-md-none text-right">
     <div class="dropdown btn-group dropleft">
		      <button class="btn btn-sm dropdown-togglex dropleft" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		       <i class="zmdi zmdi-more-vert"></i>
		     </button>
         <div class="dropdown-menu dropdown-menu-mobile" aria-labelledby="dropdownMenuButton">
             <a class="dropdown-item" href="<?php echo Yii::app()->createUrl("/merchantreport/summary")?>">
               <?php echo t("Sales Summary")?>
              </a>
             <a class="dropdown-item active" >
              <?php echo t("Sales chart")?>
             </a>
         </div>         
       </div> 
  </div>
 
</div>
</div>  
<!--row-->	


<div class="position-relative m-5">
<components-report-sales-summary-chart
ref="report_summary_chart"
ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>" 
:label="{    
    sold : '<?php echo t("Sold")?>'
  }"  
>
</components-report-sales-summary-chart>
</div>

</div> <!--mb-3-->

</div> <!--body-->
</div> <!--card-->
    <!--div class="tabs-content main-g" style="padding: 20px;">
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
               </div-->
                   <!--div class="tabs-content main-g" style="padding: 20px;">
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
               </div-->
	 
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
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
    $( document ).ready(function() {
    
       $('body').on('click','#btnExport',function(){
           
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('DataTables_Table_0'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11    
    sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
});
    });
</script>
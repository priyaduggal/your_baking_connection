<!--nav class="navbar navbar-light justify-content-between">
  <a class="navbar-brand">
  <h5><?php //echo CHtml::encode($this->pageTitle)?></h5>
  </a>     
</nav-->
<style>
    #vue-order-history .filterorder {
    right: 52px;
}
</style>
<iframe id="txtArea1" style="display:none"></iframe>
<div class="row "><div id="buttons"></div>
               <div class="col-md-12">
                  <div class="text-right">
                     <div class="form-group d-flex justify-content-end">
                        <a  href="<?php echo Yii::app()->createUrl('/pos/create_order')?>" class="btn btn-success addbtn">
                           <span>Create Order</span>
                        </a>
                        
                         <a  href="#" id="btnExport" class="btn btn-success addbtn ml-3">
                           <span>Export</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
<a class="tab-btn" href="<?php echo Yii::app()->createUrl('/orders/calender')?>"><i class="fa fa-calendar" aria-hidden="true"></i></a>
<div id="vue-order-history" class="card boxsha default-tabs tabs-box">
    <div class="card style-2">
    <div class="card-header">
        <h4 class="mb-0 mr20">Orders</h4>
    </div>
<div class="card-body">

<div class="mb-3">
  
  
  <div class="row d-none">
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
actions="orderHistory"
:table_col='<?php echo json_encode($table_col)?>'
:columns='<?php echo json_encode($columns)?>'
:filter="<?php echo true; ?>"
:export="<?php echo true; ?>"
:settings="{
    filter : '<?php echo false;?>',
    export:'<?php echo true;?>',
    dom: 'Bfrtip',
    buttons: 'copyHtml5',
    ordering :'<?php echo true;?>',    
    order_col :'<?php echo intval($order_col);?>',   
    sortby :'<?php echo $sortby;?>', 
    placeholder : '<?php echo t("Start date -- End date")?>',  
    separator : '<?php echo t("to")?>',
    all_transaction : '<?php echo t("All transactions")?>',
    searching : '<?php echo t("Searching...")?>',
    no_results : '<?php echo t("No results")?>',
    filters : '<?php echo t("Filters")?>',
    delete_confirmation : '<?php echo t("Delete Confirmation")?>',
    are_your_sure : '<?php echo t("Are you sure you want to permanently delete the selected item?")?>',
    cancel : '<?php echo t("Cancel")?>',
    delete : '<?php echo t("Delete")?>',
  }"  
page_limit = "<?php echo Yii::app()->params->list_limit?>"  
>
</components-datatable>

</div> <!--mb-3-->

</div> <!--body-->
</div> <!--card-->

</div> <!--card-->
<?php $this->renderPartial("/orders/template-filter");?>
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
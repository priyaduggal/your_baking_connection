<!--nav class="navbar navbar-light justify-content-between">
  <a class="navbar-brand">
  <h5><?php //echo CHtml::encode($this->pageTitle)?></h5>
  </a>     
</nav-->

<style>
    #DataTables_Table_0 thead tr th:nth-last-child(2) {
        min-width: 373px !important;
    }

    #DataTables_Table_0 thead tr th:nth-last-child(5) {
        min-width: 150px !important;
    }

</style>

<div id="vue-tables" class="custom_order card boxsha default-tabs tabs-box">
    <div class="card style-2">
<div class="card-header">
<h4 class="mb-0 mr20"><?php echo CHtml::encode($this->pageTitle)?></h4>
</div>
<div class="card-body">

<div class="mb-3 postordertable">
 
<components-datatable
ref="datatable"
ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>" 
actions="PosHistory"
:table_col='<?php echo json_encode($table_col)?>'
:columns='<?php echo json_encode($columns)?>'
:filter="<?php echo true; ?>"
:settings="{
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
</div> 
<?php $this->renderPartial("/orders/template-filter");?>
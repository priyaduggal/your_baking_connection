<!--nav class="navbar navbar-light justify-content-between">
  <a class="navbar-brand">
  <h5><?php //echo CHtml::encode($this->pageTitle)?></h5>
  </a>     
</nav-->
<div class="card boxsha all_notifications">
               <div class="card style-2">
                  <div class="card-header">
                     <h4 class="mb-0"><?php echo CHtml::encode($this->pageTitle)?></h4>
                  </div>
                  <div class="card-body ">
<div id="vue-commission-statement" >
<div class="">
<components-datatable
ref="datatable"
ajax_url="<?php echo isset($ajax_url)?$ajax_url:Yii::app()->createUrl("/api")?>" 
actions="allNotifications"
:table_col='<?php echo json_encode($table_col)?>'
:columns='<?php echo json_encode($columns)?>'
:date_filter='<?php echo true;?>'
:settings="{
    auto_load : '<?php echo true;?>',
    filter : '<?php echo false;?>',   
    ordering :'<?php echo false;?>',  
    order_col :'<?php echo intval($order_col);?>',   
    sortby :'<?php echo $sortby;?>',     
    placeholder : '<?php echo t("Start date -- End date")?>',  
    separator : '<?php echo t("to")?>',
    all_transaction : '<?php echo t("All transactions")?>'
  }"  
page_limit = "<?php echo Yii::app()->params->list_limit?>"  
>
</components-datatable>


</div> <!--card body-->
</div> <!--card-->
</div>
</div>
</div>
<nav class="navbar navbar-light justify-content-between">
<?php
$this->widget('zii.widgets.CBreadcrumbs', 
array(
'links'=>$links,
'homeLink'=>false,
'separator'=>'<span class="separator">
<i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>'
));
?>
</nav>

<div class="row mb-1">
    <div class="col">
        <h4 class="m-0"><?php echo t("Details")?></h4>
    </div>
    <div class="col text-right">

    <div class="dropdown dropleft">
        <a class="rounded-pill rounded-button-icon d-inline-block bg-primary" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="zmdi zmdi-more" style="color: #fff;"></i>
        </a>
    
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">			  
           <a class="dropdown-item" href="<?php echo Yii::app()->CreateUrl("/invoice/pdf",['invoice_uuid'=>$model->invoice_uuid]);?>" ><?php echo t("Download PDF")?></a>						    
           <?php if($model->payment_status=="unpaid"):?>
           <a class="dropdown-item" href="<?php echo Yii::app()->CreateUrl("/invoice/cancel",['invoice_uuid'=>$model->invoice_uuid]);?>" ><?php echo t("Cancel")?></a>						    
           <?php endif;?>
           <a class="dropdown-item" href="<?php echo Yii::app()->CreateUrl("/invoice/update",['invoice_uuid'=>$model->invoice_uuid]);?>" ><?php echo t("Edit")?></a>						    
           <a class="dropdown-item" href="<?php echo Yii::app()->CreateUrl("/invoice/delete",['invoice_uuid'=>$model->invoice_uuid]);?>" ><?php echo t("Delete")?></a>						    
        </div>
    </div>

    </div>
</div>
<!-- row -->

<div class="row align-items-start">
    <div class="col">
<div class="card">
    <div class="card-body">
    
     <div class="row">
        <div class="col">
            <p class="m-0"><?php echo t("Invoice No#: {invoice_number}",['{invoice_number}'=>$model->invoice_number])?></p>
            <p class="m-0"><?php echo t("Invoice Date : {invoice_created}",['{invoice_created}'=> Date_Formatter::date($model->invoice_created) ])?></p>
            <p class="m-0"><?php echo t("Due Date : {due_date}",['{due_date}'=> Date_Formatter::date($model->due_date) ])?></p>            
        </div>
        <div class="col text-right">
            <h5 class="m-0 p-0"><span class="badge payment <?php echo $model->payment_status;?>"><?php echo strtoupper($model->payment_status)?></span></h5>
            <h4 class="m-0"><?php echo Price_Formatter::formatNumber( ($model->invoice_total-$model->amount_paid) ) ?></h4>            
            <?php if($is_due):?>
              <div class="text-warning bold"><i class="zmdi zmdi-info"></i> <?php echo t("OVERDUE")?></div>
            <?php else :?>
              <div class="text-warning bold"><?php echo t("AMOUNT DUE")?></div>
            <?php endif?>
        </div>
     </div>
     <!-- row -->

     <div>
       <h5 class="m-0"><?php echo t("BILL TO")?></h5>
       <p class="m-0"><?php echo CHtml::encode($model->restaurant_name)?></p>
       <p class="m-0"><?php echo CHtml::encode($model->business_address)?></p>
     </div>

     <table class="table mt-3">
        <thead class="thead-light">
            <tr>
                <th><?php echo t("Description")?></th>
                <th class="text-right pr-4"><?php echo t("Total")?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo t("Commission ({from} - {to})",[
                            '{from}'=>Date_Formatter::date($model->date_from,"dd MMM yyyy",true),
                            '{to}'=>Date_Formatter::date($model->date_to,"dd MMM yyyy",true),
                ]);?></td>
                <td class="text-right pr-4"><?php echo Price_Formatter::formatNumber($model->invoice_total)?></td>
            </tr>
            <tr>
                <td colspan="2" class="text-right"> 
                    <table class="table" style="width: 50%;margin-left:auto;padding:0;">
                        <tbody>
                            <tr>
                                <td style="border-top: 0px;"><?php echo t("Sub total")?></td>
                                <td style="border-top: 0px;"><?php echo Price_Formatter::formatNumber($model->invoice_total)?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold"><?php echo t("TOTAL")?></td>
                                <td><?php echo Price_Formatter::formatNumber($model->invoice_total)?></td>
                            </tr>
                            <tr>
                                <td><?php echo t("Amount paid")?></td>
                                <td><?php echo Price_Formatter::formatNumber($model->amount_paid)?></td>
                            </tr>
                            <tr>
                                <td class="font-weight-bold"><?php echo t("AMOUNT DUE")?></td>
                                <td><?php echo Price_Formatter::formatNumber( ($model->invoice_total-$model->amount_paid) ) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
     </table>

    </div>
    <!-- card-body -->
</div>
<!-- card -->
</div> 
<!-- col -->

<div class="col-3" style="padding-left:5px;padding-right:10px;">
   <div class="card border">
     <div class="card-body">
        <h5 class="card-title row">
            <div class="col"><?php echo t("Balance Due")?></div>
            <div class="col-5 text-right">
              <?php echo Price_Formatter::formatNumber( ($model->invoice_total-$model->amount_paid) ) ?>
            </div>
        </h5>        
     </div>
   </div>
   <!-- card -->

   <div class="p-2"></div>

   <div class="card border">
     <div class="card-body">
        <h5 class="card-title"><?php echo t("Invoice activity")?></h5>

        <div class="pre-scrollable" style="max-height: 40vh">
        <?php if(is_array($history) && count($history)>=1):?>
        <ul class="m-0 p-1">
            <?php foreach ($history as $items):?>
            <li class="mb-2">
                <div class="badge"><?php echo Date_Formatter::dateTime($items->meta_value2,"dd MMM yyyy h:mm a",true)?></div>
                <p class="m-0"><?php echo $items->meta_value1?></p>
            </li>            
            <?php endforeach;?>
        </ul>
        <?php endif?>
        </div>
     </div>
   </div>
   <!-- card -->

   <div class="p-2"></div>
   
   <div class="card border">
     <div class="card-body">
        <h5 class="card-title"><?php echo t("Payment activity")?></h5>

        <div class="pre-scrollable" style="max-height: 40vh">
        <?php if(is_array($payment_history) && count($payment_history)>=1):?>
        <ul class="m-0 p-1">
            <?php foreach ($payment_history as $items):?>
            <li class="mb-2">
                <div class="badge"><?php echo Date_Formatter::dateTime($items->date_created,"dd MMM yyyy h:mm a",true)?></div>
                <a target="_blank" href="<?php echo Yii::app()->CreateUrl("/invoice/bank_deposit_view",['id'=>$items->deposit_uuid])?>" target="_blank">
                <p class="m-0" ><?php echo  t("Bank deposit reference#{reference_number}",['{reference_number}'=>$items->reference_number]) ?></p>
                </a>
            </li>            
            <?php endforeach;?>
        </ul>
        <?php endif?>
        </div>
     </div>
   </div>
   <!-- card -->

</div>        
<!-- col -->
</div> 
<!-- row -->
<div class="card boxsha default-tabs tabs-box">
    <div class="card style-2">
<?php $this->renderPartial("/tpl/search-form",array(
 'link'=>isset($link)?$link:''
))?>

<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_datatables",
  'class'=>"frm_datatables",
  'onsubmit'=>"return false;"
)); 
?> 

<div class="table-responsive-md">
<table class="ktables_list table_datatables table ">
<thead>
<tr>
<!--<th width="10%"><?php echo t("#")?></th>-->
<th width="30%"><?php echo t("Name")?></th>
<th width="15%"><?php echo t("Actions")?></th>
</tr>
</thead>
<tbody></tbody>
</table>
</div>
</div>
</div>
</div>
<?php echo CHtml::endForm(); ?>

<?php $this->renderPartial("/admin/modal_delete");?>

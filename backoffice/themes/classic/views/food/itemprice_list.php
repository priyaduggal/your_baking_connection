<style>
.addbtn,.datatables_delete,#frm_search{
    display:none;
    }
    
</style>
<?php $this->renderPartial("/tpl/search-form",array(
 'link'=>isset($link)?$link:''
))?>

<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_datatables",
  'class'=>"frm_datatables",
  'onsubmit'=>"return false;"
));
echo CHtml::hiddenField('item_id',$model->item_id); 
?> 

<div class="table-responsive-md">
<table class="ktables_list table_datatables table">
<thead>
<tr>
<th width="25%"><?php echo t("Price")?></th>
<th width="20%"><?php echo t("Cost Price")?></th>
<th width="15%"><?php echo t("Actions")?></th>
</tr>
</thead>
<tbody></tbody>
</table>
</div>

<?php echo CHtml::endForm(); ?>

<?php $this->renderPartial("/admin/modal_delete");?>
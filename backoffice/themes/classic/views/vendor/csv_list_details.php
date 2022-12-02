<nav class="navbar navbar-light justify-content-between">
<?php
$this->widget('zii.widgets.CBreadcrumbs', $links);
?>
</nav>
    
<!--SEARCH -->
<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_search",
  'class'=>"form-inline justify-content-end frm_search mb-2",
  'onsubmit'=>"return false;"
)); 
?> 

<div class="input-group rounded">
  <input type="search" class="form-control rounded search w-25" placeholder="<?php echo t("Search")?>" required  />
  <button type="submit" class="submit input-group-text border-0 ml-2">
    <i class="zmdi zmdi-search"></i>
  </button>
   <button type="button" class="input-group-text border-0 ml-2 btn-black search_close" >
    <i class="zmdi zmdi-close"></i>
    </button>
</div> <!--input-group-->

<?php echo CHtml::endForm(); ?>
<!--END SEARCH -->

<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_datatables",
  'class'=>"frm_datatables",
  'onsubmit'=>"return false;"
)); 
echo CHtml::hiddenField('id',$id);
?> 

<table class="ktables_list table_datatables">
<thead>
<tr>
<th width="10%"><?php echo t("#")?></th>
<th width="15%"><?php echo t("Name")?></th>
<th width="25%"><?php echo t("Address")?></th>
<th width="15%"><?php echo t("Charge Type")?></th>
</tr>
</thead>

<tbody></tbody>

</table>

<?php echo CHtml::endForm(); ?>

<?php $this->renderPartial("/admin/modal_delete");?>
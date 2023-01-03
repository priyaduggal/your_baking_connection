<style>
#frm_search{
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
?>
<div class="table-responsive-md">
  <table id="datatables" class="datatables ktables_list table_datatables table_review">
    <thead>
      <tr>
        <th width="10%"><?php echo t("#")?></th>
        <th width="30%"><?php echo t("Item Name")?></th>
        <th width="30%"><?php echo t("Stock Avaiable")?></th>
        <th width="30%"><?php echo t("Status")?></th>
        <th width="15%"><?php echo t("Actions")?></th>
      </tr>
    </thead>
    <?php 
    $data=Yii::app()->db->createCommand('SELECT * FROM `st_item` where merchant_id='.Yii::app()->merchant->merchant_id.' and status="publish" and type="0"
           ')->queryAll(); 	
       foreach($data as $s){    
                    $in_count=Yii::app()->db->createCommand('SELECT sum(stock) as sum FROM st_inventory where item_id='.$s['item_id'].' and stock_type="in"')->queryAll();
                if(isset($in_count) && count($in_count)>0){
                    $in=$in_count[0]['sum'];
                    if($in==null){
                        $in=0;
                    }
                }else{
                    $in=0;
                }
                
             $out_count=Yii::app()->db->createCommand('SELECT sum(stock) as sum FROM st_inventory where item_id='.$s['item_id'].' and stock_type="out"')->queryAll();
                if(isset($out_count) && count($out_count)>0){
                    $out=$out_count[0]['sum'];
                     if($out==null){
                        $out=0;
                    }
                }else{
                    $out=0;
                }
            
            $diff=intval($in)-intval($out);
           
           
          ?>
          <tr>
              <td>#<?php echo $s['item_id'];?></td>
              <td><?php echo $s['item_name'];?></td>
              <td><?php echo $diff;?></td>
              <td><?php if($diff>0){
                echo '<span class="badge payment paid ">Available</span>';
                  }else{
                echo '<span class="badge payment unpaid ">Out of Stock</span>';
                     } ?>
                </td>
                <td>
                <?php if($diff>0){
                 echo '<a class="btn btn-primary btn-lg btn-theme tool_tips"
                 href="'.Yii::app()->createUrl('/merchant/addStock',array('item_id'=>$s['item_id'])).'">Add Stock</a>';
                }else{
                echo '<a class="btn btn-primary btn-lg btn-theme tool_tips"
                 href="'.Yii::app()->createUrl('/merchant/addStock',array('item_id'=>$s['item_id'])).'">Add Stock</a>';
                } ?>
                </td>
                      
          </tr>
          <?php } ?>
    
  <tbody></tbody>
</table>
</div>
<?php echo CHtml::endForm(); ?>
<?php $this->renderPartial("/admin/modal_delete");?>
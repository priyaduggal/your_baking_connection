<div class="card-header d-flex justify-content-between  align-items-center">
  <!--a class="navbar-brand">
  <h5><?php //echo CHtml::encode($this->pageTitle)?></h5>
  </a-->
 <h4 class="mb-0"><?php echo CHtml::encode($this->pageTitle)?></h4>
  <?php if(isset($link)):?>
  <?php if(!empty($link)):?> 
    <div class="d-flex flex-row justify-content-end align-items-center">
	  <div class="">  
	  <a type="button" class="btn btn-success addbtn" 
	  href="<?php echo $link?>">
	  <?php echo t("Add New")?>
	  </a>  
	  </div>
	  <!--div class="p-2"><h5 class="m-0"><?php //echo t("Add new")?></h5></div-->
	</div> <!--flex-->     
  <?php endif;?>
 <?php endif;?>	 
</div>  
   <div class="card-body"> 
<!--SEARCH -->
<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_search",
  'class'=>"form-inline justify-content-end frm_search mb-2",
  'onsubmit'=>"return false;"
)); 
?> 

<div class="input-group rounded">
  <input type="search" class="form-control rounded search w-25" placeholder="<?php echo t("Search")?>" required  />
  <button type="submit" class="submit input-group-text border-0 ml-2 normal">
    <i class="zmdi zmdi-search"></i>
  </button>
   <button type="button" class="input-group-text border-0 ml-2 btn-black normal search_close" >
    <i class="zmdi zmdi-close"></i>
    </button>
</div> <!--input-group-->

<?php echo CHtml::endForm(); ?>
<!--END SEARCH -->
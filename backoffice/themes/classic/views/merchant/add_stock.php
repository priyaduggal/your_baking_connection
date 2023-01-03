<nav class="navbar navbar-light justify-content-between">
<?php
$this->widget('zii.widgets.CBreadcrumbs', 
array(
'links'=>isset($links)?$links:array(),
'homeLink'=>false,
'separator'=>'<span class="separator">
<i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>'
));
?>
</nav>

  
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>

<div class="card">
  <div class="card-body">

<?php if(Yii::app()->user->hasFlash('success')): ?>
	<div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif;?>

<?php if(Yii::app()->user->hasFlash('error')): ?>
	<div class="alert alert-danger">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif;?>

<div class="row">
 
 <div class="col-md-12">  
 <label>Add Stock</label>
	<div class="form-label-group">    
	  <input type="text" class="form-control" placeholder="Enter Stock " name="stock" id="stock" required>
	  	
	</div>
 </div> <!--col-->
 
</div> <!--row-->



<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>

$( document ).ready(function() {
$('input[name="stock"]').keyup(function(e)
{
console.log(this.value);
if($('#stock').val()=='0'){
   
    this.value = this.value.replace('0', '');
}
  if (/\D/g.test(this.value))
  {

    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }
});
});

</script>

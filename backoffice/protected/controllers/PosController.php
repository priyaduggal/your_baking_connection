<?php
class PosController extends Commonmerchant
{
		
	public function beforeAction($action)
	{				
		$this->layout = 'backend_merchant_orders';
		InlineCSTools::registerStatusCSS();
		InlineCSTools::registerOrder_StatusCSS();
		InlineCSTools::registerServicesCSS();		
		return true;
	}
	
	public function actioncreate_order()
	{				
		$this->render("//pos/create_order",array(
		   'ajax_url'=>Yii::app()->createUrl("/apibackend"),
		   'merchant_id'=>Yii::app()->merchant->merchant_id,
		   'view_admin'=>false,
		   'responsive'=>AttributesTools::CategoryResponsiveSettings('half'),
		));
	}
	
	public function actionorders()
	{
				
		$this->layout = 'backend_merchant';
		$this->pageTitle = t(" Custom Order Request List");
		
		$table_col = array(
		 'date'=>array(
		    'label'=>t("Date"),
		    //'width'=>'8%'
		  ),
		     'logo'=>array(
		    'label'=>'Image',
		    //'width'=>'8%'
		  ),
		  /*'order_id'=>array(
		    'label'=>t("Order ID"),
		    'width'=>'8%'
		  ),*/
		  'client_id'=>array(
		    'label'=>t("Name"),
		   // 'width'=>'15%'
		  ),
		 'email'=>array(
		    'label'=>t("Email"),
		   // 'width'=>'15%'
		  ),
		   'phoneno'=>array(
		    'label'=>t("Phone Number"),
		    //'width'=>'15%'
		  ),
		   'fulfillmentdate'=>array(
		    'label'=>t("Requested Fulfillment Date"),
		   // 'width'=>'15%'
		  ),
		  'occasion'=>array(
		    'label'=>t("Occasion"),
		    //'width'=>'15%'
		  ),
		  'requestedquantity'=>array(
		    'label'=>t("Requested Quantity"),
		   // 'width'=>'15%'
		  ),
		 'requesteddetails'=>array(
		    'label'=>t("Request Details (product, colors, flavors and any other specific details)"),
		    'width'=>'380px'
		  ),  
		  /*'status'=>array(
		    'label'=>t("Order Information"),
		    'width'=>'25%'
		  ),*/
		  'order_uuid'=>array(
		    'label'=>t("Actions"),
		    //'width'=>'10%'
		  ),
		);
		$columns = array(
		    array('data'=>'date'),
		     array('data'=>'logo','orderable'=>false),
		  //array('data'=>'order_id'),
		  array('data'=>'client_id','orderable'=>false),
		  array('data'=>'email','orderable'=>false),
		  array('data'=>'phoneno','orderable'=>false),
		  array('data'=>'fulfillmentdate','orderable'=>false),
		  array('data'=>'occasion','orderable'=>false),
		  array('data'=>'requestedquantity','orderable'=>false),
		  array('data'=>'requesteddetails','orderable'=>false),
		  //array('data'=>'status','orderable'=>false),		  
		  array('data'=>'order_uuid','orderable'=>false),		  
		);				
		
		$this->render("post-order-list",array(
		  'table_col'=>$table_col,
		  'columns'=>$columns,		
		  'order_col'=>1,
          'sortby'=>'desc',  
		));
	}
	
} 
/*end class*/
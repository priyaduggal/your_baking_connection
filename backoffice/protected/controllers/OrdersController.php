<?php
class OrdersController extends Commonmerchant
{
		
	public function beforeAction($action)
	{				
		
		$this->layout = 'backend_merchant_orders';	
		InlineCSTools::registerStatusCSS();
		InlineCSTools::registerOrder_StatusCSS();
		InlineCSTools::registerServicesCSS();
			
		return true;
	}
	
	public function actionIndex()
	{	
		$this->redirect(array("/orderfood/list"));
	}	
	
	public function actionNew()
	{
		$this->pageTitle = t("New Orders");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
			
		$group_name = 'new_order';
		$status = AOrders::getOrderTabsStatus($group_name);
		
		$manual_status = isset(Yii::app()->params['settings']['enabled_manual_status'])?Yii::app()->params['settings']['enabled_manual_status']:false;
						
		$this->render("list",array(
		  'status'=>$status,
		  'show_critical'=>true,
		  'heading'=>t("Orders as of today {{date}}",array('{{date}}'=> Date_Formatter::date(date("c"),"EEEE, MMM dd yyyy") )),
		  'title'=>t("New Orders"),
		  'group_name'=>$group_name,
		  'manual_status'=>$manual_status,
		  'modify_order'=>true,
		  'view_admin'=>false,
		  'enabled_delay_order'=>true,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')
		));
	}
	
	public function actionprocessing()
	{
		$this->pageTitle = t("Orders Processing");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
			
		$group_name = 'order_processing';
		$status = AOrders::getOrderTabsStatus($group_name);	
		$manual_status = isset(Yii::app()->params['settings']['enabled_manual_status'])?Yii::app()->params['settings']['enabled_manual_status']:false;
						
		$this->render("list",array(
		  'status'=>$status,
		  'show_critical'=>true,
		  'heading'=>t("Orders as of today [date]",array('[date]'=> Date_Formatter::date(date("c"),"EEEE MMM dd yyyy") )),
		  'title'=>t("Orders Processing"),
		  'group_name'=>$group_name,
		  'manual_status'=>$manual_status,
		  'modify_order'=>false,
		  'view_admin'=>false,
		  'enabled_delay_order'=>true,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')
		));
	}

	public function actioncalender(){
	    
	  $this->layout = 'backend_merchant';	
		$this->pageTitle = t("Order history");
		
		$table_col = array(
		 'client_id'=>array(
		    'label'=>t("Customer"),
		    'width'=>'20%'
		  ),
		  'order_id'=>array(
		    'label'=>t("Order ID"),
		    'width'=>'15%'
		  ),
		  
			  'Fulfillment_Date'=>array(
		    'label'=>t("Order Date	"),
		    'width'=>'25%'
		  ),
		   'Fulfillment_Date1'=>array(
		    'label'=>t("Fulfillment Date"),
		    'width'=>'15%'
		  ),
		  'status'=>array(
		    'label'=>t("Status"),
		    'width'=>'15%'
		  ),
		   'items'=>array(
		    'label'=>t("Items"),
		    'width'=>'15%'
		  ),
	
		  'order_uuid'=>array(
		    'label'=>t("Action"),
		    'width'=>'10%'
		  ),
		);
		$columns = array(
		  //array('data'=>'logo','orderable'=>false),
		   array('data'=>'client_id','orderable'=>false),
		   array('data'=>'order_id'),
		  
		   array('data'=>'Fulfillment_Date','orderable'=>false),	
		    array('data'=>'Fulfillment_Date1','orderable'=>false),	
		   
		  array('data'=>'status','orderable'=>false),
		  array('data'=>'items','orderable'=>false),	
		  	 
		  	  
		  array('data'=>'order_uuid','orderable'=>false),		  
		 
		);				
		
		$this->render("calender",array(
		  'table_col'=>$table_col,
		  'columns'=>$columns,		
		  'order_col'=>1,
          'sortby'=>'desc',  
		));
	    
	}
	public function actionready()
	{
		$this->pageTitle = t("Orders Ready");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
			
		$group_name = 'order_ready';
		$status = AOrders::getOrderTabsStatus($group_name);	
		$manual_status = isset(Yii::app()->params['settings']['enabled_manual_status'])?Yii::app()->params['settings']['enabled_manual_status']:false;
						
		$this->render("list",array(
		  'status'=>$status,
		  'show_critical'=>true,
		  'heading'=>t("Orders as of today [date]",array('[date]'=> Date_Formatter::date(date("c"),"EEEE MMM dd yyyy") )),
		  'title'=>t("Orders Ready"),
		  'group_name'=>$group_name,
		  'manual_status'=>$manual_status,
		  'modify_order'=>false,
		  'filter_buttons'=>true,
		  'view_admin'=>false,
		  'enabled_delay_order'=>true,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')
		));
	}
	
	public function actioncompleted()
	{
		$this->pageTitle = t("Completed Today");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
			
		$group_name = 'completed_today';
		$status = AOrders::getOrderTabsStatus($group_name);	
		$manual_status = isset(Yii::app()->params['settings']['enabled_manual_status'])?Yii::app()->params['settings']['enabled_manual_status']:false;
						
		$this->render("list",array(
		  'status'=>$status,
		  'show_critical'=>false,
		  'heading'=>t("Orders completed as of today [date]",array('[date]'=> Date_Formatter::date(date("c"),"EEEE MMM dd yyyy") )),
		  'title'=>t("Completed Today"),
		  'group_name'=>$group_name,
		  'manual_status'=>$manual_status,
		  'modify_order'=>false,		
		  'view_admin'=>false,
		  'enabled_delay_order'=>false,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')
		));
	}
	
	public function actionscheduled()
	{
		$this->pageTitle = t("Scheduled Orders");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
			
		$group_name = 'new_order';
		$status = AOrders::getOrderTabsStatus($group_name);	
		$manual_status = isset(Yii::app()->params['settings']['enabled_manual_status'])?Yii::app()->params['settings']['enabled_manual_status']:false;
						
		$this->render("list",array(
		  'status'=>$status,
		  'show_critical'=>false,
		  'heading'=>t("Orders scheduled as of today [date]",array('[date]'=> Date_Formatter::date(date("c"),"EEEE MMM dd yyyy") )),
		  'title'=>t("Completed Today"),
		  'group_name'=>$group_name,
		  'manual_status'=>$manual_status,
		  'modify_order'=>false,
		  'schedule'=>true,
		  'enabled_delay_order'=>false,
		  'view_admin'=>false,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')
		));
	}
	
	public function actionview()
	{		
		$this->layout = 'backend_merchant';	
		$this->pageTitle = t("Order Details");		
		CommonUtility::setMenuActive('.merchant_orders','.merchant_all_order');		
		$order_uuid = Yii::app()->input->get('order_uuid'); 
		$ajax_url = Yii::app()->createUrl("/apibackend");
		ScriptUtility::registerScript(array(
		  "var _order_uuid='$order_uuid';",		  
		  "var _ajax_url='$ajax_url';",	
		),'order_uuid');
				
		$this->render('order-view',array(		  
		  'order_uuid'=>$order_uuid,
		  'merchant_id'=>Yii::app()->merchant->merchant_id,
		  'ajax_url'=>Yii::app()->createUrl("/apibackend"),
		  'view_admin'=>false,
		  'responsive'=>AttributesTools::CategoryResponsiveSettings('full')		  
		));
		
	}
	
	public function actionhistory()
	{
		$this->layout = 'backend_merchant';	
		$this->pageTitle = t("Order history");
		
		$table_col = array(
		 'client_id'=>array(
		    'label'=>t("Customer"),
		    'width'=>'20%'
		  ),
		  'order_id'=>array(
		    'label'=>t("Order ID"),
		    'width'=>'15%'
		  ),
		  
			  'Fulfillment_Date'=>array(
		    'label'=>t("Order Date	"),
		    'width'=>'25%'
		  ),
		   'Fulfillment_Date1'=>array(
		    'label'=>t("Fulfillment Date"),
		    'width'=>'15%'
		  ),
		  'status'=>array(
		    'label'=>t("Status"),
		    'width'=>'15%'
		  ),
		   'items'=>array(
		    'label'=>t("Items"),
		    'width'=>'15%'
		  ),
	
		  'order_uuid'=>array(
		    'label'=>t("Action"),
		    'width'=>'10%'
		  ),
		);
		$columns = array(
		  //array('data'=>'logo','orderable'=>false),
		   array('data'=>'client_id','orderable'=>false),
		   array('data'=>'order_id'),
		  
		   array('data'=>'Fulfillment_Date','orderable'=>false),	
		    array('data'=>'Fulfillment_Date1','orderable'=>false),	
		   
		  array('data'=>'status','orderable'=>false),
		  array('data'=>'items','orderable'=>false),	
		  	 
		  	  
		  array('data'=>'order_uuid','orderable'=>false),		  
		 
		);				
		
		$this->render("list-history",array(
		  'table_col'=>$table_col,
		  'columns'=>$columns,		
		  'order_col'=>1,
          'sortby'=>'desc',  
		));
	}
	
}
/*end class*/
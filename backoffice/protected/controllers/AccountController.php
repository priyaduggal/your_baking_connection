<?php
class AccountController extends CommonController
{
		
	public function beforeAction($action)
	{				
		return true;
	}
	
	public function actiontransactions()
	{
		$this->pageTitle=t("Statement");
		
		try {
		    CWallet::getCardID( Yii::app()->params->account_type['admin']);
		} catch (Exception $e) {
			$this->redirect(array('/ewallet/create_card'));
		    Yii::app()->end();
		}		
		
		$transaction_type = AttributesTools::transactionTypeList(true);
		
		$table_col = array(
		  'transaction_date'=>array(
		    'label'=>t("Paid On"),
		    'width'=>'15%'
		  ),
		  
		  'transaction_description'=>array(
		    'label'=>t("Baker"),
		    'width'=>'15%'
		  ),
		  'transaction_amount'=>array(
		    'label'=>t("Membership"),
		    'width'=>'15%'
		  ),
		  'running_balance'=>array(
		    'label'=>t("Amount"),
		    'width'=>'15%'
		  ),
		   'payment_method'=>array(
		    'label'=>t("Payment Method"),
		    'width'=>'15%'
		  ),
		  'status'=>array(
		    'label'=>t("Status"),
		    'width'=>'10%'
		  ),
		  
		);
		$columns = array(
		  array('data'=>'transaction_date'),
		  array('data'=>'transaction_description'),
		  array('data'=>'transaction_amount'),
		  array('data'=>'running_balance'),
		  array('data'=>'payment_method'),
		  array('data'=>'status'),
		);				
				
		$this->render('//finance/transactions',array(
		  'table_col'=>$table_col,
		  'columns'=>$columns,
		  'order_col'=>1,
          'sortby'=>'desc',
		  'transaction_type'=>$transaction_type,		  
		));
	}
	
} 
/*end class*/
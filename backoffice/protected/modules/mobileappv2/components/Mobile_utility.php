<?php
class Mobile_utility
{	
	public static $currency;	
	public static $exchange_rates = array();	
	public static $price_formater = false;
	
	public static function fileExist($path='')
	{		
		if(!empty($path)){
			$filepath = Yii::getPathOfAlias('webroot')."/protected/$path";	
			if(file_exists($filepath)){
				return true;
			}
		}
		return false;
	}
	
	public static function getDefaultImagePlaceholder()
	{
		return 'resto_banner.jpg';
	}
	
	public static function InitMultiCurrency($currency_use='')
	{		
		$rates = array();
		self::$currency  = $currency_use;
		
		if (Item_utility::MultiCurrencyEnabled()){

			if(empty($currency_use)){
				if( $resp_location = Multicurrency_utility::handleAutoDetecLocation() ){				
					$currency_use = $resp_location;		
					self::$currency = $currency_use;
				}			
			}
						
			$rates = Multicurrency_finance::getExchangeRate( $currency_use );					
		} else {				
			$rates = Item_utility::defaultExchangeRate( $currency_use );							
		} 
		
		if($currency_use!=$rates['used_currency']){			
			self::$currency = isset($rates['used_currency'])?$rates['used_currency']:'';
		}		
						
		
		Price_Formatter::init( self::$currency );
		self::$exchange_rates  = $rates;
	}
	
	public static function getRates()
	{
		$rates = self::$exchange_rates;
        $exchange_rate = isset($rates['exchange_rate'])? (float) $rates['exchange_rate']:1;
        return $exchange_rate;
	}
	
	public static function formatNumber($amount=0)
	{		
		if( self::$price_formater){
			return Price_Formatter::formatNumber($amount);
		} else return FunctionsV3::prettyPrice($amount);
	}
	
	public static function getOptionsArray($options_array=array(), $merchant_id=0)
	{
		$in_stmt= ''; $data = array();
		if(is_array($options_array) && count($options_array)>=1){
			foreach ($options_array as $val) {
				$in_stmt.=q($val).",";
			}
			$in_stmt = substr($in_stmt,0,-1);
		}
		$stmt = "
		SELECT option_name,option_value
		FROM {{option}}
		WHERE
		merchant_id=".q((integer)$merchant_id)." AND option_name IN ($in_stmt)
		GROUP BY option_name,option_value				
		";				
		//ORDER BY id DESC
		if($res = Yii::app()->db->createCommand($stmt)->queryAll()){
			foreach ($res as $val) {
				$data[$val['option_name']] = $val['option_value'];
			}
			return $data;
		}
		return false;
	}
	
	public static function SubscribeAlertToMerchant($device_id='',$merchant_id=0)
	{
		if(!Yii::app()->db->schema->getTable("{{mobile_subscriber}}")){
			return false;
		}
				
		if(!self::GetSubscribeAlertToMerchant($device_id,$merchant_id)){
			Yii::app()->db->createCommand()->insert("{{mobile_subscriber}}",array(
			 'device_id'=>$device_id,
			 'merchant_id'=>$merchant_id,
			 'date_created'=>FunctionsV3::dateNow(),    		  
    		 'ip_address'=>$_SERVER['REMOTE_ADDR'],    		  
			));
			return true;
		}
		return false;
	}
	
	public static function GetSubscribeAlertToMerchant($device_id='',$merchant_id=0)
	{
		if(!Yii::app()->db->schema->getTable("{{mobile_subscriber}}")){
			return false;
		}		
		$stmt="SELECT device_id,merchant_id 
		FROM {{mobile_subscriber}}
		WHERE device_id=".q($device_id)."
		AND merchant_id=".q($merchant_id)."
		";		
		if($res = Yii::app()->db->createCommand($stmt)->queryRow()){
			return $res;
		}		
		return false;
	}
	
	public static function UnSubscribeAlertToMerchant($device_id='',$merchant_id=0)
	{
		if(Yii::app()->db->createCommand("DELETE FROM {{mobile_subscriber}}
		WHERE device_id=".q($device_id)."
		AND merchant_id=".q($merchant_id)."
		")->query()){
			return true;
		}		
		return false;
	}
	
	public static function getCartSubtotal($cart=array(),$exchange_rate=1)
	{
		$subtotal =0;
		if(is_array($cart) && count($cart)>=1){
			foreach ($cart as $val) {		
											
				$price=0; $total_sub =0; $total_price=0;
				$qty = (integer)$val['qty']; 
				if($val['with_size']>0){
					$temp_price = explode("|",$val['price']);					
					$price = isset($temp_price['0'])?(float)$temp_price['0']:0;
				} else $price = $val['price'];		
				
				if(isset($val['sub_item'])){
					if(is_array($val['sub_item']) && count($val['sub_item'])>=1){
						foreach ($val['sub_item'] as $subitemkey=>$sub) {							
							if(is_array($sub) && count($sub)>=1){
								foreach ($sub as $subitemkeys=>$subitem) {
																		
									$temp_subitem = explode("|",$subitem);											
									$subprice = isset($temp_subitem[1])?(float)$temp_subitem[1]:0;
									$subqty = $qty;	
									
									if(isset($val['addon_qty'][$subitemkey])){
										$subqty=$val['addon_qty'][$subitemkey][$subitemkeys];
									}
									
									$total_sub+= ($subqty*(float)$subprice)*(float)$exchange_rate;																			
								}
							}
						}
					}
				}				
				
				if($val['discount']>0){
					$price=$price-$val['discount'];
				}
				
										
				$total_price = ($qty*(float)$price)*(float)$exchange_rate;								
				$subtotal+=$total_price+$total_sub;
			}
			return $subtotal;
		}
		return false;
	}
	
}
/*end class*/
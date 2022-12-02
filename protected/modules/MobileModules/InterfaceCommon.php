<?php
class InterfaceCommon extends CController
{	
	public $code=2,$msg,$details,$data;
	    
	public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
	{						
		return array(
			array('deny',			
                 'actions'=>array(
                     'registerUser','userLogin','getAccountStatus','verifyCodeSignup','getlocationAutocomplete','getLocationDetails',
					 'reverseGeocoding','addressAtttibues','validateCoordinates','requestResetPassword','resendResetEmail','getMenuItem',
					 'searchAttributes','getMerchantFeed','CuisineList','TransactionInfo','getDeliveryDetails','geStoreMenu','servicesList',
					 'getCart','menuSearch','getMapconfig','getMoneyConfig','getBanner','Search','socialRegistration','requestCode','getRegSettings',
					 'completeSocialSignup','registerDevice','authenticate','checkStoreOpen','checkStoreOpen2','searchItems','getMerchantInfo','SimilarItems',
					 "getAttributes","userLoginPhone",'getDeliveryTimes'
                 ),
				 'expression' => array('AppIdentity','verifyToken')
			 ), 
             array('deny',				
                  'actions'=>array(
                    'saveClientAddress','clientAddresses','deleteAddress','checkoutAddress','getPhone',
                    'RequestEmailCode','verifyCode','ChangePhone','applyPromo','removePromo','applyPromoCode',
                    'checkoutAddTips','PaymentList','SavedPaymentProvider','SavedPaymentList',
                    'SetDefaultPayment','deleteSavedPaymentMethod','savedCards','','PlaceOrder',
                    'getOrder','orderHistory','orderDetails','uploadReview','addReview','getProfile','saveProfile',
                    'updatePassword','getAddresses','MyPayments','deletePayment','PaymentMethod','addTofav',
                    'getsaveitems','getCartCheckout','getRealtime','SavePlaceByID','orderBuyAgain',
					'StripePaymentIntent','paypalverifypayment','razorpaycreatecustomer','razorpaycreateorder','razorpayverifypayment',
					'mercadopagocustomer','mercadopagoaddcard','mercadopagogetcard','mercadopagocapturepayment','getMenuItem2','saveStoreList',
					'SaveStore','requestData','verifyAccountDelete','deleteAccount','saveSettings','getSettings','getNotification','deleteNotification',
					'updateDevice','StripeCreateCustomer','StripeSavePayment','getMerchantInfo2','getItemFavorites','updateAvatar','Updateaccountnotification',
					'Updateaccountpromonotification','orderDeliveryDetails','deleteAllNotification','getMerchantFeed2','deleteNotifications'
                 ), 
				 'expression' => array('AppIdentity','verifyCustomer')
			 ), 
		 );
	}
	
    public function responseJson()
    {
		header("Access-Control-Allow-Origin: *");          
        header("Access-Control-Allow-Methods: GET, POST");       
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])){
		   header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
	    }       		
    	header('Content-type: application/json');
		$resp=array('code'=>$this->code,'msg'=>$this->msg,'details'=>$this->details);
		echo CJSON::encode($resp);
		Yii::app()->end();
    }        
	
	public function initSettings()
	{	
		$settings = OptionsTools::find(array(
			'website_date_format_new','website_time_format_new','home_search_unit_type','website_timezone_new',
			'captcha_customer_signup','image_resizing','merchant_specific_country','map_provider','google_geo_api_key','mapbox_access_token',
			'signup_enabled_verification','mobilephone_settings_default_country','mobilephone_settings_country','website_title'
	    ));
	    
		Yii::app()->params['settings'] = $settings;

		/*SET TIMEZONE*/
		$timezone = Yii::app()->params['settings']['website_timezone_new'];		
		if (is_string($timezone) && strlen($timezone) > 0){
		   Yii::app()->timeZone=$timezone;		   
		}
		Price_Formatter::init();			
	}

}
// end class
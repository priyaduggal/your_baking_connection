<?php
class StoreController extends SiteCommon
{
	public function beforeAction($action)
	{						
		return true;
	}
		public function actionbakerresources()
		{
		     return $this->render('/merchant/bakerresources');
		}
		public function actionsignup($id)
	{	
		$country_params = AttributesTools::getSetSpecificCountryArray();
	//	$terms = Yii::app()->params['settings']['registration_terms_condition'];
    	$terms='By clicking "Submit," you agree to <a href="/your_baking_connection/baker-terms-conditions" target="_blank" class="text-green">Baker Terms & Conditions</a>
     and acknowledge you have read the <a href="/your_baking_connection/privacy-policy"  target="_blank"  class="text-green">Privacy Policy</a>.';
				
		$options = OptionsTools::find(array('captcha_site_key','merchant_enabled_registration_capcha','mobilephone_settings_country','mobilephone_settings_default_country'));
		$capcha = isset($options['merchant_enabled_registration_capcha'])?$options['merchant_enabled_registration_capcha']:'';
        $capcha = $capcha==1?true:false;                
        $captcha_site_key = isset($options['captcha_site_key'])?$options['captcha_site_key']:'';
        
        $phone_default_country = isset($options['mobilephone_settings_default_country'])?$options['mobilephone_settings_default_country']:'us';
        $phone_country_list = isset($options['mobilephone_settings_country'])?$options['mobilephone_settings_country']:'';
        $phone_country_list = !empty($phone_country_list)?json_decode($phone_country_list,true):array(); 
        
        
		Yii::app()->user->setState("package_id", $id);
		 
		$this->render('/merchant/merchant-signup',array(
		  'country_params'=>$country_params,
		  'terms'=>Yii::app()->input->xssClean($terms),
		  'capcha'=>$capcha,
		  'captcha_site_key'=>$captcha_site_key,
		  'phone_country_list'=>$phone_country_list,
		  'phone_default_country'=>$phone_default_country,
		  'package_id'=>$id
		));
	}
	public function actionsaveImage()
	{
	    if(empty(Yii::app()->user->id)){
	      	$this->code = 1;
		
		
	    }else{
	         $all=Yii::app()->db->createCommand('
        SELECT *
        FROM st_ins_favorites
        Where  user_id='.Yii::app()->user->id.' and ins_gall_id='.$_POST['id'].'
        limit 0,8
        ')->queryAll(); 
        if(count($all)>0)
        {
          
            $all=Yii::app()->db->createCommand('
           DELETE FROM `st_ins_favorites`   Where  user_id='.Yii::app()->user->id.' and ins_gall_id='.$_POST['id'].'
            ')->queryAll(); 
           //delete
           	$this->code = 3;
		
        }else{
            $all=Yii::app()->db->createCommand('
            INSERT INTO `st_ins_favorites` ( `user_id`, `ins_gall_id`) VALUES ( '.Yii::app()->user->id.', '.$_POST['id'].');
            ')->queryAll(); 
        
            //insert
            $this->code = 2;
		
        }
        
        
	    }
	  
	   $this->responseJson(); 
	   //print_r($_POST);die;
	   
	    
	}
	public function actionIndex()
	{	
	    
	    
	    //echo 'sss';die;
	    $local_id = CommonUtility::getCookie(Yii::app()->params->local_id);		
		$setttings = Yii::app()->params['settings'];
		$allow_return_home = isset($setttings['allow_return_home'])?$setttings['allow_return_home']:false;
		$allow_return_home = $allow_return_home==1?true:false;

	   // if(!empty($local_id) && $allow_return_home==false){			 
	   // 	 $this->redirect(array('/store/restaurants'));
	   // 	 Yii::app()->end();
	   // }	
	   
	    $all=Yii::app()->db->createCommand('
        SELECT st_merchant_inspiration_gallery.*,st_merchant.restaurant_name
        FROM st_merchant_inspiration_gallery
        
        INNER JOIN st_merchant on st_merchant.merchant_id=st_merchant_inspiration_gallery.merchant_id
        Where  inspiration=1
        limit 0,8
        ')->queryAll(); 
        
        if(isset($_POST) && !empty($_POST)){
             $this->redirect(array('/store/bakers'));
        }
        
		
		$this->render("index",[
			'responsive'=>AttributesTools::FrontCarouselResponsiveSettings('full'), 
			'data'=>$all
		]);
	}	
	
	public function actionrestaurantsOLD()
	{				
						
		$local_id = CommonUtility::getCookie(Yii::app()->params->local_id);
		$local_info = CMerchantListing::getLocalID($local_id);				

		if(!$local_info){
			 $this->redirect(array('/'));
		}
				
		$services = Yii::app()->input->get('services'); 		
		$unit = Yii::app()->params['settings']['home_search_unit_type'];
		$popular = array();
		
		try {
			$results = CMerchantListing::countSearchByCoordinates(
			  $local_info->latitude,
			  $local_info->longitude,
			  $unit
			);
		} catch (Exception $e) {			
            $results = 0;
        }

        $list_limit = Yii::app()->params->list_limit;
        
        ScriptUtility::registerScript(array(
		  "var list_limit='$list_limit';",		  
		),'list_limit');	
		
		if(is_numeric($results) && $results>0){

			try {
			   $popular = CMerchantListing::getFeaturedLocation('new',$unit, date("c"), 0,
			   $list_limit,Yii::app()->language);
			} catch (Exception $e) {			
	           $popular = array();
	        }
					
			$this->render('restaurants-column',array(
			  'local_info'=>$local_info,			  			 
			  'local_id'=>$local_id,
			  'services'=>$services,
			  'popular'=>$popular
			));
		} else $this->render('restaurants-noresults',array(
		   'local_info'=>$local_info,			  			 
		   'local_id'=>$local_id			  
		));
		
		//$this->render('restaurants');
		//$this->render('restaurants-noresults');
	}
	
	public function actionRestaurants()
	{
		$local_id = CommonUtility::getCookie(Yii::app()->params->local_id);
		if(empty($local_id)){
			 $this->redirect(array('/'));
			 Yii::app()->end();
		}
		AssetsFrontBundle::includeMaps();
		$this->render('feed',array(
			'responsive'=>AttributesTools::FrontCarouselResponsiveSettings('full'), 
			'tabs_suggestion'=>AttributesTools::suggestionTabs()
		));
	}
		public function actionBakers()
	{
		$local_id = CommonUtility::getCookie(Yii::app()->params->local_id);
		if(empty($local_id)){
			 $this->redirect(array('/'));
			 Yii::app()->end();
		}
		AssetsFrontBundle::includeMaps();
		$this->render('feed',array(
			'responsive'=>AttributesTools::FrontCarouselResponsiveSettings('full'), 
			'tabs_suggestion'=>AttributesTools::suggestionTabs()
		));
	}
	
	public function actionFeed()
	{
		$this->render('feed');
	}
	
	public function actionmenu()
	{
		$this->render('menu');
		//$this->render('menu-1');
	}
	
	public function actioncheckout()
	{
		$this->render('checkout');
		//$this->render('checkout-1');
	}	
	
	public function actionreceipt()
	{
		$this->render('receipt');
	}	
		
	public function actionoffers()
	{
		$this->render('offers');
	}	
	public function actioninspirationGallery()
	{
	    
	 $data=Yii::app()->db->createCommand('
            SELECT *
            FROM st_dishes
            Where status="publish"
            ')->queryAll(); 
		foreach($data as $da=>$val)
		{
		    $meta1=Yii::app()->db->createCommand('
            
            SELECT st_merchant_inspiration_gallery.*,st_merchant.restaurant_name
            
            FROM st_merchant_inspiration_gallery
            inner join st_merchant on st_merchant.merchant_id=st_merchant_inspiration_gallery.merchant_id
            
            Where category_id='.$val['dish_id'].'
            and inspiration=1
           
            ')->queryAll(); 
             $data[$da]["images"] = $meta1;
		}
        $all=Yii::app()->db->createCommand('
        SELECT *
        FROM st_merchant_inspiration_gallery
        Where  inspiration=1
        ')->queryAll(); 
        $this->render('/store/inspirationgallery',array(
        'data'=>$data,
        'all'=>$all
        ));
	}
	public function actionbakerMembership()
	{
	    	$payments_credentials = array();
				
			try {					
			//	$merchant_id = $model->merchant_id;				
			//	$merchants = CMerchants::get($merchant_id);				
				$payments = AttributesTools::PaymentPlansProvider();
				$payments_credentials = CPayments::getPaymentCredentials(0,'',0);
				
				
				CComponentsManager::RegisterBundle($payments ,'plans-');
			} catch (Exception $e) {
			    //
			}
			

		
		$this->render('/store/bakermembership',array(
			 // 'merchant_uuid'=>$merchant_uuid,
			  'payments'=>$payments,
			  'payments_credentials'=>$payments_credentials
			));
	}
	public function actionabouttheBakers()
	{
		$this->render('/store/aboutthebakers');
	}
	public function actionabout()
	{
		$this->render('/store/about');
	}
		public function actionfaqs()
	{
		$this->render('/store/faqs');
	}
	public function actionpagenotfound()
	{
		$this->render('404-page');
	}	
	
	public function actionregister()
	{
		$this->render('register');
	}
		
}
/*end class*/
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
        $model=new AR_item;
        $model->scenario = 'create';
        $upload_path = CMedia::merchantFolder();
        $model->multi_language = $multi_language;		
        $fields[]=array(
        'name'=>'item_name_translation',
        'placeholder'=>"Enter [lang] Name here"
        );
        $fields[]=array(
        'name'=>'item_description_translation',
        'placeholder'=>"Enter [lang] description here",
        'type'=>"textarea"
		);
		$model->status = $model->isNewRecord?'publish':$model->status;	
		$model->available_at_specific = '0';	
		$avatar = CMedia::getImage($model->photo,$model->path,'@thumbnail',
		CommonUtility::getPlaceholderPhoto('item'));
		
			$links = array(
	            t("All Item")=>array(Yii::app()->controller->id.'/items'),                
	            $this->pageTitle,
		    );
		    
		    	$data = array(
			   'day'=>array(),
			   'start'=>array(),
			   'end'=>array(),
			   
			   );
			   $subcategory=array();
		 $merchant_id=Yii::app()->merchant->merchant_id;	   
	
       $merchant_id = (integer) Yii::app()->merchant->merchant_id;
       if(isset($_POST['AR_item'])){
           
           if($_POST['service_code']=='delivery'){
               $date=$_POST['delivery_date'];
               $da=explode("-(", $date);
               $ddate=$da[0];
               if(isset($da) && count($da)>0){
                   
                    $times=explode("-",$da[1]);
                    $delivery_time=$times[0];
                    $delivery_time_end=$times[1];
               }
           }else{
               $date=$_POST['delivery_pickup_date'];
                $all=Yii::app()->db->createCommand('SELECT *  FROM `st_pickup_times` where id='.$date.' 
                ')->queryAll(); 
              
                $ddate=$all[0]['date'];
                echo $_POST['delivery_time'];
                
                $times = json_decode($_POST['delivery_time'], true);
                $delivery_time=$times['start_time'];
                $delivery_time_end=$times['end_time'];
              
           }
         
           	 Yii::app()->user->setState('service_code_create_order',$_POST['service_code']);
			 Yii::app()->user->setState('delivery_date_create_order',$ddate);
			  Yii::app()->user->setState('delivery_time_create_order',$delivery_time);
			  Yii::app()->user->setState('delivery_time_end_create_order',$delivery_time_end);
			 
           
           	if (!empty($_FILES)) {
			
			$title = $_FILES['photo']['name'];   
	
			$file_size = (integer)$_FILES['photo']['size'];   
			$filetype = $_FILES['photo']['type'];   								
			
			if(isset($_FILES['photo']['name'])){
			   $extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			} else $extension = strtolower(substr($title,-3,3));
		
		
		
			
			$allowed_extension = explode(",",Helper_imageType);
		    $maxsize = (integer)Helper_maxSize;			
		    
		    if(isset($_FILES['photo']['name'])){
			   $extension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
			   $extension = strtolower($extension);
			} else $extension = strtolower(substr($title,-3,3)); 
			
			
		
			$upload_path = CMedia::merchantFolder();
			$tempFile = $_FILES['photo']['tmp_name'];
			$upload_uuid = CommonUtility::createUUID("{{media_files}}",'upload_uuid');
			$filename = $upload_uuid.".$extension";			
			$path = CommonUtility::uploadDestination($upload_path)."/".$filename;	
			
			$path2 = CommonUtility::uploadDestination($upload_path)."/";
		
			if(move_uploaded_file($tempFile,$path)){					
			  
			   $model->photo=$filename;
			}
					
		}
	
           
           $model->merchant_id = $merchant_id;
           	$model->attributes=$_POST['AR_item'];
           		if(isset($_POST['AR_item']['available_day'])){
				$model->available_day = $_POST['AR_item']['available_day'];
				$model->available_time_start = $_POST['AR_item']['available_time_start'];
				$model->available_time_end = $_POST['AR_item']['available_time_end'];
			}
            $model->type=1;
            
				
         	if($model->save()){
         	    $itemmodel=new AR_item_size;
                $itemmodel->merchant_id = (integer) $model->merchant_id;
				$itemmodel->item_id = (integer) $model->item_id;
				$itemmodel->price = (float) $model->item_price;
                $itemmodel->save();
                
                
                $translation=new AR_item_translation;
                $translation->language = 'en';
				$translation->item_id = (integer) $model->item_id;
				$translation->item_name =  $model->item_name;
				$translation->item_description =  $model->item_description;
                $translation->save();
                
                
                
                $cat_id=Yii::app()->db->createCommand('
                        SELECT *
                        FROM st_item_relationship_category
                        Where  merchant_id='.$model->merchant_id.' and item_id='.$model->item_id.'
                        limit 0,8
                        ')->queryAll(); 
			    	
			    	
			    	
             
                $order_uuid= Yii::app()->user->getState("order_uuid_pos");
                $transaction_type= Yii::app()->user->getState("order_type_pos");
                
                
                $cart_uuid = $order_uuid;
                $order_uuid = $cart_uuid;
		
	        	$cart_row = CommonUtility::createUUID("{{ordernew_item}}",'item_row');
		
	        	$transaction_type = $transaction_type;		
	        	
	        	$merchant_id = $model->merchant_id;
		
		        $cat_id = $cat_id[0]['cat_id'];
		        
                $item_token =$model->item_token;
                
                $old_item_token = '';
                
                $item_row ='';
                
                $item_size_id =$itemmodel->item_size_id;
                
                $item_qty = 1;
                
                $special_instructions = "";
                
                $if_sold_out = "substitute";	

	        	$inline_qty = 0;
				
		$addons = array();
		$item_addons=array();
		$item_addons ='';
	
		$attributes = array();
		$meta ='';

			$model1= COrders::get($order_uuid);
			
            // $ood=Yii::app()->db->createCommand('SELECT * FROM st_ordernew where order_id="'.$model1->order_id.'"
            // ')->queryAll();
           
            // $update=Yii::app()->db->createCommand('UPDATE `st_ordernew` SET `service_code`="'.$_POST['service_code'].'",`delivery_date`="'.$_POST['delivery_date'].'" where order_id="'.$model1->order_id.'"
            // ')->queryAll();
			
	
			$criteria=new CDbCriteria();	
	        $criteria->alias = "a";
	        $criteria->select = "a.item_id,a.item_token,a.item_name,
	        b.item_size_id, b.price as item_price, b.discount, b.discount_type, b.discount_start,
	        b.discount_end
	        
	        ";
	        $criteria->condition = "a.merchant_id = :merchant_id AND a.item_token=:item_token
	        AND b.item_size_id=:item_size_id
	        ";
	        $criteria->params = array ( 
	          ':merchant_id'=>$merchant_id,
	          ':item_token'=>$item_token,
	          ':item_size_id'=>$item_size_id
	        );
	        $criteria->mergeWith(array(
			  'join'=>'LEFT JOIN {{item_relationship_size}} b ON a.item_id = b.item_id',				
		    ));
    
	        $item = AR_item::model()->find($criteria);	  
	       
	       
	        if(!$item){
	        	$this->msg = t("Price is not valid");
	        	$this->responseJson();		
            }
                                    
	        $scenario = 'update_cart';
	        
			$items = array(
			  'order_uuid'=>$order_uuid,
			  'order_id'=>$model1->order_id,
			  'merchant_id'=>$merchant_id,
			  'cart_row'=>$cart_row,
			  'cart_uuid'=>$cart_uuid,
			  'cat_id'=>$cat_id,
			  'item_id'=>$item->item_id,
			  'item_name'=>$item->item_name,
			  'item_token'=>$item_token,
			  'item_size_id'=>$item_size_id,
			  'qty'=>$item_qty,
			  'special_instructions'=>$special_instructions,
			  'if_sold_out'=>$if_sold_out,
			  'addons'=>$addons,
			  'attributes'=>$attributes,
			  'inline_qty'=>$inline_qty,
			  'price'=>floatval($item->item_price),
			  'discount'=>$item->discount_valid>0?$item->discount:0,
			  'discount_type'=>$item->discount_valid>0?$item->discount_type:'',
			  'item_row'=>$item_row,
			  'old_item_token'=>$old_item_token,
			  'service_code'=>$_POST['service_code'],
			  'delivery_date'=>$_POST['delivery_date'],
			  'scenario'=>$scenario
			);	
		
		
			/*GET TAX*/
			$tax_settings = array(); $tax_use = array();
			try {
				$tax_settings = CTax::getSettings($merchant_id);							
				if($tax_settings['tax_type']=="multiple"){					
					$tax_use = CTax::getItemTaxUse($merchant_id,$item->item_id);
                } else $tax_use = isset($tax_settings['tax']) ? $tax_settings['tax'] : '';			   	
			} catch (Exception $e) {					
				 //echo $e->getMessage();
			}
			$items['tax_use'] = $tax_use;
			
			
			COrders::add1($items);
			
            
           Yii::app()->user->setFlash('success',CommonUtility::t(Helper_created));
			$this->refresh();		    
				
         	}
            
        }
         
            $this->render("//pos/create_order",array(
            'ajax_url'=>Yii::app()->createUrl("/apibackend"),
            'model'=>$model, 
            'data'=>$data,
            'subcategory'=>$subcategory,
            'days'=>AttributesTools::dayWeekList(),
            'links'=>$links,
            'ctr'=>Yii::app()->controller->id."/item_remove_image",
            'status'=>(array)AttributesTools::StatusManagement('post'),	
            'discount_type'=> AttributesTools::CommissionType(),
            'upload_path'=>$upload_path,
            'merchant_id'=>Yii::app()->merchant->merchant_id,
            'view_admin'=>false,
            'category'=>(array)AttributesTools::Category( $merchant_id ),
            'units'=> (array) AttributesTools::Size( $merchant_id ),
            'item_featured'=>AttributesTools::ItemFeatured(),
            'language'=>AttributesTools::getLanguage(),
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
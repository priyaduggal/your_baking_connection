<?php
class UpdateController extends CController
{
	
	public function beforeAction($action)
	{
		if(!Yii::app()->functions->isAdminLogin()){	
            Yii::app()->end();
		}		
		return true;
	}
	
	public function actionIndex()
	{					
		$DbExt = new DbExt();
		
		$table_prefix=Yii::app()->db->tablePrefix;								
		$date_default = "datetime NOT NULL DEFAULT CURRENT_TIMESTAMP";
		$logger = array();
		
		echo mt("Updating database...");
		
		if($res=$DbExt->rst("SELECT VERSION() as mysql_version")){
			$res=$res[0];			
			$mysql_version = (float)$res['mysql_version'];
			dump("MYSQL VERSION=>$mysql_version");
			if($mysql_version<=5.5){				
				$date_default="datetime NOT NULL DEFAULT '0000-00-00 00:00:00'";
			}
		}		

		/*INSET DEFAULT DATA*/	
		if(!FunctionsV3::checkIfTableExist('mobile2_device_reg')):
		    DBTableWrapper::defaultData();
		endif;
						
		/*NEW TABLE*/
		$stmt[]="		
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_device_reg (
		  `id` int(14) NOT NULL,
		  `client_id` int(14) NOT NULL DEFAULT '0',
		  `device_uiid` varchar(255) NOT NULL DEFAULT '',
		  `device_id` text,
		  `device_platform` varchar(50) NOT NULL DEFAULT '',
		  `push_enabled` int(1) NOT NULL DEFAULT '1',
		  `status` varchar(100) NOT NULL DEFAULT 'active',
		  `code_version` varchar(14) NOT NULL DEFAULT '',
		  `date_created` $date_default,
		  `date_modified` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_device_reg
		  ADD PRIMARY KEY (`id`),
		  ADD KEY `client_id` (`client_id`),
		  ADD KEY `device_uiid` (`device_uiid`),
		  ADD KEY `device_platform` (`device_platform`),
		  ADD KEY `status` (`status`);
		  
		ALTER TABLE ".$table_prefix."mobile2_device_reg ADD FULLTEXT KEY `device_id` (`device_id`);
				
        ALTER TABLE ".$table_prefix."mobile2_device_reg
        MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
		";			
		
	    $stmt[]="		
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_broadcast (
		`broadcast_id` int(14) NOT NULL,
		`push_title` varchar(255) NOT NULL DEFAULT '',
		`push_message` varchar(255) NOT NULL DEFAULT '',
		`device_platform` varchar(100) NOT NULL DEFAULT '',
		`status` varchar(100) NOT NULL DEFAULT 'pending',
		`date_created` $date_default,
		`date_modified` $date_default,
		`ip_address` varchar(50) NOT NULL DEFAULT '',
		`fcm_response` text
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_broadcast
		ADD PRIMARY KEY (`broadcast_id`);
				
		ALTER TABLE ".$table_prefix."mobile2_broadcast
		MODIFY `broadcast_id` int(14) NOT NULL AUTO_INCREMENT;
		";	    	    
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_recent_search (
		  `id` int(11) NOT NULL,
		  `device_uiid` varchar(255) NOT NULL DEFAULT '',
		  `search_string` varchar(255) NOT NULL DEFAULT '',
		  `date_created` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_recent_search
        ADD PRIMARY KEY (`id`);
        
        ALTER TABLE ".$table_prefix."mobile2_recent_search
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
	    ";			    
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_pages (
		  `page_id` int(11) NOT NULL,
		  `title` varchar(255) NOT NULL DEFAULT '',
		  `content` text,
		  `icon` varchar(100) DEFAULT '',
		  `use_html` varchar(1) NOT NULL DEFAULT '',
		  `sequence` int(14) NOT NULL DEFAULT '0',
		  `status` varchar(100) NOT NULL DEFAULT 'pending',
		  `date_created` $date_default,
		  `date_modified` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''		  
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_pages
        ADD PRIMARY KEY (`page_id`);
        
        ALTER TABLE ".$table_prefix."mobile2_pages
        MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT;
	    ";	    
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_push_logs (
		  `id` int(11) NOT NULL,
		  `broadcast_id` int(14) NOT NULL DEFAULT '0',
		  `trigger_id` int(14) NOT NULL DEFAULT '0',
		  `push_type` varchar(100) NOT NULL DEFAULT 'order',
		  `client_id` int(14) DEFAULT '0',
		  `client_name` varchar(255) NOT NULL DEFAULT '',
		  `device_platform` varchar(100) NOT NULL DEFAULT '',
		  `device_id` text,
		  `device_uiid` varchar(255) NOT NULL DEFAULT '',
		  `push_title` varchar(255) NOT NULL DEFAULT '',
		  `push_message` varchar(255) NOT NULL DEFAULT '',
		  `status` varchar(255) NOT NULL DEFAULT 'pending',
		  `json_response` text,
		  `date_created` $date_default,
		  `date_process` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_push_logs
        ADD PRIMARY KEY (`id`);
        
        ALTER TABLE ".$table_prefix."mobile2_push_logs
        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
	    ";	    
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_cart (
		  `cart_id` int(14) NOT NULL,
		  `merchant_id` int(14) NOT NULL DEFAULT '0',
		  `device_uiid` varchar(255) DEFAULT '',
		  `device_platform` varchar(50) NOT NULL DEFAULT '',
		  `cart` text,
		  `cart_count` int(14) NOT NULL DEFAULT '0',
		  `voucher_details` text,
		  `street` varchar(255) NOT NULL DEFAULT '',
		  `city` varchar(255) NOT NULL DEFAULT '',
		  `state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
		  `zipcode` varchar(100) NOT NULL DEFAULT '',
		  `delivery_instruction` varchar(255) NOT NULL DEFAULT '',
		  `location_name` varchar(255) NOT NULL DEFAULT '',
		  `contact_phone` varchar(50) NOT NULL DEFAULT '',
		  `date_modified` $date_default,
		  `tips` float(14,4) NOT NULL DEFAULT '0.0000',
		  `points_earn` int(14) NOT NULL DEFAULT '0',
		  `points_apply` int(14) NOT NULL DEFAULT '0',
		  `points_amount` float(14,4) NOT NULL DEFAULT '0.0000',
		  `country_code` varchar(2) NOT NULL DEFAULT '',
		  `delivery_fee` float(14,4) NOT NULL DEFAULT '0.0000',
		  `min_delivery_order` float(14,4) NOT NULL DEFAULT '0.0000',
		  `delivery_lat` varchar(50) NOT NULL DEFAULT '',
		  `delivery_long` varchar(50) NOT NULL DEFAULT '',
		  `save_address` int(1) NOT NULL DEFAULT '0'
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_cart
		ADD PRIMARY KEY (`cart_id`),
		ADD KEY `device_platform` (`device_platform`),
		ADD KEY `device_uiid` (`device_uiid`);
		
		ALTER TABLE ".$table_prefix."mobile2_cart
		MODIFY `cart_id` int(14) NOT NULL AUTO_INCREMENT;
	    ";	    
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_recent_location (
		  `id` int(14) NOT NULL,
		  `device_uiid` varchar(255) DEFAULT '',
		  `search_address` text,
		  `street` varchar(255) NOT NULL DEFAULT '',
		  `city` varchar(255) NOT NULL DEFAULT '',
		  `state` varchar(255) NOT NULL DEFAULT '',
		  `zipcode` varchar(255) NOT NULL DEFAULT '',
		  `location_name` varchar(255) NOT NULL DEFAULT '',
		  `latitude` varchar(100) NOT NULL DEFAULT '',
		  `longitude` varchar(100) NOT NULL DEFAULT '',
		  `date_created` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_recent_location
		ADD PRIMARY KEY (`id`),
		ADD KEY `device_uiid` (`device_uiid`);
		
		ALTER TABLE ".$table_prefix."mobile2_recent_location ADD FULLTEXT KEY `search_address` (`search_address`);
				
		ALTER TABLE ".$table_prefix."mobile2_recent_location
		MODIFY `id` int(14) NOT NULL AUTO_INCREMENT;
	    ";
	    
	    $stmt[]="	    
		CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_order_trigger (
		  `trigger_id` int(14) NOT NULL,
		  `trigger_type` varchar(100) NOT NULL DEFAULT 'order',
		  `order_id` int(14) NOT NULL DEFAULT '0',
		  `order_status` varchar(255) NOT NULL DEFAULT '',
		  `remarks` text,
		  `language` varchar(10) NOT NULL DEFAULT 'en',
		  `status` varchar(100) NOT NULL DEFAULT 'pending',
		  `date_created` $date_default,
		  `date_process` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_order_trigger
        ADD PRIMARY KEY (`trigger_id`);
        
        ALTER TABLE ".$table_prefix."mobile2_order_trigger
        MODIFY `trigger_id` int(14) NOT NULL AUTO_INCREMENT;
	    ";
	    
	   
	    /*1.3*/
	    $stmt[] = "
	    CREATE TABLE IF NOT EXISTS ".$table_prefix."mobile2_homebanner (
		  `banner_id` int(14) NOT NULL,
		  `title` varchar(255) NOT NULL DEFAULT '',
		  `banner_name` varchar(255) NOT NULL DEFAULT '',
		  `sequence` int(14) NOT NULL DEFAULT '0',
		  `status` varchar(100) NOT NULL DEFAULT 'pending',
		  `date_created` $date_default,
		  `date_modified` $date_default,
		  `ip_address` varchar(50) NOT NULL DEFAULT ''
		) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		
		ALTER TABLE ".$table_prefix."mobile2_homebanner
        ADD PRIMARY KEY (`banner_id`);
        
        ALTER TABLE ".$table_prefix."mobile2_homebanner
        MODIFY `banner_id` int(14) NOT NULL AUTO_INCREMENT;
	    ";
	    
	    
	    /*EXECUTE SQL*/
		$this->executeStatement($stmt);			   
	    
	    /*NEW FIELDS*/	    
		$new_field=array( 		  
		   'verify_code_requested'=>$date_default,
		   'single_app_merchant_id'=>"int(14) NOT NULL DEFAULT '0'",
		   'social_id'=>"varchar(20) NOT NULL DEFAULT ''",
		);
		$this->alterTable('client',$new_field);
				
		$new_field=array( 		  
		   'status'=>"varchar(100) NOT NULL DEFAULT 'publish'",
		   'featured_image'=>"varchar(255) NOT NULL DEFAULT ''",		   
		);
		$this->alterTable('cuisine',$new_field);
				
		$new_field=array( 		  
		   'latitude'=>"varchar(100) NOT NULL DEFAULT ''",
		   'longitude'=>"varchar(100) NOT NULL DEFAULT ''",
		);
		$this->alterTable('address_book',$new_field);
			
		$new_field=array( 		  
		   'as_anonymous'=>"varchar(1) NOT NULL DEFAULT '0'",		   
		);
		$this->alterTable('review',$new_field);
		
		$new_field=array( 		  
		   'cancel_reason'=>"text",		   
		);
		$this->alterTable('order',$new_field);
		
		$new_field=array( 		  
		   'is_read'=>"int(1) NOT NULL DEFAULT '0'",
		   'date_modified'=>"$date_default",
		);
		$this->alterTable('mobile2_push_logs',$new_field);
						
		if(FunctionsV3::checkIfTableExist('driver_task')):
			$new_field=array( 		  
			   'rating'=>"int(14) NOT NULL DEFAULT '0'",
			   'rating_comment'=>"text",
			   'rating_anonymous'=>"int(1) NOT NULL DEFAULT '0'",
			);
			$this->alterTable('driver_task',$new_field);
		endif;
		
		/*1.3*/
		$new_field=array( 		  
		   'distance'=>"varchar(255) NOT NULL DEFAULT ''",
		   'distance_unit'=>"varchar(15) NOT NULL DEFAULT ''",
		   'state_id'=>"int(14) NOT NULL DEFAULT '0'",
		   'city_id'=>"int(14) NOT NULL DEFAULT '0'",
		   'area_id'=>"int(14) NOT NULL DEFAULT '0'"
		);
		$this->alterTable('mobile2_cart',$new_field);
		
		$new_field=array( 		  
		   'latitude'=>"varchar(100) NOT NULL DEFAULT ''",
		   'longitude'=>"varchar(100) NOT NULL DEFAULT ''"		   	 
		);
		$this->alterTable('address_book_location',$new_field);
		
		/*END NEW FIELDS*/
				
		
		if(Yii::app()->functions->multipleField()){ 
			DBTableWrapper::alterTablePages();
		}		
		
		
		Yii::app()->db->createCommand()->alterColumn('{{client}}','social_id',"varchar(255) NOT NULL DEFAULT ''");		
		Yii::app()->db->createCommand()->alterColumn('{{mobile2_cart}}','distance',"varchar(255) NOT NULL DEFAULT ''");
		Yii::app()->db->createCommand()->alterColumn('{{mobile2_push_logs}}','status',"varchar(255) NOT NULL DEFAULT 'pending'");		
		
		/*END OF TABLES*/
		
		
		/*1.5*/		
		$this->alterTable('mobile2_recent_location',array(
		  'country'=>"varchar(255) NOT NULL DEFAULT ''",		   
		));
				
		$this->alterTable('mobile2_cart',array(
		  'cart_subtotal'=>"float(14,4) NOT NULL DEFAULT '0.0000'",
		  'remove_tip'=>"int(1) NOT NULL DEFAULT '0'",
		));
				
		$this->alterTable('mobile2_homebanner',array( 		
		  'sub_title'=>"varchar(255) NOT NULL DEFAULT ''",
		  'tag_id'=>"text"
		));
				
		$this->alterTable('mobile2_device_reg',array(
		  'subscribe_topic'=>"int(1) NOT NULL DEFAULT '1'",
		));
				
		$this->alterTable('mobile2_broadcast',array(
		  'fcm_response'=>"text",
		  'fcm_version'=>"int(1) NOT NULL DEFAULT '0'"
		));
						
		DBTableWrapper::checkUpdatePrimaryKey(array(
		  'mobile2_device_reg'=>'id',
		  'mobile2_recent_location'=>'id',
		  'mobile2_cart'=>'cart_id'
		));
		/*END 1.5*/
		
		/*1.5.1*/
		$logger[] = DatataseMigration::addColumn("{{mobile2_homebanner}}",array(
		  'category'=>"varchar(255) NOT NULL DEFAULT 'home_banner' AFTER banner_id ",
		));
		
		$logger[] = DatataseMigration::addColumn("{{merchant}}",array(
		  'close_store'=>"int(14) NOT NULL DEFAULT '0'",
		  'delivery_distance_covered'=>"float(14,2) NOT NULL DEFAULT '0.00'",
		  'distance_unit'=>"varchar(20) NOT NULL DEFAULT 'mi'",
		  'pin'=>"int(4) NOT NULL DEFAULT '0'"
		));
		
		$logger[] = DatataseMigration::createTable("{{tags_relationship}}",array(
		  'id'=>"pk",
		  'banner_id'=>"int(14) NOT NULL DEFAULT '0'",
		  'tag_id'=>"int(14) NOT NULL DEFAULT '0'"
		));
		
		if(Yii::app()->db->schema->getTable("{{tags}}")){
			$view_resp =  Yii::app()->db->createCommand("
			CREATE OR REPLACE VIEW ".$table_prefix."tags_relationship_view as
			select a.*,
			IFNULL(b.tag_name,'') as tag_name
			
			FROM ".$table_prefix."tags_relationship a
			left join ".$table_prefix."tags b
			on
			a.tag_id = b.tag_id
			")->query();
			if($view_resp){
				$logger[] = array('tags_relationship_view ok');
			} else $logger[] = array('tags_relationship_view failed');
		}
		
		if(Yii::app()->db->schema->getTable("{{tags_relationship_view}}")){
			$view_resp =  Yii::app()->db->createCommand("
			
			CREATE OR REPLACE VIEW ".$table_prefix."mobile2_homebanner_view as
			select a.*,

			IFNULL((
			 select GROUP_CONCAT(tag_name)
			 from ".$table_prefix."tags_relationship_view
			 where 
			 banner_id = a.banner_id
			),'') as tag_name
			
			from ".$table_prefix."mobile2_homebanner a

			")->query();
			if($view_resp){
				$logger[] = array('mobile2_homebanner_view ok');
			} else $logger[] = array('mobile2_homebanner_view failed');
		}
		
		/*MIGRATION OF DATA*/
		$migrate_close_store = getOptionA('migrate_close_store');		
		if($migrate_close_store!=1){
			if($resp = Yii::app()->db->createCommand("SELECT * FROM {{option}}
			    WHERE option_name='merchant_close_store' AND option_value='yes' 
			    LIMIT 0,5000
			    ")->queryAll()){
				foreach ($resp as $resp_val) {					
					$up = Yii::app()->db->createCommand()->update("{{merchant}}",array(
					  'close_store'=>1
					),
			  	    'merchant_id=:merchant_id',
				  	    array(
				  	      ':merchant_id'=>$resp_val['merchant_id']
				  	    )
			  	    );
			  	    if($up){
			  	    	$logger[] = "Migrating record id#".$resp_val['id'];
			  	    } else $logger[] = "Failed migrating id#".$resp_val['id'];
				}												
			}
			Yii::app()->functions->updateOptionAdmin('migrate_close_store',1);
		}
		
		/*MIGRATION OF DATA*/
		$migrate_tags = getOptionA('migrate_tags');
		if($migrate_tags!=1){
			if($resp = Yii::app()->db->createCommand("SELECT banner_id,tag_id FROM {{mobile2_homebanner}}	
			    WHERE tag_id !=''		    
			    LIMIT 0,5000
			    ")->queryAll()){
				foreach ($resp as $resp_val) {										
					itemWrapper::insertTagRelationship($resp_val['banner_id'], (array) json_decode($resp_val['tag_id']) );
					$logger[] = "Migrating record id#".$resp_val['banner_id'];
				}												
			}
			Yii::app()->functions->updateOptionAdmin('migrate_tags',1);
		}
		
		/*END 1.5.1*/
		
		
		/*1.5.2*/			
		Yii::app()->db->createCommand()->alterColumn('{{mobile2_push_logs}}','push_message',"text");		
		Yii::app()->db->createCommand()->alterColumn('{{mobile2_order_trigger}}','order_status',"varchar(255) NOT NULL DEFAULT ''");
		
		$logger[] = DatataseMigration::createTable("{{mobile2_homebanner_translation}}",array(
		  'id'=>"pk",
		  'banner_id'=>"int(14) NOT NULL DEFAULT '0'",
		  'language'=>"varchar(50) NOT NULL DEFAULT ''",
		  'title'=>"varchar(255) NOT NULL DEFAULT ''",
		  'sub_title'=>"varchar(255) NOT NULL DEFAULT ''"
		));		
		$logger[]  = DatataseMigration::createIndex("{{mobile2_homebanner_translation}}",array(
		  'banner_id','language'
		));		
		$logger[]  = DatataseMigration::createIndex("{{mobile2_homebanner}}",array(
		  'category','status'
		));
		$this->alterTable('mobile2_homebanner',array(
		  'actions'=>"varchar(100) NOT NULL DEFAULT 'tags'",
		  'page_id'=>"varchar(14) NOT NULL DEFAULT ''",
		  'custom_url'=>"text",
		));
		$logger[] = DatataseMigration::createTable("{{merchantapp_task_location}}",array(
		   'id'=>'pk',
		   'lat'=>"varchar(255) NOT NULL DEFAULT ''",    
		   'lng'=>"varchar(255) NOT NULL DEFAULT ''", 
		   'driver_lat'=>"varchar(255) NOT NULL DEFAULT ''", 
		   'driver_lng'=>"varchar(255) NOT NULL DEFAULT ''", 
		   'duration'=>"varchar(50) NOT NULL DEFAULT ''", 
		   'distance'=>"varchar(100) NOT NULL DEFAULT ''", 
		   'pretty_distance'=>"varchar(100) NOT NULL DEFAULT ''", 
		   'unit'=>"varchar(10) NOT NULL DEFAULT ''", 
		   'date_created'=>$date_default
		));
		
		/*MIGRATION FOR TABLE mobile2_homebanner_translation*/
		$homebanner_translation_migrate  = getOptionA('homebanner_translation_migrate');
		if($homebanner_translation_migrate!=1){			
			DatataseMigration::homeBannerTranslateMigrate();			
			Yii::app()->functions->updateOptionAdmin('homebanner_translation_migrate',1);		
		}
		
		/*END 1.5.2*/
		
		/*1.5.4*/
		$logger[] = DatataseMigration::addColumn("{{order_delivery_address}}",array(
		  'first_name'=>"varchar(255) NOT NULL DEFAULT ''",
		  'last_name'=>"varchar(255) NOT NULL DEFAULT ''",
		  'contact_email'=>"varchar(255) NOT NULL DEFAULT ''",
		  'estimated_time'=>"integer(14) NOT NULL DEFAULT '0'", 
		  'estimated_date_time'=>$date_default,
		  'opt_contact_delivery'=>"integer(1) NOT NULL DEFAULT '0'",			  
		  'dinein_number_of_guest'=>"varchar(14) NOT NULL DEFAULT ''",
		  'dinein_special_instruction'=>"varchar(255) NOT NULL DEFAULT ''",
		  'dinein_table_number'=>"varchar(50) NOT NULL DEFAULT ''"
		));		
		/*1.5.4*/
		
						
	    /*VIEW TABLES*/	    
	    $stmt=array();
	    
	    $stmt[]="	    
		CREATE OR REPLACE VIEW ".$table_prefix."mobile2_device_reg_view as
		SELECT 
		a.*,
		CONCAT(b.first_name,' ',b.last_name) as full_name,
		b.last_login
		FROM
		".$table_prefix."mobile2_device_reg a
		LEFT JOIN ".$table_prefix."client b
		On
		a.client_id = b.client_id
	    ";	    
	    	    
	    $tbl_1 = Yii::app()->db->schema->getTable("{{driver_task}}");
		$tbl_2 = Yii::app()->db->schema->getTable("{{view_order}}");
		if($tbl_1 && $tbl_2){
			$stmt[]="
			Create OR replace view {{driver_task_view}} as
			SELECT a.*,
			DATE_FORMAT(a.delivery_date,'%Y-%m-%d') as delivery_date_only,
			
			IFNULL(concat(b.first_name,' ',b.last_name),'') as driver_name,
			IFNULL(b.device_id,'') as device_id,
			IFNULL(b.phone,'') as driver_phone,
			IFNULL(b.email,'') as driver_email,
			IFNULL(b.device_platform,'') as device_platform,
			IFNULL(b.enabled_push,'') as enabled_push,
			IFNULL(b.location_lat,'') as driver_lat,
			IFNULL(b.location_lng,'') as driver_lng,
			IFNULL(b.profile_photo,'') as driver_photo,
			IFNULL(b.transport_type_id,'') as driver_vehicle,
			c.merchant_id,
			d.restaurant_name as merchant_name,
			concat(d.street,' ',d.city,' ',d.state,' ',d.post_code) as merchant_address,
			IFNULL(e.team_name,'') as team_name,			
			c.total_amount as total_w_tax,
			c.delivery_charge,
			c.payment_type,
			c.status as order_status,
			c.opt_contact_delivery,
			c.delivery_instruction
				
			FROM
			{{driver_task}} a
					
			LEFT JOIN {{driver}} b
			ON
			b.driver_id=a.driver_id
			
			left join {{view_order}} c
			ON 
			c.order_id=a.order_id
			
			left join {{merchant}} d
			ON 
			d.merchant_id=c.merchant_id
			
			left join {{driver_team}} e
			ON 
			e.team_id=a.team_id					
			";
		}
	    
	    if(FunctionsV3::checkIfTableExist('review')):
	    $stmt[]="
		create OR REPLACE VIEW ".$table_prefix."view_ratings as
		select 
		merchant_id,
		COUNT(*) AS review_count,
		SUM(rating)/COUNT(*) AS ratings
		
		from
		".$table_prefix."review
		where
		status in ('publish','published')
		group by merchant_id
		";
	    endif;
	    
	    if(FunctionsV3::checkIfTableExist('merchant')):
	    $stmt[]="
		create OR REPLACE VIEW ".$table_prefix."view_merchant as
		select a.*,
		IFNULL(f.ratings,0) as ratings,
		IFNULL(f.review_count,0) as review_count,
		IFNULL(f.review_count,0) as ratings_votes
		
		from ".$table_prefix."merchant a
		
		left join ".$table_prefix."view_ratings f
		ON 
		a.merchant_id = f.merchant_id 		
		";	    	   
	    endif;
	    
	    /*EXECUTE SQL*/
		$this->executeStatement($stmt);
		
		
		/*1.5.6*/
		$logger[] = DatataseMigration::addColumn("{{merchant}}",array(
		  'single_app_keys'=>"varchar(255) NOT NULL DEFAULT ''",		  
		));
		
		$logger[] = DatataseMigration::addColumn("{{item}}",array(
		  'item_token'=>"varchar(50) NOT NULL DEFAULT ''",
		  'with_size'=>"int(1) NOT NULL DEFAULT '0'",
		  'track_stock'=>"int(1) NOT NULL DEFAULT '1'",
		  'supplier_id'=>"int(14) NOT NULL DEFAULT '0'",
		));
		
		$logger[] = DatataseMigration::addColumn("{{currency}}",array(
		  'description'=>"varchar(255) NOT NULL DEFAULT '' AFTER currency_symbol",   
		  'as_default'=>"int(1) NOT NULL DEFAULT '0'",
		  'is_hidden'=>"int(1) NOT NULL DEFAULT '0'",
		  'currency_position'=>"varchar(100) NOT NULL DEFAULT 'left'",
		  'exchange_rate'=>"float(14,4) NOT NULL DEFAULT '0'",
		  'exchange_rate_fee'=>"float(14,4) NOT NULL DEFAULT '0'",
		  'number_decimal'=>"int(14) NOT NULL DEFAULT '2'",
		  'decimal_separator'=>"varchar(5) NOT NULL DEFAULT '.'",
		  'thousand_separator'=>"varchar(5) NOT NULL DEFAULT ''",
		));
		
		$logger[] = DatataseMigration::addColumn("{{order_delivery_address}}",array(
		  'used_currency'=>"varchar(5) NOT NULL DEFAULT ''",
		  'base_currency'=>"varchar(5) NOT NULL DEFAULT ''",
		  'exchange_rate'=>"float(14,4) NOT NULL DEFAULT '1'"
		));
		
		/*1.5.8*/
		
		$logger[] = DatataseMigration::addColumn("{{order_delivery_address}}",array(
		   'service_fee'=>"float(14,5) NOT NULL DEFAULT '0'",
		   'service_fee_applytax'=>"integer(14) NOT NULL DEFAULT '0'",
		));
		
		$logger[] = DatataseMigration::addColumn("{{location_rate}}",array(
		   'free_above_subtotal'=>"float(14,5) NOT NULL DEFAULT '0' AFTER fee",
		   'minimum_order'=>"float(14,5) NOT NULL DEFAULT '0' AFTER fee",		   		   
		));
		
		$logger[] = DatataseMigration::addColumn("{{category}}",array(
		   'monday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'monday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'tuesday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'tuesday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'wednesday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'wednesday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'thursday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'thursday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'friday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'friday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'saturday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'saturday_end'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'sunday_start'=>"varchar(5) NOT NULL DEFAULT ''", 
		   'sunday_end'=>"varchar(5) NOT NULL DEFAULT ''"
		));
		
		$logger[] = DatataseMigration::addColumn("{{voucher_new}}",array(
		   'min_order'=>"float(14,5) NOT NULL DEFAULT '0'",
		   'monday'=>"int(1) NOT NULL DEFAULT '0'",
		   'tuesday'=>"int(1) NOT NULL DEFAULT '0'",
		   'wednesday'=>"int(1) NOT NULL DEFAULT '0'",
		   'thursday'=>"int(1) NOT NULL DEFAULT '0'",
		   'friday'=>"int(1) NOT NULL DEFAULT '0'",
		   'saturday'=>"int(1) NOT NULL DEFAULT '0'",
		   'sunday'=>"int(1) NOT NULL DEFAULT '0'",
		));
		
		$logger[] = DatataseMigration::createTable("{{order_time_management}}",array(
		    'id'=>'pk',
	        'group_id'=>"integer(14) NOT NULL DEFAULT '0'",
	        'merchant_id'=>"integer(14) NOT NULL DEFAULT '0'",
	        'transaction_type'=>"varchar(100) NOT NULL DEFAULT ''",
            'days'=>"varchar(200) NOT NULL DEFAULT ''",
            'start_time'=>"varchar(5) NOT NULL DEFAULT ''",
            'end_time'=>"varchar(5) NOT NULL DEFAULT ''",
            'number_order_allowed'=>"integer(14) NOT NULL DEFAULT '0'",
            'order_status'=>"text"
		));
		$logger[]  = DatataseMigration::createIndex("{{order_time_management}}",array(
		  'group_id','group_id','merchant_id','transaction_type','days','start_time','end_time'
		));		
		
		
		$logger[] = DatataseMigration::addColumn("{{mobile2_cart}}",array(
		  'minimum_order'=>"float(14,4) NOT NULL DEFAULT '0'",
		));			
		
		$logger[] = DatataseMigration::createTable("{{mobile_subscriber}}",array(
		   'id'=>'pk',		   
		   'subscription_type'=>"varchar(50) NOT NULL DEFAULT 'merchant_subscription'",		   
		   'device_id'=>"text", 
		   'merchant_id'=>"int(14) NOT NULL DEFAULT '0'",
		   'platform'=>"varchar(50) NOT NULL DEFAULT 'mobileapp2'",
		   'date_created'=>$date_default,
		   'ip_address'=>"varchar(50) NOT NULL DEFAULT ''"
		));
		$logger[]  = DatataseMigration::createIndex("{{mobile_subscriber}}",array(
		  'merchant_id','platform','subscription_type'
		));		
		/*end 1.5.8*/
		
		
		/*1.5.9*/
		$logger[] = DatataseMigration::addColumn("{{item}}",array(
		  'delivery_options'=>"text",
		));			
		$logger[] = DatataseMigration::addColumn("{{order}}",array(
		  'delivery_vehicle'=>"text",
		));			
		/*end 1.5.9*/
		
		$stmt="
		create OR REPLACE VIEW {{view_item2}} as
		select 
		a.item_id,
		a.item_token,
		a.merchant_id,
		a.item_name,
		a.item_name_trans,
		a.item_description,
		a.item_description_trans,
		a.status,
		a.addon_item,
		a.multi_option,
		a.multi_option_value,		
		a.two_flavors,
		a.two_flavors_position,
		a.require_addon,
		a.with_size,
		a.supplier_id,
		a.photo,
		a.gallery_photo,
		a.discount,
		a.not_available,
		a.cooking_ref,
		a.ingredients,
		a.spicydish,
		a.dish,
		a.sequence as item_sequence,
		IFNULL(b.item_size_id,'') as item_size_id,
		IFNULL(b.item_token,'') as item_size_token,
		IFNULL(b.size_id,0) as size_id,
		IFNULL(c.size_name,'') as size_name,
		IFNULL(c.size_name_trans,'') as size_name_trans,
		IFNULL(b.price,0) as price,
		IFNULL(b.cost_price,0) as cost_price,
		IFNULL(b.sku,'') as sku,
		a.track_stock,
		IFNULL(b.available,0) as available,
		IFNULL(b.low_stock,0) as low_stock
		
		from {{item}}  a
		left join {{item_relationship_size}} b
		on
		a.item_id = b.item_id
		
		left join {{size}} c
		on
		b.size_id = c.size_id
		";		
		
		if(Yii::app()->db->schema->getTable("{{item_relationship_size}}")){			
			if (Yii::app()->db->createCommand($stmt)->query()){				
				$logger[] = "Create table {{view_item}} done";
			} else $logger[] = "Create table {{view_item}} failed";			
		}

				
		$stmt="
		create OR REPLACE VIEW {{view_item_cat2}} as
		select 
		a.cat_id,
		c.category_name,
		c.category_description,
		c.category_name_trans,
		c.category_description_trans,
		c.sequence as category_sequence,
		c.status as category_status,
		b.*
		from {{item_relationship_category}} a
		left join {{view_item2}} b
		on 
		a.item_id = b.item_id
		
		left join {{category}} c
		on 
		a.cat_id = c.cat_id
		
		where b.item_id >0
		";		
				
		if( Yii::app()->db->schema->getTable("{{view_item2}}") && Yii::app()->db->schema->getTable("{{item_relationship_category}}") ){
			if (Yii::app()->db->createCommand($stmt)->query()){
				$logger[] = "Create table {{view_item_cat}} done";				
			} else $logger[] = "Create table {{view_item_cat}} failed";		
		}
		
		
		dump($logger);
		
		?>
		<br/>
		<a href="<?php echo Yii::app()->createUrl("mobileappv2/")?>">
		 <?php echo mt("Update done click here to go back")?>
		</a>
		<?php
	    
	}
		
	public function addIndex($table='',$index_name='')
	{
		
		$DbExt = new DbExt();		
		$prefix=Yii::app()->db->tablePrefix;		
		$table=$prefix.$table;
		
		$stmt="
		SHOW INDEX FROM $table
		";		
		$found=false;
		if ( $res=$DbExt->rst($stmt)){
			foreach ($res as $val) {				
				if ( $val['Key_name']==$index_name){
					$found=true;
					break;
				}
			}
		} 
		
		if ($found==false){
			echo "create index<br>";
			$stmt_index="ALTER TABLE $table ADD INDEX ( $index_name ) ";
			dump($stmt_index);
			$DbExt->qry($stmt_index);
			echo "Creating Index $index_name on $table <br/>";		
            echo "(Done)<br/>";		
		} else echo "$index_name index exist<br>";
	}
	
	public function alterTable($table='',$new_field='')
	{		
		$DbExt = new DbExt();
		$prefix=Yii::app()->db->tablePrefix;		
		$existing_field=array();
		if ( $res = Yii::app()->functions->checkTableStructure($table)){
			foreach ($res as $val) {								
				$existing_field[$val['Field']]=$val['Field'];
			}			
			foreach ($new_field as $key_new=>$val_new) {				
				if (!in_array($key_new,$existing_field)){
					echo "Creating field $key_new <br/>";
					$stmt_alter="ALTER TABLE ".$prefix."$table ADD $key_new ".$new_field[$key_new];
					dump($stmt_alter);
				    if ($DbExt->qry($stmt_alter)){
					   echo "(Done)<br/>";
				   } else echo "(Failed)<br/>";
				} else echo "Field $key_new already exist<br/>";
			}
		}
	}	
	
	public function executeStatement($stmt=array())
	{
		$DbExt = new DbExt();
		if(is_array($stmt) && count($stmt)>=1){
			foreach ($stmt as $val) {				
				$DbExt->qry($val);
			}
		}
	}
		
}
/*end class*/
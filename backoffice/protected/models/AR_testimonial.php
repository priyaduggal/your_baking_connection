<?php
class AR_testimonial extends CActiveRecord
{	
	   			
	public $multi_language,$type_name_trans;
	
	/**
	 * Returns the static model of the specified AR class.
	 * @return static the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{testimonials}}';
	}
	
	public function primaryKey()
	{
	    return 'id';	 
	}
		
	public function attributeLabels()
	{
		return array(
		    'id'=>t("ID"),
		    'image'=>t("Photo"),
		    'name'=>t("Name"),
		    'description'=>t("Description"),		    
		);
	}
	
	public function rules()
	{
		return array(
		  array('name,description,image', 
		  'required','message'=> t( Helper_field_required ) ),
		  
		
		);
	}

    protected function beforeSave()
	{
		if(parent::beforeSave()){
			
			if(DEMO_MODE){				
			    return false;
			}
			
			if($this->isNewRecord){
				$this->date_created = CommonUtility::dateNow();					
			} else {
				$this->date_modified = CommonUtility::dateNow();											
			}
			$this->ip_address = CommonUtility::userIp();	
			
			return true;
		} else return true;
	}
	
	protected function afterSave()
	{
		parent::afterSave();			
						
		$name = array();
		/*if($this->multi_language){						
			$name  = $this->type_name_trans;
			if(isset($name[KMRS_DEFAULT_LANGUAGE])){
				$name[KMRS_DEFAULT_LANGUAGE] = !empty($name[KMRS_DEFAULT_LANGUAGE])?$name[KMRS_DEFAULT_LANGUAGE]:$this->type_name;
			}			
		} else {
			$name[KMRS_DEFAULT_LANGUAGE] = $this->type_name;						
		}*/
// 		$name = $this->type_name_trans;		
// 		$name[KMRS_DEFAULT_LANGUAGE] = $this->type_name;		
		
// 		Item_translation::insertTranslation( 
// 		(integer) $this->id ,
// 		'id',
// 		'title',
// 		'',
// 		array(	                  
// 		  'type_name'=>$name,			  
// 		),"{{merchant_type_translation}}");
		
		/*ADD CACHE REFERENCE*/
		CCacheData::add();
	}
	
    protected function beforeDelete()
	{				
	    if(DEMO_MODE){				
		    return false;
		}
	    return true;
	}
	
	protected function afterDelete()
	{
		parent::afterDelete();		
		Item_translation::deleteTranslation($this->id,'id','merchant_type_translation');
		
		/*ADD CACHE REFERENCE*/
		CCacheData::add();
	}
		
}
/*end class*/

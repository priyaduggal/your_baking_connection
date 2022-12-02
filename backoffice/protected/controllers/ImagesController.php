<?php
class ImagesController extends Commonmerchant
{
		
	public function beforeAction($action)
	{				
		
		InlineCSTools::registerStatusCSS();
		InlineCSTools::registerOrder_StatusCSS();
			
		return true;
	}
		
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else	    	    
	        	$this->render('error', array(
	        	 'error'=>$error
	        	));
	    }
	}
	
	public function actionindex()
	{
		$this->redirect(array(Yii::app()->controller->id.'/gallery'));
	}
	
	public function actiongallery()
	{
	  
		$this->pageTitle=t("Inspiration Gallery");
		$action_name='gallery_list';
		$delete_link = Yii::app()->CreateUrl(Yii::app()->controller->id."/gallery_delete");
		
		$merchant_id = (integer) Yii::app()->merchant->merchant_id;
		$upload_path = CMedia::merchantFolder();
		
		if(isset($_POST['yt0'])){			
									
			if(DEMO_MODE && in_array($merchant_id,DEMO_MERCHANT)){		
			    $this->render('//tpl/error',array(  
			          'error'=>array(
			            'message'=>t("Modification not available in demo")
			          )
			        ));	
			    return false;
			}
				
			AR_merchant_meta::model()->deleteAll('merchant_id=:merchant_id 			
			AND meta_name=:meta_name', 
			 array(
			    ':merchant_id' => $merchant_id,			    
			    ':meta_name'=>AttributesTools::metaMedia()
			));
			
			if(isset($_POST['merchant_gallery'])){	
				$params = array();				
				foreach ($_POST['merchant_gallery'] as $key=> $items) {
					$params[]=array(
					  'merchant_id'=>$merchant_id,					  
					  'meta_name'=>AttributesTools::metaMedia(),
					  'meta_value'=>$items,
					  //'meta_value1'=>isset($_POST['path'][$key])?$_POST['path'][$key]:$upload_path,
					  'meta_value1'=>$upload_path,
					  'date_modified'=>CommonUtility::dateNow()
					);				
				}					
				$builder=Yii::app()->db->schema->commandBuilder;
				$command=$builder->createMultipleInsertCommand('{{merchant_meta}}',$params);
				$command->execute();	
			}
			
			Yii::app()->user->setFlash('success',CommonUtility::t(Helper_update));
			$this->refresh();		
		}
		
		$gallery = array();
		$meta = AR_merchant_meta::model()->findAll("merchant_id=:merchant_id 
		AND meta_name=:meta_name ",array(
		  ':merchant_id'=>$merchant_id,		  
		  ':meta_name'=>AttributesTools::metaMedia()
		));
		if($meta){
			foreach ($meta as $item) {				
				$gallery[] = $item->meta_value;
			}			
		}
		
	
		
            $meta1=Yii::app()->db->createCommand('
            SELECT st_merchant_inspiration_gallery.*,st_dishes.dish_name
            FROM st_merchant_inspiration_gallery
            INNER JOIN st_dishes on st_dishes.dish_id=st_merchant_inspiration_gallery.category_id
            where st_merchant_inspiration_gallery.merchant_id='.$merchant_id.'
            GROUP BY category_id
            ORDER BY id DESC
            ')->queryAll();

		$this->render("gallery",array(		 
		  'gallery'=>$meta1,
		  'upload_path'=>$upload_path
		));
	}
	public function actionaddGallery() {
	    $merchant_id = (integer) Yii::app()->merchant->merchant_id;
         if(isset($_POST['submit'])){
             	if(isset($_POST['photo'])){	
				$params = array();				
				foreach ($_POST['photo'] as $key=> $items) {
					$params[]=array(
					  'merchant_id'=>$merchant_id,					  
					  'title'=>$_POST['title'],
					  'image'=>$items,
					  'inspiration'=>$_POST['inspiration'],
					  'gallerywork'=>$_POST['gallerywork'],
					  'category_id'=>$_POST['category_id'],
					  
					
					);				
				}					
				$builder=Yii::app()->db->schema->commandBuilder;
				$command=$builder->createMultipleInsertCommand('{{merchant_inspiration_gallery}}',$params);
				$command->execute();	
			}
			Yii::app()->user->setFlash('success',CommonUtility::t(Helper_update));
			$this->refresh();		
         }
         	$upload_path = CMedia::merchantFolder();
        $model = AR_dishes::model()->findall();
        return $this->render('/images/addgallery',array(		    
        'model'=>$model,
         'upload_path'=>$upload_path,
        ));
}
	public function actiondeleteGallery($id) {
	  
	    $merchant_id = (integer) Yii::app()->merchant->merchant_id;
	    $all=Yii::app()->db->createCommand('
        SELECT st_merchant_inspiration_gallery.*,st_merchant.restaurant_name
        FROM st_merchant_inspiration_gallery
        INNER JOIN st_merchant on st_merchant.merchant_id=st_merchant_inspiration_gallery.merchant_id
        Where  st_merchant_inspiration_gallery.id='.$id.'')->queryAll(); 
        $gallery=array();
        $all1=Yii::app()->db->createCommand('
        DELETE FROM `st_merchant_inspiration_gallery` WHERE 
        st_merchant_inspiration_gallery.merchant_id='.$merchant_id.' and
        st_merchant_inspiration_gallery.category_id='.$all[0]['category_id'].'')->queryAll(); 
        Yii::app()->user->setFlash('success','Deleted successfully');
        $this->redirect(array(Yii::app()->controller->id.'/gallery'));
                 
	}
	public function actioneditGallery($id) {
	 
	     $merchant_id = (integer) Yii::app()->merchant->merchant_id;
         if(isset($_POST['submit'])){
               $all1=Yii::app()->db->createCommand('
                 DELETE FROM `st_merchant_inspiration_gallery` WHERE 
                 st_merchant_inspiration_gallery.merchant_id='.$merchant_id.' and
                 st_merchant_inspiration_gallery.category_id='.$_POST['category_id'].'')->queryAll();   
                 
             	if(isset($_POST['photo'])){	
             	  
				$params = array();	
				
				
				foreach ($_POST['photo'] as $key=> $items) {
					$params[]=array(
					  'merchant_id'=>$merchant_id,					  
					  'title'=>$_POST['title'],
					  'image'=>$items,
					  'inspiration'=>$_POST['inspiration'],
					  'gallerywork'=>$_POST['gallerywork'],
					  'category_id'=>$_POST['category_id'],
					  
					
					);				
				}					
				$builder=Yii::app()->db->schema->commandBuilder;
				$command=$builder->createMultipleInsertCommand('{{merchant_inspiration_gallery}}',$params);
				$command->execute();
					$this->redirect(array(Yii::app()->controller->id.'/gallery'));
			}
			Yii::app()->user->setFlash('success',CommonUtility::t(Helper_update));
			$this->refresh();		
         }
        $upload_path = CMedia::merchantFolder();
        $model = AR_dishes::model()->findall();
        
        $all=Yii::app()->db->createCommand('
        SELECT st_merchant_inspiration_gallery.*,st_merchant.restaurant_name
        FROM st_merchant_inspiration_gallery
        INNER JOIN st_merchant on st_merchant.merchant_id=st_merchant_inspiration_gallery.merchant_id
        Where  st_merchant_inspiration_gallery.id='.$id.'')->queryAll(); 
        $gallery=array();
        $all1=Yii::app()->db->createCommand('
        SELECT st_merchant_inspiration_gallery.image
        FROM st_merchant_inspiration_gallery
        INNER JOIN st_merchant on st_merchant.merchant_id=st_merchant_inspiration_gallery.merchant_id
        Where  st_merchant_inspiration_gallery.category_id='.$all[0]['category_id'].'')->queryAll(); 
        if($all1){
			foreach ($all1 as $item) {				
				$gallery[] = $item['image'];
			}			
		}
	
       
        return $this->render('/images/editgallery',array(		    
        'model'=>$model,
        'upload_path'=>$upload_path,
        'data'=>$all,
        'all1'=>$gallery,
        ));
}
	public function actiongallery_create()
	{
		$this->pageTitle=t("Add Gallery");
		CommonUtility::setMenuActive('.merchant_images','.images_gallery');		
		
		$upload_ajaxurl = Yii::app()->createUrl("/upload");
		$upload_params = array(
		  Yii::app()->request->csrfTokenName=>Yii::app()->request->csrfToken,		  
		);		
		$upload_params = json_encode($upload_params);
		
		ScriptUtility::registerScript(array(
		  "var upload_ajaxurl='$upload_ajaxurl';",		  
		  "var upload_params='$upload_params';",		  
		),'upload_ajaxurl');
				
		
		$this->render("/merchant/gallery_create",array(
		  'links'=>array(
	            t("All Gallery")=>array(Yii::app()->controller->id.'/gallery'),    	            
		    ),	    	
		   'done'=>Yii::app()->CreateUrl(Yii::app()->controller->id."/gallery")
		));
	}
	
	public function actiongallery_delete()
	{
		$this->actionmedia_remove(Yii::app()->controller->id."/gallery");
	}
	
	public function actionmedia_remove($page_redirect='')
	{
		$merchant_id = (integer) Yii::app()->merchant->merchant_id;		
		$id = (integer) Yii::app()->input->get('id');	
		$page = Yii::app()->input->get('page');	
		$page = !empty($page)?$page:$page_redirect;
		
		$model = AR_media::model()->find('merchant_id=:merchant_id AND id=:id', 
		array(':merchant_id'=>$merchant_id, ':id'=>$id ));
				
		if($model){
			$model->delete(); 
			Yii::app()->user->setFlash('success', t("Succesful") );					
			$this->redirect(array($page));			
		} else $this->render("error");
	}
	
	public function actionmedia_library()
	{
		$this->pageTitle=t("Media Library");
		$action_name='media_list';
		$delete_link = Yii::app()->CreateUrl(Yii::app()->controller->id."/media_delete");
		
		/*ScriptUtility::registerScript(array(
		  "var action_name='$action_name';",
		  "var delete_link='$delete_link';",
		),'action_name');
		
		
		$this->render("//tpl/lazy_list",array(
		  'link'=>Yii::app()->CreateUrl(Yii::app()->controller->id."/media_create")
		));	*/
				
		$upload_path = CMedia::merchantFolder();
		
		$this->render("media_gallery",array(
		  'upload_path'=>$upload_path
		));
	}
	
    public function actionmedia_create()
	{
		$this->pageTitle=t("Add Media");
		CommonUtility::setMenuActive('.merchant_images','.images_gallery');		
		
		$upload_ajaxurl = Yii::app()->createUrl("/upload");
		$upload_params = array(
		  Yii::app()->request->csrfTokenName=>Yii::app()->request->csrfToken,		  
		);		
		$upload_params = json_encode($upload_params);
		
		ScriptUtility::registerScript(array(
		  "var upload_ajaxurl='$upload_ajaxurl';",		  
		  "var upload_params='$upload_params';",		  
		),'upload_ajaxurl');
				
		
		$this->render("/merchant/gallery_create",array(
		  'links'=>array(
	            t("All Media")=>array(Yii::app()->controller->id.'/media_library'),    	            
		    ),	    	
		   'done'=>Yii::app()->CreateUrl(Yii::app()->controller->id."/media_library")
		));
	}		
	
	public function actionmedia_delete()
	{
		$this->actionmedia_remove(Yii::app()->controller->id."/media_library");
	}
	
	
}
/*end class*/
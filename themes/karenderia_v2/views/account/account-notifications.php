<section class="page-title">
   <div class="auto-container">
      <h1>Notifications</h1>
   </div>
</section>
<section class="accountinfo contactus">
<div class="container">
<div class="row">
 <div class="col-lg-4 col-md-3  d-none d-lg-block">
   <?php $this->renderPartial("//layouts/sidebar")?>
</div>
<div class="col-lg-8 col-md-9 profilebox pt-0 loginbox">
            <div class="card boxsha">
               <div class="card style-2">
                  <div class="card-header">
                     <h4 class="mb-0">Notifications</h4>
                  </div>
                  <div class="card-body">
                     <ul class="listitem">
                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>

                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user1.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>

                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>

                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user1.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>

                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>

                        <li>
                           <img alt="" src="<?php echo Yii::app()->theme->baseUrl."/assets/images/user1.jpg"?>">
                           <div class="listitem__info">
                              <a class="listitem__username" href="#"> Lorem Ipsum is simply </a>
                              <p class="listitem__text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry </p>
                           </div>
                           <span class="time-rigt">
                              <i class="fa fa-clock-o"></i> 4 hours ago 
                           </span>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>    
</div>
</div>
</div>
</section>



<div class="d-none">
<?php 
$this->renderPartial('//account/my-profile-header',array(
	'avatar'=>$avatar,
	'model'=>$model,
	'menu'=>$menu
));
?>

<div class="card">
  <div class="card-body p-0 p-lg-3">
  
  <div class="row">
    <div class="col-md-4 d-none d-lg-block">
    
    <div class="preview-image mb-2">
     <div class="col-lg-7">
      
	    <?php 
		$this->renderPartial('//account/my-profile-photo',array(
			'avatar'=>$avatar,			
		));
		?>
      
     </div>     
    </div>
     
    <div class="attributes-menu-wrap">
    <?php $this->widget('application.components.WidgetUserProfile',array());?>
    </div>
    
    </div> <!--col-->

    <div class="col-lg-8 col-md-12">    
    
	<div class="card">
	  <div class="card-body p-1 p-lg-3" id="vue-webpush-settings" v-cloak>
	
	  
	  <components-web-pusher
	  ref="pushsettings"
	  ajax_url="<?php echo Yii::app()->createUrl("/api")?>" 
	  :settings="{    
	    instance_id : '<?php echo $pusher_instance_id;?>',    
	    site_name : '<?php echo 'Karenderia';?>',  
	  }"  
	  :iterest_list='<?php echo json_encode($iterest_list)?>'
	  
	  :message="{    
	    could_not_get_device : '<?php echo t('Could not get device interests');?>',    
	    notification_enabled : '<?php echo t('notifications enabled');?>',    
	    notification_disabled : '<?php echo t('notifications disabled');?>',    
	    notification_stop : '<?php echo t('Could not stop Beams SDK');?>',    
	    notification_start : '<?php echo t('Could not start Beams SDK');?>', 
	    notification_save : '<?php echo t('Notification type save');?>',    
	    notification_could_not_set_device : '<?php echo t('Could not set device interests');?>',    
	  }"  
	  
	  >
	  </components-web-pusher>
	
	
	  </div>
	</div>
    
	<script type="text/x-template" id="xtemplate_webpushsettings">
		<DIV class="position-relative">
		
		<div v-if="is_loading" class="loading cover-loader d-flex align-items-center justify-content-center">
		    <div>
		      <div class="m-auto circle-loader medium" data-loader="circle-side"></div> 
		    </div>
		</div>
		
		
		<h5 class="mt-3"><?php echo t("Notifications Settings")?></h5>
		
		<div class="custom-control custom-switch custom-switch-md">
		  <input @change="enabledWebPush" v-model="webpush_enabled" value="1" type="checkbox" class="custom-control-input" id="webpush_enabled">
		  <label class="custom-control-label" for="webpush_enabled"><?php echo t("Enabled")?></label>
		</div>
		
		
		<div class="mt-3">
		<h5><?php echo t("Communication preferences")?></h5>
		<p class="text-muted"><?php echo t("Select only the marketing messages you would like to receive from {{settings.site_name}}. You will still receive transactional emails including but not limited to information about your account and certain other updates such as those related to safety and privacy.")?></p>
		<div class="row ">
		   <div v-for="(item, key)  in iterest_list" class="col-md-4 mb-3">
		       <div class="custom-control custom-checkbox">
				  <input v-model="interest" class="custom-control-input" type="checkbox" :value="key" :id="key">
				  <label class="custom-control-label" :for="key">
				    {{item}}
				  </label>
				</div>
		   </div>
		</div>
		</div>
				
		<button @click="saveWebNotifications" class="mt-3 btn btn-green w-100" :class="{ loading: is_submitted }" :disabled="is_submitted"  >
          <span class="label"><?php echo t("Submit")?></span>
          <div class="m-auto circle-loader" data-loader="circle-side"></div>
       </button>
		
		
		</DIV>
		</script>

    </div>
  </div> 
  
  </div>
</div> 
</div>
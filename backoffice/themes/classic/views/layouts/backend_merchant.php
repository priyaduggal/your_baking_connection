<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="noindex, nofollow" />
<meta name="<?php echo Yii::app()->request->csrfTokenName?>" content="<?php echo Yii::app()->request->csrfToken?>" />    
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/merchant.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/themify-icons.css"/>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/aos.css">
<title><?php echo CHtml::encode($this->pageTitle); ?> </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="<?php echo $this->getBodyClasses(); ?>">
<div class="loader"></div>  
    <?php $this->renderPartial("/layouts/header");?>
<section class="page-title">
   <div class="auto-container">
       <?php if($this->pageTitle=='Dashboard'){
       ?>
       <h1>Reports</h1>
       <?php }elseif($this->pageTitle=='Back Office - Manage Plan'){ ?>
         <h1>Manage Plan</h1>
       <?php }elseif($this->pageTitle=='Back Office - Bakerresources Merchant'){ ?>
         <h1>Baker Resources</h1>
      
       
      <?php }else{ ?>
           
         <h1><?php echo CHtml::encode($this->pageTitle); ?></h1>  
      <?php }?>
      
   </div>
</section>
     <DIV id="vue-top-nav" class="top-main-wrapper d-none">
 <div class="top-container headroom">
 
   <!--desktop-top-menu-->
    <div id="desktop-top-menu" class="row m-0">

        <div class="col-md-5 d-none d-lg-block" >
	    
        <div class="d-flex align-items-center flex-row">
               
         <components-merchant-status
		  ref="merchant_status"
		  ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>" 
		 tpl="2"		  
		 :label="{    
		   current_status : '<?php echo CJavaScript::quote(("Current status"))?>',   
		   trial_ended : '<?php echo CJavaScript::quote(("Trial has ended"))?>',		  
		 }"   
		  >
		  </components-merchant-status>
         
		 <div class="p-2 align-self-center">
         
		 <components-pause-order
	      ref="pause_order"
	      ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>"
	      @after-clickpause="afterClickpause"
		  :label="{
			accepting_orders : '<?php echo CJavaScript::quote(t("Accepting Orders"))?>',  		
			not_accepting_orders : '<?php echo CJavaScript::quote(t("Not accepting orders"))?>',  		
			store_pause : '<?php echo CJavaScript::quote(t("Store pause for"))?>',  
		  }"  		
	     />
	     </components-pause-order>	     
		 
         </div>
         <!--p-2-->
		  
         <div class="p-2 align-self-center">         
          <a class="btn btn-sm" href="<?php echo CMedia::homeUrl()."/".Yii::app()->merchant->restaurant_slug?>" target="_blank" title="<?php echo t("Preview store")?>"><i class="zmdi zmdi-desktop-mac"></i>
		  </a>
         </div>
         <!--p-2-->
               
        
        </div>
        <!--flex-->
        
	    </div> <!--col-->

	    <div class="col-lg-7 col-md-12 " >
	    
	      <div class="top-menu-nav float-rightx">
	    		  
	      <div class="d-flex flex-row align-items-center justify-content-end">
		 
		  <div class="align-self-center d-block d-lg-none">         
          <a class="btn btn-sm" href="<?php echo CMedia::homeUrl()."/".Yii::app()->merchant->restaurant_slug?>" target="_blank" title="<?php echo t("Preview store")?>"><i class="zmdi zmdi-desktop-mac"></i>
		  </a>
          </div>      

		  <div class="p-0 p-lg-2 ">     
		   <?php $this->widget('application.components.WidgetLanguageselection');?>
	       </div>

		  <div class="p-2 d-none d-lg-block ">     
	         <img class="img-40 rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />	       
	       </div>		   

	       <div class="p-2 mr-4 d-lg-block  line-bottom">
	           <div class="dropdown userprofile">	      
				  <a class="btn btn-sm dropdown-toggle text-truncate" href="#" 
		          role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    <?php echo MerchantTools::displayAdminName();?>
				  </a>
				
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/profile");?>">					
					<?php echo t("Profile")?>
				    </a>
				    <?php if(Yii::app()->merchant->merchant_type==1):?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl('/plan/manage')?>">					
					<?php echo t("Manage Plan")?>
				    </a>
				    <?php endif;?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/logout")?>">				    
					<?php echo t("Logout")?>
				    </a>			    
				  </div>
				</div>		            
	       </div>		   

		   <div class="p-0 d-block d-lg-none align-self-center ">     	         
			 <div class="dropdown userprofile">	      
			   <a class="btn btn-sm dropdown-toggle text-truncate" href="javascript:;" 
			   role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				 <img class="img-40 rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />
			   </a>
			 
			   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/profile");?>">					
					<?php echo t("Profile")?>
				    </a>
				    <?php if(Yii::app()->merchant->merchant_type==1):?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl('/plan/manage')?>">					
					<?php echo t("Manage Plan")?>
				    </a>
				    <?php endif;?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/logout")?>">				    
					<?php echo t("Logout")?>
				    </a>			    
				</div>
			  
			 </div>			  
	       </div>	<!--p-3-->
	       	       
		   
		   <div id="vue-notificationsx" class="p-2 mr-2 mr-lg-4 ">		 		     
		     <components-notification
		     ref="notification"
		     ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>" 		     
		     view_url="<?php echo Yii::app()->createUrl("/merchant/all_notification")?>" 
		     :realtime="{
			   enabled : '<?php echo Yii::app()->params['realtime_settings']['enabled']==1?true:false ;?>',  
			   provider : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['provider'] )?>',  			   
			   key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['key'] )?>',  			   
			   cluster : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['cluster'] )?>', 
			   ably_apikey : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['ably_apikey'] )?>', 
			   piesocket_api_key : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_api_key'] )?>', 
			   piesocket_websocket_api : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_websocket_api'] )?>', 
			   piesocket_clusterid : '<?php echo CJavaScript::quote( Yii::app()->params['realtime_settings']['piesocket_clusterid'] )?>', 
			   channel : '<?php echo CJavaScript::quote( Yii::app()->merchant->merchant_uuid )?>',  			   
			   event : '<?php echo CJavaScript::quote( Yii::app()->params->realtime['notification_event'] )?>',  
			 }"  			 
		     :label="{
			  title : '<?php echo CJavaScript::quote(t("Notification"))?>',  
			  clear : '<?php echo CJavaScript::quote(t("Clear all"))?>',  
			  view : '<?php echo CJavaScript::quote(t("View all"))?>',  			  
			  pushweb_start_failed : '<?php echo CJavaScript::quote(t("Could not push web notification"))?>',  			  
			  no_notification : '<?php echo CJavaScript::quote(t("No notifications yet"))?>',  	
			  no_notification_content : '<?php echo CJavaScript::quote(t("When you get notifications, they'll show up here"))?>',  	
			}"  			 
		     >		      
		     </components-notification>
		   </div> <!--p-2-->		

		   <div class="d-block d-lg-none">         
			<div class="hamburger hamburger--3dx ssm-toggle-nav">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
			</div> 	   
		  </div> <!--p2-->
		   
		  </div> <!--flex-->
	      
	      </div><!--top-menu-nav-->	      
	      
	    </div>
    </div> <!--row desktop-top-menu-->
    
 </div> <!--top-container-->
  
<components-pause-modal
ref="pause_modal"
ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>"
@after-pause="afterPause"
:label="{
   pause_new_order:'<?php echo CJavaScript::quote(t("Pause New Orders"))?>',       
   resume_orders:'<?php echo CJavaScript::quote(t("How long you would like to pause new orders?"))?>',
   cancel:'<?php echo CJavaScript::quote(t("Cancel"))?>',
   confirm:'<?php echo CJavaScript::quote(t("Confirm"))?>',
   reason:'<?php echo CJavaScript::quote(t("Reason for pausing"))?>',
   next:'<?php echo CJavaScript::quote(t("Next"))?>',
   hours:'<?php echo CJavaScript::quote((t("hours")))?>',
   minute:'<?php echo CJavaScript::quote((t("minutes")))?>',
}"
/>
</components-pause-modal>

<components-resume-order-modal
ref="resume_order"
ajax_url="<?php echo Yii::app()->createUrl("/apibackend")?>"
@after-pause="afterPause"
:label="{
   store_pause:'<?php echo CJavaScript::quote(t("Store Pause"))?>',       
   resume_orders:'<?php echo CJavaScript::quote(t("Would you like to resume accepting orders?"))?>',
   cancel:'<?php echo CJavaScript::quote(t("Cancel"))?>',
   confirm:'<?php echo CJavaScript::quote(t("Confirm"))?>',
}"
/>
</components-resume-order-modal>

 </DIV> <!--top main wrapper-->
 
<section class="accountinfo contactus merchantmain">
    <div class="container merchantcontainer">
            <div class="row">
                  <div class="col-lg-4 col-md-3  merchantleft">
            <?php $this->renderPartial("/layouts/sidebar");?>
             </div>

 <div class="col-lg-8 col-md-9 profilebox pt-0 loginbox tabs-box merchantright">   
  <?php echo $content;?>
  </div>
  
 <!--div class="main-container d-none">
    <div class="main-container-wrap">
       <div class="container">
       <?php //echo $content;?>
       </div>
    </div> 
 </div-->
 
<div class="ssm-overlay ssm-toggle-nav"></div>
</div>
</div>
</section>
 
<!--/div--><!--container-->

<?php $this->renderPartial("/layouts/footer");?>
</body>

<script>$('.summernote').summernote({
		tabsize: 2,
		height: 300,
		toolbar: [
		  ['style', ['style']],
		  ['font', ['bold', 'underline', 'clear']],
		  ['color', ['color']],
		  ['para', ['ul', 'ol', 'paragraph']],
		  ['table', ['table']],
		  ['insert', ['link', 'picture', 'video']],
		  ['view', ['fullscreen', 'codeview', 'help']]
		]
	  });</script>
	   <script>
              	jQuery(document).ready(function () {
		  ImgUpload();
		});

		function ImgUpload() {
		  var imgWrap = "";
		  var imgArray = [];

		  $(".upload__inputfile").each(function () {
			$(this).on("change", function (e) {
			  imgWrap = $(this).closest(".upload__box").find(".upload__img-wrap");
			  var maxLength = $(this).attr("data-max_length");

			  var files = e.target.files;
			  var filesArr = Array.prototype.slice.call(files);
			  var iterator = 0;
			  filesArr.forEach(function (f, index) {
				if (!f.type.match("image.*")) {
				  return;
				}

				if (imgArray.length > maxLength) {
				  return false;
				} else {
				  var len = 0;
				  for (var i = 0; i < imgArray.length; i++) {
					if (imgArray[i] !== undefined) {
					  len++;
					}
				  }
				  if (len > maxLength) {
					return false;
				  } else {
					imgArray.push(f);

					var reader = new FileReader();
					reader.onload = function (e) {
					  var html =
						"<div class='upload__img-box'><div style='background-image: url(" +
						e.target.result +
						")' data-number='" +
						$(".upload__img-close").length +
						"' data-file='" +
						f.name +
						"' class='img-bg'><div class='upload__img-close'></div></div></div>";
					  imgWrap.append(html);
					  iterator++;
					};
					reader.readAsDataURL(f);
				  }
				}
			  });
			});
		  });

		  $("body").on("click", ".upload__img-close", function (e) {
			var file = $(this).parent().data("file");
			for (var i = 0; i < imgArray.length; i++) {
			  if (imgArray[i].name === file) {
				imgArray.splice(i, 1);
				break;
			  }
			}
			$(this).parent().parent().remove();
		  });
		}
		
		//Accordion Box
	if($('.accordion-box').length){
		$(".accordion-box").on('click', '.acc-btn', function() {
			
			var outerBox = $(this).parents('.accordion-box');
			var target = $(this).parents('.accordion');
			
			if($(this).hasClass('active')!==true){
				$(outerBox).find('.accordion .acc-btn').removeClass('active ');
			}
			
			if ($(this).next('.acc-content').is(':visible')){
				return false;
			}else{
				$(this).addClass('active');
				$(outerBox).children('.accordion').removeClass('active-block');
				$(outerBox).find('.accordion').children('.acc-content').slideUp(300);
				target.addClass('active-block');
				$(this).next('.acc-content').slideDown(300);	
			}
		});	
	}
            </script>   
            <script type="text/javascript">
// All objects loaded, animate left/ fade

$(window).on("load",function(){ 
  
  //Fade Out
  //$(".loader").delay(1500).fadeOut(500);
  
  //Slide Left
  $(".loader").delay(1500).animate({width:'toggle'},2000);
  
});
</script>
    <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/aos.js"></script>
<script>
		AOS.init({
			easing: 'ease-out-back',
			duration: 1000
		});
	</script>
</html> 
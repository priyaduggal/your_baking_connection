<div class="logo-main"  style="background-image:url('<?php echo Yii::app()->theme->baseUrl?>/assets/images/web.gif')">
      <div class="top-logo">    
               <?php 
                   $this->widget('application.components.WidgetLogo',array(
                     'class_name'=>'top-logo',
            		'link'=>Yii::app()->createUrl("/orders/history")
                   ));
                   ?>	  
</div>    
</div>
<nav  class="navbar navbar-expand-xl navbar-light">
    <div class="auto-container">
 <div id="top-navigation" class="p-0">       
   
 <ul  class="top-menu list-unstyled navbar-nav me-auto mb-2 mb-lg-0"> 
<li class="nav-item d-none d-lg-inline Active ">
    <a href="<?php echo Yii::app()->createUrl("/orders/history")?>" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="#" class="nav-link">Search</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="#" class="nav-link">Inspiration Gallery</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="#" class="nav-link">Baker Membership</a>
</li>
<li class="nav-item d-none d-lg-inline ">
    <a href="#" class="nav-link">About The Bakers</a>
</li>
<li class=" d-none d-lg-block nav-item lastchild">
	           <div class="dropdown userprofile">	      
				  <a class="btn btn-sm dropdown-toggle text-truncate nav-link" href="#" 
		          role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  <img class="img-40 rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />	    <?php echo MerchantTools::displayAdminName();?>
				  </a>
				
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/profile");?>">					
					<?php echo t("Profile")?>
				    </a>
				    <?php //if(Yii::app()->merchant->merchant_type==1):?>
				    <!--a class="dropdown-item" href="<?php //echo Yii::app()->createUrl('/plan/manage')?>">					
					<?php //echo t("Manage Plan")?>
				    </a-->
				    <?php //endif;?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/logout")?>">				    
					<?php echo t("Logout")?>
				    </a>			    
				  </div>
				</div>		            
	       </li>		   

		   <li class="p-0 d-block d-lg-none nav-item lastchild">     	         
			 <div class="dropdown userprofile">	      
			   <a class="btn btn-sm dropdown-toggle text-truncate nav-link" href="javascript:;" 
			   role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				 <img class="img-40 rounded-circle" src="<?php echo MerchantTools::getProfilePhoto()?>" />
			   </a>
			 
			   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/profile");?>">					
					<?php echo t("Profile")?>
				    </a>
				    <?php //if(Yii::app()->merchant->merchant_type==1):?>
				    <!--a class="dropdown-item" href="<?php //echo Yii::app()->createUrl('/plan/manage')?>">					
					<?php //echo t("Manage Plan")?>
				    </a-->
				    <?php //endif;?>
				    <a class="dropdown-item" href="<?php echo Yii::app()->createUrl($this->ctr_name."/logout")?>">				    
					<?php echo t("Logout")?>
				    </a>			    
				</div>
			  
			 </div>			  
	       </li>
 </ul>
</div>
</div>
</nav>
<?php
Yii::import('zii.widgets.CMenu', true);

class WidgetCustomerMenu extends CMenu
{		 
	 public function init()
	 {		 		 	  
	 	  $menu = array();
	 	  
	 	  $menu[]=array(
	 	    'label'=>t("Profile Settings"),
	 	    'url'=>array("/account/profile"),
	 	    'itemOptions'=>array(
	 	      'class'=>"account"
	 	    )
	 	  );
	 	  
	 	  $menu[]=array(
	 	    'label'=>t("My Orders"),
	 	    'url'=>array("/account/orders"),
	 	    'itemOptions'=>array(
	 	      'class'=>"orders"
	 	    )
	 	  );
	 	  	 	
	 	  $menu[]=array(
	 	    'label'=>t("Addresses"),
	 	    'url'=>array("/account/addresses"),
	 	    'itemOptions'=>array(
	 	      'class'=>"addresses"
	 	    )
	 	  );	
	 	  $menu[]=array(
	 	    'label'=>t("Payment Methods"),
	 	    'url'=>array("/account/payments"),
	 	    'itemOptions'=>array(
	 	      'class'=>"payments"
	 	    )
	 	  );	 	  	 	  	 	  
	 	  $menu[]=array(
	 	    'label'=>t("My Favorites"),
	 	    'url'=>array("/account/favourites"),
	 	    'itemOptions'=>array(
	 	      'class'=>"favourites"
	 	    )
	 	  );	
	 	   $menu[]=array(
	 	    'label'=>t("Notifications"),
	 	    'url'=>array("/account/notifications-list"),
	 	    'itemOptions'=>array(
	 	      'class'=>"notifications"
	 	    )
	 	  );
	 	  	  $menu[]=array(
	 	    'label'=>t("Logout"),
	 	    'url'=>array("/account/logout"),
	 	    'itemOptions'=>array(
	 	      'class'=>"logout"
	 	    )
	 	  );
	 	  $this->items = $menu;	 	  
	 	  	 	  
	 	  $this->encodeLabel = false;
	 	  $this->activeCssClass = "active";
	 	  $this->activateParents = true;
	 	  $this->htmlOptions = array(
	 	    'class'=>'siderbar-menu list-unstyled'
	 	  ); 
	 	  $this->submenuHtmlOptions = array(
	 	    'class'=>'siderbar-sub-menu'
	 	  ); 
	 	  
	 	  parent::init();
	 }
	 
}
/*end class*/
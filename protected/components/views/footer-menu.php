<?php if(is_array($menu) && count($menu)>=1):?>
<div class="row sub-footer-nav">   
<div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
    <h4>Contact Us</h4>
    <a href="#" class="linka">baking-connection@example.com</a>
    <ul class="list-unstyled mb-0 social-icons">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
	</ul>
</div>
   <?php foreach ($menu as $item):?>
   <div class="col-lg-3 col-md-4 col-sm-6 col-6 mb-2">
      <h4><?php echo t($item['label'])?></h4>
      <?php $this->widget('application.components.WidgetSiteMapMenu' , array(
         'items'=>isset($item['items'])?$item['items']:array()
      ) );?>
   </div>
   <?php endforeach;?>
</div>
<?php endif;?>
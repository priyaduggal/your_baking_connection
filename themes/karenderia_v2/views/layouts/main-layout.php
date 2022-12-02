<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="robots" content="noindex, nofollow" />
<meta name="<?php echo Yii::app()->request->csrfTokenName?>" content="<?php echo Yii::app()->request->csrfToken?>" />    
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/favicon-16x16.png">
<link rel="manifest" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/site.webmanifest">
<link rel="mask-icon" href="<?php echo Yii::app()->theme->baseUrl?>/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
 <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/jquery.fancybox.min.css">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<title>Your Baking Connection</title>
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/aos.css">
      <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/themify-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl?>/assets/css/flaticon.css">
</head>
<body class="position-relative <?php echo $this->getBodyClasses(); ?>" data-spy="scroll" data-target="#menu-category" data-offset="75" >
  <div class="loader"></div>  
<?php echo $content; ?>

</body>
 <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/jquery.fancybox.js"></script>
<script>
		$('.owl-carousel2').owlCarousel({
			loop: true,
			margin: 0,
			dots: false,
			nav: true,
			navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			items: 3,
		})
	</script>
		  <script type="text/javascript">
		  //  $('.clickmerchant').click(function(){
    //                 alert();
    //                 var id=$(this).attr('data-id');
    //                 alert(id);
                    
    //             });
        $( document ).ready(function() {
    
      //$('.radiomember').trigger('click');
      $(".radiomember").first().click();
      $(".radiomember").val('1').prop("checked", true);
      $("input:radio[id=1]:first").attr('checked', 'checked');
            $('body').on('click','.learn_more',function(){
               var id=$(this).attr('data-id');
               $('.showdata').slideToggle();
            });   
            $('body').on('click','.learn_more1',function(){
               var id=$(this).attr('data-id');
               $('.showdata1').slideToggle();
            });
            $('body').on('click','.clickmerchant',function(){
                var id=$(this).attr('data-id');
                window.location.href = 'signup?id='+id;
                //location.reload('/merchant/signup')
            });
            
                // $('.clickmerchant').click(function(){
                //     alert();
                //     var id=$(this).attr('data-id');
                //     alert(id);
                    
                // });
                
                	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
                	
                	
                $('.saveStore').click(function(){
                var id=$(this).attr('data-id');
                $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/api/saveImage",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({'id':  id,'YII_CSRF_TOKEN':token}),
            
                success: function (response) {
                    if(response.code==1){
                        alert('Login First');
                    }else if(response.code==3){
                        $('.saveStoreid'+id).html('<i class="fa fa-heart-o"></i>');
                         
                    }else{
                        $('.saveStoreid'+id).html('<i class="fa fa-heart"></i>');
                         
                    }
               
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
                
                });
        });
	$(window).on('load', function() {
		$('#myModal').modal('show');
	});
	$(document).on('click','.closing',function(){
		$('#myModal').modal('hide');
	})
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
	  <script src="<?php echo Yii::app()->theme->baseUrl?>/assets/js/mixitup.js"></script>
<script>
(function($) {
//Default Masonary
	function defaultMasonry() {
		if($('.masonry-items-container').length){
	
			var winDow = $(window);
			// Needed variables
			var $container=$('.masonry-items-container');
	
			$container.isotope({
				itemSelector: '.masonry-item',
				 masonry: {
					columnWidth : '.masonry-item'
				 },
				animationOptions:{
					duration:500,
					easing:'linear'
				}
			});
	
			winDow.on('resize', function(){

				$container.isotope({ 
					itemSelector: '.masonry-item',
					animationOptions: {
						duration: 500,
						easing	: 'linear',
						queue	: false
					}
				});
			});
		}
	}

	defaultMasonry();

	//MixItup Gallery
	if($('.filter-list').length){
	 	 $('.filter-list').mixItUp();
	 }
})(window.jQuery);


      $('.testimonial-carousel').owlCarousel({
         loop:true,
         margin:0,
         nav:true,
         smartSpeed: 700,
         autoplay: true,
         navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
         responsive:{
            0:{
               items:1
            },
            600:{
               items:1
            },
            1024:{
               items:1
            },
         }
      }); 

            //Accordion Box
   
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

</script>
</html>
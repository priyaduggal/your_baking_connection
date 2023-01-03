<section class="page-title">
   <div class="auto-container">
      <h1>FAQs</h1>
      <ul class="page-breadcrumb">
   </ul></div>
</section>
<style>
.activediv{
    display:block !important;
}
    .merchantright
    {
        flex : 0 0 100%!important;
        max-width:100%!important;
    }
    .merchantleft
    {
        display:none!important;
    }
   .accountinfo.contactus.merchantmain {
    padding: 0!important;
}
.container.merchantcontainer {
    max-width: 100%!important;
    padding: 0px!important;
}
</style>

<section class="terms">
   <div class="auto-container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                   <div class="col-sm-12 section-title3">
                      <h2>FAQs</h2>
                   </div>
                </div>
                <ul class="accordion-box mb-5">
               <!--Block-->
            <?php    
            $all=Yii::app()->db->createCommand('
            SELECT *
            FROM st_faq
            where type="FAQ Page" or type="FAQ Page,Baker resources"
            order by id desc
            limit 0,8
            ')->queryAll(); 
           
            ?>
               
               <?php foreach($all as $al=>$val){?>
               <li class="accordion block">
                   <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> <?php echo $val['title'];?></div>
                   <div class="acc-content current" style="display: none;">
                       <div class="content">
                           <div class="text"><?php echo $val['description'];?></div>
                       </div>
                   </div>
               </li>
               <?php } ?>

               <!--Block-->
               <!--li class="accordion block">
                   <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div>Maecenas ullamcorper lectus finibus</div>
                   <div class="acc-content" style="display: none;">
                       <div class="content">
                           <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                       </div>
                   </div>
               </li-->
               
               <!--Block-->
               <!--li class="accordion block">
                   <div class="acc-btn"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> Nam cursus lacus malesuada ullamcorper</div>
                   <div class="acc-content" style="display: none;">
                       <div class="content">
                           <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                       </div>
                   </div>
               </li-->

               <!--Block-->
               <!--li class="accordion block active-block">
                   <div class="acc-btn active"><div class="icon-outer"><span class="icon fa fa-plus"></span> </div> Nulla erat nibh, tempus in commodo rutrum</div>
                   <div class="acc-content" style="display: block;">
                       <div class="content">
                           <div class="text">Lorem ipsum dolor amet consectur adipicing elit eiusmod tempor incididunt ut labore dolore magna aliqua.enim minim veniam quis nostrud exercitation ullamco laboris.</div>
                       </div>
                   </div>
               </li-->
                </ul>
            </div>
        </div>
    </div>
</section>
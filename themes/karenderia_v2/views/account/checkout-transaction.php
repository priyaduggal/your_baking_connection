
<!--Modal orderTypeTime-->
<div class="modal" id="orderTypeTime" tabindex="-1" role="dialog" aria-labelledby="orderTypeTime" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content 
    <?php echo Yii::app()->params['isMobile']==TRUE?"modal-mobile":"" ?>
    ">      
    
      <div class="modal-body">
             
       <a href="javascript:;" @click="close" 
	   class="btn btn-black btn-circle rounded-pill"><i class="zmdi zmdi-close font20"></i></a> 
      
      <h5 class="m-0 mb-3 mt-3"><?php echo t("Order Type")?></h5>
           
      <ul class="list-unstyled list-selection m-0 p-0">
      
        <li class="d-flex align-items-center" v-cloak v-for="transaction in transactions" >
         <div class="flexcol  mr-3">
         
            <div class="custom-control custom-radio">
		      <input type="radio" v-model="transaction_type" class="custom-control-input"
              :id="transaction.service_code" :value="transaction.service_code"
		      >
		      <label class="custom-control-label font14 bold" :for="transaction.service_code">
		       {{ transaction.service_name }}		       
		      </label>
		    </div>   	           
         
         </div> <!--flexcol-->         
       </li>       
       
      </ul>  
         
      </div> <!--body--> 
      
      <div class="divider p-0"></div>
            
      
      <div class="modal-body">
        <h5 class="m-0 mb-3"><?php echo t("Desired delivery date and time ")?></h5>  
         <!--when to delivery-->
        <!--<div class="btn-group btn-group-toggle input-group-small mb-4" >-->
        <!--   <label class="btn" v-for="when_to in delivery_option" :class="{ active: whento_deliver==when_to.value }" >-->
        <!--     <input v-model="whento_deliver" type="radio" :value="when_to.value"-->
              
        <!--      v-model="whento_deliver"> -->
        <!--     {{ when_to.name }}-->
        <!--   </label>           -->
        <!--</div>-->
        <!--when-->
          <!--<input v-model="whento_deliver" type="text" -->
              
          <!--   > -->
        
  <!--      <div class="schedule-section" v-if="whento_deliver=='schedule'">         -->
        
  <!--       <template v-if="opening_hours_date">-->
  <!--       <select class="form-control custom-select mb-3" v-model="delivery_date">		-->
		<!--     <option v-for="(item, index) in opening_hours_date" :value="item.value"  >-->
		<!--     {{ item.name}}-->
		<!--     </option> -->
		<!-- </select> -->
		 
		<!-- <select id="delivery_time" class="form-control custom-select" -->
		<!--    v-model="delivery_time" v-if="opening_hours_date[delivery_date]" >		-->
		<!--     <option v-for="(item, index) in opening_hours_time[delivery_date]" -->
		<!--     :value="JsonValue(item)"    >-->
		<!--     {{item.pretty_time}}-->
		<!--	 </option> -->
	 <!--    </select>-->
	 <!--    </template>-->
	     
	 <!--    <template v-else>-->
	 <!--     <div class="alert alert-warning" role="alert">-->
	 <!--     <p class="m-0"><?php echo t("Not available")?></p>	    -->
	 <!--     </div>-->
	 <!--    </template>-->
         
		<!--</div> -->
		
		<?php
		$merchat_id=Yii::app()->user->getState('checkout_merchant_id');
		$all=Yii::app()->db->createCommand('SELECT * FROM st_delivery_times where merchant_id='.$merchat_id.'
        ')->queryAll();
        
        
        $pickups=Yii::app()->db->createCommand('SELECT * FROM st_pickup_times where merchant_id='.$merchat_id.'
        ')->queryAll(); 
        
        
        $intervals=Yii::app()->db->createCommand('SELECT * FROM st_intervals where merchant_id='.$merchat_id.'
        ')->queryAll();
    
        ?>
        
        
		<div class="schedule-section" v-if="transaction_type=='delivery'">         
         
         <template v-if="opening_hours_date">
         <select class="form-control custom-select mb-3"  v-model="delivery_date">	
         <?php foreach($all as $a){?>
		     <option  value="<?php echo $a['id'];?>">
		    <?php echo $a['date'];?> (<?php echo $a['title'];?>)
		     </option> 
		     <?php } ?>
		 </select> 
		
		 <!--<select id="delivery_time" class="form-control custom-select" -->
		 <!--   v-model="delivery_time" v-if="opening_hours_date[delivery_date]" >		-->
		 <!--    <option v-for="(item, index) in opening_hours_time[delivery_date]" -->
		 <!--    :value="JsonValue(item)"    >-->
		 <!--    {{item.pretty_time}}-->
			<!-- </option> -->
	  <!--   </select>-->
	     </template>
	     
	     <template v-else>
	      <div class="alert alert-warning" role="alert">
	      <p class="m-0"><?php echo t("Not available")?></p>	    
	      </div>
	     </template>
         
		</div> <!--schedule-->
		
		<div class="schedule-section" v-if="transaction_type=='pickup'">
         <template v-if="opening_hours_date">
         <select class="form-control custom-select mb-3" v-model="delivery_date" id="delivery_date">		
		     <?php foreach($pickups as $a){?>
		     <option  value="<?php echo $a['id'];?>">
		    <?php echo $a['date'];?>
		     </option> 
		     <?php } ?>
		 </select> 
		
		 <select id="delivery_time" class="form-control custom-select" 
		    v-model="delivery_time" v-if="transaction_type=='pickup'" >		
		     
	     </select>
	     </template>
	     
	     <template v-else>
	      <div class="alert alert-warning" role="alert">
	      <p class="m-0"><?php echo t("Not available")?></p>	    
	      </div>
	     </template>
         
		</div> <!--schedule-->
        
		 <div v-cloak v-if="error.length>0" class="alert alert-warning m-0 mt-2" role="alert">
	       <p v-cloak v-for="err in error" class="m-0">{{err}}</p>	    
	     </div>        
		
      </div> <!--modal body-->
      
      <div class="modal-footer justify-content-start">
           
      <button class="btn btn-green w-100" @click="validate" :class="{ loading: is_loading }" >
          <span class="label"><?php echo t("Save")?></span>
          <div class="m-auto circle-loader" data-loader="circle-side"></div>
      </button>
      
      </div> <!--footer-->
    </div> <!--content-->
  </div> <!--dialog-->
</div> <!--modal-->        

<!--END Modal orderTypeTime-->












<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
	var token=document.querySelector('meta[name=YII_CSRF_TOKEN]').content;
    $( document ).ready(function() {
        $('body').on('change', '#delivery_date', function() {
        var id=$(this).val();
         $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/api/gettimings",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({'id':  id,'YII_CSRF_TOKEN':token}),
            
                success: function (response) {
                    
                    $('#delivery_time').html(response);
                  
               
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
        
        // $.ajax({
        // url:"https://dev.indiit.solutions/your_baking_connection/api/gettimings",
        // type:"POST",
        // data:{id:id},
        // success:function(response)
        // {
        //   console.log(response);
        // }
        // }) 
        
        });
    });
</script>
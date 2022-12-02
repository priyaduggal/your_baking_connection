<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />


  <link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
  
  <style>
.fc-content{
    font-size:14px !important;
}
 #calendar1 {
      max-width: 900px;
      margin: 40px auto;
    }
  
    #calendar {
      max-width: 900px;
      margin: 40px auto;
    }

  </style>
  <style>

.custom-file-label,
.custom-file{
    display: inline-block;
    font-weight: 600;
    color: #000 !important;
    text-align: center;
    height: 200px;
    padding: 5px;
    transition: all 0.3s ease;
    cursor: pointer;
    border: 2px solid;
    background-color: #FFD9E4;
    border-color: #FFD9E4;
    border-radius: 0;
    line-height: 26px;
    font-size: 17px !important;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

.custom-file-label::after
{
    opacity:0;
}

.custom-file-label:hover {
    border: 2px dashed;
    transition: all 0.3s ease;
}
</style>

<div class="card boxsha">
    <input type="hidden"name="_csrf" id="text" value="<?php echo Yii::app()->request->getCsrfToken() ?>">
               <div class="card-body">
                  <h4 class="mb-4 d-flex justify-content-between align-items-center">
                     Fulfillment Method
                     
                    
                  </h4>
                    <?php
                    $form = $this->beginWidget(
                    'CActiveForm',
                    array(
                    'id' => 'upload-form',
                    'enableAjaxValidation' => false,		
                    )
                    );
                    ?>
    <div class="row">
    <div class="container">
        <ul class="nav nav-pills customstyle-nav-tabs">
            <li class="active"><a data-toggle="pill" href="#home" class="active">Delivery</a></li>
            <li><a data-toggle="pill" href="#menu1">Pickup</a></li>
            <li><a data-toggle="pill" href="#menu2">Settings</a></li>
             </ul>

  <div class="tab-content fulfillment_calender_style">
    <div id="home" class="tab-pane fade in active show">
      <div id="calendar"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
       <div id="calendar1"></div>
    </div>
    <?php 
       $intervals=Yii::app()->db->createCommand('SELECT * FROM st_intervals where merchant_id='.Yii::app()->merchant->merchant_id.'
        ')->queryAll();
        $data='';
        if(count($intervals)>0)
        {
            $data=$intervals[0]['interval'];
        }
     
    ?>
    <div id="menu2" class="tab-pane fade">
      <h3>Choose slot interval</h3>
      <select class="form-control" id="interval_pickup" name="interval_pickup">
          <option value="">Select Interval</option>
          <option value="15" <?php if($data=='15'){ echo 'selected';} ?> >15 mins</option>
          <option value="30" <?php if($data=='30'){ echo 'selected';} ?>>30 mins</option>
          <option value="45" <?php if($data=='45'){ echo 'selected';} ?>>45 mins</option>
          <option value="60" <?php if($data=='60'){ echo 'selected';} ?>>60 mins</option>
      </select>
      
      <div class="fulfilment_submit">
         <input class="btn btn-submit mt-3 save_interval" value="Save" type="button" name="submit">
      </div>
    </div>
    
    <!--<div id="menu3" class="tab-pane fade">-->
    <!--  <h3>Menu 3</h3>-->
    <!--  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>-->
    <!--</div>-->
  </div>
  </div>
                    
                       
                     </div>

                 <?php $this->endWidget(); ?>
               </div>
            </div>
           <html>
 <head>
  


<script src='/assets/demo-to-codepen.js'></script>

<script src='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.js'></script>




  <script src='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.js'></script>
<script src="https://unpkg.com/@fullcalendar/interaction@4.3.0/main.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>
   document.addEventListener('DOMContentLoaded', function() {
       
       $('.save_interval').click(function(){
            if($('#interval_pickup').val()==''){
            Swal.fire('Please select interval!', '', 'error');
            }else{
                var interval=$('#interval_pickup').val();
                $.ajax({
                url:"https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/updateintervalMerchant",
                type:"POST",
                data:{interval:interval},
                success:function()
                {
                Swal.fire('Saved successfully!', '', 'success');
                }
                })
            }
      
       });
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    plugins: [ 'dayGrid','interaction' ],
    height: 650,
     selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },
    events:'https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/getevents',
	 eventDidMount: function (info) {
      if (info.event.extendedProps.backgroundColor) {
        info.el.style.background = info.event.extendedProps.backgroundColor;
      }
    },
 
      header: {
        //center: 'addEventButton'
      },
      selectable: true,
        select: async function (start, end, allDay) {
        console.log('select');
        const { value: formValues } = await Swal.fire({
        title: 'Hours',
        html:
        '<label>Start Time</label><input id="swalEvtTitle" required type="time" class="swal2-input" placeholder="Enter Start Time">' +
        '<label>End Time</label><input id="swalEvtDesc"  required type="time" class="swal2-input" placeholder="Enter End Time">' +
        '',
        confirmButtonText: "Add", 
        focusConfirm:true,
        preConfirm: () => {
        console.log(document.getElementById('swalEvtTitle').value);
        if (!document.getElementById('swalEvtTitle').value) {
        
        Swal.showValidationMessage('Please select start time')   
        }else if (!document.getElementById('swalEvtDesc').value) {
        
        Swal.showValidationMessage('Please select end time')   
        }else{
        
        if(document.getElementById('swalEvtTitle').value > document.getElementById('swalEvtDesc').value )
        {
        Swal.showValidationMessage('Start time should be less then end time ')     
        }else{
        return [
        document.getElementById('swalEvtTitle').value,
        document.getElementById('swalEvtDesc').value 	
        ] 
        }
        }
        
        }
        });
        
        if (formValues) {
        var token=$('#text').val();
        $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/eventHandler",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({ id:'1',request_type:'addEvent',YII_CSRF_TOKEN:token, start:start.startStr, end:start.endStr, event_data: formValues}),
            
                success: function (response) {
                   
                    if(response.code==1){
                        	Swal.fire('Saved successfully!', '', 'success');
                    }else if(response.code==3){
                        	Swal.fire('Saved successfully!', '', 'success');
                    }else{
                        	Swal.fire('Saved successfully!', '', 'success');
                    }
               calendar.refetchEvents();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
                
                

	  }
	},
 
   

    eventClick:function(event)
    {
   
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.event.id;
     
      $.ajax({
      url:"https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/eventdelete",
      type:"POST",
      data:{id:id},
      success:function()
      {
        calendar.refetchEvents();
        	Swal.fire('Removed successfully!', '', 'success');
      }
      })
     }
    }
    });

    calendar.render();
    calendar.select('@(Model.Date?.ToString("yyyy-MM-dd"))');
    
    var calendarEl1 = document.getElementById('calendar1');
    var calendar1 = new FullCalendar.Calendar(calendarEl1, {
    initialView: 'dayGridMonth',
    plugins: [ 'dayGrid','interaction' ],
    height: 650,
     selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },
    events:'https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/geteventspickup',
    eventDidMount: function (info) {
    if (info.event.extendedProps.backgroundColor) {
    info.el.style.background = info.event.extendedProps.backgroundColor;
    }
    },
 
      header: {
        //center: 'addEventButton'
      },
      selectable: true,
        select: async function (start, end, allDay) {
        console.log('select');
        const { value: formValues } = await Swal.fire({
        title: 'Hours',
        html:
        '<label>Start Time</label><input id="swalEvtTitle" required type="time" class="swal2-input" placeholder="Enter Start Time">' +
        '<label>End Time</label><input id="swalEvtDesc"  required type="time" class="swal2-input" placeholder="Enter End Time">' +
        '',
        confirmButtonText: "Add", 
        focusConfirm:true,
        preConfirm: () => {
        console.log(document.getElementById('swalEvtTitle').value);
        if (!document.getElementById('swalEvtTitle').value) {
        
        Swal.showValidationMessage('Please select start time')   
        }else if (!document.getElementById('swalEvtDesc').value) {
        
        Swal.showValidationMessage('Please select end time')   
        }else{
        
        if(document.getElementById('swalEvtTitle').value > document.getElementById('swalEvtDesc').value )
        {
        Swal.showValidationMessage('Start time should be less then end time ')     
        }else{
        return [
        document.getElementById('swalEvtTitle').value,
        document.getElementById('swalEvtDesc').value 	
        ] 
        }
        }
        
        }
        });
        
        if (formValues) {
        var token=$('#text').val();
        $.ajax({
                url: "https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/eventHandlerPickup",
                type: "put",
                 contentType: 'application/json;charset=UTF-8',
                 data  : JSON.stringify({ id:'1',request_type:'addEvent',YII_CSRF_TOKEN:token, start:start.startStr, end:start.endStr, event_data: formValues}),
            
                success: function (response) {
                   
                    if(response.code==1){
                        	Swal.fire('Saved successfully!', '', 'success');
                    }else if(response.code==3){
                        	Swal.fire('Saved successfully!', '', 'success');
                    }else{
                        	Swal.fire('Saved successfully!', '', 'success');
                    }
               calendar1.refetchEvents();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                }
                });
                
                

	  }
	},
 
   

    eventClick:function(event)
    {
   
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.event.id;
     
      $.ajax({
      url:"https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/eventdelete",
      type:"POST",
      data:{id:id},
      success:function()
      {
        calendar.refetchEvents();
        	Swal.fire('Removed successfully!', '', 'success');
      }
      })
     }
    }
    });
     
     
      

  

    calendar1.render();
     calendar1.select('@(Model.Date?.ToString("yyyy-MM-dd"))');
    
      
      
  });
//   $(document).ready(function() {
     
//   var calendar = $('#calendar').fullCalendar({
//     editable:true,
//     header:{
//      left:'prev,next today',
//      center:'title',
//      right:'month,agendaWeek,agendaDay'
//     },
//     events: 'load.php',
//     selectable:true,
//     selectHelper:true,
//     select: function(start, end, allDay)
//     {
//      var title = prompt("Enter Event Title");
//      if(title)
//      {
//       var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
//       var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
//       $.ajax({
//       url:"insert.php",
//       type:"POST",
//       data:{title:title, start:start, end:end},
//       success:function()
//       {
//         calendar.fullCalendar('refetchEvents');
//         alert("Added Successfully");
//       }
//       })
//      }
//     },
//     editable:true,
//     eventResize:function(event)
//     {
//      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
//      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
//      var title = event.title;
//      var id = event.id;
//      $.ajax({
//       url:"update.php",
//       type:"POST",
//       data:{title:title, start:start, end:end, id:id},
//       success:function(){
//       calendar.fullCalendar('refetchEvents');
//       alert('Event Update');
//       }
//      })
//     },

//     eventDrop:function(event)
//     {
//      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
//      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
//      var title = event.title;
//      var id = event.id;
//      $.ajax({
//       url:"update.php",
//       type:"POST",
//       data:{title:title, start:start, end:end, id:id},
//       success:function()
//       {
//       calendar.fullCalendar('refetchEvents');
//       alert("Event Updated");
//       }
//      });
//     },

//     eventClick:function(event)
//     {
//      if(confirm("Are you sure you want to remove it?"))
//      {
//       var id = event.id;
//       $.ajax({
//       url:"delete.php",
//       type:"POST",
//       data:{id:id},
//       success:function()
//       {
//         calendar.fullCalendar('refetchEvents');
//         alert("Event Removed");
//       }
//       })
//      }
//     },

//   });
//   });
   
  </script>
 </head>
 
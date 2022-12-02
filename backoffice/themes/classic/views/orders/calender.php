<link href='https://unpkg.com/@fullcalendar/core@4.3.1/main.min.css' rel='stylesheet' />


  <link href='https://unpkg.com/@fullcalendar/daygrid@4.3.0/main.min.css' rel='stylesheet' />
  
  <style>
  .fulfillment_calender_style a.fc-day-grid-event span.fc-title {
    white-space: normal;
}
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
                     Orders
                     
                    
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
        <!--<ul class="nav nav-pills customstyle-nav-tabs">-->
        <!--    <li class="active"><a data-toggle="pill" href="#home" class="active">Delivery</a></li>-->
        <!--    <li><a data-toggle="pill" href="#menu1">Pickup</a></li>-->
        <!--    <li><a data-toggle="pill" href="#menu2">Settings</a></li>-->
        <!--     </ul>-->

  <div class="tab-content fulfillment_calender_style">
    <div id="home" class="tab-pane fade in active show">
      <div id="calendar"></div>
    </div>
 
    
 
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
      
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    plugins: [ 'dayGrid','interaction' ],
    height: 650,
     selectAllow: function(select) {
      return moment().diff(select.start, 'days') <= 0
   },
    events:'https://dev.indiit.solutions/your_baking_connection/backoffice/apibackend/getorderevents',
	 eventDidMount: function (info) {
      if (info.event.extendedProps.backgroundColor) {
        info.el.style.background = info.event.extendedProps.backgroundColor;
      }
    },
 
      header: {
        //center: 'addEventButton'
      },
      //selectable: true,
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
   console.log(event.event.id);
   window.location.href = '/your_baking_connection/backoffice/orders/view?order_uuid='+event.event.id; 
     
    }
    });

    calendar.render();
    calendar.select('@(Model.Date?.ToString("yyyy-MM-dd"))');
    
  
      
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
 
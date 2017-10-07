$(function(){
 	$('.button-collapse').sideNav({
	      menuWidth: 300, // Default is 300
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true, // Choose whether you can drag to open on touch screens,
	      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
	      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
	    });

 	/*SELECT*/
 	 $('select').material_select();

 	$('.timepicker').pickatime({
	    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
	    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
	    twelvehour: false, // Use AM/PM or 24-hour format
	    donetext: 'OK', // text for done-button
	    cleartext: 'Clear', // text for clear-button
	    canceltext: 'Cancel', // Text for cancel-button
	    autoclose: false, // automatic close timepicker
	    ampmclickable: true, // make AM PM clickable
	    aftershow: function(){} //Function for after opening timepicker
	  });



 	/*================STARTS EVENTS=======================================*/


	/*===Add EVENT=======*/

	$("#sendEventData").on("click",function(){
		var formData = new FormData($("#addEventForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"Admin/addEvent/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("Event added Successfully...");
				window.location.reload();
			}

		});
	});

	/*===UPdate EVENT=======*/

	$("#updateEventData").on("click",function(){
		var formData = new FormData($("#updateEventForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"Admin/updateEvent/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("Event Update Successfully...");
				//window.location.reload();
			}

		});
	});


	/*===Edit EVENT=======*/

	$(".btn-edit").on("click",function(){
		$("#EditeventList").modal('open');
		$("#EditeventList .modal-content").html("");
		var eventID=$(this).data("event-id");
		$.post(baseURL+"Admin/editEvent/"+eventID,function(data){
			$("#EditeventList .modal-content").html(data);
			 Materialize.updateTextFields();		
			 $('#EditeventList #wedding_id').material_select();	 
		});
	});	

	/*=======================Delete EVENT===================*/

	$(".btn-delete").on("click",function(){		
		var eventID=$(this).data("event-id");
		if(confirm("Do you want delete this record..???")){
		$.post(baseURL+"Admin/deleteEvent/"+eventID,function(data){
			$("#event-id"+eventID).remove();					 
		});
	 }
	});


 /*========================END EVENTS=======================================*/


});
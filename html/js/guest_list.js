/* script for guest list */
var baseURL;
$(function(){
	$('.modal').modal();
	baseURL=$("#base_url").val();
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
 	 
 	 /*Time picker*/

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


    /*=============ON CHANGE================================*/

    $("#addGuest #addGuestWeddingID").on("change",function(){	
	    var weddingID = $("#addGuest #addGuestWeddingID option:selected").val();	
			$.ajax({
				data:weddingID,
				url:baseURL+"Admin/getProfile/"+weddingID,
				type:"POST",
				contentType:false,
				processData:false,
				success:function(result){
					result = $.parseJSON(result);
					$("#addGuest #addGuestProfileList").html(result.profileHTML);
					$('#addGuest #addGuestProfileList').material_select();
					$("#addGuest #addGuestEventList").html(result.eventHTML);
					$('#addGuest #addGuestEventList').material_select();				}
			});
		});

    $("#guestList #addGuestWeddingID").on("change",function(){	
	    var weddingID = $("#guestList #addGuestWeddingID option:selected").val();	
			$.ajax({
				data:weddingID,
				url:baseURL+"Admin/getProfile/"+weddingID,
				type:"POST",
				contentType:false,
				processData:false,
				success:function(result){
					result = $.parseJSON(result);
					$("#guestList #addGuestProfileList").html(result.profileHTML);
					$('#guestList #addGuestProfileList').material_select();
					$("#guestList #addGuestEventList").html(result.eventHTML);
					$('#guestList #addGuestEventList').material_select();
				}
			});
		});
    /*==================Guest List==================================*/
	/*===Add Wedding=======*/
	$("#sendGuestListData").on("click",function(){	
		
		var errorFlag=0;
		/*if($("#name").val() == ""){ errorFlag = 1; }
		if($("#mobile").val() == ""){ errorFlag = 1; }*/

		
		if ($('#addGuestEventList').lenght==0) { errorFlag = 1  }
		//if ($("#addGuestEventList").prop("checked")){ errorFlag = 1  }

		//if ($("#addGuestEventList").attr("checked")=="checked"){errorFlag = 1}

		if(errorFlag==0){
		var formData = new FormData($("#addGuestListForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"Admin/addGuestList/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("GuestList added Successfully...");
				window.location.reload();
			}
		});
		}
		else{
			alert("All Fields are required Please Checked any Event");
		}
	});


/*=====Update Guest List===========*/

	$("#updateGuestListData").on("click",function(){
	var formData = new FormData($("#updateGuestListForm")[0]);
	$.ajax({
		data:formData,
		url:baseURL+"Admin/updateGuestList/",
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("GuestList update Successfully...");
			window.location.reload();
		}
	});
});



	/*===Edit Wedding=======*/

	$(".guest-detail .btn-edit").on("click",function(){
		$("#EditGuestList").modal('open');
		$("#EditGuestList .modal-content").html("");
		var guestID=$(this).data("guest-id");
		$.post(baseURL+"Admin/editGuestList/"+guestID,function(data){
			$("#EditGuestList .modal-content").html(data);
			 Materialize.updateTextFields();
			  $('select').material_select();

			  $("#EditGuestList #addGuestWeddingID").on("change",function(){	
	    var weddingID = $("#EditGuestList #addGuestWeddingID option:selected").val();	
			$.ajax({
				data:weddingID,
				url:baseURL+"Admin/getProfile/"+weddingID,
				type:"POST",
				contentType:false,
				processData:false,
				success:function(result){
					result = $.parseJSON(result);
					$("#EditGuestList #addGuestProfileList").html(result.profileHTML);
					$('#EditGuestList #addGuestProfileList').material_select();
					$("#EditGuestList #addGuestEventList").html(result.eventHTML);
					$('#EditGuestList #addGuestEventList').material_select();
				}
			});
		});			
		});
	});


	/*===Delete Guest List=======*/

	$(".btn-delete-guestList").on("click",function(){
		var guestID=$(this).data("guest-id");
		if(confirm("Do you want to delete this Record.. ???? ")){
		$.post(baseURL+"Admin/deleteGuestList/"+guestID,function(data){
			$("#guest-id"+guestID).remove();
		});
	  }
    });

	    /*==============================================================*/
	    $("#uploadGuest").on("click",function(){
		$("#guestList").modal('open');
	});
	    
		$("#uploadGuest").on("click",function(){
			if(confirm("Do you want to upload the sheet? ")){
				var formData = new FormData($("#excelForm")[0]);
				$.ajax({
					data:formData,
					url:baseURL+"admin/excelCheck/",
					type:"POST",
					contentType:false,
					processData:false,
					success:function(result){
						//alert("File Uploaded Successfully...");
						//window.location.reload();
					}

				});
			}
		});
});
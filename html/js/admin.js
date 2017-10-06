var baseURL;
$(function(){
	baseURL=$("#base_url").val();
 	$('.modal').modal();
	/*================ Navigation =================================*/

	  $('.button-collapse').sideNav({
	      menuWidth: 300, // Default is 300
	      edge: 'left', // Choose the horizontal origin
	      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
	      draggable: true, // Choose whether you can drag to open on touch screens,
	      onOpen: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is opened
	      onClose: function(el) { /* Do Stuff*/ }, // A function to be called when sideNav is closed
	    }
	  );

	/*=============== DatePicker ==================*/
	 $('.datepicker').pickadate({
	    selectMonths: true, // Creates a dropdown to control month
	    selectYears: 15, // Creates a dropdown of 15 years to control year,
	    today: 'Today',
	    clear: 'Clear',
	    close: 'Ok',
	    closeOnSelect: false // Close upon selecting a date,
	  });

	/* =========== Text-area ==========================================*/
	  	$('#textarea1').val('');
  		$('#textarea1').trigger('autoresize');


	/*====================Wedding========================================*/

	$("#addWedding").on("click",function(){
		$("#weddingModal").modal('open');
	});

	/*===Add Wedding=======*/

	$("#sendWeddingData").on("click",function(){
		var formData = new FormData($("#addWeddingForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"Admin/addWedding/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("Wedding added Successfully...");
				window.location.reload();
			}

		});
	});

	/*===Edit Wedding=======*/

	$(".edit-wedding").on("click",function(){
		$("#editWeddingModal").modal('open');
		$("#editWeddingModal .modal-content").html("");
		var wedID=$(this).data("wed-id");
		$.post(baseURL+"Admin/editWedding/"+wedID,function(data){
			$("#editWeddingModal .modal-content").html(data);
			 Materialize.updateTextFields();
			 initUpdateWedding();
		});
	});
	/*=============Profile========================*/

	$(".btn-edit").on("click",function(){
		$("#editProfile").modal('open');
		$("#editProfile .modal-content").html("");
		var profile=$(this).data("profile-id");
		$.post(baseURL+"Admin/editProfile/"+profile,function(data){
			$("#editProfile .modal-content").html(data);
			 Materialize.updateTextFields();			 
		});
	});

	$("#updateProfileData").on("click",function(){
	var formData = new FormData($("#updateProfileForm")[0]);
	$.ajax({
		data:formData,
		url:baseURL+"Admin/updateProfile/",
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("Profile Update Successfully...");
			//window.location.reload();
		}
	});
  });

	/*===Delete Wedding=======*/

	$(".delete-wedding").on("click",function(){
		var wedID=$(this).data("wed-id");
		if(confirm("Do you want to delete this Record.. ???? ")){
		$.post(baseURL+"Admin/deleteWedding/"+wedID,function(data){
			$("#wed-id"+wedID).remove();
		});
	  }
    });

   	/*================Update Wedding=======================================*/


});
function initUpdateWedding(){
	$("#updateWeddingData").off("click");
	$("#updateWeddingData").on("click",function(){
		console.log("heloo");
		var formData = new FormData($("#updateWeddingForm")[0]);
		$.ajax({
			data:formData,
			url:baseURL+"Admin/updateWedding/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("Wedding Update Successfully...");
				window.location.reload();
			}
		});
	});
}

function doLogin(){
			
			/*==================*/
			var data={
				"email":$("#email").val(),
				"password":$("#password").val()
			}
			$.post(baseURL+"Admin/doLogin/",{data:data},function(data){
				var data=$.parseJSON(data);
				if(data.status=="ok"){
					alert("Login Successfully....");
					window.location.href=baseURL;
				}
				if(data.status=="fail"){
					alert("Login Fail....");
					window.location.href="#!";
				}
				else{
					console.log(data);
				}

			});
		}
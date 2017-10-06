$(function(){
	var baseURL=$("#base_url").val();
	 $('.modal').modal();
	/*====================Login========================================*/
/*	var data={
		"email":$("#email").val(),
		"password":$("#password").val()
	}
	$.post(baseURL+"Admin/doLogin/",{data:data},function(data){
		var data=$.parseJSON(data);
		if(data.status=="ok"){
			alert("LOgin Successfully....");
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
*/
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
	/*===Update Wedding=======*/

	$("#updateWeddingData").on("click",function(){
		var formData = new FormData($("#updateWeddingForm")[0]);
		$.ajax({
			data:formData,
			url:"Admin/updateWedding/",
			type:"POST",
			contentType:false,
			processData:false,
			success:function(result){
				alert("Wedding Update Successfully...");
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

    /*====================Profile========================================*/

















});
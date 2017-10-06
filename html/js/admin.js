$(function(){
	var baseURL=$("#base_url").val();
	$('.modal').modal('open');

	/*====================Login========================================*/
	var data={
		"email":$("#email").val(),
		"password":$("#password").val()
	}
	$.post(baseURL+"Admin/login/",{data:data},function(data){
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

	/*====================Wedding========================================*/

	$("#addWedding").on("click",function(){
		$("#weddingModal").model('open');
	});
	/*===Add Wedding=======*/

	$("#sendWeddingData").on("click",function(){
		var formData = new FormData($("#addWeddingForm")[0]);
		$.ajax({
			data:formData,
			url:"Admin/addWedding/",
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
















});
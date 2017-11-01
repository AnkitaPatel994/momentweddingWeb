var baseURL;
$(function(){
$('select').material_select();
baseURL=$('base_url').val();
$('.modal').modal();
$("#addMember").on("click",function(){
	$("#memberModal").modal('open');
});

$("#sendMemberData").on("click",function(){
var formData=new FormData($("#addMemberForm")[0]);
	$.ajax({
		url:baseURL+"admin/addMember/",
		data:formData,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("Data Inserted successfully...");
			window.location.reload();
		}
	});
});

$("#updateMemberData").on("click",function(){
var formData=new FormData($("#updateMemberForm")[0]);
	$.ajax({
		url:baseURL+"admin/updateMember/",
		data:formData,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("Data Updated successfully...");
			//window.location.reload();
		}
	});
});


$(".member-delete-btn").on("click",function(){
		var memberID=$(this).data("member-id");
		if(confirm("Are you Sure you want to delete this Record.. ???? ")){
		$.post(baseURL+"admin/deleteMember/"+memberID,function(data){
			$("#member-id"+memberID).remove();
		});
	  }
    });


$(".member-edit-btn").on("click",function(){
	$("#editMemberModal").modal('open');
	$("#editMemberModal .modal-content").html("");
	var memberId=$(this).data('member-id');
	$.post(baseURL+"admin/editMember/"+memberId,function(data){
		$("#editMemberModal .modal-content").html(data);
		Materialize.updateTextFields();
		$('select').material_select();

	 $("#editMemberModal #addGuestWeddingID").on("change",function(){	
	    var weddingID = $("#editMemberModal #addGuestWeddingID option:selected").val();	
			$.ajax({
				data:weddingID,
				url:baseURL+"Admin/getProfile/"+weddingID,
				type:"POST",
				contentType:false,
				processData:false,
				success:function(result){
					result = $.parseJSON(result);
					$("#editMemberModal #addGuestProfileList").html(result.profileHTML);
					$('#editMemberModal #addGuestProfileList').material_select();					
				}
			});
		});	
	});
});

$("#memberModal #addGuestWeddingID").on("change",function(){	
	    var weddingID = $("#memberModal #addGuestWeddingID option:selected").val();	
			$.ajax({
				data:weddingID,
				url:baseURL+"Admin/getWedProfile/"+weddingID,
				type:"POST",
				contentType:false,
				processData:false,
				success:function(result){
					result = $.parseJSON(result);
					$("#memberModal #addGuestProfileList").html(result.profileHTML);
					$('#memberModal #addGuestProfileList').material_select();
					
				}
			});
		});

});
var baseURL;
$(function(){

$('select').material_select();
baseURL=$('base_url').val();
$('.modal').modal();
$("#wedGallery").on("click",function(){
	$("#weddingGalleryModal").modal('open');
});

$("#sendWedData").on("click",function(){
var formData=new FormData($("#addWedGalleryForm")[0]);
	$.ajax({
		url:baseURL+"admin/addWeddGallery/",
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

$("#updateWed").on("click",function(){
var formData=new FormData($("#updateWedGalleryForm")[0]);
	$.ajax({
		url:baseURL+"admin/updateWeddGallery/",
		data:formData,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("Data Updated successfully...");
			window.location.reload();
		}
	});
});

$(".wed-delete-btn").on("click",function(){
	var wedId=$(this).data('wed-gallery-id');
	if(confirm('Do you want to delete this Records ??')){
	$.post(baseURL+"admin/deleteWedGallery/"+wedId,function(data){
		$("#wed-gallery-id"+wedId).remove();
	});
}
});

$(".wed-edit-btn").on("click",function(){
	$("#editWedModal").modal('open');
	$("#editWedModal .modal-content").html("");
	var wedId=$(this).data('wed-gallery-id');
	$.post(baseURL+"admin/editWedGallery/"+wedId,function(data){
		$("#editWedModal .modal-content").html(data);
		Materialize.updateTextFields();
		$('select').material_select();
	});
});

/*$(".btn-gallery").on("click",function(){
	$("#addGalleryModal").modal('open');	
});*/

$(".btn-gallery").on("click",function(){
	$("#addGalleryModal").modal('open');
	$("#addGalleryModal .modal-content").html("");
	var wedId=$(this).data('wed-gallery-id');
	$.post(baseURL+"admin/singleGallery/"+wedId,function(data){
		$("#addGalleryModal .modal-content").html(data);		
	});
});

$("#addGalleryForm .delete-btn-gallery").on("click",function(){
	var galleryId=$(this).data('gallery-id');
	if(confirm('Do you want to delete this Records ??')){
	$.post(baseURL+"admin/deleteGallery/"+galleryId,function(data){
		$("#gallery-id"+galleryId).remove();
	});
}
});

$("#addGalleryModal #sendGallery").on("click",function(){
var formData=new FormData($("#addGalleryForm")[0]);
	$.ajax({
		url:baseURL+"admin/addGallery/",
		data:formData,
		type:"POST",
		contentType:false,
		processData:false,
		success:function(result){
			alert("Data Inserted successfully...");
			//window.location.reload();
		}
	});
});




});
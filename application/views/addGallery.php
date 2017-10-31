<div class="row">
	<h5>
		<center><h5>Add New Gallery</h5></center>
	</h5>
</div><hr>

 <div class="profile-form row">
      	<form id="addGalleryForm" method="post" enctype="multipart/form-data">  
	        
	        <div class="input-field col s12 m6" id="eventImage">	        	
	           <input type="file" name="name" id="name" style="display:none;">
          	   <button type="button" name="name" id="name" onclick="$('#eventImage input').click()" class="btn black upload-btn">Gallery Image</button>
          	   <input type="hidden" name="gallery_id" id="gallery_id" value="<?php echo $id; ?>">
	        </div>

	        <!--<div class="input-field col s12 m12">
	        	<center>
	        		<button class="btn black"> Add Event</button>
	        	</center>
	        </div> -->	        
      	</form>
      </div>


<div class="row top-header">
  <?php //$this->load->view("includes/admin-desktop-nav"); ?>

<div class="row">
 <div class="weddingDetails-area">
  <div class="page-header">
    <div class="row">
      <div class="page-title col s6 m10"><h4>Wedding Management</h4></div>
      <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn black modal-trigger" href="#weddingModal">Add Wedding</a>
      </div>
    </div>  
  </div>
   <div class="page-content">
   	<table id="example"  border="1" class="responsive-table centered highlight dataTable no-footer">
    <thead>
   		<tr>
     <td>Images</td>
        <!--<th style="max-width:100px;">Invitation</th> -->         
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allGallery as $key => $allGalleryRow) { ?>
      <tr id="gallery-id<?php echo $allGalleryRow['id']; ?>">     
        <td><img src="<?php echo base_url(); ?>html/images/gallery/<?php echo $allGalleryRow['date']; ?>"></td>      
             
      
        <td class="right-align blog-btn">     
        <a data-gallery-id="<?php echo $allGalleryRow['id']; ?>" class="btn btn-delete-gallery delete-wedding"><i class="material-icons">delete</i></a></td>
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
</div>   
</div>
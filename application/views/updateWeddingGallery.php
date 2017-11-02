<div class="row">
	<h5>
		<center><h5>Add New Gallery</h5></center>
	</h5>
</div><hr>

 <div class="profile-form row">
      	<form id="updateWedGalleryForm" method="post" enctype="multipart/form-data">
      	
      		<div class="input-field col s12 m4">
	         <select name="wedding_id" id="wedding_id">
			      <option   value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWeddings as $key => $allWeddingsRow){ ?>
			      <option <?php if($wedding_id == $allWeddingsRow['id']){ echo "selected='selected'"; } ?>  value="<?php echo $allWeddingsRow['id']; ?>"><?php echo $allWeddingsRow['weddingName']; ?></option>
			      <?php } ?>			      
		     </select>
	          <label for="name">Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	        	<input type="text" class="validate" required="required" name="name" id="name" value="<?php echo $name;  ?>">
	          	<label for="event_name">Gallery Name</label>
	        </div>
	      
	        
	       <div class="input-field col s12 m6" id="eventImage">	
	       	<input type="hidden" name="wed_id" id="wed_id" value="<?php echo $id; ?>">
	       <img src="<?php echo base_url(); ?>html/images/weddingImage/<?php echo $image; ?>"> 	
	           <input type="file" name="image" id="image" style="display:none;">
          	   <button type="button" name="image" id="image" onclick="$('#eventImage input').click()" class="btn black upload-btn">Gallery Image</button>
	        </div>
	    
	        <!-- <div class="input-field col s12 m12">
	        	<center>
	        		<button class="btn black"> Add Event</button>
	        	</center>
	        </div> -->
      	</form>
      </div>
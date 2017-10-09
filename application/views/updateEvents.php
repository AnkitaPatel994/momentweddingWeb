<div class="row">
	<center><h5>Update Event</h5></center>
</div><hr>

<div class="profile-form row">
      	<form id="updateEventForm" method="post" enctype="multipart/form-data">
      		<div class="input-field col s12 m6" id="eventImage">   
      		 <img  width="100%" src="<?php echo base_url(); ?>html/images/events/<?php echo $image; ?>"><br/> 		
      		   			
	         <input type="file" name="image" id="image" style="display:none;">
          	 <button type="button" onclick="$('#eventImage input').click()" style="width: 100%" class="btn black"> Event Image</button>
	        </div><br/> 	
      		<!-- <div class="input-field col s12 m6">
	          <select name="wedding_id" id="wedding_id">
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
		      </select>
	          <label for="name">Wedding</label>
	        </div> -->
	        <div class="input-field col s12 m6">
	        	<input type="text" class="validate" required="required" name="name" id="name" value="<?php echo $name; ?>">
	          	<label for="event_name">Event Name</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input type="text" class="datepicker" name="date" id="date" value="<?php echo $date; ?>">
	          <label for="date">Date</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input type="text" class="timepicker validate" name="time" id="time" value="<?php echo $time; ?>">
	          <label for="time">Time</label>
	        </div>
	        <div class="input-field col s12 m6">
	        <textarea  class="materialize-textarea" name="location" id="location"><?php echo $location; ?></textarea>
          	   <label for="textarea1">Location</label>
	        </div>
	        <input type="hidden" name="event-id" id="event-id" value="<?php echo $id;?>."> 
	        <!-- <div class="input-field col s12 m12">
	        	<center>
	        		<button class="btn black"> Add Event</button>
	        	</center>
	        </div> -->
      	</form>
      </div>
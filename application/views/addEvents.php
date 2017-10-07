<div class="row">
	<h5>
		<center><h5>Add New Event</h5></center>
	</h5>
</div><hr>

 <div class="profile-form row">
      	<form id="addEventForm" method="post" enctype="multipart/form-data">
      		<div class="input-field col s12 m6" id="eventImage">
	           <input type="file" name="image" id="image" style="display:none;">
          	   <button type="button" name="image" id="image" onclick="$('#eventImage input').click()" class="btn black"> Event Image</button>
	        </div>
      		<div class="input-field col s12 m6">
	         <select name="wedding_id" id="wedding_id">
			      <option value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWeddings as $key => $allWeddingsRow){ ?>
			      <option value="<?php echo $allWeddingsRow['id']; ?>"><?php echo $allWeddingsRow['id']; ?></option>
			      <?php } ?>
			      
		     </select>
	          <label for="name"> Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	        	<input type="text" class="validate" required="required" name="name" id="name">
	          	<label for="event_name">Event Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	          <input type="text" class="datepicker" name="date" id="date">
	          <label for="date">Date</label>
	        </div>
	        <div class="input-field col s12 m4">
	          <input type="text" class="timepicker validate" name="time" id="time">
	          <label for="time">Time</label>
	        </div>
	        <div class="input-field col s12 m12">
	         <textarea  class="materialize-textarea" name="location" id="location"></textarea>
          	   <label for="textarea1">Location</label>
	        </div>
	        <!-- <div class="input-field col s12 m12">
	        	<center>
	        		<button class="btn black"> Add Event</button>
	        	</center>
	        </div> -->
      	</form>
      </div>
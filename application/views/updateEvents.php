<div class="profile-form row">
      	<form>
      		<div class="input-field col s12 m6" id="eventImage">
	           <input type="file" name="eventImage" style="display:none;">
          	   <button onclick="$('#eventImage input').click()" class="btn black"> Event Image</button>
	        </div>
      		<div class="input-field col s12 m6">
	          <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
		      </select>
	          <label for="name">Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	        	<input type="text" class="validate" required="required">
	          	<label for="event_name">Event Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	          <input type="text" class="datepicker">
	          <label for="date">Date</label>
	        </div>
	        <div class="input-field col s12 m4">
	          <input type="text" class="timepicker validate">
	          <label for="time">Time</label>
	        </div>
	        <div class="input-field col s12 m12">
	           <textarea id="textarea1" class="materialize-textarea"></textarea>
          	   <label for="textarea1">Location</label>
	        </div>
	        <!-- <div class="input-field col s12 m12">
	        	<center>
	        		<button class="btn black"> Add Event</button>
	        	</center>
	        </div> -->
      	</form>
      </div>
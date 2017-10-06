<!--  admin profile view -->
<div class="row">
	<div class="profile-area">
		<div class="profileDetails">
			<div class="row">
				<div class="col s8 m10"><h4>Events List</h4></div>
				<div class="col s4 m2"><a href="#eventList" class="btn black modal-trigger">Add Event</a></div>
			</div>
			<div>
				<table class="responsive-table centered highlight">
			        <thead>
			          <tr>
			              <th>Id</th>
			              <th>Event Photo</th>
			              <th>Event Name</th>
			              <th>Wedding</th>
			              <th>Date</th>
			              <th>Time</th>
			              <th>Location</th>
			              <th>Action</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>1</td>
			            <td><img src="<?php echo base_url(); ?>html/images/profile.png" class="profile-img">
			            </td>
			            <td>Sangeet</td>
			            <td>Wedding</td>
			            <td>6 Oct, 2017</td>
			            <td>06:00 pm</td>
			            <td><textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, neque in laoreet convallis, sem quam semper justo, vitae varius purus turpis vel purus. Quisque venenatis metus vel ex egestas pretium.
			            </textarea></td>
			            <td><a href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></td>
			            <td><a href="#editProfile" class="btn-flat btn-delete waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></td>
			          </tr>
			          <tr>
			            <td>1</td>
			            <td><img src="<?php echo base_url(); ?>html/images/profile.png" class="profile-img">
			            </td>
			            <td>Sangeet</td>
			            <td>Wedding</td>
			            <td>6 Oct, 2017</td>
			            <td>06:00 pm</td>
			            <td><textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, neque in laoreet convallis, sem quam semper justo, vitae varius purus turpis vel purus. Quisque venenatis metus vel ex egestas pretium.
			            </textarea></td>
			            <td><a href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></td>
			            <td><a href="#editProfile" class="btn-flat btn-delete waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></td>
			          </tr>
			        </tbody>
			    </table>
			</div>
		</div>
	</div>
</div>




<!-- Modal To Edit Groom / Bride -->

  <!-- Modal Trigger -->
  

  <!-- Modal Structure -->
  <div id="eventList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Events List</h4>
      <!-- <p>A bunch of text</p> -->
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
	          <label for="name"> Name</label>
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
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add Event</a>
    </div>
  </div>
<div class="guestList-area row">
      	<form id="updateGuestListForm">
      		<div class="input-field col s12 m4">
			  <select id="addGuestWeddingID" name="wedding_id">
			      <option value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWedding as $key=>$weddingRow){ ?>
			      <option value="<?php echo $weddingRow["id"]; ?>"><?php echo $weddingRow["id"]; ?></option>
			      <?php } ?>			      
			    </select>
			    <label>Wedding</label>
			</div>
			<div class="input-field col s12 m4">
			    <select id="addGuestProfileList" name="profile_id">
			      <option value="" disabled selected>Choose your Profile</option>		    
			    </select>
			    <label>Profile</label>
			</div>

            <div class="input-field col s12 m4">
	          <input id="name" id="name" type="text" class="validate" required="required" value="<?php echo $name; ?>">
	          <label for="guest_name">Guest Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input id="mobile" id="mobile" type="text" class="validate" required="required" value="<?php echo $mobile; ?>">
	          <label for="guest_mobile">Guest Mobile</label>
	        </div>

	        <div class="input-field col s12 m6">
			   <select id="addGuestEventList" name="event_access[]" multiple>
			      <option value="" disabled selected>Select Events</option>			    
			    </select>
			    <label>Side</label>
            </div>
      	</form>
      </div>
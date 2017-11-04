 <div class="guestList-area row">
      	<form method="post" id="addGuestListForm">
      		<div class="input-field col s12 m4">
			  <select id="addGuestWeddingID" name="wedding_id">
			      <option value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWedding as $key=>$weddingRow){ ?>
			      <option value="<?php echo $weddingRow["id"]; ?>"><?php echo $weddingRow["bride_profile"]["name"]." | ".$weddingRow["groom_profile"]["name"]; ?></option>
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
	          <input id="name" name="name" type="text" class="validate" required="required">
	          <label for="guest_name">Guest Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input id="mobile" name="mobile" type="text" class="validate" required="required">
	          <label for="guest_mobile">Guest Mobile</label>
	        </div>

	        <div class="input-field col s12 m6">
			    <select id="addGuestEventList" name="event_access[]" multiple>
			      <option value="" disabled selected>Select Events</option>			    
			    </select>
			    <label>Events</label>
            </div>

      	</form>
      </div>
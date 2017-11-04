<div class="guestList-area row">
      	<form id="updateGuestListForm">
      		<div class="input-field col s12 m4">
			   <select id="addGuestWeddingID" name="wedding_id">
			      <option value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWedding as $key=>$weddingRow){ ?>
			      <option <?php if($wedding_id==$weddingRow["id"]){echo "selected='selected'";} ?> value="<?php echo $weddingRow["id"]; ?>"><?php echo $weddingRow["bride_profile"]["name"]." | ".$weddingRow["groom_profile"]["name"]; ?></option>
			      <?php } ?>			      
			    </select>
			    <label>Wedding</label>
			</div>
			<div class="input-field col s12 m4">
			     <select id="addGuestProfileList" name="profile_id">
			      <?php foreach ($allProfile as $key => $allProfileRow) { ?>
			    	<option <?php if($allProfileRow['id']==$profile_id){echo "selected='selected'"; } ?> value="<?php echo $allProfileRow['id']; ?>"><?php echo $allProfileRow['name']; ?></option>		    		
			    	<?php } ?>		    
			    </select> 
			    <label>Profile</label>
			</div>
            <div class="input-field col s12 m4">
	          <input id="name" name="name" type="text" class="validate" required="required" value="<?php echo $name; ?>">
	          <label for="guest_name">Guest Name</label>
	        </div>
	        <div class="input-field col s12 m6">
	          <input id="mobile" name="mobile" type="text" class="validate" required="required" value="<?php echo $mobile; ?>">
	          <label for="guest_mobile">Guest Mobile</label>
	        </div>
	        <div class="input-field col s12 m6">
			    <select id="addGuestEventList" name="event_access[]" multiple>
			      <option value="" disabled selected>Select Events</option>			    
			    </select>
			    <label>Side</label>
	        </div>
            <input type="hidden" name="guest-id" value="<?php echo $id; ?>">
      	</form>
      </div>
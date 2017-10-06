<h4>Edit Profile</h4>     
      <div class="profile-form row">
      	<form id="updateProfileForm">
      		<div class="input-field col s12 m12" id="profilePhoto">
	          <input id="profile_pic" name="profile_pic" type="file" class="validate" style="display: none;">
	          <button class="btn black" type="button" onclick="$('#profilePhoto input').click()">Upload Profile</button>
	        </div>
	        <div class="input-field col s12 m4">
	          <input id="name" name="name" type="text" class="validate" required="required" value="<?php echo $name; ?>">
	          <label for="name"> Name</label>
	        </div>

	        <div class="input-field col s12 m4">
	          <input id="occupation" type="text" class="validate" name="occupation" value="<?php echo $occupation; ?>">
	          <label for="designation">Designation</label>
	        </div>
	        <div class="input-field col s12 m12">
	           <textarea id="textarea1" class="materialize-textarea" id="profile_details" name="profile_details"><?php echo $profile_details;?></textarea>
          	   <label for="textarea1">Introduction</label>
	        </div>
	        <input type="hidden" name="profile-id" id="profile-id" value="<?php echo $id; ?>">

      	</form>
      </div>
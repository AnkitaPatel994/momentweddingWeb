<div class="row">
<center><h5>Edit Profile</h5></center>
</div><hr>
      <div class="profile-form row">
      	<form id="updateProfileForm">
      		<div class="input-field col s12 m6" id="profilePhoto">
      			<img width="100%" src="<?php echo base_url(); ?>html/images/profile/<?php echo $profile_pic?>"><br/>
	          <input id="profile_pic" name="profile_pic" type="file" class="validate" style="display: none;">
	          <button class="btn black" type="button" style="width: 100%" onclick="$('#profilePhoto input').click()">Upload Profile</button>
	        </div><br/>
	        <div class="input-field col s12 m4">
	          <input id="name" name="name" type="text" class="validate" required="required" value="<?php echo $name; ?>">
	          <label for="name"> Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input id="occupation" type="text" class="validate" name="occupation" value="<?php echo $occupation; ?>">
	          <label for="designation">Designation</label>
	        </div>
	        <div class="input-field col s12 m12 prfl">
	           <textarea id="textarea1" class="materialize-textarea" id="profile_details" name="profile_details"><?php echo $profile_details;?></textarea>
          	   <label for="textarea1">Introduction</label>
	        </div>
	        <input type="hidden" name="profile-id" id="profile-id" value="<?php echo $id; ?>">

      	</form>
      </div>
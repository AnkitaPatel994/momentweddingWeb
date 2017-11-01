<div class="row">
	<h5>
		<center><h5>Add New Member</h5></center>
	</h5>
</div><hr>

 <div class="profile-form row">
      	<form id="addMemberForm" method="post" enctype="multipart/form-data">
      	
      		<div class="input-field col s12 m4">
	         <select name="addGuestWeddingID" id="addGuestWeddingID">
			      <option value="" disabled selected>Choose your Wedding</option>
			      <?php foreach($allWeddings as $key => $allWeddingsRow){ ?>
			      <option value="<?php echo $allWeddingsRow['id']; ?>"><?php echo $allWeddingsRow['weddingName']; ?></option>
			      <?php } ?>			      
		     </select>
	          <label for="name">Wedding</label>
	        </div>
	        <div class="input-field col s12 m4">
			    <select id="addGuestProfileList" name="profile_id">
			      <option value="" disabled selected>Choose your Profile</option>		    
			    </select>
			    <label>Profile</label>
			</div>
	        <div class="input-field col s12 m4">
	        	<input type="text" class="validate" required="required" name="member_name" id="member_name">
	          	<label for="member_name">Member Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	        	<input type="text" class="validate" required="required" name="member_relation" id="member_relation">
	          	<label for="member_relation">Member Relation</label>
	        </div>        
	       
	         <div class="input-field col s12 m6" id="eventImage">	        	
	           <input type="file" name="member_pic" id="member_pic" style="display:none;">
          	   <button type="button" name="member_pic" id="member_pic" onclick="$('#eventImage input').click()" class="btn black upload-btn">Gallery Image</button>
	        </div>

	       <div class="input-field col s12 m12">
	        	 <textarea  class="materialize-textarea" name="member_details" id="	member_details"></textarea>
          	   <label for="textarea1">Member Details</label>
	        </div>
	    
	      
      	</form>
      </div>
<!--  admin profile view -->
<div class="row">
	<div class="profile-area">
		<div class="profileDetails">
			<div class="row"><center><h4>Upadte Profile</h4></center></div>
			<div>
				<table class="responsive-table centered highlight">
			        <thead>
			          <tr>
			              <th>Id</th>
			              <th>Profile Photo</th>
			              <th>Name</th>
			              <th>Date</th>
			              <th>Designation</th>
			              <th>Introduction</th>
			              <th>Action</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>1</td>
			            <td><img src="<?php echo base_url(); ?>html/images/profile.png" class="profile-img">
			            </td>
			            <td>Groom</td>
			            <td>6 Oct, 2017</td>
			            <td>Web Developer</td>
			            <td><textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, neque in laoreet convallis, sem quam semper justo, vitae varius purus turpis vel purus. Quisque venenatis metus vel ex egestas pretium.
			            </textarea></td>
			             <td><a href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></td>
			          </tr>
			          <tr>
			            <td>2</td>
			            <td><img src="<?php echo base_url(); ?>html/images/profile.png" class="profile-img">  
			            </td>
			            <td>Groom</td>
			            <td>6 Oct, 2017</td>
			            <td>Web Developer</td>
			            <td><textarea>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis efficitur, neque in laoreet convallis, sem quam semper justo, vitae varius purus turpis vel purus. Quisque venenatis metus vel ex egestas pretium.
			            </textarea></td>
			            <td><a href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></td>
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
  <div id="editProfile" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Edit Profile</h4>
      <p>A bunch of text</p>
      <div class="profile-form row">
      	<form>
      		<div class="input-field col s12 m12" id="profilePhoto">
	          <input id="" type="file" class="validate" style="display: none;">
	          <button class="btn black" onclick="$('#profilePhoto input').click()">Upload Profile</button>
	        </div>
	        <div class="input-field col s12 m4">
	          <input id="name" type="text" class="validate" required="required">
	          <label for="name"> Name</label>
	        </div>
	        <div class="input-field col s12 m4">
	           <input type="text" class="datepicker validate">
	          <label for="last_name">Date</label>
	        </div>
	        <div class="input-field col s12 m4">
	          <input id="designation" type="text" class="validate">
	          <label for="designation">Designation</label>
	        </div>
	        <div class="input-field col s12 m12">
	           <textarea id="textarea1" class="materialize-textarea"></textarea>
          	   <label for="textarea1">Introduction</label>
	        </div>
      	</form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Update</a>
    </div>
  </div>
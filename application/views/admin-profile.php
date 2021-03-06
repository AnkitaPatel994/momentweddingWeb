<!--  admin profile view -->
<div class="row top-header">
  <?php $this->load->view("includes/admin-desktop-nav"); ?>
	<div class="col m10">
		<div class="profileDetails">
			<div class="row"><h4>Update Profile</h4></div>
			<div>
				<table id="example" class="responsive-table centered highlight">
			        <thead>
			          <tr>
			              <th>Id</th>			         
			              <th>Name</th>			              
			              <th>Designation</th>
			             <!--  <th>Introduction</th> -->
			              <th>Action</th>
			          </tr>
			        </thead>
			        <tbody>
			          <?php foreach($allProfile as $key => $allProfileRow){?>
			          <tr id="profile-<?php echo $allProfileRow['id']; ?>">
			            <td><?php echo $allProfileRow['id']; ?></td>
			            <td><?php echo $allProfileRow['name']; ?></td>			            
			            <td><?php echo $allProfileRow['occupation']; ?></td>
			           <!--  <td><textarea><?php echo $allProfileRow['profile_details']; ?></textarea></td> -->
			            <td><a data-profile-id="<?php echo $allProfileRow['id']; ?>" href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i>
			            <a data-profile-id="<?php echo $allProfileRow['id']; ?>" class="btn-flat  btn-remove-profile waves-effect waves-light btn"><i class="material-icons">delete</i></td>
			          </tr>
			          <?php } ?>			         
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
      
    </div>
    <div class="modal-footer">
      <a href="#!" id="updateProfileData" class="modal-action modal-close waves-effect waves-green btn-flat ">Update</a>
    </div>
  </div>
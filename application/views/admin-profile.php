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
			              <th>Photo</th>
			              <th>Name</th>			              
			              <th>Designation</th>
			              <th>Introduction</th>
			              <th>Action</th>
			          </tr>
			        </thead>

			        <tbody>
			        	<?php foreach($allProfile as $key => $allProfileRow){?>
			          <tr>
			            <td><?php echo $allProfileRow['id']; ?></td>
			            <td><img  width="200" src="<?php echo base_url(); ?>html/images/profile/<?php echo $allProfileRow['profile_pic']  ?>" class="profile-img">
			            </td>
			            <td><?php echo $allProfileRow['name']; ?></td>			            
			            <td><?php echo $allProfileRow['occupation']; ?></td>
			            <td><?php echo $allProfileRow['profile_details']; ?></td>
			            <td><a data-profile-id="<?php echo $allProfileRow['id']; ?>" href="#editProfile" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></td>
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
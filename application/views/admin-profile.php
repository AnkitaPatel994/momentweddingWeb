<!--  admin profile view -->
<div class="row top-header">
  <div class="col m2">
    <div class="sidebar-area">
      <div>
      		<h5>Quick Links</h5>
      </div>
      <div class="divider"></div>
      <div class="quick-links">
      	<ul>
      		<a href="<?php echo base_url(); ?>admin/Wedding"><li>Wedding</li></a>
      		<a href="<?php echo base_url(); ?>admin/profile"><li>profile</li></a>
      		<a href="<?php echo base_url(); ?>admin/EventsList"><li>EventsList</li></a>
      	</ul>
      </div>
    </div>
  </div>

	<div class="col m10">
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
			            <td><textarea><?php echo $allProfileRow['profile_details']; ?></textarea></td>
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
<!-- guest list view -->
<!--  admin profile view -->


<div class="row top-header">
  <?php $this->load->view("includes/admin-desktop-nav"); ?>
	<div class="profile-area col m10">
		<div class="profileDetails">
			<div class="row">
				<div class="col s2 m3"><h4>Guest List</h4></div>
				<div class="col s8 m4"><a href="#guestList" class="btn black modal-trigger">Upload Guest</a></div>
				<div class="col s8 m4"><a href="#addGuest" class="btn black modal-trigger">Add Guest</a></div>
			</div>
			<div>
				<!-- <table id="table_id" class="table table-condensed responsive-table centered highlight"> -->
				<table id="example" class="display" cellspacing="0" width="100%">
			        <thead>
			          <tr>
			              <th>Id</th>
			              <th>Wedding</th>
			              <th>Invited By</th>
			              <th>Guest Name</th>
			              <th>Mobile</th>
			              <th>Action</th>
			          </tr>
			        </thead>

			        <tbody>
			        <?php foreach($allGuestList as $key => $allGuestListRow){?>
			          <tr id="guest-id<?php echo $allGuestListRow['id']; ?>">
			            <td><?php echo $allGuestListRow['id']; ?></td>
			            <td><?php echo $allGuestListRow['weddingName']; ?></td>
			            <td><?php echo $allGuestListRow['invitedBy']; ?></td>
			            <td><?php echo $allGuestListRow['name']; ?></td>
			            <td><?php echo $allGuestListRow['mobile']; ?></td>
			            <td><a href="#EditGuestList" class="btn-flat btn-edit waves-effect waves-light data-guest-id=<?php echo $allGuestListRow['id']; ?>  btn modal-trigger"><i class="material-icons">edit</i></a>
			            <a href="#editProfile" data-guest-id=<?php echo $allGuestListRow['id']; ?>  class="btn-flat btn-delete waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>
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
  <div id="guestList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <?php $this->load->view("uploadExcel");?>
      <!-- <p>A bunch of text</p> -->     
    </div>
    <div class="modal-footer">
      <a href="#!" id="uploadGuest" class="modal-action modal-close waves-effect waves-green btn-flat ">Upload</a>
    </div>
  </div>



<!-- Modal GUETS add -->
<!-- Modal Structure -->

  <div id="addGuest" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<div class="row">
      		<center><h5>Add New Guest</h5></center>
      		<?php //var_dump($allWedding); ?>
      	</div><hr>	
      <!-- <p>A bunch of text</p> -->
     <!--  <div class="guestList-area row">
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
			    <label>Side</label>
            </div>

      	</form>
      </div> -->
        <?php $this->load->view("addGuest"); ?>
    </div>
    <div class="modal-footer">
      <a href="#!" id="sendGuestListData" class="modal-action modal-close waves-effect waves-green btn-flat ">Add New Guest</a>
    </div>
  </div>

  <!-- Edit guest list -->

<div id="EditGuestList" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<div class="row">
      		<center><h5>Edit New Guest</h5></center>
      	</div>	<hr>
      <!-- <p>A bunch of text</p> -->
      
    </div>
    <div class="modal-footer">
      <a href="#!" id="updateGuestListData" class="modal-action modal-close waves-effect waves-green btn-flat ">Add New Guest</a>
    </div>
  </div>

<script type="text/javascript">
	$(document).ready(function() {
	    //$('#example').DataTable();
	} );
</script>
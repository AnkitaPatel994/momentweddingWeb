<!--  admin profile view -->
<div class="row top-header">
  <?php $this->load->view("includes/admin-desktop-nav"); ?>

	<div class="profile-area col m10">
		<div class="profileDetails">
			<div class="row">
				<div class="col s8 m10"><h4>Events List</h4></div>
				<div class="col s4 m2"><a href="#eventList" class="btn black modal-trigger">Add Event</a></div>
			</div>
			<div>
				<table id="DataTable"  border="1" class="responsive-table centered highlight dataTable no-footer">
			        <thead>
			          <tr>
			              <th>Id</th>			              
			              <th>Event Name</th>
			              <th>Wedding</th>
			              <th>Date</th>
			              <th>Time</th>
			              <th>Location</th>
			              <th>Action</th>
			          </tr>
			        </thead>

			        <tbody>
			        <?php foreach($allEvents as $key =>$allEventsRow){?>
			          <tr id="event-id<?php echo $allEventsRow['id']; ?>">
			            <td><?php echo $allEventsRow['id']; ?></td>
			            
			            <td><?php echo $allEventsRow['name']; ?></td>
			            <td><?php echo $allEventsRow['weddingName']; ?></td>
			            <td><?php echo $allEventsRow['date']; ?></td>
			            <td><?php echo $allEventsRow['time']; ?></td>
			            <td><textarea><?php echo $allEventsRow['location']; ?></textarea></td>
			            <td><a href="#EditeventList" data-event-id=<?php echo $allEventsRow['id']; ?> class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></a>
			            <a href="#EditeventGallery" class="btn-flat btn-gallery waves-effect waves-light btn modal-trigger"><i class="material-icons">burst_mode</i></a>
			            <a href="#editProfile" data-event-id=<?php echo $allEventsRow['id']; ?> class="btn-flat btn-delete waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>
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
  <div id="eventList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <?php $this->load->view("addEvents",array("allWeddings"=>$allWeddings));?>
      <!-- <p>A bunch of text</p> -->     
    </div>
    <div class="modal-footer">
      <a href="#!" id="sendEventData" class="modal-action modal-close waves-effect waves-green btn-flat ">Add Event</a>
    </div>
  </div>


  <!-- Edit Events -->


  <!-- Modal Structure -->
  <div id="EditeventList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Events List</h4>
      <!-- <p>A bunch of text</p> -->
      
    </div>
    <div class="modal-footer">
      <a href="#!" id="updateEventData" class="modal-action modal-close waves-effect waves-green btn-flat ">Update Event</a>
    </div>
  </div>



  <!-- Edit Event Gallery -->

   <div id="EditeventGallery" class="modal modal-fixed-footer">
    <div class="modal-content">
      <div class="row">
        <center><h4>Events List</h4></center>
      </div><hr>
      <!-- <p>A bunch of text</p> -->
      <div class="profile-form row">
      	<form>
      		<div class="file-field input-field col s12">
		      <div class="btn">
		        <span>File</span>
		        <input type="file" multiple>
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text" placeholder="Upload one or more files">
		      </div>
		    </div>

      		<div class="input-field col s12" id="eventImage">
	           <button class="btn black">Upload Even Images</button>
	        </div>
      	</form>
      </div>

      <div class="row">
      	<div class="col s6 m4 eventImage-box">
      		<img src="<?php echo base_url(); ?>/html/images/profile.png">
      	</div>
      	<div class="col s6 m4 eventImage-box">
      		<img src="<?php echo base_url(); ?>/html/images/profile.png">
      	</div>
      	<div class="col s6 m4 eventImage-box">
      		<img src="<?php echo base_url(); ?>/html/images/profile.png">
      	</div>
      	<div class="col s6 m4 eventImage-box">
      		<img src="<?php echo base_url(); ?>/html/images/profile.png">
      	</div>
      	<div class="col s6 m4 eventImage-box">
      		<img src="<?php echo base_url(); ?>/html/images/profile.png">
      	</div>
      </div>
    </div>

    <div class="modal-footer">


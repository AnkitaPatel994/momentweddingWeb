<!-- guest list view -->
<!--  admin profile view -->
<div class="row top-header">
  <div class="col m2">
    <div class="sidebar-area">
      <div class="center">
      		<h5>Menu</h5>
      </div>
      <div class="divider"></div>
      <div class="quick-links">
      	<ul>
      		<a href="<?php echo base_url(); ?>admin/Wedding"><li>Wedding</li></a>
      		<a href="<?php echo base_url(); ?>admin/profile"><li>profile</li></a>
      		<a href="<?php echo base_url(); ?>admin/EventsList"><li>EventsList</li></a>
      		<a href="<?php echo base_url(); ?>admin/guest_list"><li>Guest List</li></a>
      	</ul>
      </div>
    </div>
  </div>




	<div class="profile-area col m10">
		<div class="profileDetails">
			<div class="row">
				<div class="col s8 m10"><h4>Guest List</h4></div>
				<div class="col s4 m2"><a href="#addGuest" class="btn black modal-trigger">Add Guest</a></div>
			</div>
			<div>
				<table class="responsive-table centered highlight">
			        <thead>
			          <tr>
			              <th>Id</th>
			              <th>Wedding</th>
			              <th>Side</th>
			              <th>Guest Name</th>
			              <th>Mobile</th>
			              <th>Events</th>
			              <th colspan="3">Action</th>
			          </tr>
			        </thead>

			        <tbody>
			          <tr>
			            <td>1</td>
			            <td>Wedding</td>
			            <td>Groom</td>
			            <td>Mr. Guest</td>
			            <td>7600278055</td>
			            <td>Sangeet,Mahendi</td>
			            <td><a href="#EditGuestList" class="btn-flat btn-edit waves-effect waves-light btn modal-trigger"><i class="material-icons">edit</i></a>
			            <a href="#editProfile" class="btn-flat btn-delete waves-effect waves-light btn modal-trigger"><i class="material-icons">delete</i></a></td>
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
  <div id="eventList" class="modal modal-fixed-footer">
    <div class="modal-content">
      <?php $this->load->view("addEvents",array("allWeddings"=>$allWeddings));?>
      <!-- <p>A bunch of text</p> -->     
    </div>
    <div class="modal-footer">
      <a href="#!" id="sendEventData" class="modal-action modal-close waves-effect waves-green btn-flat ">Add Event</a>
    </div>
  </div>



<!-- Modal GUETS add -->
<!-- Modal Structure -->

  <div id="addGuest" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<div class="row">
      		<center><h5>Add New Guest</h5></center>
      		<?php //var_dump($allWedding); ?>
      	</div>	
      <!-- <p>A bunch of text</p> -->
      <div class="guestList-area row">
      	<form>
      		<div class="input-field col s12 m4">
			    <select id="addGuestWeddingID">
			      <option value="" disabled selected>Choose your option</option>
			      <?php foreach($allWedding as $key=>$weddingRow){ ?>
			      <option value="<?php echo $weddingRow["id"]; ?>"><?php echo $weddingRow["id"]; ?></option>
			      <?php } ?>
			      
			    </select>
			    <label>Wedding</label>
			</div>

			<div class="input-field col s12 m4">
			    <select id="addGuestProfileList">
			      <option value="" disabled selected>Choose your Profile</option>		    
			    </select>
			    <label>Profile</label>
			</div>

            <div class="input-field col s12 m4">
	          <input id="guest_name" type="text" class="validate" required="required">
	          <label for="guest_name">Guest Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input id="guest_mobile" type="text" class="validate" required="required">
	          <label for="guest_mobile">Guest Mobile</label>
	        </div>

	        <div class="input-field col s12 m6">
			    <select id="addGuestEventList" multiple>
			      <option value="" disabled selected>Select Events</option>
			      <option value="1">Sangeet</option>
			      <option value="2">Mahendi</option>
			    </select>
			    <label>Side</label>
            </div>

      	</form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add New Guest</a>
    </div>
  </div>



  <!-- Edit guest list -->

<div id="EditGuestList" class="modal modal-fixed-footer">
    <div class="modal-content">
    	<div class="row">
      		<center><h5>Edit New Guest</h5></center>
      	</div>	
      <!-- <p>A bunch of text</p> -->
      <div class="guestList-area row">
      	<form>
      		<div class="input-field col s12 m4">
			    <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Option 1</option>
			      <option value="2">Option 2</option>
			      <option value="3">Option 3</option>
			    </select>
			    <label>Wedding</label>
			</div>

			<div class="input-field col s12 m4">
			    <select>
			      <option value="" disabled selected>Choose your option</option>
			      <option value="1">Groom</option>
			      <option value="2">Bride</option>
			    </select>
			    <label>Wedding</label>
			</div>

            <div class="input-field col s12 m4">
	          <input id="guest_name" type="text" class="validate" required="required">
	          <label for="guest_name">Guest Name</label>
	        </div>

	        <div class="input-field col s12 m6">
	          <input id="guest_mobile" type="text" class="validate" required="required">
	          <label for="guest_mobile">Guest Mobile</label>
	        </div>

	        <div class="input-field col s12 m6">
			    <select multiple>
			      <option value="" disabled selected>Select Events</option>
			      <option value="1">Sangeet</option>
			      <option value="2">Mahendi</option>
			    </select>
			    <label>Side</label>
            </div>

      	</form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Add New Guest</a>
    </div>
  </div>
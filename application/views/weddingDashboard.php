<div class="row top-header">
  <div class="col m2">
    <div class="sidebar-area sticky">
      <div>
          <h5>Quick Links</h5>
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

<div class="col m10">
 <div class="weddingDetails-area">
  <div class="page-header">
    <div class="row">
      <div class="page-title col s6 m10">Wedding Management</div>      
      <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn black modal-trigger" href="#weddingModal">Add</a>
      </div>
    </div>  
  </div>
   <div class="page-content">
   	<table border="1" class="responsive-table centered">
    <thead>
   		<tr>
        <th>Order</th>
        <th>Bride Id</th>    
        <th>Groom Id</th>
        <th>Date</th> 
        <th>Invitation</th> 
        <th>Code</th>          
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allWeddingData as $key => $allWeddingRow) { ?>
      <tr id="wed-id<?php echo $allWeddingRow['id']; ?>">  
        <td><?php echo $allWeddingRow['id']; ?></td>         
        <td><?php echo $allWeddingRow['bride_profile']["name"]; ?></td>
        <td><?php echo $allWeddingRow['groom_profile']["name"]; ?></td>
        <td><?php echo $allWeddingRow['date']; ?></td> 
        <td><?php echo substr($allWeddingRow['invitation'], 0,300); ?></td> 
        <td><?php echo $allWeddingRow['code']; ?></td>        
      
        <td class="right-align blog-btn">
        <a data-wed-id="<?php echo $allWeddingRow['id']; ?>" class="btn-floating waves-effect waves-light red delete-wedding"><i class="material-icons">delete</i></a>
        <a data-wed-id="<?php echo $allWeddingRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey edit-wedding"><i class="material-icons">mode_edit</i></a>

        </td>
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
</div>   
</div>
<!-- Modal Structure -->
  <div id="weddingModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addWedding"); ?>
    </div>
 
  </div>

  <!-- Modal Structure -->
   <div id="editWeddingModal" class="modal">
    <div class="modal-content">
     </div>
   </div>



<!-- Modal -->



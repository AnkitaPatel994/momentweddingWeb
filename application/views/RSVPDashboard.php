<style type="text/css">
  
.btn-edit-wed{
    background: #eee;
    color: #000;
    border: 1px solid #ddd;
    border-radius: 69px;
    padding: 0px 7px;
    margin: 0 auto;
    text-align: center;
}
.btn-edit-wed:hover
{
    background:rgba(0,0,0,0.2) !important;
}

.btn-delete-wed {
    background: rgba(222, 21, 21, 0.20);
    border: 1px solid #e69b9b;
    color: #000;
    border-radius: 69px;
    padding: 0px 7px;
    margin: 0 auto;
    text-align: center;
}
.btn-delete-wed:hover {
    background: rgba(222, 21, 21, 0.50) !important;
}
</style>

<div class="row top-header">
  <?php $this->load->view("includes/admin-desktop-nav"); ?>

<div class="col m10">
 <div class="weddingDetails-area">
  <div class="page-header">
    <div class="row">
      <div class="page-title col s6 m10"><h4>Wedding Management</h4></div>
     <!--  <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn black modal-trigger" href="#weddingModal">Add Wedding</a>
      </div> -->
    </div>  
  </div>
   <div class="page-content">
   	<table id="example"  border="1" class="responsive-table centered highlight dataTable no-footer">
    <thead>
   		<tr>
        <th>Id</th>
        <th>Wedding Name</th>      
        <th>Date</th> 
        <th>Code</th> 
        <th>Guest Count</th>
        <!--<th style="max-width:100px;">Invitation</th> -->                 
     <!--    <th>Actions</th> -->
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allWeddingData as $key => $allWeddingRow) { ?>
      <tr class="wedding" id="wed-id<?php echo $allWeddingRow['id']; ?>">  
        <td><?php echo $allWeddingRow['id']; ?></td>         
        <td><?php echo $allWeddingRow['bride_profile']["name"].$allWeddingRow['groom_profile']["name"]; ?></td>
       <!--  <td><?php //echo $allWeddingRow['groom_profile']["name"]; ?></td> -->
         <td><?php echo $allWeddingRow['date']; ?></td>  
        <!--<td><?php //echo substr($allWeddingRow['invitation'], 0,200); ?>...</td> -->
       <td><?php echo $allWeddingRow['code']; ?></td>   
       <td><?php echo $allWeddingRow['totalGuest']; ?></td>            
      
    <!--     <td class="right-align blog-btn">
        <a data-wed-id="<?php echo $allWeddingRow['id']; ?>" class="btn btn-edit-wed edit-wedding"><i class="material-icons">mode_edit</i></a>
        <a data-wed-id="<?php echo $allWeddingRow['id']; ?>" class="btn btn-delete-wed delete-wedding"><i class="material-icons">delete</i></a></td> -->
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
</div>   
</div>


<!-- Modal Structure -->
  <div id="RSVPModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("allEventByWedding"); ?>
    </div>
 
  </div>

  <!-- Modal Structure -->
   <div id="editWeddingModal" class="modal">
    <div class="modal-content">
     </div>
   </div>



<!-- Modal -->



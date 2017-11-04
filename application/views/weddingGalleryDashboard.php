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
      <div class="page-title col s6 m10"><h4>Wedding Gallery Management</h4></div>
      <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn black modal-trigger" id="wedGallery">Add Wedding</a>
      </div>
    </div>  
  </div>
   <div class="page-content">
   	<table id="example"  border="1" class="responsive-table centered highlight dataTable no-footer">
    <thead>
   		<tr>
        <th>Id</th>
        <th>Wedding</th>    
        <th>Gallery Name</th>           
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allWedGallery as $key => $allWedGalleryRow) { ?>
      <tr id="wed-gallery-id<?php echo $allWedGalleryRow['id']; ?>">  
        <td><?php echo $allWedGalleryRow['id']; ?></td> 
         <td><?php echo $allWedGalleryRow['wedding_id']; ?></td>            
        <td><?php echo $allWedGalleryRow["name"]; ?></td>      
        <td class="right-align">
        <a data-wed-gallery-id="<?php echo $allWedGalleryRow['id']; ?>" class="btn wed-edit-btn edit-wedding"><i class="material-icons">mode_edit</i></a>
        <a  data-wed-gallery-id="<?php echo $allWedGalleryRow['id']; ?>" class="btn-flat btn-gallery waves-effect waves-light btn "><i class="material-icons">burst_mode</i></a>
        <a data-wed-gallery-id="<?php echo $allWedGalleryRow['id']; ?>" class="btn wed-delete-btn"><i class="material-icons">delete</i></a></td>
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
</div>   
</div>

  <!-- Modal Structure -->
  <div id="weddingGalleryModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addWeddingGallery"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendWedData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editWedModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateWed" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

<!-- Modal -->
  <!-- Modal Structure -->
<!--    <div id="addGalleryModal" class="modal">
    <div class="modal-content">
      <?php //$this->load->view("addGallery"); ?>
     </div>

    <div class="modal-footer">
      <a  id="sendGallery" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div> -->

    <div id="addGalleryModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="sendGallery" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>




<div class="container">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
      <div class="page-title">Wedding Management</div>      
      <div class="page-button"><a class="waves-effect waves-light btn blue" id="addBlogBtn">Add</a></div>
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
        <td><?php echo $allWeddingRow['bride_id']; ?></td>
        <td><?php echo $allWeddingRow['groom_id']; ?></td>
        <td><?php echo $allWeddingRow['date']; ?></td> 
        <td><?php echo $allWeddingRow['invitation']; ?></td> 
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
  <div id="addBlogModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addBlog"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendBlogData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editBlogModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateBlogdata" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

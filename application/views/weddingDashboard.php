
<div class="weddingDetails-area">
 <div class="row">

 <div class="card-panel">

  <div class="page-header">
    <div class="row">
      <div class="page-title col s6 m10">Wedding Management</div>      
      <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn modal-trigger" href="#weddingModal">Add</a>
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
        <td><?php echo $allWeddingRow['bride_id']; ?></td>
        <td><?php echo $allWeddingRow['groom_id']; ?></td>
        <td><?php echo $allWeddingRow['date']; ?></td> 
        <td><textarea><?php echo $allWeddingRow['invitation']; ?></textarea></td> 
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



<!-- Modal -->

  <!-- add wedding Modal Structure -->

  <div id="weddingModal" class="modal modal-fixed-footer">
    <div class="modal-header">
    </div>
    <div class="modal-content">
      <center><h4>Add New Wedding</h4></center>
      <!-- <p>A bunch of text</p> -->
      <div class="wedding-area row">
        <form>
          <div class="input-field col s12 m4">
            <input id="bride_name" type="text" class="validate" required="required">
            <label for="bride_name">Bride Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="groom_name" type="text" class="validate" required="required">
            <label for="groom_name">Groom Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="date" type="text"  class="datepicker validate" required="required">
            <label for="Date">Date</label>
          </div>
          <div class="input-field col s12">
            <textarea id="invitation" class="materialize-textarea" required="required"></textarea>
            <label for="invitation">Invitation</label>
          </div>
          <div class="input-field col s12">
            <center><button class="btn black">Add</button></center>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>


<!-- update WEDDING Modal-->

<div id="weddingModal-update" class="modal modal-fixed-footer">
    <div class="modal-header">
    </div>
    <div class="modal-content">
      <center><h4>Update Wedding</h4></center>
      <!-- <p>A bunch of text</p> -->
      <div class="wedding-area row">
        <form>
          <div class="input-field col s12 m4">
            <input id="bride_name" type="text" class="validate" required="required">
            <label for="bride_name">Bride Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="groom_name" type="text" class="validate" required="required">
            <label for="groom_name">Groom Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="date" type="text"  class="datepicker validate" required="required">
            <label for="Date">Date</label>
          </div>
          <div class="input-field col s12">
            <textarea id="invitation" class="materialize-textarea" required="required"></textarea>
            <label for="invitation">Invitation</label>
          </div>
          <div class="input-field col s12">
            <center><button class="btn black">Update</button></center>
          </div>
        </form>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>

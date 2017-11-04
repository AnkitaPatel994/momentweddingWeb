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
      <div class="page-title col s6 m10"><h4>Member Management</h4></div>
      <div class="page-button col s6 m2">
        <a class="waves-effect waves-light btn black modal-trigger" id="addMember">Add Wedding</a>
      </div>
    </div>  
  </div>
   <div class="page-content">
   	<table id="example"  border="1" class="responsive-table centered highlight dataTable no-footer">
    <thead>
   		<tr>
        <th>Id</th>
        <th>Profile</th>    
        <th>Member Name</th>
        <th>Member Relation</th> 
        <th>Member Image</th> 
        <th>Member Details</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($allMember as $key => $allMemberRow) { ?>
      <tr id="member-id<?php echo $allMemberRow['id']; ?>">  
        <td><?php echo $allMemberRow['id']; ?></td> 
        <td><?php echo $allMemberRow['profile_id']; ?></td>            
        <td><?php echo $allMemberRow["member_name"]; ?></td>
        <td><?php echo $allMemberRow["member_relation"]; ?></td>
        <td><img width="200" height="200" src="<?php echo base_url(); ?>html/images/member/<?php echo $allMemberRow["member_pic"]; ?>"></td>
        <td><?php echo $allMemberRow["member_details"]; ?></td>     
        <td class="right-align blog-btn">
        <a data-member-id="<?php echo $allMemberRow['id']; ?>" class="btn member-edit-btn"><i class="material-icons">mode_edit</i></a>       
        <a data-member-id="<?php echo $allMemberRow['id']; ?>" class="btn member-delete-btn"><i class="material-icons">delete</i></a></td>
      </tr>
      <?php } ?>
      </tbody>
   	</table>
   </div>
  </div>
</div>   
</div>

  <!-- Modal Structure -->
  <div id="memberModal" class="modal">
    <div class="modal-content">
      <?php $this->load->view("addMember"); ?>
    </div>
    <div class="modal-footer">
      <a id="sendMemberData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>

  <!-- Modal Structure -->
   <div id="editMemberModal" class="modal">
    <div class="modal-content">
     </div>

    <div class="modal-footer">
      <a  id="updateMemberData" href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Save</a>
    </div>
  </div>





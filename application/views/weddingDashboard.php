
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
        <th>Title</th>    
        <th>Details</th>
        <th>Image</th>            
        <th>Actions</th>
   		</tr>
    </thead>
    <tbody>
      <?php foreach ($blogData as $key => $blogRow) { ?>
      <tr id="blog<?php echo $blogRow['id']; ?>">  
         <td><?php echo $blogRow['id']; ?></td>         
        <td><?php echo $blogRow['title']; ?></td>
        <td><?php echo $blogRow['details']; ?></td>        
        <td><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow['image']; ?>" width="400" height="300"/></td>     
        <td class="right-align blog-btn">
        <a data-blog-id="<?php echo $blogRow['id']; ?>" class="btn-floating waves-effect waves-light red blog-delete-btn"><i class="material-icons">delete</i></a>
        <a data-blog-id="<?php echo $blogRow['id']; ?>" class="btn-floating waves-effect waves-light blue-grey blog-edit-btn"><i class="material-icons">mode_edit</i></a>
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

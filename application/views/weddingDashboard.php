
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
        <th>Id</th>
        <th>Bride Name</th>    
        <th>Groom Name</th>
        <th>Date</th>
        <th>Invitation</th>
        <th>Action</th>
   		</tr>
    </thead>
    <tbody>
      
      <tr>  
         <td>1</td>         
        <td>Bride</td>
        <td>Groom</td>        
        <td>7 October, 2017</td>
        <td><textarea>Lorem ipsum dolor sit amet, deserunt laboramus inciderint ius ea, in vel doctus quaestio. Wisi putant id sea, ad vel legendos inciderint. Ne quas salutatus cum. Alii elit dicta an vix, nibh eros verterem his cu. Est esse vivendo torquatos cu, vis hinc viderer eleifend ea. Ut iudicabit repudiandae duo, an mei posidonium mediocritatem.</textarea></td>
        <!-- <td><img src="<?php echo base_url(); ?>html/images/blog/<?php echo $blogRow['image']; ?>" width="400" height="300"/></td>  -->    
        <td class="right-align">
        <a class="btn-floating waves-effect waves-light red delete-btn"><i class="material-icons">delete</i></a>
        <a href="#weddingModal-update" class="btn-floating waves-effect waves-light btn modal-trigger"><i class="material-icons">mode_edit</i></a>
        </td>
      </tr>
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

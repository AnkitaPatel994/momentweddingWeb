      <center><h4>Update Wedding</h4></center>
      <!-- <p>A bunch of text</p> -->
      <div class="wedding-area row">
        <form>
          <div class="input-field col s12 m4">
            <input id="bride_name" type="text" class="validate" required="required" value="<?php echo $bride_profile['name']; ?>">
            <label for="bride_name">Bride Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="groom_name" type="text" class="validate" required="required" value="<?php echo $groom_profile['name']; ?>">
            <label for="groom_name">Groom Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="date" type="text"  class="datepicker validate" required="required" value="<?php echo $date ?>">
            <label for="Date">Date</label>
          </div>
          <div class="input-field col s12">
            <textarea id="invitation" class="materialize-textarea" required="required"><?php echo $invitation?></textarea>
            <label for="invitation">Invitation</label>
          </div>
          <div class="input-field col s12">
            <center><button class="btn black" id="sendWeddingData">Update</button></center>
          </div>
        </form>
      </div>
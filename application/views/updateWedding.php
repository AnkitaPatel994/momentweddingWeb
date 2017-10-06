      <center><h4>Update Wedding</h4></center>
      <!-- <p>A bunch of text</p> -->
      <div class="wedding-area row">
        <form id="updateWeddingForm" method="post">
          <div class="input-field col s12 m4">
            <input id="bride_name" name="bride_name" type="text" class="validate" required="required" value="<?php echo $bride_profile['name']; ?>">
            <input type="hidden" name="bride_id" id="bride_id" value="<?php echo $bride_id; ?>" />
            <label for="bride_name">Bride Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="groom_name" name="groom_name" type="text" class="validate" required="required" value="<?php echo $groom_profile['name']; ?>">
             <input type="hidden" name="groom_id" id="groom_id" value="<?php echo $groom_id; ?>" />
            <label for="groom_name">Groom Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="date" type="text" name="date" class="datepicker validate" required="required" value="<?php echo $date ?>">
            <label for="Date">Date</label>
          </div>
          <div class="input-field col s12">
            <textarea id="invitation" name="invitation" class="materialize-textarea" required="required"><?php echo $invitation?></textarea>
            <label for="invitation">Invitation</label>
            <input type="hidden" name="wedId" id="wedId" value="<?php echo $id;?>">
          </div>

          <div class="input-field col s12">
            <center><button type="button" class="btn black" id="updateWeddingData">Update</button></center>
          </div>
        </form>
      </div>
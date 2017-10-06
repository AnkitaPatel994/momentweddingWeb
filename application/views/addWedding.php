      <center><h4>Add New Wedding</h4></center>
      <!-- <p>A bunch of text</p> -->
      <div class="wedding-area row">
        <form id="addWeddingForm">
          <div class="input-field col s12 m4">
            <input id="bride_name" type="text" class="validate" required="required">
            <label for="bride_name">Bride Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input id="groom_name" type="text" class="validate" required="required">
            <label for="groom_name">Groom Name</label>
          </div>
          <div class="input-field col s12 m4">
            <input name="date" id="date" type="text"  class="datepicker validate" required="required">
            <label for="Date">Date</label>
          </div>
          <div class="input-field col s12">
            <textarea name="invitation" id="invitation" class="materialize-textarea" required="required"></textarea>
            <label for="invitation">Invitation</label>
          </div>
          <div class="input-field col s12">
            <center><button class="btn black">Add</button></center>
          </div>
        </form>
      </div>
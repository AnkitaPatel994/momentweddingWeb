  <div class="row">
      <center><h5>Add Events</h5></center>
    </div><hr>
      <!-- <p>A bunch of text</p> -->
      <div class="container">
      <div class="wedding-area row">
        <?php foreach($eventList as $key => $eventListRow){ ?>
        <div class="col m6 s12 event-id" data-event-id="<?php echo $eventListRow['id']; ?>">
          <div class="event_name"><?php echo $eventListRow['name']; ?></div>
           <div class="guest_count">Guest Count</div>
           <div class="number"><?php echo $eventListRow['totalGuest']; ?></div>
        </div>
        <?php } ?>
      </div>      
  </div>
  <div id="EventModal" class="modal">
    <div class="modal-content">     
  </div> 
</div>
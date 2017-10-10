  <div class="row">
      <center><h5>Event Guests</h5></center>
    </div><hr>
      <!-- <p>A bunch of text</p> -->
      <div class="row">
      <div class="wedding-area row">
        <?php foreach($eventList as $key=>$eventRow){ ?>
        <div class="col m4 s12">

          <div class="event-guest-container card-panel hoverable" data-event-id="<?php echo $eventRow["id"]; ?>">
            
            <div class="guest_count"><?php echo $eventRow["totalGuest"]; ?> <span> Guests</span></div>
            <div class="event_name"><?php echo $eventRow["name"];?></div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="event-area"></div>
  </div>


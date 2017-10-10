  <div class="row">
      <center><h5>Event Guests</h5></center>
    </div><hr>
      <!-- <p>A bunch of text</p> -->
      <div class="container">
      <div class="wedding-area row">
        <?php foreach($eventList as $key=>$eventRow){ ?>
        <div class="col m6 s12">
          <div class="event-guest-container">
            <div class="event_name"><?php echo $eventRow["name"];?></div>
             <div class="guest_count"><?php echo $eventRow["totalGuest"]; ?> Guests</div>
          </div>
        </div>
        <?php } ?>
      </div>
  </div>


       <!-- <p>A bunch of text</p> -->
      <div class="transport-container">
      <div class="wedding-area row">
      <?php foreach($outputData as $key => $outputRow){ ?>
        <div class="col m4 s12">
          <div class="transport-mode-container pointer" data-event-id="<?php echo $outputRow['eventID']; ?>">      
                <div class="transport-guest"><?php echo $outputRow['count']; ?> <span>Guests</span></div>      
                <div class="transport-mode"><?php echo $key; ?></div>
                
          </div>
        </div>
        <?php } ?>     
        
      </div>
      <div class="transport-area">
        <input type="button" name="back" id="trans-back" class="btn" value="Back">
      </div>
    
  </div>


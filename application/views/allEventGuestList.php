       <!-- <p>A bunch of text</p> -->
       <input type="button" name="back" id="tblback" class="btn" value="Back">
    <div class="transport-container-table">
      <div class="wedding-area row">
        <div class="page-content">
         <table id="example"  border="1" class="responsive-table centered highlight dataTable no-footer">
          <thead>
            <tr>
              <th>Order</th>
              <th>Arrival Time</th>    
              <th>Name</th>
              <th>Mobile</th>
              <th>Guest Count</th>             
            </tr>
          </thead>
        <tbody>
          <?php foreach($guestList as $key => $guestListRow){ ?>
          <tr>
              <td><?php echo $guestListRow['id']; ?></td>
              <td><?php echo $guestListRow['arriving_on']; ?></td>
              <td><?php echo $guestListRow['name']; ?></td>
              <td><?php echo $guestListRow['mobile']; ?></td>
              <td><?php echo $guestListRow['guest_count']; ?></td>
          </tr>
          <?php } ?>
      </tbody>
    </table>
</div>
</div>
</div>






















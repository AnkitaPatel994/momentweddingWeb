<style type="text/css">
	.ftr {
	    background: #790c17;
	    position: fixed;
	    bottom: 0;
	    margin-bottom: 0px;
	    padding: 5px;
	    width: 100%;
	}
</style>
	<footer>
		<div class="ftr">
			
		</div>
	</footer>

	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>

	  	<script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
      } );
      </script>
	</body>
</html>
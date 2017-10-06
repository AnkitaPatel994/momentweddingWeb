	 	<?php $this->load->view('addtourModal'); ?>
	 	<?php $this->load->view('update_tour'); ?>
	 	<?php $this->load->view('delete_tour'); ?>
	 	<?php $this->load->view('bannerModel'); ?>
	 	<?php $this->load->view('up_banner_model'); ?>
	 	<?php $this->load->view('delete_banner'); ?>

	 	<input type="hidden" id="site_url" value="<?php echo site_url(); ?>" />
	  	<input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
	  	<!--  Scripts-->
	  	<?php foreach($jsFiles as $fileName){ ?>
	  	<script src="<?php echo base_url(); ?>html/js/<?php echo $fileName; ?>"></script>
	  	<?php } ?>
	</body>
</html>
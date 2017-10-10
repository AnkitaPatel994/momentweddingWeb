<?php
    $this->load->view("includes/rsvp-header.php",$headerData);
    
	$this->load->view($viewName.".php",$viewData);
    
    $this->load->view("includes/rsvp-footer.php",$footerData); 
?>
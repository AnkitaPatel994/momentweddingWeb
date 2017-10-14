<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Map extends CI_Controller {	
	public function venue($id)
	{		
		$this->load->view("mapview",array("venueID" => $id));
	}
}
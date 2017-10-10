<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rsvp extends CI_Controller {	
	public function index()
	{	
		$headerData = array(
			"pageTitle" => "Rsvp",
			"stylesheet" => array("rsvp.css")
		);
		$footerData = array(
			"jsFiles" => array("rsvp.js")
		);
		$viewData = array(
			"viewName" => "rsvp",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('rsvp-template',$viewData);
	}
}
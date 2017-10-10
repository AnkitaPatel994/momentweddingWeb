<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RsvpAdmin extends CI_Controller {	
	public function index()
	{	
		$headerData = array(
			"pageTitle" => "RsvpAdmin",
			"stylesheet" => array("rsvpAdmin.css")
		);
		$footerData = array(
			"jsFiles" => array("rsvpAdmin.js","rsvp.js")
		);
		$viewData = array(
			"viewName" => "rsvpAdminLogin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('rsvp-template',$viewData);
	}
}
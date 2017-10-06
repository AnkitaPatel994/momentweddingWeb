<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding extends CI_Controller {	
	public function index()
	{	
		if(!$this->session->userdata("user")){
			header("Location:".base_url()."wedding/login");
			exit();
		}
	}
	public function login(){
		$headerData = array(
			"pageTitle" => "Admin Dashboard",
			"stylesheet" => array("userLogin.css")
		);
		$footerData = array(
			"jsFiles" => array("userLogin.js")
		);
		$viewData = array(
			"viewName" => "userLogin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
}
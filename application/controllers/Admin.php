<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{		
		if(!$this->session->userdata("admin")){
			header("Location:".base_url()."admin/login");
			exit();
		}
		$headerData = array(
			"pageTitle" => "Wedding Dashboard",
			"stylesheet" => array("adminLogin.css")
		);
		$footerData = array(
			"jsFiles" => array("adminLogin.js")
		);
		$viewData = array(
			"viewName" => "weddingDashboard",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
	public function login()
	{
		$headerData = array(
			"pageTitle" => "Admin Dashboard",
			"stylesheet" => array("adminLogin.css")
		);
		$footerData = array(
			"jsFiles" => array("adminLogin.js")
		);
		$viewData = array(
			"viewName" => "adminLogin",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}
}

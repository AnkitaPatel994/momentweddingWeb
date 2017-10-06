<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {	
	public function index()
	{		
		$headerData = array(
			"pageTitle" => "Wedding Dashboard",
			"stylesheet" => array("dashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
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
		$data=$_POST["data"];
		$this->load->model("admin_model");
		$result=$this->admin_model->doLogin($data);
		var_dump($result);
	}
	 public function Wedding(){
	 	
	 }

}

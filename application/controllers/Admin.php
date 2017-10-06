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
			"viewName" => "admin-dashboard",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}

	public function doLogin()
	{	
		$data=$_POST["data"];
		$this->load->model("admin_model");
		$result=$this->admin_model->doLogin($data);
		var_dump($result);
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
	public function Wedding(){
		$this->load->model("wedding_model");
		$allWeddingData=$this->wedding_model->allWeddingData();
	 	$headerData = array(
			"pageTitle" => "Wedding Dashboard",
			"stylesheet" => array("adminLogin.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js")
		);
		$viewData = array(
			"viewName" => "weddingDashboard",
            "viewData" => array("allWeddingData"=>$allWeddingData),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	 }

	public function addWedding(){
	 	$this->load->model("wedding_model");
	 	$result=array(
	 		"bride_id"=>$_POST["bride_id"],
	 		"groom_id"=>$_POST["groom_id"],
	 		"date"=>$_POST["date"],
	 		"invitation"=>$_POST["invitation"],
	 		"code"=>$_POST["code"]
	 	);
	 	$this->wedding_model->addWedding($result);

	 }

	public function updateWedding(){
	 	$this->load->model("wedding_model");
	 	$wedId=$_POST["wedId"];
	 	$result=array(
	 		"bride_id"=>$_POST["bride_id"],
	 		"groom_id"=>$_POST["groom_id"],
	 		"date"=>$_POST["date"],
	 		"invitation"=>$_POST["invitation"],
	 		"code"=>$_POST["code"]
	 	);
	 	$this->wedding_model->updateWedding($result,$wedId);
	 }
	public function deleteWedding($wedId){
	 	$this->load->model("wedding_model");
	 	$this->wedding_model->deleteWedding($wedId);
	 }
	public function editWedding($wedId){
	 	$this->load->model("wedding_model");
	 	$result=$this->wedding_model->editWedding($wedId);
	 	$this->load->view("updateWedding",$result);

	 }

}

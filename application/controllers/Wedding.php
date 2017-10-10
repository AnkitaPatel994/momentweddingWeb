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

	public function getWeddingWithGuestCount(){
		$this->load->model("wedding_model");
		$this->load->model("guestlist_model");
		$weddingList = $this->wedding_model->allWeddingData();
		foreach ($weddingList as $key => $weddingRow) {
			$weddingList[$key]["totalGuest"] = $this->guestlist_model->weddingGuestCount($weddingRow["id"]);
		}
		echo json_encode($weddingList);
	}
}
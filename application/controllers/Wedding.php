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

	public function eventsWithGuestCount($weddingID){
		$this->load->model("wedding_model");
		$this->load->model("guestlist_model");
		$eventList = $this->wedding_model->getEvents($weddingID);
		foreach ($eventList as $key => $eventRow) {
			$eventList[$key]["totalGuest"] = $this->guestlist_model->eventGuestCount($eventRow["id"]);
		}		
		//echo json_encode($eventList);
		$this->load->view("allEventByWedding",array("eventList"=>$eventList));
	}

	public function guestCountByTransportation($eventID){
		$transportation = array("car","train","flight");
		$this->load->model("guestlist_model");
		$output = array();
		foreach ($transportation as $key => $mode) {
			$output[ucfirst($mode)] = $this->guestlist_model->eventGuestsByTransportation($eventID,$mode);
		}
		echo json_encode($eventList);
	}

	public function guestByMode(){
		$this->load->model("guestlist_model");
		$eventID = $_POST["eventID"];
		$mode = $_POST["mode"];
		$guestList = $this->guestlist_model->guestListByTransportation($eventID,$mode);
		echo json_encode($guestList);
	}
}
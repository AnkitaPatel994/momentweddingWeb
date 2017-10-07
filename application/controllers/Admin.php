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
			"jsFiles" => array("adminLogin.js","admin.js")
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
			"jsFiles" => array("adminLogin.js","admin.js")
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
			"stylesheet" => array("adminDashboard.css")
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
	 		"bride_name"=>$_POST["bride_name"],
	 		"groom_name"=>$_POST["groom_name"],
	 		"date"=>$_POST["date"],
	 		"invitation"=>$_POST["invitation"]
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
	 		"invitation"=>$_POST["invitation"]
	 	);
	 	$this->wedding_model->updateProfile(array("name"=>$_POST["bride_name"]),$_POST["bride_id"]);
	 	$this->wedding_model->updateProfile(array("name"=>$_POST["groom_name"]),$_POST["groom_id"]);
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


	 public function profile(){
	 	$this->load->model("profile_model");
	 	$allProfile=$this->profile_model->allProfile();

	 	$headerData = array(
			"pageTitle" => "Profile Management",
			"stylesheet" => array("admin-profile.css")
		);
		$footerData = array(
			"jsFiles" => array("admin-profile.js","admin.js")
		);
		$viewData = array(
			"viewName" => "admin-profile",
            "viewData" => array("allProfile"=>$allProfile),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}

	 public function updateProfile(){

		$profileID=$_POST['profile-id'];

		$this->load->model('profile_model');

		$image = $profileID."_profileImage.".pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);		
		$result=array(					
					"name"=>$_POST['name'],
			         "occupation"=>$_POST['occupation'],
			         "profile_details"=>$_POST['profile_details'],								
			);
			if($_FILES['profile_pic']['name']!=""){			
				$result["profile_pic"] = $image;

				//set configuration for the upload library
				$config['upload_path'] = 'C:\wamp\www\moment-wedding\html\images\profile';

			    $config['allowed_types'] = 'gif|jpg|png';
			    $config['overwrite'] = TRUE;
			    $config['encrypt_name'] = FALSE;
			    $config['remove_spaces'] = TRUE; 

			    $config['file_name'] = $profileID."_profileImage";
			    $this->load->library('upload', $config);	
			    $this->upload->do_upload('profile_pic');		    
			}
			$this->profile_model->updateProfile($result,$profileID);	
		}

		public function editProfile($profileID){
			$this->load->model("profile_model");
			$result=$this->profile_model->singleProfile($profileID);
			$this->load->view("updateProfile",$result);
		}


	public function EventsList(){
		$this->load->model("event_model");
		$allEvents=$this->event_model->allEvents();
		$allWeddings=$this->event_model->allWeddings();
		
	 	$headerData = array(
			"pageTitle" => "Events List",
			"stylesheet" => array("eventsList.css")
		);
		$footerData = array(
			"jsFiles" => array("eventsList.js","admin.js")
		);
		$viewData = array(
			"viewName" => "eventsList",
            "viewData" => array("allEvents"=>$allEvents,"allWeddings"=>$allWeddings),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}

	public function addEvent(){
		$this->load->model("event_model");
		//$description =str_replace("'","\'",$_POST['description']);
		$result=array(
			"wedding_id"=>$_POST['wedding_id'],
			"name"=>$_POST['name'],
			"date"=>$_POST['date'],
			"time"=>$_POST['time'],
			"location"=>$_POST['location']			
		);
		$eventId=$this->event_model->addEvent($result);
		$eventImage=$eventId."_eventImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
		$updateEvent=array('image'=>$eventImage);
		$this->event_model->updateEvent($updateEvent,$eventId);

		$config["upload_path"]='C:\wamp\www\moment-wedding\html\images\events';
		$config["allowed_types"]='gif|png|jpg';
		$config["file_name"]=$eventId."_eventImage";
		$config["remove_spaces"]=TRUE;
		$config["encrypt_name"]=FALSE;
		$config['overwrite']=TRUE;

		$this->load->library('upload',$config);
		$this->upload->do_upload('image');
	}

	public function updateEvent(){
		$this->load->model("event_model");
		$eventId=$_POST['event-id'];
		$result=array(			
			"name"=>$_POST['name'],
			"date"=>$_POST['date'],
			"time"=>$_POST['time'],
			"location"=>$_POST['location']			
		);

		$eventImage="_eventImage.".pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);

		if($_FILES['image']['name']!=""){
			$result['image']=$eventImage;

			$config['upload_path']='C:\wamp\www\moment-wedding\html\images\events';
			$config['file_name']=$eventId."_eventImage";
			$config['allowed_types']="gif|jpg|png";
			$config['remove_spaces']=TRUE;
			$config['encrypt_name']=FALSE;
			$config['overwrite']=TRUE;
			$this->load->library("upload",$config);
			$this->upload->do_upload('image');			
		}
		$this->event_model->updateEvent($result,$eventId);
		}
		public function deleteEvent($eventId){
			$this->load->model("event_model");
			$this->event_model->deleteEvent($eventId);
		}
		public function editEvent($eventId){
			$this->load->model("event_model");			
			$result=$this->event_model->singleEvent($eventId);
			$this->load->view("updateEvents",$result);
		}

		public function guest_list(){
			$this->load->model("event_model");
			
		 	$headerData = array(
				"pageTitle" => "Guest List",
				"stylesheet" => array("guest_list.css")
			);
			$footerData = array(
				"jsFiles" => array("guest_list.js")
			);
			$viewData = array(
				"viewName" => "guest_list",
	            "viewData" => array(),
				"headerData" => $headerData,
				"footerData" => $footerData	
			);
			$this->load->view('admin-templete',$viewData);
		}

		public function addGuestList(){
	 	$this->load->model("guestlist_model");
	 	$event_access=implode(',',$_POST["event_access"]);
	 	$result=array(
	 		"wedding_id"=>$_POST["wedding_id"],
	 		"profile_id"=>$_POST["profile_id"],
	 		"name"=>$_POST["name"],
	 		"mobile"=>$_POST["mobile"],
	 		"event_access"=>$event_access
	 	);
	 	$this->guestlist_model->addGuestList($result);
	 }

		public function updateGuestList(){
	 	$this->load->model("guestlist_model");
	 	$guestID=$_POST['guest-id'];
	 	$event_access=implode(',',$_POST["event_access"]);
	 	$result=array(
	 		"wedding_id"=>$_POST["wedding_id"],
	 		"profile_id"=>$_POST["profile_id"],
	 		"name"=>$_POST["name"],
	 		"mobile"=>$_POST["mobile"],
	 		"event_access"=>$event_access
	 	);
	 	$this->guestlist_model->updateGuestList($result,$guestID);
	 }

		public function editGuestList($guestID){
			$this->load->model("guestlist_model");
			$result=$this->guestlist_model->editGuestList($guestID);
			$this->load->view("updateGuestList",$result);
		}
		public function deleteGuestList($guestID){
			$this->load->model("guestlist_model");
			$this->guestlist_model->deleteGuestList($guestID);
		}

}

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
			"stylesheet" => array("adminLogin.css","adminDashboard.css")
		);
		$footerData = array(
			"jsFiles" => array("admin.js","admin.js")
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
	 	$headerData = array(
			"pageTitle" => "Events List",
			"stylesheet" => array("eventsList.css")
		);
		$footerData = array(
			"jsFiles" => array("eventsList.js","admin.js")
		);
		$viewData = array(
			"viewName" => "eventsList",
            "viewData" => array(),
			"headerData" => $headerData,
			"footerData" => $footerData	
		);
		$this->load->view('admin-templete',$viewData);
	}

}

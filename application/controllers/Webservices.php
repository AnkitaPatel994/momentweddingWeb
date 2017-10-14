<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Webservices  extends CI_Controller{

	public function profileFatch()
	{
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"user_code"}))
		{
			if( !empty($data_back->{"user_code"}))
			{
				$user_code = $data_back -> {"user_code"};

				$details = $this->user_model->profileFatch($user_code);	
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function invitationFatch()
	{
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"user_code"}))
		{
			if( !empty($data_back->{"user_code"}))
			{
				$user_code = $data_back -> {"user_code"};

				$details = $this->user_model->invitationFatch($user_code);	
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function memberFatch()
	{
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"user_code"}))
		{
			if( !empty($data_back->{"user_code"}))
			{
				$user_code = $data_back -> {"user_code"};

				$details = $this->user_model->memberFatch($user_code);	
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function scheduleFatch()
	{
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("user_model");

		if( isset($data_back->{"user_code"}))
		{
			if( !empty($data_back->{"user_code"}))
			{
				$user_code = $data_back -> {"user_code"};

				$details = $this->user_model->scheduleFatch($user_code);	
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function sendOTP(){
		$data_back = json_decode(file_get_contents('php://input'));
		$wedding_id = $data_back -> {"wedding_id"};
		$mobile = $data_back -> {"mobile"};
		$this->load->model("wedding_model");
		$output = $this->wedding_model->sendOTP($mobile,$wedding_id);
		echo json_encode($output);
	}

	public function verifyOTP(){
		$data_back = json_decode(file_get_contents('php://input'));
		$wedding_id = $data_back -> {"wedding_id"};
		$mobile = $data_back -> {"mobile"};
		$otp = $data_back -> {"otp"};
		$this->load->model("wedding_model");
		$otpData = array(
			"weddingID" => $data_back -> {"wedding_id"},
			"mobile" => $data_back -> {"mobile"},
			"otp" => $data_back -> {"otp"}
		);
		$output = $this->wedding_model->verifyOTP($otpData);
		echo json_encode($output);
	}

	public function verifyWedding(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"invite_code"}))
		{
			if( !empty($data_back->{"invite_code"}))
			{
				$invite_code = $data_back -> {"invite_code"};

				$details = $this->wedding_model->verifyWedding($invite_code);	
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}


	////////////////////////////////////////////////////////////////
	/*
	* Desc - Fetchs bride or groom's profile
	* Para - profile_id
	* Return - profile_row
	*/
	////////////////////////////////////////////////////////////////
	public function getProfile(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("profile_model");
		if( isset($data_back->{"profile_id"}))
		{
			if( !empty($data_back->{"profile_id"}))
			{
				$profile_id = $data_back -> {"profile_id"};

				$profileRow = $this->profile_model->singleProfile($profile_id);	
				$details = array('status' => "1", 'message' => "Profile found", 'profile_row'=>$profileRow);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}
	////////////////////////////////////////////////////////////////
	/*
	* Desc - Fetchs list of family members of bride or groom
	* Para - profile_id
	* Return - member_list
	*/
	////////////////////////////////////////////////////////////////
	public function familyMembers(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("profile_model");
		if( isset($data_back->{"profile_id"}))
		{
			if( !empty($data_back->{"profile_id"}))
			{
				$profile_id = $data_back -> {"profile_id"};

				$memberList = $this->profile_model->profileFamily($profile_id);	
				$details = array('status' => "1", 'message' => "Member List call successfull", 'member_list'=>$memberList);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}
	////////////////////////////////////////////////////////////////
	/*
	* Desc - Gets you a list of events and its details for any wedding
	* Para - wedding_id
	* Return - event_list
	*/
	////////////////////////////////////////////////////////////////
	public function getEventList(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"wedding_id"}))
		{
			if( !empty($data_back->{"wedding_id"}))
			{
				$wedding_id = $data_back -> {"wedding_id"};

				$eventList = $this->wedding_model->getEvents($wedding_id);	
				$details = array('status' => "1", 'message' => "Event list fetched", 'event_list'=>$eventList);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	////////////////////////////////////////////////////////////////
	/*
	* Desc - Details of the invitation card
	* Para - wedding_id, guest_id
	* Return - data(wedding_invitation,bride_name,bride_occupation,bride_pic,groom_name,groom_occupation,groom_pic,guest_name)
	*/
	////////////////////////////////////////////////////////////////
	public function getInvitationCard(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"wedding_id"}) && isset($data_back->{"guest_id"}) )
		{
			if( !empty($data_back->{"wedding_id"}) && !empty($data_back->{"guest_id"}))
			{
				$wedding_id = $data_back -> {"wedding_id"};
				$guest_id = $data_back -> {"guest_id"};

				$weddingRow = $this->wedding_model->getWeddingRow($wedding_id);
				$brideProfile = $this->wedding_model->getProfile($weddingRow["bride_id"]);
				$groomProfile = $this->wedding_model->getProfile($weddingRow["groom_id"]);
				$guestProfile = $this->wedding_model->getGuestDetails($guest_id);

				$output = array(
					"wedding_invitation" => $weddingRow["invitation"],
					"bride_id" => $brideProfile["id"],
					"bride_name" => $brideProfile["name"],
					"bride_occupation" => $brideProfile["occupation"],
					"bride_pic" => base_url()."html/images/profile/".$brideProfile["profile_pic"],
					"groom_id" => $groomProfile["id"],
					"groom_name" => $groomProfile["name"],
					"groom_occupation" => $groomProfile["occupation"],
					"groom_pic" => base_url()."html/images/profile/".$groomProfile["profile_pic"],
					"guest_name" => $guestProfile["name"]
				);

				$details = array('status' => "1", 'message' => "Invitation fetched", 'data'=>$output);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}
	////////////////////////////////////////////////////////////////
	/*
	* Desc - Gets event photos
	* Para - event_id
	* Return - photoList
	*/
	////////////////////////////////////////////////////////////////
	public function getEventPhotos(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"event_id"}))
		{
			if( !empty($data_back->{"event_id"}))
			{
				$event_id = $data_back -> {"event_id"};

				$photoList = $this->wedding_model->getEventPhotos($event_id);	
				$details = array('status' => "1", 'message' => "Photos fetched", 'photoList'=>$photoList);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	////////////////////////////////////////////////////////////////
	/*
	* Desc - Gets wedding photo collection list with count of photos in each list
	* Para - wedding_id
	* Return - galleryEventList
	*/
	////////////////////////////////////////////////////////////////
	public function getGallery(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"wedding_id"}))
		{
			if( !empty($data_back->{"wedding_id"}))
			{
				$wedding_id = $data_back -> {"wedding_id"};

				$galleryEventList = $this->wedding_model->getGallery($wedding_id);	
				$details = array('status' => "1", 'message' => "Photos fetched", 'galleryEventList'=>$galleryEventList);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}



	public function guestRsvp(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("guestlist_model");
		if(isset($data_back->{"guest_id"}) && isset($data_back->{"attending"})){
			$attending = $data_back->{"attending"};
			$guest_id = $data_back->{"guest_id"};
			$updateData["attending"] = $data_back->{"attending"};
			if($attending == "yes"){
				//get the rsvp details
				if(isset($data_back->{"guest_count"}) && isset($data_back->{"arriving_on"}) && isset($data_back->{"arriving_by"}) && isset($data_back->{"departing_on"}) && isset($data_back->{"departing_by"}) && isset($data_back->{"remarks"})){
					$updateData["guest_count"] = $data_back->{"guest_count"}; //ranges from 1-10
					$updateData["arriving_on"] = $data_back->{"arriving_on"}; //date of arrival
					$updateData["arriving_by"] = $data_back->{"arriving_by"}; //mode of transport for arrival - car,bus,train,flight
					
					$updateData["departing_on"] = $data_back->{"departing_on"}; //date for departure
					$updateData["departing_by"] = $data_back->{"departing_by"}; //mode of transport for departure - car,bus,train,flight
					$updateData["departing_pnr"] = $data_back->{"departing_pnr"};
					$updateData["arriving_pnr"] = $data_back->{"arriving_pnr"};
					$updateData["remarks"] = $data_back->{"remarks"}; // remarks by guest
					$eventList = explode(",",$data_back->{"event_access"});
					foreach ($eventList as $key => $eventID) {
						$eventList[$key] = "[".$eventID."]";
					}
					$updateData["event_access"] = implode(",", $eventList);

					$this->guestlist_model->updateRsvp($updateData,$guest_id);
					$details = array('status' => "1", 'message' => "RSVP updated");
				}else{
					$details = array('status' => "0",'message' => "Parameter Missing");
				}
			}else{
				//get the reason & wishes
				if(isset($data_back->{"wishes"}) && isset($data_back->{"reason"})){
					$updateData["wishes"] = $data_back->{"wishes"}; // wishes by guest
					$updateData["reason"] = $data_back->{"reason"}; //reason if not coming
					$this->guestlist_model->updateRsvp($updateData,$guest_id);
					$details = array('status' => "1", 'message' => "RSVP updated");
				}else{
					$details = array('status' => "0",'message' => "Parameter Missing");
				}
			}
		}
		else{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}

		echo json_encode($details);

	}




	public function weddingCountDown(){
		$data_back = json_decode(file_get_contents('php://input'));
		if( isset($data_back->{"wedding_id"}))
		{
			if( !empty($data_back->{"wedding_id"}))
			{
				$this->load->model("wedding_model");
				$weddingID = $data_back->{"wedding_id"};
				$weddingRow = $this->wedding_model->getWeddingRow($weddingID);
				$currentDate = time() + 5*60*60 + 30*60;
				$weddingDate = strtotime(str_replace(", ","-",$weddingRow["date"]));
				$countdown = $weddingDate - $currentDate; 
				$countdown = $countdown*1000;
				$details = array('status' => "1",'message' => "Wedding Countdown", "countdown"=>$countdown, "wedding_date"=>$weddingRow["date"]);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function updateGuestName(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"guest_id"}) && isset($data_back->{"guest_name"}))
		{
			if( !empty($data_back->{"guest_id"}) && !empty($data_back->{"guest_name"}))
			{
				$guest_id = $data_back->{"guest_id"};
				$guest_name = $data_back->{"guest_name"};

				$this->wedding_model->updateGuest($guest_id,array("name"=>$guest_name));
				$details = array('status' => "1", 'message' => "Guest name updated");
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function updateGuestProfile(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"guest_id"}) && isset($data_back->{"profile_id"}))
		{
			if( !empty($data_back->{"guest_id"}) && !empty($data_back->{"profile_id"}))
			{
				$guest_id = $data_back->{"guest_id"};
				$profile_id = $data_back->{"profile_id"};

				$this->wedding_model->updateGuest($guest_id,array("profile_id"=>$profile_id));
				$details = array('status' => "1", 'message' => "Guest profile updated");
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function getWeddingProfile(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"wedding_id"}))
		{
			if( !empty($data_back->{"wedding_id"}))
			{
				$wedding_id = $data_back->{"wedding_id"};
				
				$profiles = $this->wedding_model->getWeddingSide($wedding_id);
				$details = array('status' => "1", 'message' => "Profiles fetched", "profiles" => $profiles);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function activityFeed(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("guestlist_model");
		if( isset($data_back->{"wedding_id"}) && isset($data_back->{"guest_id"}))
		{
			if( !empty($data_back->{"wedding_id"}) &&  !empty($data_back->{"guest_id"}))
			{
				$wedding_id = $data_back->{"wedding_id"};
				$guest_id = $data_back->{"guest_id"};
				
				$feed = $this->guestlist_model->getGuestFeed($wedding_id,$guest_id);
				$details = array('status' => "1", 'message' => "Activity feed feched", "feed" => $feed);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function guestDetails(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("guestlist_model");
		if( isset($data_back->{"guest_id"}))
		{
			if( !empty($data_back->{"guest_id"}))
			{
				$guest_id = $data_back->{"guest_id"};
				
				$guest = $this->guestlist_model->fetchRow($guest_id);
				$details = array('status' => "1", 'message' => "Guest profile fetched", "guest" => $guest);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}

	public function getVendorDetails(){
		$data_back = json_decode(file_get_contents('php://input'));
		$this->load->model("wedding_model");
		if( isset($data_back->{"wedding_id"}))
		{
			if( !empty($data_back->{"wedding_id"}))
			{
				$wedding_id = $data_back->{"wedding_id"};
				
				$vendorDetail = $this->wedding_model->vendorDetail($wedding_id);
				$details = array('status' => "1", 'message' => "Vendor details fetched", "vendorDetail" => $vendorDetail);
			}
			else
			{
				$details = array('status' => "0", 'message' => "Parameter is Empty");
			}
		}
		else
		{
			$details = array('status' => "0",'message' => "Parameter Missing");
		}
		echo json_encode($details);
	}
}
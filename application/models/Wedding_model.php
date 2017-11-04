<?php 
/**
* 
*/
class Wedding_model extends CI_Model
{
	
	public function addWedding($wedData){
		$insertData = array(
			"bride_id" => $this->insertProfile($wedData["bride_name"]),
			"groom_id" => $this->insertProfile($wedData["groom_name"]),
			"date" => $wedData["date"],
			"invitation" => $wedData["invitation"],
			"code" => $this->generateCode(5)
		);
		$this->db->insert("wedding",$insertData);
	}
	public function updateWedding($wedData,$wedID){
		$this->db->where("id",$wedID);
		$this->db->update("wedding",$wedData);
	}
	public function deleteWedding($wedID){
		$this->db->where("id",$wedID);
		$this->db->delete("wedding");
	}
	public function editWedding($wedID){
		$query=$this->db->query("select * from wedding where id='$wedID' ");
		$result=$query->row_array();
		$result["bride_profile"] = $this->getProfile($result["bride_id"]);
		$result["groom_profile"] = $this->getProfile($result["groom_id"]);
		return $result;
	}

	public function allWeddingData(){
		$query=$this->db->query("select * from wedding");	
		$result=$query->result_array();
		foreach ($result as $key => $weddingRow) {
			$result[$key]["bride_profile"] = $this->getProfile($weddingRow["bride_id"]);
			$result[$key]["groom_profile"] = $this->getProfile($weddingRow["groom_id"]);
		}
		return $result;
	}

	public function insertProfile($profileName){
		$profileData = array("name"=>$profileName);
		$query = $this->db->insert("profile",$profileData);
		$profileID = $this->db->insert_id();
		return $profileID;
	}

	public function generateCode($length){
		$uniqueFlag = 0;
		$code = "";
		while($uniqueFlag == 0){
			$code = $this->randomString($length);
			$integrity = $this->checkInviteIntegrity($code);
			if($integrity == "success"){
				$uniqueFlag = 1;
			}
		}
		return $code;
	}

	public function randomString($length){
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $string = '';
	    for ($i = 0; $i < $length; $i++) {
	        $string .= $characters[mt_rand(0, strlen($characters) - 1)];
	    }
	    return $string;
	}

	public function checkInviteIntegrity($code){
		$query = $this->db->query("select * from wedding where code='$code'");
		if($query->num_rows() == 0){
			return "success";
		}else{
			return "fail";
		}
	}


	public function getProfile($profileID){
		$query = $this->db->query("Select * from profile where id='$profileID'");
		$profileRow = $query->row_array();
		return $profileRow;
	}

	public function updateProfile($profileData,$profileID){
		$this->db->where("id",$profileID);
		$this->db->update("profile",$profileData);
	}

	public function verifyWedding($inviteCode){
		$query = $this->db->query("select * from wedding where code='$inviteCode'");
		if($query->num_rows() == 1){
			$weddingRow = $query->row_array();
			$details = array('status' => "1",'message' => "Wedding verification successfull","wedding_id"=>$weddingRow["id"]);
		}else{
			$details = array('status' => "0",'message' => "Wedding verification failed");
		}
		return $details;
	}

	public function sendOTP($mobile,$weddingID){
		$query = $this->db->query("select * from guest_list where wedding_id='$weddingID' and mobile='$mobile'");
		if($query->num_rows() == 1){
			//user exist send otp
			$otpData = $this->generateOTP($mobile);
			$code = $otpData["otp"];
			$this->db->query("update guest_list set code='$code' where mobile='$mobile' and wedding_id='$weddingID'");
			$details = array('status' => "1",'message' => "OTP sent");
		}else{
			//user does not exist
			
			//insert number in the guest list with name Guest and with all events
			$eventString = $this->allEventString($weddingID);
			$weddingProfile = $this->getWeddingProfiles($weddingID);
			$otpData = $this->generateOTP($mobile);
			$code = $otpData["otp"];
			$insertData = array(
				"wedding_id" => $weddingID,
				"profile_id" => $weddingProfile["profile"][0]["id"],
				"name" => "Guest",
				"mobile" => $mobile,
				"event_access" => $eventString,
				"guest_count" => 1,
				"attending" => "yes",
				"code" => $code
			);
			$this->db->insert("guest_list",$insertData);
			$details = array('status' => "2",'message' => "OTP sent");
		}
		return $details;
	}

	public function updateGuest($guestID,$guestData){
		$this->db->where("id",$guestID);
		$this->db->update("guest_list",$guestData);
	}

	public function verifyOTP($otpData){
		$weddingID = $otpData["weddingID"];
		$mobile = $otpData["mobile"];
		$otp = $otpData["otp"];

		$query = $this->db->query("select * from guest_list where wedding_id='$weddingID' and mobile='$mobile' and code='$otp'");
		if($query->num_rows() == 1){
			//verified
			$guestRow = $query->row_array();
			$details = array('status' => "1",'message' => "Guest verified", "guest_row"=>$guestRow);
		}else{
			//not verified
			$details = array('status' => "0",'message' => "verification Failed");
		}
		return $details;
	}

	public function generateOTP($mobile){
		//Your authentication key
	    $authKey = "178219A82n0xSWyInW59d85e04";
	    
	    //Multiple mobiles numbers separated by comma
	    $mobileNumber = "91".$mobile;
	    
	    //Sender ID,While using route4 sender id should be 6 characters long.
	    $senderId = "MOMENT";

	    //Get OTP
	    $otp = $this->getOTP($mobileNumber);
	    
	    //Your message to send, Add URL encoding here.
	    $message = urlencode("Your OTP is ".$otp);
	    
	    //Define route 
	    $route = "default";
	    //Prepare you post parameters
	    $postData = array(
	        'authkey' => $authKey,
	        'mobile' => $mobileNumber,
	        'message' => $message,
	        'sender' => $senderId,
	        'otp' => $otp
	    );
	    
	    //API URL
	    $url="https://control.msg91.com/api/sendotp.php";
	    
	    // init the resource
	    $ch = curl_init();
	    curl_setopt_array($ch, array(
	        CURLOPT_URL => $url,
	        CURLOPT_RETURNTRANSFER => true,
	        CURLOPT_POST => true,
	        CURLOPT_POSTFIELDS => $postData
	        //,CURLOPT_FOLLOWLOCATION => true
	    ));
	    

	    //Ignore SSL certificate verification
	    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	    
	    //get response
	    $output = curl_exec($ch);
	    
	    //Print error if any
	    $status = 1;
	    $statusMsg = "Success";
	    if(curl_errno($ch))
	    {
	        echo 'error:' . curl_error($ch);
	        $status = 0;
	    	$statusMsg = "Fail";
	    }
	    
	    curl_close($ch);
	    
	    $result = array(
	    	"status" => $status,
	    	"message" => $statusMsg,
	    	"otp" => $otp
	    );
	    return $result;
	}

	public function getOTP($mobile){
		$otp = mt_rand(1000, 9999);
		return $otp;
	}

	public function getWeddingProfiles($weddingID){
		$query=$this->db->query("select * from wedding where id='$weddingID' ");
		$weddingRow = $query->row_array();
		$bride_id = $weddingRow["bride_id"];
		$groom_id = $weddingRow["groom_id"];
		$output["profile"][] = $this->getProfile($bride_id);
		$output["profile"][] = $this->getProfile($groom_id);
		$output["events"] = $this->getEvents($weddingID);
		return $output;
	}

	public function getEvents($weddingID){
		$query = $this->db->query("select * from event where wedding_id='$weddingID'");
		$result = $query->result_array();
		foreach ($result as $key => $eventRow) {
			$eventDate = $eventRow["date"];
			$timestamp = strtotime($eventDate);
			$result[$key]["image"] = base_url()."html/images/events/".$eventRow["image"];
			$result[$key]["eventDay"] = date("d", $timestamp);
			$result[$key]["eventMonth"] = date("F", $timestamp);
			$result[$key]["mapURL"] = base_url()."map/venue/1";
			$result[$key]["venueName"] = "Kensville Golf & Country Club";
			$result[$key]["venuePhone"] = "+917940002900";
			$result[$key]["venueEmail"] = "marketing@kensville.co.in";
			$result[$key]["venueWeb"] = "http://kensville.co.in";
		}
		return $result;
	}

	public function allEventString($weddingID){
		$eventList = $this->getEvents($weddingID);
		$eventArray = [];
		foreach ($eventList as $key => $eventRow) {
			$eventArray[] = $eventRow["id"];
		}
		$eventString = "[".implode("],[",$eventArray)."]";
		return $eventString;
	}

	public function getGuestDetails($guest_id){
		$query = $this->db->query("select * from guest_list where id='$guest_id'");
		$result = $query->row_array();
		return $result;		
	}
	public function getWeddingRow($weddingID){
		$query = $this->db->query("select * from wedding where id='$weddingID'");
		$result = $query->row_array();
		return $result;
	}
	public function getEventPhotos($eventID){
	    $result = $this->getGalleryPhotos($eventID);
	    /*
		$query = $this->db->query("select * from gallery where event_id='$eventID'");
		$result = $query->result_array();
		*/
		return $result;
	}

	
	public function getGalleryPhotos($galleryID){
	    $query = $this->db->query("select * from gallery_images where gallery_id='$galleryID'");
	    $result = $query->result_array();
	    foreach($result as $key=>$imageRow){
	        $result[$key]["gallery_pic"] = base_url()."html/images/gallery/".$imageRow["name"];
	    }
	    return $result;
	}

	public function getGallery($weddingID){
	    
	    $output = $this->getGalleryNew($weddingID);
	    return $output;
	    /*
		$events = $this->getEvents($weddingID);
		$output = array();
		foreach ($events as $key => $eventRow) {
			$eventPhotos = $this->getEventPhotos($eventRow["id"]);
			$output[] = array(
				"eventID" => $eventRow["id"],
				"name" => $eventRow["name"], 
				"background" => $eventRow["image"],
				"photoCount" => sizeof($eventPhotos)
			);
		}
		return $output;
		*/
	}
	
	public function getGalleryNew($weddingID){
	    $galleryList = $this->getGalleryList($weddingID);
	    $output = array();
		foreach ($galleryList as $key => $galleryRow) {
			$galleryPhotos = $this->getGalleryPhotos($galleryRow["id"]);
			$output[] = array(
				"eventID" => $galleryRow["id"],
				"name" => $galleryRow["name"], 
				"background" => base_url()."html/images/events/".$galleryRow["image"],
				"photoCount" => sizeof($galleryPhotos)
			);
		}
		return $output;
	}
	
	public function getGalleryList($weddingID){
	    $query = $this->db->query("select * from wedding_gallery where wedding_id='$weddingID'");
	    $result = $query->result_array();
	    return $result;
	}
	public function getWeddingSide($weddingID){
		$query=$this->db->query("select * from wedding where id='$weddingID' ");
		$weddingRow = $query->row_array();
		$bride_id = $weddingRow["bride_id"];
		$groom_id = $weddingRow["groom_id"];
		$output["brideData"] = $this->getProfile($bride_id);
		$output["groomData"] = $this->getProfile($groom_id);
		$output["brideData"]["profile_pic"] = base_url()."html/images/profile/".$output["brideData"]["profile_pic"];
		$output["groomData"]["profile_pic"] = base_url()."html/images/profile/".$output["groomData"]["profile_pic"];
		return $output;
	}
	public function vendorDetail($weddingID){
		$output = array(
			"logo" => base_url()."html/images/logo_vendor_1.png",
			"name" => "Moments Event and Entertainment",
			"mobile" => "+91-9374295095",
			"email" => "smile@momentsunlimited.in",
			"website" => "http://momentsunlimited.in/",
			"description" => "Moments Event and Entertainment is an event management company established in the year 2008 and specializes into Wedding Planning, At Moments, we work hard and invest all of our energy to make your dreams into realities. Our team interacts with you, understand your exact needs and do the flawless execution of the commitment. We have the necessary experience and expertise to get you the best and most suitable customized services for your Wedding requirements. Our passion is to make the entire functions stress free, enjoyable and just perfect for your life's celebrations. And take this word from us, We always go beyond the Your expectations."
		);
		return $output;
	}

	public function forceDeleteWedding($wedID){
		$this->db->query("delete from event where wedding_id='$wedID'");
		$this->db->query("delete from guest_list where 	wedding_id='$wedID'");
		$this->db->query("delete from wedding_gallery where wedding_id='$wedID'");
		$this->db->query("delete from wedding where id='$wedID'");
	}

	public function forceDeleteProfile($profileID){	
	/*	$this->db->query("delete from member where profile_id='$profileID'");
		$this->db->query("delete from profile where id='$profileID'");*/

	$this->db->query("delete wedding,profile FROM profile JOIN wedding where wedding.bride_id=profile.id and wedding.groom_id=profile.id and profile.id='$profileID' ");
	}
	public function forceDeleteGallery($galleryID){
		$this->db->query("delete from gallery  where id='$galleryID'");
		$this->db->query("delete from gallery_images where gallery_id='$galleryID'");
	}	
}
?>
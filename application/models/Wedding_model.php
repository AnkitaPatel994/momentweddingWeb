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
			$details = array('status' => "0",'message' => "You are not in the guest list");
		}
		return $details;
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
	    $mobileNumber = $mobile;
	    
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

}

?>
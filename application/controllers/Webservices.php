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

	public function sendOTP($mobile){

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
	    echo json_encode($result);
	}

	public function getOTP($mobile){
		$otp = mt_rand(1000, 9999);
		return $otp;
	}
}
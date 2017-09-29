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
}
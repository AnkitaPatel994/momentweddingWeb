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
}

?>
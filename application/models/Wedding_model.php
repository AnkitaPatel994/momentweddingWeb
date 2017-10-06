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
			"code" => $this->generateCode()
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

	public function generateCode(){
		$code = "xyz";
		return $code;
	}

	public function getProfile($profileID){
		$query = $this->db->query("Select * from profile where id='$profileID'");
		$profileRow = $query->row_array();
		return $profileRow;
	}
}

?>
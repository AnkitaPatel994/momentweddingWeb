<?php 
/**
* 
*/
class Wedding_model extends AnotherClass
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
		return $result;
	}
	public function allWeddingData(){
		$query=$this->db->query("select * from wedding");
		$result=$query->result_array();
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
}

?>
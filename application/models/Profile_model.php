<?php 
/**
* 
*/
class Profile_model extends CI_Model
{
	
	public function allProfile(){
		$query=$this->db->query("select * from profile");
		$result=$query->result_array();
		return $result;
	}
	public function singleProfile($profileID){
		$query=$this->db->query("select * from profile where id='$profileID' ");
		$result=$query->row_array();
		return $result;
	}
	public function updateProfile($profileData,$profileID){
		$this->db->where('id',$profileID);
		$this->db->update('profile',$profileData);
	}

	public function profileFamily($profileID){
		$query = $this->db->query("select * from member where profile_id='$profileID'");
		$result = $query->result_array();
		return $result;
	}

	public function deleteProfile($profileID){
		$this->db->query("delete from profile where id='$profileID'");
	}
}

?>
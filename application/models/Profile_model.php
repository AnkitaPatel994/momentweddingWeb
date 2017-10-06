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
}

?>
<?php 
/**
* 
*/
class Guestlist_model extends CI_Model
{
	public function addGuestList($guestData){
		$this->db->insert('guest_list',$guestData);
	}
	public function allGuestList(){
		$query=$this->db->query("select * from guest_list");
		$result=$query->result_array();
		return $result;
	}
	public function editGuestList($guestID){
		$query=$this->db->query("select * from guest_list where id='$guestID' ");
		$result=$query->row_array();
		return $result;
	}
	public function updateGuestList($guestData,$guestID){
		$this->db->where('id',$guestID);
		$this->db->update('guest_list',$guestData);
	}
	public function deleteGuestList($guestID){
		$this->db->where('id',$guestID);
		$this->db->delete('guest_list');
	}
	public function allProfile(){
		$query=$this->db->query("select id,name from profile");
		$result=$query->result_array();
		return $result;
	}
	public function allWedding(){
		$query=$this->db->query("select id from wedding");
		$result=$query->result_array();
		return $result;
	}

	public function allEvent(){
	$query=$this->db->query("select id,name from event");
	$result=$query->result_array();
	return $result;
	}

	
}


?>
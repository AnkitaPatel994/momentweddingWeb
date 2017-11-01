<?php
/**
* 
*/
class Member_model extends  CI_Model
{	
	public function addMember($memberData)
	{
		$this->db->insert("member",$memberData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateMember($memberData,$memberID){
		$this->db->where("id",$memberID);
		$this->db->update("member",$memberData);
	}
	public function deleteMember($memberID){
		$this->db->where("id",$memberID);
		$this->db->delete("member");
	}
	public function editMember($memberID){
		$query=$this->db->query("select * from member where id='$memberID'");
		$result=$query->row_array();
		return $result;
	}
	public function allMember(){
		$query=$this->db->query("select * from member");
		$result=$query->result_array();
		return $result;
	}
 }

?>
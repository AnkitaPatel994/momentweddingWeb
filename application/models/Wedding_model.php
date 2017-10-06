<?php 
/**
* 
*/
class Wedding_model extends AnotherClass
{
	
	public function addWedding($wedData){
		$this->db->insert("wedding",$wedData);
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
}

?>
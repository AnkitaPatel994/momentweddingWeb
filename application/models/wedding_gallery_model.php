<?php
/**
* 
*/
class wedding_gallery_model extends  CI_Model
{
	
	public function addWeddGallery($wedData)
	{
		$this->db->insert("wedding_gallery",$wedData);
		$id=$this->db->insert_id();
		return $id;
	}
	public function updateWedGallery($wedData,$wedID){
		$this->db->where("id",$wedID);
		$this->db->update("wedding_gallery",$wedData);
	}
	public function deleteWedGallery($wedID){
		$this->db->where("id",$wedID);
		$this->db->delete("wedding_gallery");
	}
	public function editWedGallery($wedID){
		$query=$this->db->query("select * from wedding_gallery where id='$wedID'");
		$result=$query->row_array();
		return $result;
	}
	public function allWedGallery(){
		$query=$this->db->query("select * from wedding_gallery");
		$result=$query->result_array();
		return $result;
	}
 }

?>
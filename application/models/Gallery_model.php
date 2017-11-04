<?php
/**
* 
*/
class Gallery_model extends  CI_Model
{
	
	public function addGallery($galleryData)
	{
		$this->db->insert("gallery_images",$galleryData);
		$id=$this->db->insert_id();
		return $id;
	}

	public function updateGallery($galleryData,$id){
		$this->db->where("id",$id);
		$this->db->update("gallery_images",$galleryData);
	}
	public function allGallery($id){
		$query=$this->db->query("select * from gallery_images where gallery_id='$id'");
		$result=$query->result_array();
		return $result;

	}
	public function deleteGallery($id){
		$this->db->where("id",$id);
		$this->db->delete("gallery_images");
	}

	
 }

?>
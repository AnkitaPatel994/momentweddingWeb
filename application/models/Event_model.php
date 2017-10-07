<?php 
/**
* 
*/
class Event_model extends CI_Model
{
	public function addEvent($eventData){
		$this->db->insert("event",$eventData);
		$eventId=$this->db->insert_id();
		return $eventId;
	}	
	public function allEvents(){
		$query=$this->db->query("select * from event");
		$result=$query->result_array();
		return $result;
	}
	public function singleEvent($profileID){
		$query=$this->db->query("select * from event where id='$profileID' ");
		$result=$query->row_array();
		return $result;
	}
	public function updateEvent($profileData,$profileID){
		$this->db->where('id',$profileID);
		$this->db->update('event',$profileData);
	}
}

?>
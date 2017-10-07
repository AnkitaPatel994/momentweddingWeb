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
	public function singleEvent($eventID){
		$query=$this->db->query("select * from event where id='$eventID' ");
		$result=$query->row_array();
		return $result;
	}
	public function updateEvent($eventData,$eventID){
		$this->db->where('id',$eventID);
		$this->db->update('event',$eventData);
	}
	public function allWeddings(){
		$query=$this->db->query("select id from wedding");
		$result=$query->result_array();
		return $result;
	}
	public function deleteEvent($eventID){
		$this->db->where('id',$eventID);
		$this->db->delete('event');
	}



	

}

?>
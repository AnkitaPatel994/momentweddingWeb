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
		$this->load->model("wedding_model");
		$this->load->model("profile_model");
		$query=$this->db->query("select * from event");
		$result=$query->result_array();
		$weddingArray = array();
		foreach ($result as $key => $guestRow) {
			$weddingRow = $this->wedding_model->getWeddingRow($guestRow["wedding_id"]);
			$groomRow = $this->profile_model->singleProfile($weddingRow["groom_id"]);
			$brideRow = $this->profile_model->singleProfile($weddingRow["bride_id"]);
			$wedding = $groomRow["name"]." | ".$brideRow["name"];
			$result[$key]["weddingName"] = $wedding;
		}
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
		$this->load->model("wedding_model");
		$this->load->model("profile_model");
		$query=$this->db->query("select * from wedding");
		$result=$query->result_array();
		$weddingArray = array();
		foreach ($result as $key => $guestRow) {
			$weddingRow = $this->wedding_model->getWeddingRow($guestRow["id"]);
			$groomRow = $this->profile_model->singleProfile($weddingRow["groom_id"]);
			$brideRow = $this->profile_model->singleProfile($weddingRow["bride_id"]);
			$wedding = $groomRow["name"]." | ".$brideRow["name"];
			$result[$key]["weddingName"] = $wedding;
		}
		return $result;
	}
	public function deleteEvent($eventID){
		$this->db->where('id',$eventID);
		$this->db->delete('event');
	}



	

}

?>
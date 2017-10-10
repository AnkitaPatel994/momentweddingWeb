<?php 
/**
* 
*/
class Guestlist_model extends CI_Model
{
	public function addGuestList($guestData){
		//var_dump($guestData);
		$this->db->insert('guest_list',$guestData);
	}
	public function allGuestList(){
		$this->load->model("wedding_model");
		$this->load->model("profile_model");
		$query=$this->db->query("select * from guest_list");
		$result=$query->result_array();
		$weddingArray = array();
		$profileArray = array();
		foreach ($result as $key => $guestRow) {
			/*if(isset($weddingArray[$guestRow["wedding_id"]])){
				$weddingRow = $weddingArray[$guestRow["wedding_id"]];
			}else
			{
				$weddingRow = $this->wedding_model->getWeddingRow($guestRow["wedding_id"]);
				$weddingArray[$guestRow["wedding_id"]] = $weddingRow;
			}

			if(isset($profileArray[$weddingRow["bride_id"]])){
				$brideRow = $profileArray[$weddingRow["bride_id"]];
			}else
			{
				$brideRow = $this->profile_model->singleProfile($weddingRow["bride_id"]);
				$profileArray[$weddingRow["bride_id"]] = $brideRow;
			}

			if(isset($profileArray[$weddingRow["groom_id"]])){
				$groomRow = $profileArray[$weddingRow["groom_id"]];
			}else
			{
				$groomRow = $this->profile_model->singleProfile($weddingRow["groom_id"]);
				$profileArray[$weddingRow["groom_id"]] = $brideRow;
			}*/
			$weddingRow = $this->wedding_model->getWeddingRow($guestRow["wedding_id"]);
			$groomRow = $this->profile_model->singleProfile($weddingRow["groom_id"]);
			$brideRow = $this->profile_model->singleProfile($weddingRow["bride_id"]);
			$invitedByRow = $this->profile_model->singleProfile($guestRow["profile_id"]);
			$wedding = $groomRow["name"]." | ".$brideRow["name"];
			$result[$key]["weddingName"] = $wedding;
			$result[$key]["invitedBy"] = $invitedByRow["name"];
		}
		return $result;
	}
	public function editGuestList($guestID){
		$query=$this->db->query("select * from guest_list where id='$guestID' ");
		$result=$query->row_array();
		var_dump($result);
		//return $result;
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
	public function updateRsvp($updateData,$guestID){
		$this->db->where('id',$guestID);
		$this->db->update('guest_list',$guestData);
	}

	public function weddingGuestCount($weddingID){
		$query = $this->db->query("SELECT * FROM guest_list WHERE wedding_id='$weddingID'");
		$result = $query->result_array();
		$total = 0;
		foreach ($result as $key => $guestRow) {
			$total = $total+$guestRow["guest_count"];
		}
		return $total;
	}
	public function eventGuestCount($eventID){
		$query = $this->db->query("SELECT * FROM guest_list WHERE event_access LIKE '%[$eventID]%'");
		$result = $query->result_array();
		$total = 0;
		foreach ($result as $key => $guestRow) {
			$total = $total+$guestRow["guest_count"];
		}
		return $total;
	}

	//car,train and flight accepted in transportation
	public function eventGuestsByTransportation($eventID,$trasportation){
		$query = $this->db->query("SELECT * FROM guest_list WHERE event_access LIKE '%[$eventID]%' and arriving_by='$trasportation'");
		$result = $query->result_array();
		$total = 0;
		foreach ($result as $key => $guestRow) {
			$total = $total+$guestRow["guest_count"];
		}
		return $total;
	}

	public function guestListByTransportation($eventID,$trasportation){
		$query = $this->db->query("SELECT * FROM guest_list WHERE event_access LIKE '%[$eventID]%' and arriving_by='$trasportation'");
		$result = $query->result_array();
		return $result;
	}

	
}


?>
<?php 
class User_model extends CI_Model{

	function profileFatch($user_code){
        $query = $this->db->query("select * from profile where user_code='$user_code'");
        $count = $query->num_rows();
        $result = $query->result_array();
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'User' => $result);
        }
        else
        {
            $details = array('status' => "0", 'message' => "User Not Found");
        }
        return $details;
    }

    function invitationFatch($user_code){
        $query = $this->db->query("select * from invitation where user_code='$user_code'");
        $count = $query->num_rows();
        $result = $query->result_array();
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'Invitation' => $result);
        }
        else
        {
            $details = array('status' => "0", 'message' => "Invitation Not Found");
        }
        return $details;
    }

    function memberFatch($user_code){
        $query = $this->db->query("select * from member where user_code='$user_code'");
        $count = $query->num_rows();
        $result = $query->result_array();
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'FamilyMember' => $result);
        }
        else
        {
            $details = array('status' => "0", 'message' => "Family Member Not Found");
        }
        return $details;
    }

    function scheduleFatch($user_code){
        $query = $this->db->query("select * from schedule where user_code='$user_code'");
        $count = $query->num_rows();
        $result = $query->result_array();
        foreach ($result as $key => $row) {
            $time=strtotime($row["date"]);
            $day=date("d",$time);
            $month=date("F",$time);
            $ti=date("h:iA",$time);
            $result[$key]["date"] = $Date = array('day' => $day, 'month' => $month, 'time' => $ti);
        }
        if($count!=0)
        {           
            $details = array('status' => "1", 'message' => "Success", 'Schedule' => $result);
        }
        else
        {
            $details = array('status' => "0", 'message' => "Family Member Not Found");
        }
        return $details;
    }
}
?>
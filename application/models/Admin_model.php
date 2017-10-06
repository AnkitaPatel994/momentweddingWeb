<?php 
/**
* 
*/
class Admin_model extends CI_Model
{	
	public function doLogin($data){
		$email=$data['email'];
		$password=$data['password'];
		$query=$this->db->query("select * from admin_login where email='$email' and password='$password'");
		if($query->num_rows()==1){
			$check=array("status"=>"ok","message"=>"Login Successful...");
			$this->session->set_userdata("email",$data['email']);
		}
		else{
			$check=array("status"=>"fail","message"=>"Login Fail...");
		}
		return $check;
	}
}


?>
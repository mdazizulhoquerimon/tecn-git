<?php 
/**
 * Login Model
 */
class Login_Model extends CI_Model
{
	
	function __construct()
	{
		
	}


	public function validate($username_email,$password)
	{
		$this->db->where("username",$username_email);
		$this->db->where('pass_hash',$password);
		$this->db->where('status',1);
		$this->db->where('trash',0);
		$result = $this->db->get('password',1);

		if ($result->num_rows() > 0) {
			return $result;
		}else{
			$this->db->where("email",$username_email);
			$this->db->where('pass_hash',$password);
			$this->db->where('status',1);
			$this->db->where('trash',0);
			$result = $this->db->get('password',1);
			return $result;
		}



		/*$qry = $this->db->query("SELECT * FROM `password` WHERE `email`='".$username_email."' OR `username`='".$username_email."' AND `pass_hash`='".$password."' AND `status`='1' AND `trash`='0'");
		return $qry;*/
	}
}
?>
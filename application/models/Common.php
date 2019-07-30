<?php
class Common extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function loggedin()
	{
		if(!empty($this->session->userdata('id')) && !empty($this->session->userdata('user_type')))
			return true;
		else
			return false;
	}
	public function user_session_data($val)
	{
		$id=0;
		$type=0;

		$id = $this->session->userdata('id');
		$type = $this->session->userdata('user_type');

		$arr = array('1' => $id,'2' => $type);

		if (!empty($arr[$val])) {
			return $arr[$val];
		}else{
			return 0;
		}
	}

	public function mobileNumberCheck($value)
	{
		# code...
	}
	public function getAll($table,$col = null, $val = null, $col2=null, $val2=null, $asc_field = null, $asc_type = null)
	{

		if(!empty($col))
            $this->db->where($col,$val);
        
        if(!empty($col2))
            $this->db->where($col2,$val2);
            
		if(!empty($asc_field)){
	    	$this->db->order_by($asc_field,$asc_type);
		}

        $this->db->where('trash',0);
	    $info = $this->db->get($table);
	    return $info->result_array();
	}
	public function getSpecificRows($table,$col,$val, $asc_field = null,$asc_type = null)
	{

		if(!empty($asc_field))
	    	$this->db->order_by($asc_field,$asc_type);

		$this->db->where('trash',0);
		$this->db->where($col,$val);

	    $info = $this->db->get($table);
	    return $info->result_array();
	}
	public function getSpecificField($table,$col,$val, $data, $asc_field = null,$asc_type = null)
	{

		if(!empty($asc_field))
	    	$this->db->order_by($asc_field,$asc_type);

		$this->db->where('trash',0);
		$this->db->where($col,$val);

	    $info = $this->db->get($table)->result_array();

	    foreach($info as $i){
	    	return $i[$data];
	    }
	}
}
?>
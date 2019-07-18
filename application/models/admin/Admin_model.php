<?php
class Admin_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	public function insert_notice()
	{
	    $this->load->helper('url');

	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'title' => $this->input->post('title'),
	        //'slug' => $slug,
	        'description' => $this->input->post('description'),
	        'date' => date('Y-m-d',strtotime($this->input->post('notice-date'))),
	        'date_time' => $this->input->post('notice-date')
	    );

	    return $this->db->insert('notice', $data);
	}

	public function notice_type($type)
	{
		if($type == 1){
			return "Notice";
		}elseif ($type == 2) {
			return "News";
		}elseif ($type == 3) {
			return "Events";
		}
	}
}
?>
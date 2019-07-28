<?php
class Admin_Model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
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
	public function insert_notice()
	{
	    $this->load->helper('url');

	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
	        'notice_type' => $this->input->post('notice_type'),
	        'title' => $this->input->post('title'),
	        'title' => $this->input->post('title'),
	        //'slug' => $slug,
	        'description' => $this->input->post('description'),
	        'date' => date('Y-m-d',strtotime($this->input->post('notice-date'))),
	        'date_time' => $this->input->post('notice-date')
	    );

	    return $this->db->insert('notice', $data);
	}
	/* add teacher */
	public function add_teacher()
	{
        $data = array(
        	'name' => $this->input->post('name'),
        	'email' => $this->input->post('email'),
        	'phone' => $this->input->post('phone'),
        	'father_name' => $this->input->post('father_name'),
        	'mother_name' => $this->input->post('mother_name'),
        	'nid' => $this->input->post('nid'),
        	'dob' => $this->input->post('dob'),
        	'gender' => $this->input->post('gender'),
        	'present_address' => $this->input->post('present_addr'),
        	'permanent_address' => $this->input->post('permanent_addr'),
        	'dept' => $this->input->post('dept'),
        	'designation' => $this->input->post('designation'),
        	'joining_date' => $this->input->post('joining_date'),
        	'added_by' => $this->common->user_session_data(1)
        );
        return $this->db->insert('teachers', $data);
	}

	/* add student */
	public function add_student()
	{
        $data = array(
        	'name' => $this->input->post('name'),
        	'roll' => $this->input->post('roll'),
        	'dept' => $this->input->post('dept'),
        	'phone' => $this->input->post('phone'),
        	'email' => $this->input->post('email'),
        	'gender' => $this->input->post('gender'),
        	'dob' => $this->input->post('dob'),
        	'nid' => $this->input->post('nid'),
        	'father_name' => $this->input->post('father_name'),
        	'mother_name' => $this->input->post('mother_name'),
        	'present_address' => $this->input->post('present_addr'),
        	'permanent_address' => $this->input->post('permanent_addr'),
        	'starting_date' => $this->input->post('starting_date'),
        	'is_student' => $this->input->post('is_student'),
        	/*'ending_date' => $this->input->post('ending_date'),*/
        	'added_by' => $this->common->user_session_data(1)
        );
        return $this->db->insert('students', $data);
	}
	/* add alumni */
	public function add_alumni()
	{
        $data = array(
        	'name' => $this->input->post('name'),
        	'roll' => $this->input->post('roll'),
        	'dept' => $this->input->post('dept'),
        	'phone' => $this->input->post('phone'),
        	'email' => $this->input->post('email'),
        	'gender' => $this->input->post('gender'),
        	'dob' => $this->input->post('dob'),
        	'nid' => $this->input->post('nid'),
        	'father_name' => $this->input->post('father_name'),
        	'mother_name' => $this->input->post('mother_name'),
        	'present_address' => $this->input->post('present_addr'),
        	'permanent_address' => $this->input->post('permanent_addr'),
        	'starting_date' => $this->input->post('starting_date'),
        	'is_student' => $this->input->post('is_student'),
        	'ending_date' => $this->input->post('ending_date'),
        	'added_by' => $this->common->user_session_data(1)
        );
        return $this->db->insert('students', $data);
	}
}
?>
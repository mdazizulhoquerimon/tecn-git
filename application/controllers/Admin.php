<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct() {
	    parent::__construct();
	    $this->load->model('admin/admin_model');
	    $this->load->model('common');
	}
	public function index(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function dashboard(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
		//echo "user type: ".$this->common->user_session_data(2);
		//echo "type: ".$this->common->user_session_data(2);
		
	    //echo $this->session->userdata('user_type');

		/*$this->db->where("trash",0);
    	$this->db->order_by('id','desc');
		$data['all_notice'] = $this->db->get('notice')->result_array();

		$this->load->view('admin/header');
		$this->load->view('admin/notice',$data);
		$this->load->view('admin/footer');*/
	}
	public function notice(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

	    $data['success'] = '';


		$this->db->where("trash",0);
    	$this->db->order_by('id','desc');
		$data['all_notice'] = $this->db->get('notice')->result_array();

		$this->load->view('admin/header');
		$this->load->view('admin/notice/all_notice',$data);
		$this->load->view('admin/footer');
	}
	public function new_notice(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

	    $data = array();
	    $data['title'] = 'Create a new notice';


    	$data['success'] = 0;
		$this->load->view('admin/header');
		$this->load->view('admin/notice/add_notice',$data);
		$this->load->view('admin/footer');
	}
	
	public function insert_notice()
	{
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

	    $data = array();
	    $data['title'] = 'Create a new notice';

	    $notice_type = $this->form_validation->set_rules('notice_type', 'Notice type is', 'required');
	    $notice_title = $this->form_validation->set_rules('title', 'Notice Title is', 'required');
	    $notice_descr =  $this->form_validation->set_rules('description', 'Notice Description is', 'required');
	    //$this->form_validation->set_rules('notice-image', 'Notice image', 'required');
	    $notice_date = $this->form_validation->set_rules('notice-date', 'Notice Date is', 'required');
/*
		if(empty($notice_title))
			redirect('notice');

*/
	    $data['success'] = '';

	    if ($this->form_validation->run() === FALSE)
	    {
	    	$data['success'] = 0;
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/notice/add_notice',$data);
	        $this->load->view('admin/footer');
	    }
	    else
	    {
	    	$data['success'] = 1;
	        $this->admin_model->insert_notice();
	        redirect('admin/notice');
	    }
	}
	public function teacher(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

		$data['all_teacher'] = $this->common->getAll('teachers');

		$this->load->view('admin/header');
		$this->load->view('admin/teacher/all_teacher',$data);
		$this->load->view('admin/footer');
	}
	public function add_teacher(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');


	    $data['success'] = '';
		$data['all_teacher'] = $this->common->getAll('teachers');

		$data['all_dept'] = $this->common->getAll('dept');

		$data['designation'] = $this->common->getAll('designation','type','2');

		$this->load->view('admin/header');
		$this->load->view('admin/teacher/add_teacher',$data);
		$this->load->view('admin/footer');
	}
	public function insert_teacher(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

        $datetime= date('Ymdhis');

        $name = $this->form_validation->set_rules('name', 'Name is', 'required');
        $phone = $this->form_validation->set_rules('phone', 'Phone', 'required');

        //$name= $this->input->post('name');
        $email= $this->input->post('email');
        $phone= $this->input->post('phone');
        $father_name= $this->input->post('father_name');
        $mother_name= $this->input->post('mother_name');
        $nid= $this->input->post('nid');
        $dob= $this->input->post('dob');
        $gender= $this->input->post('gender');
        $present_addr= $this->input->post('present_addr');
        $permanent_addr= $this->input->post('permanent_addr');
        $dept= $this->input->post('dept');
        $designatin= $this->input->post('designatin');
        $joining_date= $this->input->post('joining_date');
        //$this->form_validation->set_rules('pass', 'Password', 'required');
		//$this->form_validation->set_rules('con_pass', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE)
	    {
	    	$data['success'] = 0;
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/teacher/add_teacher',$data);
	        $this->load->view('admin/footer');
	    }
	    else
	    {
	    	$data['success'] = 1;
	        $this->admin_model->add_teacher();

	        $teacher_id = $this->common->getSpecificField('teachers','phone',$this->input->post('phone'),'id');

	        $pass = $this->input->post('pass');
	        $pass_hash = md5(sha1(md5($pass)));
	        $data2 = array(
	        	'user_type' => 2,
	        	'user_id' => $teacher_id,
	        	'username' => $this->input->post('name'),
	        	'email' => $this->input->post('email'),
	        	'mobile' => $this->input->post('phone'),
	        	'pass_hash' => $pass_hash,
	        	'pass_view' => $pass
	        );
	        $this->db->insert('password', $data2);

	        redirect('admin/teacher');
	    }
	}

	public function student(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

		$data['all_students'] = $this->common->getAll('students','trash',0,'is_student',1);

		$this->load->view('admin/header');
		$this->load->view('admin/student/all_students',$data);
		$this->load->view('admin/footer');
	}
	public function add_student(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');
		$data['success'] = 0;

		$this->db->where('trash',0);
		$this->db->where('status',1);
		$this->db->where('id !=',1);
		$data['all_dept'] = $this->db->get('dept')->result_array();

		$this->load->view('admin/header');
		$this->load->view('admin/student/add_student',$data);
		$this->load->view('admin/footer');
	}
	public function insert_student(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');


		$this->db->where('trash',0);
		$this->db->where('status',1);
		$this->db->where('id !=',1);
		$data['all_dept'] = $this->db->get('dept')->result_array();

        $datetime= date('Ymdhis');

        $name = $this->form_validation->set_rules('name', 'Name is', 'required');
        $phone = $this->form_validation->set_rules('phone', 'Phone', 'required');
        //$this->form_validation->set_rules('pass', 'Password', 'required');
		//$this->form_validation->set_rules('con_pass', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE)
	    {
	    	$data['success'] = 0;
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/student/add_student',$data);
	        $this->load->view('admin/footer');
	    }
	    else
	    {
	    	$data['success'] = 1;
	        $this->admin_model->add_student();

	        $student_id = $this->common->getSpecificField('students','phone',$this->input->post('phone'),'id');

	        $pass = $this->input->post('pass');
	        $pass_hash = md5(sha1(md5($pass)));
	        $data2 = array(
	        	'user_type' => 4,
	        	'user_id' => $student_id,
	        	'username' => $this->input->post('name'),
	        	'email' => $this->input->post('email'),
	        	'mobile' => $this->input->post('phone'),
	        	'pass_hash' => $pass_hash,
	        	'pass_view' => $pass
	        );
	        $this->db->insert('password', $data2);

	        redirect('admin/student');
	    }
	}

	public function alumni(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');

		$data['all_alumni'] = $this->common->getAll('students','is_student',2);

		$this->load->view('admin/header');
		$this->load->view('admin/alumni/all_alumni',$data);
		$this->load->view('admin/footer');
	}
	public function add_alumni(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');
		$data['success'] = 0;

		$this->db->where('trash',0);
		$this->db->where('status',1);
		$this->db->where('id !=',1);
		$data['all_dept'] = $this->db->get('dept')->result_array();

		$data['membership_type'] = $this->common->getAll('type_list','type_id',2);

		$this->load->view('admin/header');
		$this->load->view('admin/alumni/add_alumni',$data);
		$this->load->view('admin/footer');
	}
	public function insert_alumni(){
		$id = $this->common->user_session_data(1);
		$user_type = $this->common->user_session_data(2);
		if(empty($id))
			redirect(base_url().'login');


		$this->db->where('trash',0);
		$this->db->where('status',1);
		$this->db->where('id !=',1);
		$data['all_dept'] = $this->db->get('dept')->result_array();

        $datetime= date('Ymdhis');

        $name = $this->form_validation->set_rules('name', 'Name is', 'required');
        $phone = $this->form_validation->set_rules('phone', 'Phone', 'required');
        //$this->form_validation->set_rules('pass', 'Password', 'required');
		//$this->form_validation->set_rules('con_pass', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() === FALSE)
	    {
	    	$data['success'] = 0;
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/alumni/add_alumni',$data);
	        $this->load->view('admin/footer');
	    }
	    else
	    {
	    	$data['success'] = 1;
	        $this->admin_model->add_alumni();

	        $student_id = $this->common->getSpecificField('students','phone',$this->input->post('phone'),'id');

	        $pass = $this->input->post('pass');
	        $pass_hash = md5(sha1(md5($pass)));
	        $data2 = array(
	        	'user_type' => 4,
	        	'user_id' => $student_id,
	        	'username' => $this->input->post('name'),
	        	'email' => $this->input->post('email'),
	        	'mobile' => $this->input->post('phone'),
	        	'pass_hash' => $pass_hash,
	        	'pass_view' => $pass
	        );
	        $this->db->insert('password', $data2);


	        $alumni_table = array(
	        	'student_id' => $student_id,
	        	'membership' => $this->input->post('membership'),
	        	'date' => date('Y-m-d'),
	        	'added_by' => $id
	        );
	        $this->db->insert('alumni', $alumni_table);




	        redirect('admin/alumni');
	    }
	}

}

?>
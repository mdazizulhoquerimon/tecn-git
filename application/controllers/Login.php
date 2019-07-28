<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('common');
	    $this->load->model('login_model');
	}
	public function index()
	{
		//$this->db->where("(notice_type=2 OR notice_type=3)");
		$this->db->where("notice_type = 2 OR notice_type=3" );
		$this->db->where("trash",0);
    	$this->db->order_by('id','desc');
		$data['all_news_events'] = $this->db->get('notice')->result_array();
		//$data['all_notice'] = "SELECT * FROM `notice` WHERE `notice_type` = '2' AND `notice_type` = '3' ORDER BY `id` DESC";

		$this->db->where("notice_type",1);
    	$this->db->order_by('id','desc');
		$data['all_notice'] = $this->db->get('notice')->result_array();

		//echo $this->db->last_query();

		//$this->load->view('public/head');
		//$this->load->view('public/header');
		$this->load->view('admin/login',$data);
		//$this->load->view('public/footer');
	}
	public function auth()
	{
		$username_email = $this->input->post('username_email',TRUE);
		$password = $this->input->post('password',TRUE);
		$pass_hash = md5(sha1(md5($password)));
		$validate = $this->login_model->validate($username_email,$pass_hash);
		
		if ((!empty($username_email) && !empty($password)) && $validate->num_rows() > 0) {
			$row_data = $validate->row_array();
			$id = $row_data['id'];
			$user_type = $row_data['user_type'];
			$user_id = $row_data['user_id'];

			$ses_data = array(
				'id' => $id,
				'user_type' => $user_type,
				'user_id' => $user_id
			);
			$this->session->set_userdata($ses_data);
			redirect(base_url().'admin/dashboard');

		}else if (empty($username_email) || empty($password)) {
			echo $this->session->set_flashdata("msg","Username/email/password empty!!");
			redirect(base_url().'login');
		}else{
			echo $this->session->set_flashdata("msg","Username or email or password wrong!!");
			redirect(base_url().'login');
		}
	}


	/*public function auth(){
	    $email    = $this->input->post('email',TRUE);
	    $password = md5($this->input->post('password',TRUE));
	    $validate = $this->login_model->validate($email,$password);
	    if($validate->num_rows() > 0){
	        $data  = $validate->row_array();
	        $name  = $data['user_name'];
	        $email = $data['user_email'];
	        $level = $data['user_level'];
	        $sesdata = array(
	            'username'  => $name,
	            'email'     => $email,
	            'level'     => $level,
	            'logged_in' => TRUE
	        );
	        $this->session->set_userdata($sesdata);
	        // access login for admin
	        if($level === '1'){
	            redirect('page');
	 
	        // access login for staff
	        }elseif($level === '2'){
	            redirect('page/staff');
	 
	        // access login for author
	        }else{
	            redirect('page/author');
	        }
	    }else{
	        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
	        redirect('login');
	    }
  	}*/
 
 	function logout(){
      	$this->session->sess_destroy();
  		/*$this->session->unset_userdata('id');
  		$this->session->unset_userdata('user_type');
  		$this->session->unset_userdata('user_id');*/
      	redirect(base_url().'login');
  	}
	public function forgot_password()
	{
		$this->load->view('admin/forgot-password');
	}
}
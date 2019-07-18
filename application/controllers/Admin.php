<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	public function __construct() {
	    parent::__construct();
	    $this->load->model('admin/admin_model');
	}
	public function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function notice(){
	    $data['success'] = '';


		$this->db->where("trash",0);
    	$this->db->order_by('id','desc');
		$data['all_notice'] = $this->db->get('notice')->result_array();

		$this->load->view('admin/header');
		$this->load->view('admin/notice',$data);
		$this->load->view('admin/footer');
	}
	public function insert_notice()
	{
	    $this->load->helper('form');
	    $this->load->library('form_validation');

	    $data = array();
	    $data['title'] = 'Create a new notice';

	    $this->form_validation->set_rules('title', 'Title', 'required');
	    $this->form_validation->set_rules('description', 'Description', 'required');
	    //$this->form_validation->set_rules('notice-image', 'Notice image', 'required');
	    $this->form_validation->set_rules('notice-date', 'Date ', 'required');

	    $data['success'] = '';

	    if ($this->form_validation->run() === FALSE)
	    {
	    	$data['success'] = 0;
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/notice',$data);
	        $this->load->view('admin/footer');

	    }
	    else
	    {
	    	$data['success'] = 1;
	        $this->admin_model->insert_notice();
	        $this->load->view('admin/header', $data);
	        $this->load->view('admin/notice',$data);
	        $this->load->view('admin/footer');
	        //header("Refresh:2; url={$admin}");
	    }
	}
	public function login(){
		//$this->load->view('admin/header');
		$this->load->view('admin/login');
		//$this->load->view('admin/footer');
	}
}

?>
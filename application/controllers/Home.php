<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('common');
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

		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/index',$data);
		$this->load->view('public/footer');
	}
}
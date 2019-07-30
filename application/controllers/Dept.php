<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dept extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('common');
	}
	public function index()
	{
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/departments');
		$this->load->view('public/footer');
	}
	public function ame()
	{
		$data['ame_teachers'] = $this->common->getAll('teachers','dept',2);
		$data['ame_staffs'] = $this->common->getAll('staffs','dept',2);
		$data['class_routine'] = $this->common->getAll('class_routine','dept',2);

		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/ame',$data);
		$this->load->view('public/footer');
	}
	public function fme()
	{
		$data['ame_teachers'] = $this->common->getAll('teachers','dept',3);
		$data['ame_staffs'] = $this->common->getAll('staffs','dept',3);
		$data['class_routine'] = $this->common->getAll('class_routine','dept',3);

		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/fme',$data);
		$this->load->view('public/footer');
	}
	public function wpe()
	{
		$data['ame_teachers'] = $this->common->getAll('teachers','dept',4);
		$data['ame_staffs'] = $this->common->getAll('staffs','dept',4);
		$data['class_routine'] = $this->common->getAll('class_routine','dept',4);
		
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/wpe',$data);
		$this->load->view('public/footer');
	}
	public function yme()
	{
		$data['ame_teachers'] = $this->common->getAll('teachers','dept',5);
		$data['ame_staffs'] = $this->common->getAll('staffs','dept',5);
		$data['class_routine'] = $this->common->getAll('class_routine','dept',5);
		
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/yme',$data);
		$this->load->view('public/footer');
	}
}
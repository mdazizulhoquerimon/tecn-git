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

		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/ame',$data);
		$this->load->view('public/footer');
	}
	public function fme()
	{
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/fme');
		$this->load->view('public/footer');
	}
	public function wpe()
	{
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/wpe');
		$this->load->view('public/footer');
	}
	public function yme()
	{
		$this->load->view('public/head');
		$this->load->view('public/header');
		$this->load->view('public/dept/yme');
		$this->load->view('public/footer');
	}
}
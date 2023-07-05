<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// THIS IS MEMBER CONTROLLER
class Team extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['site_title'] = 'Welcome | Utsob shop BD.';
		$this->load->view('member/header',$data);
		$this->load->view('member/team');
		$this->load->view('templates/footer');
	}
}

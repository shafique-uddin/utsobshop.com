<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// THIS IS MEMBER PROFILE CONTROLLER
class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['site_title'] = 'Profile | Utsob shop BD.';
		$this->load->view('member/header',$data);
		$this->load->view('member/profile');
		$this->load->view('templates/footer');
	}
}

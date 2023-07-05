<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['site_title'] = 'Login | Utsob shop BD.';
		$this->load->view('templates/header',$data);
		$this->load->view('login/login_page');
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// ADMIN DASHBOARD CONTROLLER
	public function index()
	{
		$data['site_title'] = 'Admin Profile';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profile');
		$this->load->view('admin/footer');
	}
}

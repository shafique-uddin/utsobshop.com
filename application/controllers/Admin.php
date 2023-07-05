<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// ADMIN DASHBOARD CONTROLLER
	public function index()
	{
		$data['site_title'] = 'Admin Dashboard';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ownersystem');
		$this->load->model('product');
	}

	public function index()
	{
		$data['all_cat_list'] = $this->Ownersystem->cat_list();
		$data['site_title'] = 'Registration | Utsob shop BD.';
		$this->load->view('templates/header',$data);
		$this->load->view('registration/registration_page',$data);
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// ADMIN DASHBOARD CONTROLLER
	public function index()
	{
		$this->load->model('Ownersystem');
		$cat_list = $this->Ownersystem->cat_list();

		$data['site_title'] = 'Product Post Page';
		$data['cat_list_name'] = $cat_list;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/product',$data);
		$this->load->view('admin/footer');
	}
}

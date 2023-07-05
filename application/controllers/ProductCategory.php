<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// THIS IS MEMBER CONTROLLER
class ProductCategory extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Ownersystem');
		$cat_list_result = $this->Ownersystem->cat_list();

		
		$data['site_title'] = 'Product Category';
		$data['cat_list'] = $cat_list_result;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/category',$data);
		$this->load->view('admin/footer');
	}
}

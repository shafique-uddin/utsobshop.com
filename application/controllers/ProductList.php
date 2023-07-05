<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductList extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// ADMIN PRODUCT LIST CONTROLLER
	public function index()
	{
		$this->load->model('Ownersystem');
		$pro_list = $this->Ownersystem->list_of_product();

		$data['site_title'] = 'Product List Page';
		$data['list_of_pro'] = $pro_list;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/productlist',$data);
		$this->load->view('admin/footer');
	}

}

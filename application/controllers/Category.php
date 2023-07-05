<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ownersystem');
	}

	public function index()
	{
		$data['all_cat_list'] = $this->Ownersystem->cat_list();
		$data['all_pro_list'] = $this->Ownersystem->list_of_product();
		$data['site_title'] = 'utsob shop BD.';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/category_page',$data);
		$this->load->view('templates/footer');
	}

	// SELECT PRODUCT BY ID
	public function product($id)
	{
		$data['all_cat_list'] = $this->Ownersystem->cat_list();
		$data['all_pro_list_by_cat'] = $this->Ownersystem->search_product_by_cat($id);
		$data['single_cat_name'] = $id;

		$data['site_title'] = 'utsob shop BD.';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/category_product_page',$data);
		$this->load->view('templates/footer');
	}
}

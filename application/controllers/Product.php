<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

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
		$this->load->view('welcome_page',$data);
		$this->load->view('templates/footer');
	}

	// ABOUT PRODUCT means PRODUCT DETAILS BY ID
	public function about($id)
	{
		$data['all_cat_list'] = $this->Ownersystem->cat_list();
		$data['all_pro_list'] = $this->Ownersystem->list_of_product();

		$data['site_title'] = 'Details | utsob shop BD.';
		$data['single_pro_details'] = $this->Ownersystem->search_product($id);
		$this->load->view('templates/header',$data);
		$this->load->view('templates/product_details_page',$data);
		$this->load->view('templates/footer');
	}
}

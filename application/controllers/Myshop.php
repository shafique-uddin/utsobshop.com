<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Myshop extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Ownersystem');
	}
	public function product($newval) {
		//$this->load->model('Product');
		//$product_details = $this->Product->add_to_cart_more_info_by_pro_id($newval);
		$cart_no = $this->session->userdata('cart_no');
		$cart_no[$newval] = 1;
		$this->session->set_userdata('cart_no',$cart_no);
		
		/*
		// Whenever a user adds an item to their cart, pull out any they already have in there
		$cart_products = $this->session->userdata('cart_products');
		// Add the new item
		$cart_products[] = $newval;
		// And put it back into the session
		$this->session->set_userdata('cart_products', $cart_products);
		*/
		redirect('Welcome');
	}
}
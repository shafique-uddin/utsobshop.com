<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ownersystem');
		$this->load->model('product');
	}
	public function index()
	{
		redirect('checkout');
	}

	public function bkash()
	{
		if ($this->session->sub_total_price && $this->session->user_info) {
			$subtotal_price_correction_arr = $this->session->sub_total_price;
			$last_element = count($subtotal_price_correction_arr)-1;
			foreach ($subtotal_price_correction_arr as $key => $value) {
				if ($key == $last_element) {
					$data['sub_total_price'] = $value;
				}
			}
			
			$data['all_cat_list'] = $this->Ownersystem->cat_list();
			$data['site_title'] = 'Payment | Utsob Shop';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/shop/cart/bkash_payment',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('welcome');
		}
	}

	public function rocket()
	{
		if ($this->session->sub_total_price) {
			$subtotal_price_correction_arr = $this->session->sub_total_price;
			$last_element = count($subtotal_price_correction_arr)-1;
			foreach ($subtotal_price_correction_arr as $key => $value) {
				if ($key == $last_element) {
					$data['sub_total_price'] = $value;
				}
			}

			$data['all_cat_list'] = $this->Ownersystem->cat_list();
			$data['site_title'] = 'Payment | Utsob Shop';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/shop/cart/rocket_payment',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('welcome');
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Ownersystem');
	}

	public function index()
	{
		$data['site_title'] = 'utsob shop BD.';
		$data['all_cat_list'] = $this->Ownersystem->cat_list();
		$data['all_pro_list'] = $this->Ownersystem->list_of_product();
		$this->load->view('templates/header',$data);
		$this->load->view('welcome_page',$data);
		$this->load->view('templates/footer');
	}

	public function payment_verify_error()
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
			$data['error'] = 'Please Insert All Field Correctly.';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/shop/cart/bkash_payment',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('welcome');
		}

	}

	public function confirmation()
	{
		if ($this->session->sub_total_price) {
			$subtotal_price_correction_arr = $this->session->sub_total_price;
			$last_element = count($subtotal_price_correction_arr)-1;
			foreach ($subtotal_price_correction_arr as $key => $value) {
				if ($key == $last_element) {
					$data['sub_total_price'] = $value;
				}
			}

			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_bkash_no', 'user_bkash_no', 'trim|required|min_length[11]|max_length[11]');

			if ($this->form_validation->run() == FALSE) {
				redirect('payment-error-founded');
			} 
			else {
				$pay_info = $this->session->pay_info;

	$pay_info['pay_info']['payment_amount'] = $this->input->post('user_payment_amount');
	$pay_info['pay_info']['bkashMobileNo'] = $this->input->post('user_bkash_no');
	$pay_info['pay_info']['bkashTransactionID'] = $this->input->post('user_transaction_ID');
				
				$this->session->set_userdata( $pay_info, 'pay_info' );

				$this->load->model('Product');
				$send = $this->Product->collect_order_info();
				if ($send>=1) {
					$data['all_cat_list'] = $this->Ownersystem->cat_list();
					$data['site_title'] = 'Welcome | Utsob Shop';
					$data['message'] = 'Thanks for your order. We will contact with you as soon as possible. You may also contact for more information. Please contact:';
					$this->load->view('templates/header',$data);
					$this->load->view('confirmation/confirmation',$data);
					$this->load->view('templates/footer');
				}
				else {
					redirect('welcome');
				}
			}
		}
		else {
			redirect('welcome');
		}
	}
}

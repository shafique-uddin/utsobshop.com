<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ownersystem');
		$this->load->model('product');
	}

	public function index()
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
			$data['site_title'] = 'Checkout | Utsob Shop';
			$this->load->view('templates/header',$data);
			$this->load->view('templates/shop/cart/checkout',$data);
			$this->load->view('templates/footer');
		}
		else {
			redirect('welcome');
		}
	}

	// CHECKING CUSTOMER DATA
	public function payment()
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
			$this->form_validation->set_rules('normal_user_name', '', 'trim|required');
			$this->form_validation->set_rules('user_mail', '', 'trim|required');
			$this->form_validation->set_rules('user_mobile', '', 'trim|required|min_length[11]');
			$this->form_validation->set_rules('user_country', '', 'trim|required');
			$this->form_validation->set_rules('user_district', '', 'trim|required');
			$this->form_validation->set_rules('user_city', '', 'trim|required');
			$this->form_validation->set_rules('user_postal_code', '', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('user_address', '', 'trim|required');
			$this->form_validation->set_rules('payment_method', '', 'trim|required');

			if ($this->form_validation->run() == FALSE)
			{
				$data['all_cat_list'] = $this->Ownersystem->cat_list();
				$data['site_title'] = 'Checkout | Utsob Shop';
				$data['error'] = 'Please Insert All Field Correctly And Select a Payment Method.';
				$this->load->view('templates/header',$data);
				$this->load->view('templates/shop/cart/checkout',$data);
				$this->load->view('templates/footer');
			}
			else
			{
				$user_info = $this->session->user_info;

			$user_info['user_info']['normal_user_name'] = $this->input->post('normal_user_name');
			$user_info['user_info']['user_mail'] = $this->input->post('user_mail');
			$user_info['user_info']['user_mobile'] = $this->input->post('user_mobile');
			$user_info['user_info']['user_country'] = $this->input->post('user_country');
			$user_info['user_info']['user_district'] = $this->input->post('user_district');
			$user_info['user_info']['user_city'] = $this->input->post('user_city');
			$user_info['user_info']['user_postal_code'] = $this->input->post('user_postal_code');
			$user_info['user_info']['user_address'] = $this->input->post('user_address');
			$user_info['user_info']['payment_method'] = $this->input->post('payment_method');
				
				$this->session->set_userdata( $user_info, 'user_info' );


				$data['site_title'] = 'Payment | Utsob Shop';
				$data['method_name'] = $_POST['payment_method'];
				if ($_POST['payment_method'] == 'bkash'){
					redirect('payment/bkash');
				}
				else{
					redirect('payment/rocket');
				}
				$this->load->view('templates/header',$data);
				$this->load->view('templates/shop/cart/payment',$data);
				$this->load->view('templates/footer');
			}
		}
		else {
			redirect('welcome');
		}
	}
}

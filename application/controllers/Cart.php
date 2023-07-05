<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ownersystem');
		$this->load->model('product');
	}

	public function index()
	{

		$result = $this->product->cart_info();

		if (count($result)>0) {
			$data['site_title'] = 'My Cart';
			$data['all_cat_list'] = $this->Ownersystem->cat_list();
			$data['cart_details'] = $result;
			$this->load->view('templates/header',$data);
			$this->load->view('templates/shop/cart/shop');
			$this->load->view('templates/footer');
		}
		else {
			redirect('Welcome');
		}	
	}

	public function update()
	{
		$list_of_product_quantity 	= $this->input->post('product_qantity');
		$list_product_id 			= $this->input->post('id');

		if (!empty($list_of_product_quantity) && !empty($list_product_id)) {
			$cart_no = $this->session->userdata('cart_no');

			foreach ($list_product_id as $key => $single_product_id) {
				foreach ($list_of_product_quantity as $key => $single_product_quantity) {
					$cart_no[$single_product_id] = $single_product_quantity;
					array_shift($list_of_product_quantity);
					array_shift($list_product_id);
					break;
				}
			}
			
			$this->session->set_userdata( 'cart_no',$cart_no );


			$result = $this->product->cart_info();

			if (count($result)>0) {
				$data['site_title'] = 'My Cart';
				$data['all_cat_list'] = $this->Ownersystem->cat_list();
				$data['cart_details'] = $result;
				$data['updated'] = 1;
				$this->load->view('templates/header',$data);
				$this->load->view('templates/shop/cart/shop',$data);
				$this->load->view('templates/footer');
			}
			else {
				redirect('Welcome');
			}
		}
		else {
			redirect('Welcome');
		}
	}

	public function delete($id)
	{
		foreach ($this->session->cart_no as $key => $value) {
			if ($key == $id) {
				unset($_SESSION['cart_no'][$key]);
			}
		}

		redirect('cart');

	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}


	public function cart_info()
	{
		$cart_products = $this->session->cart_no;
		$cart_result_arr = array();
		foreach ($cart_products as $key => $value) {
			$result	=	$this->db->select('*')->from('posted_product')
												->where('post_id',$key)
						->get();
			$cart_result_arr[] = $result->result_array();
		}

		return $cart_result_arr;
	}

	// DONT NEED
	public function delete_cart_product($id)
	{
		$product_info =	$this->db->select('*')->from('posted_product')
								->where('post_id',$id)
						->get();
		return $product_info->result_array();
	}

	public function collect_order_info()
	{
		$payment_info_arr = $this->session->pay_info;
		$user_info_arr = $this->session->user_info;
		$cart_details = $this->session->cart_no;
		$price_details = $this->session->sub_total_price;

		foreach ($user_info_arr as $key => $value) {
			if ($key == 'normal_user_name') {
				$data['name'] = $value;
			}
			if ($key == 'user_mail') {
				$data['email'] = $value;
			}
			if ($key == 'user_mobile') {
				$data['phoneNumber'] = $value;
			}
			if ($key == 'user_country') {
				$data['country'] = $value;
			}
			if ($key == 'user_district') {
				$data['district'] = $value;
			}
			if ($key == 'user_city') {
				$data['city'] = $value;
			}
			if ($key == 'user_postal_code') {
				$data['postalCode'] = $value;
			}
			if ($key == 'user_address') {
				$data['address'] = $value;
			}
			if ($key == 'payment_method') {
				$data['paymentMethod'] = $value;
			}
		}

		foreach ($payment_info_arr as $key => $value) {
			if ($key == 'payment_amount') {
				$data['payment_amount'] = $value;
			}
			if ($key == 'bkashMobileNo') {
				$data['bkashMobileNo'] = $value;
			}
			if ($key == 'bkashTransactionID') {
				$data['bkashTransactionID'] = $value;
			}
			if ($key == 'rocketAccountNo') {
				$data['rocketAccountNo'] = $value;
			}
		}

		$data['numberOfProduct'] = count($cart_details);

		$counting_arr_element = 1;
		$total_arr_elements = count($cart_details);
		$productIdAndQantity_str = '';
		foreach ($cart_details as $key => $value) {

			if ($counting_arr_element == $total_arr_elements) {
				$productIdAndQantity_str .= $key.'.'.$value;
			}
			else {
				$productIdAndQantity_str .= $key.'.'.$value.',';
			}
			$counting_arr_element++;
			

		}

		$this->db->insert('order_data', $data);
		$id_no = $this->db->insert_id();

		$data = array(
	        'userName' => 'NU',
	        'productIdAndQantity' => $productIdAndQantity_str
		);

		$this->db->where('id', $id_no);
		$this->db->update('order_data', $data);

		return $id_no;
	}

}

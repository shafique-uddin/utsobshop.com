<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ownersystem extends CI_Model {

	// ADMIN CHECKING
	public function owner_system($admin_id,$admin_mail,$admin_password) {

		$result = 	$this->db->select('*')->from('admin_info')
		                ->where('adminID', $admin_id)
		                ->where('adminEmail', $admin_mail)
		                ->where('adminPassword', $admin_password)
					->get();
		 
		return $result->result_array();
	}

	// INSERT CATEGORY ITEMS
	public function add_cat($data) {

		// CHECKING HAVE ANY DUPLICATE DATA
		foreach ($data as $key => $value) {
			$custom_query = $this->db->query('SELECT * FROM category WHERE cat_name="'.$value.'"');
		}

		$custom_result = $custom_query->result_array();

		if (count($custom_result)>0) {
			return 'category already exist.';
		}
		else {
			$this->db->insert('category', $data);
			$query = $this->db->get('category');
			return 'a category has been added.';
		}
	}

	public function cat_list() {
		// ALL INFO
		$all_cat_name = $this->db->get('category');

		return $all_cat_name->result_array();
	}

	public function del_cat_name($id) {
		$result = $this->db->delete('category',array('cat_id' => $id));
		return $result;
	}

	public function post_product_entry($data) {

		foreach ($data as $key => $value) {
			$title = $data['title'];
			$price = $data['price'];
			$point = $data['point'];
			$post_product_quantity = $data['post_product_quantity'];
			$cat_name = $data['cat_name'];
			$article = $data['article'];
		}

		foreach ($data['featured_img'] as $key => $value) {
				$featured_img = $value['file_name'];
		}
		$data = array(
			'product_title' => $title,
			'product_price' => $price,
			'product_point' => $point,
			'product_quantity' => $post_product_quantity,
			'product_cat' => $cat_name,
			'product_summary' => $article,
			'product_img' => $featured_img
		);
		$this->db->insert('posted_product', $data);
		$result = $this->db->affected_rows();
		return $result;
	}

	// PRODUCT LIST
	public function list_of_product() {
		$result = $this->db->get('posted_product');
		
		return $result->result_array();
	}

	// FIND OUT PRODUCT FOR PRODUCT DESCRIPTION
	public function search_product($id) {

		$result = $this->db->select('*')->from('posted_product')
										->where('post_id', $id)
										->get();
		return  $result->result_array();
	}

	// FIND OUT PRODUCT by CATEGORY
	public function search_product_by_cat($id) {

		$result = $this->db->select('*')->from('posted_product')
										->where('product_cat', $id)
										->get();
		return  $result->result_array();
	}

}

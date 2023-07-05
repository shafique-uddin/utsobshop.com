<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductCategoryTag extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('product_category_name', 'Product Category Name', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			redirect('ProductCategory');
		} else {

			$data['cat_name'] = $this->input->post('product_category_name');
			$this->load->model('Ownersystem');
			$result = $this->Ownersystem->add_cat($data);

			if ($result) {
				$data['site_title'] = 'Product Category';
				$data['alert'] = $result;

				$cat_list_result = $this->Ownersystem->cat_list();

				if ($cat_list_result) {
					$data['cat_list'] = $cat_list_result;
					$this->load->view('admin/header',$data);
					$this->load->view('admin/category',$data);
					$this->load->view('admin/footer');
				}
				
			}
			else {
				echo "Shafique: Internal Problem Founded! ";
			}
		}
	}

}
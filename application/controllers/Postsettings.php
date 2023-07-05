<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postsettings extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('post_product_title', 'Product Title', 'trim|required');
		$this->form_validation->set_rules('post_product_price', 'Product Price', 'trim|required');
		$this->form_validation->set_rules('post_product_quantity','Product Quantity', 'trim|required');
		$this->form_validation->set_rules('post_product_cat', 'Product Category', 'trim|required');
		$this->form_validation->set_rules('post_product_article', 'Product Details', 'trim|required');


		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		$this->load->model('Ownersystem');
		$cat_list = $this->Ownersystem->cat_list();
		$data['cat_list_name'] = $cat_list;


		if ($this->form_validation->run() == FALSE ||  !$this->upload->do_upload('post_product_featured_image'))
		{
			$data['site_title'] = 'Product Post Page';
			$data['error'] = array('error' => $this->upload->display_errors());
			
			$this->load->view('admin/header',$data);
			$this->load->view('admin/product',$data);
			$this->load->view('admin/footer');
		} 
		else {

			$data['title'] = $this->input->post('post_product_title');
			$data['price'] = $this->input->post('post_product_price');
			$data['point'] = $this->input->post('post_product_point');
			$data['post_product_quantity'] = $this->input->post('post_product_quantity');
			$data['cat_name'] = $this->input->post('post_product_cat');
			$data['article'] = $this->input->post('post_product_article');

			$data['featured_img'] = array('upload_data' => $this->upload->data());

			$this->load->model('Ownersystem');
			$result = $this->Ownersystem->post_product_entry($data);
			if ($result === 1) {
				redirect('post','refresh');
			}
		}
		
	}

}
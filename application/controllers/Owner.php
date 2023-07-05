<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	// ADMIN DASHBOARD CONTROLLER FOR LOGIN
	public function index()
	{
		$data['site_title'] = 'Login';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
	}

	// ADMIN DASHBOARD CONTROLLER
	public function error()
	{
		

		$this->load->library('form_validation');
		$this->form_validation->set_rules('admin_User_ID','User ID','trim|required');
		$this->form_validation->set_rules('admin_User_email','User Email','trim|valid_email|required');
		$this->form_validation->set_rules('admin_User_password','User Password','trim|required|min_length[8]');

        if ($this->form_validation->run() == FALSE)
        {
			$data['site_title'] = 'Login';
			$this->load->view('admin/header',$data);
			$this->load->view('admin/login');
			$this->load->view('admin/footer');
        }
        else
        {
        	$admin_id = $this->input->post('admin_User_ID');
        	$admin_mail = $this->input->post('admin_User_email');
        	$admin_password = $this->input->post('admin_User_password');

        	$this->load->model('Ownersystem');
        	$result = $this->Ownersystem->owner_system($admin_id,$admin_mail,$admin_password);

        	if (count($result)>0) {
        		redirect('admin','refresh');
        	}
        	else {
        		$data['site_title'] = 'Login';
        		$data['login_error_info'] = 'userID/Email/Password is wrong.';
				$this->load->view('admin/header',$data);
				$this->load->view('admin/login',$data);
				$this->load->view('admin/footer');
        	}
        }
	}



}

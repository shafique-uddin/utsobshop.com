<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procat extends CI_Controller {

	// USED TO DELETE CATEGORY
	public function pno($id)
	{
		$this->load->model('Ownersystem');
		$delete_cat = $this->Ownersystem->del_cat_name($id);

		if ($delete_cat) {
			redirect('ProductCategory','refresh');
		}
	}

}
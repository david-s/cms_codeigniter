<?php
class Gallery extends CI_Controller {
	
	function index() {
		
		$this->load->model('Gallery_model');
		
		if ($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
		}
		
		$data['images'] = $this->Gallery_model->get_images();
		
		$this->load->view('gallery', $data);
		
	}
	
}


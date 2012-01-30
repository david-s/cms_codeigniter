<?php

class Ckeditor extends CI_Controller {
	

	
	public function index() {
		
		$this->load->model('fresh_model'); 	
		
		if($query = $this->fresh_model->get_records())
		{
			$data['records'] = $query;
		}
		$this->load->view('ckeditor',$data);
		
	}
}
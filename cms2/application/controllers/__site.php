<?php

class Site extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	function members_area()
	
	{
		// $this->load->library('ckeditor');
         // $this->load->library('ckFinder');
          //configure base path of ckeditor folder 
         // $this->ckeditor->basePath = base_url().'asset/ckeditor/';
         // $this->ckeditor-> config['toolbar'] = 'Full';
         // $this->ckeditor->config['language'] = 'en';
          //configure ckfinder with ckeditor config 
         // $this->ckfinder->SetupCKEditor($this->ckeditor,'asset/ckfinder');
        
		
		$data = array();
		
		if($query = $this->fresh_model->get_records())
		{
			$data['records'] = $query;
		}
		$this->load->view('logged_in_area',$data);
	}
	
	function another_page() // just for sample
	{
		echo 'good. you\'re logged in.';
	}
	
	function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			echo 'You don\'t have permission to access this page. <a href="../login">Login</a>';	
			die();		
			//$this->load->view('login_form');
		}		
	}

	function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'page' => $this->input->post('page'),
			'content' => $this->input->post('content')
		);
		
		$this->fresh_model->add_record($data);
		$this->members_area();
	}
	
	function update()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')	
		);
		
		$this->fresh_model->update_record($data);
	}
	
	
	function delete()
	{
		$this->fresh_model->delete_row();
		$this->index();
	}	

}

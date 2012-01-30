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
		
		//if($query = $this->fresh_model->get_records())
		if($query = $this->fresh_model->get_allrecords())
		{
			$data['records'] = $query;
		}
		//$data['main_content'] = 'logged_in_area';
		 $data['main_content'] = 'logged_in_area2';
		$this->load->view('includes/template2', $data);
	
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

function editPage()
	{
		
		
			
			if($query = $this->fresh_model->get_records2())
		{
			$data['records'] = $query;
		}
		
		
		$data['main_content'] = 'fresh_edit';
		$this->load->view('includes/template2', $data);
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
	
		
		
	
		
		
	
		
	}
	
	function createView()
	{
		
		
			
		$data['main_content'] = 'fresh_create';
		$this->load->view('includes/template2', $data);
	
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
	
		
		
	
		
		
	
		
	}
	
	function createPage()
	{
		
		
			
			$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		
		$this->fresh_model->add_record($data);
		$this->members_area();
		
	
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
	
		
		
	
		
		
	
		
	}
	
	

	function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'page' => $this->input->post('page'),
			'content' => $this->input->post('content')
		);
		
		$this->fresh_model->add_record($data);
		//$this->members_area();
	
			redirect('site/members_area');
	}
	
	function update()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'id' => $this->input->post('id')
		);
		
		$this->fresh_model->update_record($data);
		
			redirect('site/members_area');
		//$this->members_area();
	}
	
	function homesettings()
	{
		if($query = $this->fresh_model->get_records3())
		{
			$data['records'] = $query;
		}
		
		
		$data['main_content'] = 'fresh_settings';
		$this->load->view('includes/template2', $data);
	
		//$this->members_area();
	}
		function homesettings2()
	{
		
	$data = array(
			'gallery' => $this->input->post('gallery'),
			'twitter' => $this->input->post('twiton'),
			'twitfon' => $this->input->post('twitfon'),
				'twitname' => $this->input->post('twitname')
		
		);
		
		$this->fresh_model->update_record2($data);
		
			redirect('site/members_area');
	
		//$this->members_area();
	}
	
	
	
	
		
	
	
	
	function delete()
	{
		
		$this->fresh_model->delete_row();
		//$this->members_area();
		
			redirect('site/members_area');
		
	}	
		function delete_gall()
	{
		
		$this->fresh_model->delete_row_gall();
		//$this->members_area();
		
			redirect('site/members_area');
		
	}	
	
		function gall_up() {
		
			$this->load->model('Gallery_model');
		
		if ($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
			redirect('site/members_area');
		}
		
		
		$data['images'] = $this->Gallery_model->get_images();
		
		$this->load->view('gallup', $data);
		
		
	}

}

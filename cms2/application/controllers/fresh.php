<?php

class Fresh extends CI_Controller 
{
	function index()
	{
			
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
	
		
		
		if($query = $this->fresh_model->get_records())
		{
			$data['records'] = $query;
		}
		
		if($query = $this->fresh_model->get_nav())
		{
			$data['menu'] = $query;
		}
		if($query = $this->fresh_model->get_gall())
		{
			$data['slider'] = $query;
		}
		
			if($query = $this->fresh_model->get_settings())
		{
			$data['settings'] = $query;
		}
		
		
		
		$data['main_content'] = 'fresh_view';
		$this->load->view('includes/template2', $data);
		
	}
	function page()
	{
		
		
		if($query = $this->fresh_model->get_nav())
		{
			$data['menu'] = $query;
		}
		
			
			if($query = $this->fresh_model->get_records2())
		{
			$data['records'] = $query;
		}
		
		
		$data['main_content'] = 'fresh_view2';
		$this->load->view('includes/template2', $data);
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
	
		
		
	
		
		
	
		
	}
	

	function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		
		$this->fresh_model->add_record($data);
		$this->index();
	}
	
		function update()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')	
		);
		
		$this->frsh_model->update_record($data);
	}
	
	
	function delete()
	{
		$this->fresh_model->delete_row();
		$this->index();
	}
	
	
	
}

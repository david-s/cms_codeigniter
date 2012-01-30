<?php

class Home extends CI_Controller 
{
	function index()
	{
			$this->load->library('pagination');
		$this->load->library('table');
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		$data = array();
		$data['alert'] = "sign up for our news letter";
		$data['name'] = "";
		$config['base_url'] = 'http://127.0.0.1/cms2/index.php/home/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
		
		$data['main_content'] = 'home_view';
		$this->load->view('includes/template', $data);
	
		
		
		//if($query = $this->site_model->get_records())
		//{
		//	$data['records'] = $query;
		//}
		
		//$this->load->view('home_view', $data);
	}
	

	function create()
	{
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content')
		);
		
		$this->site_model->add_record($data);
		$this->index();
	}
	
	function update()
	{
		$data = array(
			'title' => 'My Freshly UPDATED Title',
			'content' => 'Content should go here; it is updated.'	
		);
		
		$this->site_model->update_record($data);
	}
	
	
	function delete()
	{
		$this->site_model->delete_row();
		$this->index();
	}
	
	function send() 
	{	
		$this->load->library('form_validation');
		
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('newsletter');
		}
		else
		{
			// validation has passed. Now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from('test@gmail.com', 'David Stewart');
			$this->email->to($email);		
			$this->email->subject('Test Newsletter Signup Confirmation');		
			$this->email->message('You\'ve now signed up, fool!');

			$path = $this->config->item('server_root');
			$file = $path . '/cms2/attachments/newsletter1.txt';

			$this->email->attach($file);

			if($this->email->send())
		{
				
				
				$data = array(
               'alert' => 'Thanks for signing up for our letter',
               'name' => $name
              
          );
		  		$this->load->library('pagination');
		$this->load->library('table');
		
		//$this->table->set_heading('Id', 'The Title', 'The Content');
		
		$config['base_url'] = 'http://127.0.0.1/cms2/index.php/home/index';
		$config['total_rows'] = $this->db->get('data')->num_rows();
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		$this->pagination->initialize($config);
		
		$data['records'] = $this->db->get('data', $config['per_page'], $this->uri->segment(3));
		
		$data['main_content'] = 'home_view';
		$this->load->view('includes/template', $data);
	
				
				//echo 'Your email was sent, fool.';
				//$this->load->view('home_view',$data);
				//$this->index();
			}

			else
			{
				show_error($this->email->print_debugger());
			}			
		}
	}
}

<?php

/**
* SENDS EMAIL WITH GMAIL
*/
class Email extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index() 
	{
		$data['alert'] = "sign up for our news letter";
		$data['name'] = "";
		$this->load->view('newsletter',$data);
		
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
				
				//echo 'Your email was sent, fool.';
				$this->load->view('newsletter',$data);
			}

			else
			{
				show_error($this->email->print_debugger());
			}			
		}
	}
}

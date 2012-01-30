<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

        function Welcome()
	{
		
		parent::__construct();
		 //$this->load->library('session');
	}

	function index()
	{
          $this->load->library('ckeditor');
          $this->load->library('ckFinder');
          //configure base path of ckeditor folder 
          $this->ckeditor->basePath = base_url().'asset/ckeditor/';
          $this->ckeditor-> config['toolbar'] = 'Full';
          $this->ckeditor->config['language'] = 'en';
          //configure ckfinder with ckeditor config 
          $this->ckfinder->SetupCKEditor($this->ckeditor,'asset/ckfinder');
          $this->load->view('ckeditor');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */



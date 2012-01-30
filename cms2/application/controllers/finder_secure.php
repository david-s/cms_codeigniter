<?php
class Finder_secure extends CI_Controller {

	function Finder_secure()
	{
	 parent::__construct();
      $this->load->library('session');
	}

	function index()
	{
      $this->load->library('ckeditor');
      $this->load->library('ckFinder');
      $this->session->set_userdata(array('user_id' => '1'
,'username' => 'ubielabs','logged_in'=>'true'));
      echo "Session Created";
      $this->ckeditor->basePath = base_url().'asset/ckeditor/';
      $this->ckeditor->config['toolbar'] = 'Full';
      $this->ckeditor->config['language'] = 'en';
      $this->ckeditor->config['height'] = '300';
      $this->ckeditor->config['width'] = '670';
      $this->ckfinder->SetupCKEditor($this->ckeditor,'asset/ckfinder');
      $this->load->view('ckeditor');
	}

}

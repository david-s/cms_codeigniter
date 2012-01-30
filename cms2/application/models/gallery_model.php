<?php
class Gallery_model extends CI_Model {
	
	var $gallery_path;
	var $gallery_path_url;
	
	function Gallery_model() {
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../images');
		$this->gallery_path_url = base_url().'images/';
	  
	}
	
	function do_upload() {
		
		$config = array(
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' => $this->gallery_path,
			'max_size' => 2000
		);
		
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$image_data = $this->upload->data();
		
		$config = array(
			'source_image' => $image_data['full_path'],
			'new_image' => $this->gallery_path . '/thumbs',
			'maintain_ration' => true,
			'width' => 150,
			'height' => 100
		);
		
		//$this->db->where('id', $data['id']);
		//$this->db->update('fresh', $data);
		
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
		$img=array(
		'img'=>$image_data['file_name']);
		$this->db->insert('gallery', $img);
		return;
		
	}
	
	function get_images() {
		  $this->db->select('*');
        $this->db->from('gallery');
      //  $this->db->from('pages');
  
		// $this->db->join('pages', 'pages.id = fresh.id ');
	 $query = $this->db->get();
		return $query->result();
		
		$files = scandir($this->gallery_path);
		$files = array_diff($files, array('.', '..', 'thumbs'));
		
		$images = array();
		
		foreach ($files as $file) {
			$images []= array (
				'url' => $this->gallery_path_url . $file,
				'thumb_url' => $this->gallery_path_url . 'thumbs/' . $file
			);
		}
		
		return $images;
	}
	
}




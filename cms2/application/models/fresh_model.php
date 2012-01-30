<?php

class Fresh_model extends CI_Model {
	
	function get_records()
	{
		 $this->db->select('*');
        $this->db->from('fresh');
      //  $this->db->from('pages');
      	$this->db->where('id', 1);
		// $this->db->join('pages', 'pages.id = fresh.id ');
		 $query = $this->db->get();
		return $query->result();
		
		}
	function get_allrecords()
	{
		 $this->db->select('*');
        $this->db->from('fresh');
      //  $this->db->from('pages');
      	
		// $this->db->join('pages', 'pages.id = fresh.id ');
		 $query = $this->db->get();
		return $query->result();
		
		}
		//return $query2->result();
		function get_nav()
	{
		 $this->db->select('*');
        $this->db->from('fresh');
      //  $this->db->from('pages');
      	$this->db->where('id >', 1);
		// $this->db->join('pages', 'pages.id = fresh.id ');
		 $query = $this->db->get();
		return $query->result();
		
		
		//return $query2->result();
		
	
	}
	
	function get_settings()
	{
		 $this->db->select('*');
        $this->db->from('settings');
      //  $this->db->from('pages');
     
		// $this->db->join('pages', 'pages.id = fresh.id ');
		 $query = $this->db->get();
		return $query->result();
		
		
		//return $query2->result();
		
	
	}
	
	function get_gall()
	{
		 $this->db->select('*');
        $this->db->from('gallery');
      //  $this->db->from('pages');
      
		// $this->db->join('pages', 'pages.id = fresh.id ');
		 $query = $this->db->get();
		return $query->result();
		
		
		//return $query2->result();
		
	
	}
	function get_records2()
	{
		// $this->uri->uri_to_assoc(3);
		//$title=$array['title'];
		$title=$this->uri->segment(3);
		$title2=str_replace('-',' ',$title); 
		

	     $this->db->select('*');
        $this->db->from('fresh');
		$this->db->where('title',$title2);
	    $query = $this->db->get();
		return $query->result();
	}
	function get_records3()
	{
		// $this->uri->uri_to_assoc(3);
		//$title=$array['title'];
		//$title=$this->uri->segment(3);
		//$title2=str_replace('-',' ',$title); 
		

	     $this->db->select('*');
        $this->db->from('settings');
		
	    $query = $this->db->get();
		return $query->result();
	}
	
	function add_record($data) 
	{
		$this->db->insert('fresh', $data);
		return;
	}
	
	function update_record($data) 
	{
		
		
		$this->db->where('id', $data['id']);
		$this->db->update('fresh', $data);
		
	}
	
	function update_record2($data) 
	{
		
		
		
		$this->db->update('settings', $data);
		
	}
	
	
	
	function delete_row()
	{
	
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('fresh');
	
			
		
		
	}
	function delete_row_gall()
	{
	
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('gallery');
	
			
		
		
	}
	
	
}
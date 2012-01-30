<?php

class Site_model extends CI_Model {
	
	function get_records()
	{
		$query = $this->db->get('fresh');
		return $query->result();
	}
	
	function add_record($data) 
	{
		$this->db->insert('fresh', $data);
		return;
	}
	
	function update_record($data) 
	{
		$this->db->where('id',6);
		$this->db->update('fresh', $data);
	}
	
	function delete_row()
	{
		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('fresh');
	}
	
}
<?php

class Home2_model extends CI_Model {
	
	function get_records()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	
	
}
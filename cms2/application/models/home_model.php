<?php

class Home_model extends CI_Model {
	
	function get_records()
	{
		$query = $this->db->get('data');
		return $query->result();
	}
	
	
	
}
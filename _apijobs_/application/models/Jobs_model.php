<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs_model extends CI_Model {

	public function get_jobs()
	{
		$q = $this->db->get('jobs');
		if ($q->num_rows() > 0) {
			return $q->result();
		}else{
			return false;
		}
	}

	public function insert_job($data){

		$this->db->insert('jobs',$data);
		
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {
	public function getData($table){
		$val = $this->db->get($table);
		return $val->result_array();
	}
	public function getWhere($table,$where)
	{
		$data = $this->db->get_where($table,$where);
		return $data->result_array();
	}

	public function Insert($table,$data){
		$val = $this->db->insert($table,$data);
		return $val;
	}

	public function deleteData($table,$where){
		$val = $this->db->delete($table,$where);
		return $val;
	}

	public function editData($table,$where){
		$val = $this->db->get_where($table,$where);
		return $val;
	}

	public function updateData($table,$data,$where){
		$val = $this->db->update($table,$data,$where);
		return $val;
	}

	public function loginCheck($table,$where){
		return $this->db->get_where($table,$where);
	}

}

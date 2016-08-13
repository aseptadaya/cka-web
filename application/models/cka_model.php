<?php

class cka_model extends CI_Model {
	public function getData($tableName) {
		//$this->load->database();
		
		// SELECT * FROM $tableName
		$result = $this->db->get($tableName);
		
		return $result->result_array();
	}
	public function getDataObj($tableName) {
		$result = $this->db->get($tableName);
		
		return $result->result();
	}
	public function findData($tableName,$lookingFor,$key,$basedOnValue) {
		//$this->load->database();
		
		// SELECT * FROM $tableName
		$this->db->select($lookingFor); 
    	$this->db->from($tableName);   
    	$this->db->where($key, $basedOnValue);
		$result = $this->db->get();
		
		return $result->result_array();
	}
	// public function get_where()
	public function insertData($tableName,$data) {
		//$this->load->database();
		
		$result = $this->db->insert($tableName,$data);
		
		return $result;
	}
	public function updateData($tableName,$data,$where) {
		//$this->load->database();
		
		
		$result = $this->db->update($tableName,$data,$where);
		
		return $result;
	}
	public function deleteData($tableName,$where) {
		//$this->load->database();
		
		$result = $this->db->delete($tableName,$where);
		return $result;
	}
	
}
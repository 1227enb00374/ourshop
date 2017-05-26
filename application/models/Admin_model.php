<?php

class Admin_model extends CI_Model{
	public function insert_category($data){
		if($this->db->insert('category',$data)===true){
			return true;
		}else{
			return false;
		}
	}
}
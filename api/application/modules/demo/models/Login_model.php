<?php

class Login_model extends CI_Model {

	public function check_login($data) {
		try{
		$this->db->select('u.user_id,u.user_name,u.user_email,u.user_password,u.user_age,c.user_mobile');
		$this->db->from('user u');
		$this->db->where('u.user_email',trim($data['EmailAddress']));
		$this->db->where('u.user_password',md5(trim($data['Password'])));
		$this->db->limit(1);
		$query = $this->db->get();
		$db_error = $this->db->error();
				if (!empty($db_error) && !empty($db_error['code'])) { 
					throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);
					return false; // unreachable return statement !!!
				}
		$res=$query->result();
		if ($query->num_rows() == 1) {
				return $query->result();
			
		} else {
			return false;
		}	
	}
	catch(Exception $e){
		trigger_error($e->getMessage(), E_USER_ERROR);
		return false;
	}	
	}	
	
}

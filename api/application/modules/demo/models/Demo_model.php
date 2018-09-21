<?php
class Demo_model extends CI_model
{

    public function user_list()
	{

		$this->db->select('user_id,user_name,user_email,user_age,user_mobile');
		$result=$this->db->get('user');
		
			if($result->result())
		{
			$res=$result->result();
		}
		return $res;
	}


}


?>

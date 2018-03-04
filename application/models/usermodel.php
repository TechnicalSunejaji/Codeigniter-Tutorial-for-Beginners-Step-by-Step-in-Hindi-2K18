<?php
class Usermodel extends UserInterface
{
	public function getUserdata()
	{
		$this->test();
    //  $this->load->labrary('database');
        $q=$this->db->where("id",2)
                      ->get("users");
        //select * from users where id=1;
         return $q->result_array();

	}


}



?>
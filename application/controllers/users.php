<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller
{
	public function User()
	{
	   $this->load->library("email");
	   $this->email->show();
		$this->test();
   //     $this->test->dbdetails();
		 // $this->load->model('usermodel');
	  //  $this->load->helper('array');
	  //  $arr=['ABC'=>'abc','XYZ'=>'xyz'];
	  //  echo element('ABC',$arr,'Not found');
	  //  show();

       $data['users']=$this->Usermodel->getUserdata();
       $this->load->view('Users/userlist',$data);
	}
  

}

?>
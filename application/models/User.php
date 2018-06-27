<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	

	public function login($username,$password)
	{
		$this->db->select('id,username,password');
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', ($password));
		$query = $this->db->get();
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return false;
		}
	}

	 public function insertUser()
 	{
 	$object = array(
 		'username' =>$this->input->post('username'),
 		'password' =>$this->input->post('password'),
	 );
 	$this->db->insert('login', $object);
 	}
}

/* End of file User.php */
/* Location: ./application/models/User.php */
?>
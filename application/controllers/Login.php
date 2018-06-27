<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function cekLogin()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('home','refresh');
		}
	}

	public function cekDb($password)
	{
		$this->load->model('user');
		$username = $this->input->post('username');
		$result = $this->user->login($username,$password);
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = array(
					'id' =>$row->id,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('cekDb', "login Gagal");
			return false;
		}
	}

	public function logout()
	{
		 $this->load->library('session');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	public function createUser()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('user');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('level', 'Level', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('registrasi');
		} 	
			else{
			$this->user->insertUser();
			$this->load->view('login');
			}
		}
	
        
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
		}else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('musik_model');
		$data['musik_list'] = $this->musik_model->getDatamusik();
		$this->load->view('home',$data);	
	} 
	public function playlist()
	{
		$this->load->view('playlist');	
	}

	public function download()
	{
		echo "ini fungsi download";	
	}	
	public function upload()
	{
		echo "ini fungsi upload";	
	}
	
	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('musik_model');
		$this->form_validation->set_rules('artist', 'Artist', 'trim|required');
		$this->form_validation->set_rules('lagu', 'Lagu', 'trim|required');
		$this->form_validation->set_rules('genre', 'Genre', 'trim|required');
		if ($this->form_validation->run()==FALSE) {
			$this->load->view('tambah_lagu_view');
		} else {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '10000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_lagu_view', $error);
			}
			else{
			$this->musik_model->insertMusik();
			$this->load->view('tambah_lagu_sukses');
			}
		}
		
	}

	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("musik_model");
		$this->musik_model->delete($id);
		redirect('home');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

?>
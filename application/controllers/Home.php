<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('musik_model');
		$data['musik_list'] = $this->musik_model->getDatamusik();
		$this->load->view('home',$data);	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

?>
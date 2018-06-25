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
	public function index()
	{
		echo "ini kontroller musik";	
	}
	public function playlist()
	{
		echo "ini fungsi playlist";	
	}

	public function download()
	{
		echo "ini fungsi download";	
	}	
	public function upload()
	{
		echo "ini fungsi upload";	
	}
	


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

?>
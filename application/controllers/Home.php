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
		$this->load->view('home');	
	} 

	public function datatable()
	{
		$this->load->model('musik_model');
		$data["musik_list"] = $this->musik_model->getDataPegawai();
		$this->load->view('daftar_musik',$data);
	}

	public function daftarMusik()
	{
		$this->load->helper('url','form');
		$this->load->model('musik_model');
		$data['musik_list'] = $this->musik_model->getDatamusik();
		$this->load->view('daftar_musik',$data);	
	}

	public function playlist()
	{
		$this->load->view('playlist');	
	}

	public function download()
	{
		$this->load->helper('url','form');
		$this->load->model('musik_model');
		$data['musik_list'] = $this->musik_model->getDatamusik();
		$this->load->view('download',$data);	
	}

	public function do_download($file)
	{
		$this->load->helper('download');
		$data = file_get_contents("./assets/img/".$file);
		$name = $file;

		force_download($name, $data);
	}

	public function contact()
	{
		$this->load->view('contact');	
	}
	
	public function create()
	{
		$this->load->view('tambah_lagu_view');

		if ($this->input->post('go_upload')) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'gif|jpg|png|mp3';
			$config['overwrite'] = 'TRUE';

			$this->load->library('upload', $config);

			if (!empty($_FILES['mp3file']['name'])) {
				if ( ! $this->upload->do_upload('mp3file'))
					$sub_data['error'] = $this->upload->display_errors();
				else
					$file_data = $this->upload->data();
					$data['lagu'] = $file_data['file_name'];
			}

			if (!empty($_FILES['imgfile']['name'])) {
				if ( ! $this->upload->do_upload('imgfile'))
					$sub_data['error'] = $this->upload->display_errors();
				else
					$file_data = $this->upload->data();
					$data['album'] = $file_data['file_name'];
			}

			$lagu = $_POST['lagu'];
			$artist = $_POST['artist'];
			$genre = $_POST['genre'];
			$album = $data['album'];
			$file_lagu = $data['lagu'];

			$insert_musik = array(
				'lagu' => $lagu,
				'artist' => $artist,
				'genre' => $genre,
				'album' => $album,
				'file_lagu' => $file_lagu
			);

			$this->Musik_model->insertMusik('lagu', $insert_musik);
		}
	}

		public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('musik_model');
		$this->form_validation->set_rules('artist', 'Artist', 'trim|required');
		$this->form_validation->set_rules('lagu', 'Lagu', 'trim|required');
		$this->form_validation->set_rules('genre', 'Genre', 'trim|required');
		$this->load->model('musik_model');
		$data['musik'] = $this->musik_model->getMusik($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_lagu_view',$data);
		}
		else
		{
			$this->musik_model->updateById($id);
			$this->load->view('edit_lagu_sukses');
		}
	}


	public function delete($id)
	{
		$this->load->helper("url");
		$this->load->model("musik_model");
		$this->musik_model->delete($id);
		redirect('home/daftarmusik');
	}
}



/* End of file Home.php */
/* Location: ./application/controllers/Home.php */

?>


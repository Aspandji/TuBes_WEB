<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Musik_model extends CI_Model {

	public function getDataMusik()
	{
		$query = $this->db->get("lagu");
		return $query->result_array();
	}

	public function insertMusik()
 	{
 	$object = array(
 		'lagu' =>$this->input->post('lagu'),
 		'artist' =>$this->input->post('artist'),
 		'genre' =>$this->input->post('genre'),
 		'album' => $this->upload->data('file_name')
 	);
 	$this->db->insert('lagu', $object);
	}

	public function delete($id) { 
         $query = $this->db->query("Delete from lagu where id=$id");
         } 

}

/* End of file Musik_model.php */
/* Location: ./application/models/Musik_model.php */
?>
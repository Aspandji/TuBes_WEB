<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Musik_model extends CI_Model {

	public function getDataMusik()
	{
		$query = $this->db->get("musik");
		return $query->result_array();
	}

}

/* End of file Musik_model.php */
/* Location: ./application/models/Musik_model.php */
?>
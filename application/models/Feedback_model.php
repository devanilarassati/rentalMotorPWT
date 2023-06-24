<?php

class Feedback_model extends CI_Model
{
	private $_table = "tbl_contact";

	public function rules()
	{
		return [
			[
				'field' => 'nama', 
				'label' => 'Nama', 
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'email', 
				'label' => 'Email', 
				'rules' => 'required|valid_email|max_length[32]'
			],
			[
				'field' => 'pesan', 
				'label' => 'Pesan', 
				'rules' => 'required'],
		];
	}

	// ... ada kode lain di sini ...
}
?>
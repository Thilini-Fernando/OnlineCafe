<?php

class CustModel extends CI_Model{
	public function logCust(){
		$email = $this->input->post('eml');
		$password = sha1($this->input->post('pwd'));

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$respnd = $this->db->get('customer');

		if ($respnd->num_rows()==1) {
			return $respnd->row(0);
			
		}else{
			return FALSE;
		}
	}
}
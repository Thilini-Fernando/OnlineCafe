<?php

class AdminModel extends CI_Model{
	public function logAdmn1(){
		$email = $this->input->post('eml');
		$password = sha1($this->input->post('pwd'));

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$respnd = $this->db->get('system_admin');

		if ($respnd->num_rows()==1) {
			return $respnd->row(0);
			
		}else{
			return FALSE;
		}
	}
	public function logAdmn2(){
		$mstrkey = sha1($this->input->post('mstrk'));

		if ($mstrkey==sha1('19941114')) {
			return true;
			
		}else{
			return FALSE;
		}
	}
}
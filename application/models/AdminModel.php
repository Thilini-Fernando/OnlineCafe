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

	public function regAdmin1(){
		

		$data1 = array(
			

			'emp_fname' => $this->input->post('fnm',TRUE),
			'emp_lname' => $this->input->post('lnm', TRUE),
			'address' => $this->input->post('addr', TRUE),
			'dob' => nice_date($this->input->post('dob', TRUE), 'Y-m-d'),
			'position'=> 'System Admin',
			'email' => $this->input->post('eml', TRUE),
			'contact_no' => $this->input->post('cntct', TRUE)
			
			//'password' => $this->input->post('pwd', TRUE)
		);

		return $this->db->insert('employee',$data1);
	}


	public function regAdmin2(){

		$email = $this->input->post('eml', TRUE);
		$fname = $this->input->post('fnm', TRUE);
		$lname = $this->input->post('lnm', TRUE);

		$this->db->where('email', $email);
		$this->db->where('emp_fname', $fname);
		$this->db->where('emp_lname', $lname);

		$respnd = $this->db->get('employee');

		if ($respnd->num_rows()==1) {
			$emp_det = $respnd->row(0);
			
		}		

		$data2 = array(

			'emp_id' => $emp_det->emp_id,
			'admin_fname' => $fname,
			'admin_lname' => $lname,
			'email' => $this->input->post('eml', TRUE),		
			'password' => sha1($this->input->post('pwd', TRUE)),
			'masterkey' => sha1('19941114')
		);
		return $this->db->insert('system_admin',$data2);
	}

	public function getEmpTableData(){
		$myans = $this->db->get('employee');
		if ($myans->num_rows()>0) {
			# code...
			return $myans->result();
		}else{
			return false;
		}
	}
	public function getCustTableData(){
		$myans = $this->db->get('customer');
		if ($myans->num_rows()>0) {
			# code...
			return $myans->result();
		}else{
			return false;
		}
	}

	public function getFoodTableData(){
		$myans = $this->db->get('food_items');
		if ($myans->num_rows()>0) {
			# code...
			return $myans->result();
		}else{
			return false;
		}
	}

	Public function addFood(){
		$data1 = array(
			

			'food_name' => $this->input->post('fd_nm',TRUE),
			'remaining_qty' => $this->input->post('qty', TRUE),
			'unit_price' => $this->input->post('itm_price', TRUE),
			
		);

		return $this->db->insert('food_items',$data1);
	}
}
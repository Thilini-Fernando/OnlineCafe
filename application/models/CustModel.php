<?php

class CustModel extends CI_Model{

	public function regCustomer(){
		$data = array(

			'cust_fname' => $this->input->post('fnm',TRUE),
			'cust_lname' => $this->input->post('lnm', TRUE),
			'address' => $this->input->post('addr', TRUE),
			'contact_no' => $this->input->post('cntct', TRUE),
			'email' => $this->input->post('eml', TRUE),
			'password' => sha1($this->input->post('pwd', TRUE))
		);
		
		return $this->db->insert('customer',$data);
	}

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
    function EditCustomer(){


        $customer_id=$this->session->userdata('user_id');

//        $this->db->where('student_id', $customer_id);
//        $this->db->get('students');


        $data = array(

            'cust_fname' => $this->input->post('fname'),
            'cust_lname' => $this->input->post('lname'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact'),
            'email' => $this->input->post('email')
        );
        $this->db->where('cust_id', $customer_id);
        //$this->db->set($data);
        $result = $this->db->update('customer', $data);


        if ($result) {
            return true;
        }
        else {
            return false;
        }
    }

}
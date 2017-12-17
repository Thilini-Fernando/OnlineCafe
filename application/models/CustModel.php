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
//
//    function selectAll(){
//        $query=$this->db->get('customer');
//        $query_result=$query->result();
//        return $query_result;
//    }
//
//
//    function select($data){
//
//        $this->db->select('*');
//        $this->db->from('customer');
//        $this->db->where('cust_id', $data);
//        $query=$this->db->get();
//        $result=$query->result();
//        return $result;
//
//    }
//
//    function updateCustomer($customer_id,$data){
//
//        $this->db->where('cust_id', $customer_id);
//        $this->db->update('customer',$data);
//    }
//
}
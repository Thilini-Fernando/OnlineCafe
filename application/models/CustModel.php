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
	public function viewProf()
    {
       $id= $this->session->userdata('user_id');
        $this->db->where('cust_id',$id);
        $query = $this->db->get('customer');
        return $query->result()[0];

    }

    public function editCustomer(){
        $data = array(

            'cust_fname' => $this->input->post('fname',TRUE),
            'cust_lname' => $this->input->post('lname', TRUE),
            'address' => $this->input->post('address', TRUE),
            'contact_no' => $this->input->post('contact', TRUE),
            'email' => $this->input->post('email', TRUE)
        );
        $id1= $this->session->userdata('user_id');
        $this->db->where('cust_id',$id1);
        return $this->db->update('customer',$data);
    }

    public function viewFood()
    {
        $query2 = $this->db->get('food_items');
        if($query2->num_rows()>0){
            return $query2->result();
        }
        else{
            return false;
        }

    }

    public function viewOrder()
    {


        $this->db->select('orders.order_id,orders.taken_date,orders.due_date,order_details.status,order_details.price');
        $this->db->from('orders');
        $this->db->join('order_details','orders.order_id=order_details.order_id');
        $query3=$this->db->get();

        if($query3->num_rows()>0){
            return $query3->result();
        }
        else{
            return false;
        }

    }


}
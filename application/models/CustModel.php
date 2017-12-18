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
        $query3= $this->db->query("SELECT orders.order_id,orders.taken_date,orders.due_date,order_details.status,(selected_food.required_qty*selected_food.item_price) as price FROM orders JOIN order_details JOIN selected_food WHERE orders.order_id=order_details.order_id AND orders.order_id=selected_food.order_id");

        if($query3->num_rows()>0){
            return $query3->result();
        }
        else{
            return false;
        }

    }

    public function viewAvailableFoods()
    {
        $query2 = $this->db->get('food_items');
        if($query2->num_rows()>0){
            return $query2->result();
        }
        else{
            return false;
        }

    }



//
//    public function viewAvailableFood()
//    {
//        $query5 = $this->db->get('food_items');
//        if($query5->num_rows()>0){
//            return $query5->result();
//        }
//        else{
//            return false;
//        }
//
//    }

    public function addNewOrder($qty,$fid)
    {


        $takenDate = date('Y-m-d ');
        $dueDate=date('Y-m-d ');
        $custID= $this->session->userdata('user_id');

        $data2 = array(
            'taken_date' => $takenDate,
            'due_date' => $dueDate,
            'cust_id' => $custID,
        );
      $this->db->insert('orders',$data2);


        $myquery = "SELECT MAX(order_id) AS maxOrid FROM orders";
        $res=$this->db->query($myquery)->row()->maxOrid;
        $orderID = $res;
      // $data10= $this->db->query("SELECT selected_food.required_qty*food_items.unit_price AS Value FROM selected_food, food_items WHERE selected_food.food_id=food_items.food_id ");
        $data8=$this->db->query("SELECT required_qty FROM selected_food ");
        $data9=$this->db->query("SELECT unit_price FROM food_items ");
        $data10=$data8*$data9;


        $data1 = array(
            'required_qty' =>$qty,
            'order_id'  => $orderID,
            'food_id' => $fid,
            'item_price'=>doubleval($data10),

        );

        return $this->db->insert('selected_food',$data1);




    }


}
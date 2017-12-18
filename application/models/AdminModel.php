<?php

class AdminModel extends CI_Model{
	public function viewProf1()
    {
       	$id= $this->session->userdata('admin_id');
        $this->db->where('admin_id',$id);
        $query = $this->db->get('system_admin');
        return $query->result()[0];

    }
    public function viewProf2()
    {
        $id= $this->session->userdata('emp_id');
        $this->db->where('emp_id',$id);
        $query = $this->db->get('employee');
        return $query->result()[0];

    }
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

	public function addFood(){
		$data1 = array(
			

			'food_name' => $this->input->post('fd_nm',TRUE),
			'remaining_qty' => $this->input->post('qty', TRUE),
			'unit_price' => $this->input->post('itm_price', TRUE),
			
		);

		return $this->db->insert('food_items',$data1);
	}
	public function updateFood(){
		$food_nm =$_POST['fd_nm'];
		$data2 = array(
			

			'food_name' => $food_nm,
			'remaining_qty' => $this->input->post('qty', TRUE),
			'unit_price' => $this->input->post('itm_price', TRUE),
			
		);

		$this->db->where('food_name', $food_nm);

		
		return $this->db->update('food_items', $data2);

	}

	public function getAdminDetail($checkUser){
		$this->db->select('employee.address, employee.contact_no');
        $this->db->from('system_admin');
        $this->db->join('employee','employee.emp_id=system_admin.emp_id','system_admin.admin_id='.$checkUser.'');
        $query1=$this->db->get();

        if($query1->num_rows()>0){
            return $query1->result();
        }
        else{
            return false;
        }
	}

	public function editAdmin1(){
		$data = array(

            'admin_fname' => $this->input->post('fnm',TRUE),
            'admin_lname' => $this->input->post('lnm', TRUE),            
            'email' => $this->input->post('eml', TRUE)
        );
        $id1= $this->session->userdata('admin_id');
        $id2= $this->session->userdata('emp_id');
        
        $this->db->where('admin_id',$id1);
        $this->db->where('emp_id',$id2);
        return $this->db->update('system_admin',$data);
	}
	public function editAdmin2(){
		$data1 = array(

            'emp_fname' => $this->input->post('fnm',TRUE),
            'emp_lname' => $this->input->post('lnm', TRUE), 
            'address' => $this->input->post('addr', TRUE),    
            'contact_no' => $this->input->post('cntct', TRUE),             
            'email' => $this->input->post('eml', TRUE)
        );
        $id1= $this->session->userdata('emp_id');
        $this->db->where('emp_id',$id1);
        return $this->db->update('employee',$data1);
	}
}
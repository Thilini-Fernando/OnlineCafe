<?php 

class CustomerCont extends CI_Controller{
	public function viewProfile(){
		$this->load->view('CustProfile');
	}
	public function logoutUser(){

		unset(
			$_SESSION['user_id'],
			$_SESSION['fname'],
			$_SESSION['lname'],
			$_SESSION['address'],
			$_SESSION['contact'],
			$_SESSION['email'],
			$_SESSION['loggedIn']
		);
		redirect('HomeCont/viewLogin');
	}

	public function regCustomer(){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[customer.email]|is_unique[system_admin.email]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('pwd_a', 'Password again', 'required|matches[pwd]');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('msg','Validation failed.. <br> Try again..');
				redirect('HomeCont/regCust');

		}else{
			//echo 'validated succesfully';
			$this->load->model('CustModel');
			$isReg = $this->CustModel->regCustomer();

			if ($isReg) {
                $this->session->set_flashdata('msg','Registration was succesful');
				redirect('HomeCont/regCust');


            }else{
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('HomeCont/regCust');
			}
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeCont extends CI_Controller {

	
	public function index()
	{
		$this->load->view('Homepage_view');
	}

	public function viewLogin(){
		$this->load->view('Loginview');
	}

	public function regCust(){
		$this->load->view('RegCustView');
	}
	public function logUser(){
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'password', 'required');

		if ($this->form_validation->run()==FALSE){
			echo 'validation failed';
			$this->load->view('Loginview');

		}else{
			$this->load->model('CustModel');
			$checkCustLog = $this->CustModel->logCust();

			$this->load->model('AdminModel');
			$checkAdmnLog_1 = $this->AdminModel->logAdmn1();

			if ($checkCustLog) {
				# code...
				$cust_det = array(
					

					'user_id'=>$checkCustLog->cust_id,
					'fname'=>$checkCustLog->cust_fname,
					'lname'=>$checkCustLog->cust_lname,
					'address'=>$checkCustLog->address,
					'contact'=>$checkCustLog->contact_no,
					'email'=>$checkCustLog->email,
					'loggedIn' => TRUE
					
				);

				$this->session->set_userdata($cust_det);
				redirect('CustomerCont/viewProfile');
			}else{
				if ($checkAdmnLog_1) {
					# code...
					$this->load->view('AdmnLoginview');

				}else{
					$this->load->view('Loginview');

					echo('Details are wrong.. </br> Cannot login to the system..');

				}
			}
		}
	}

	public function adminLogView(){
		$this->load->view('AdmnLoginview');
	}

	public function logAdmin(){
		echo 'Admin logged in..';
	}
}

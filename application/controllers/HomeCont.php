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
    public function editCust(){
        $this->load->view('Customer/UserProfile');
    }

	// All users can login to the system through this...

	public function logUser(){
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email');
		$this->form_validation->set_rules('pwd', 'password', 'required');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Customer/UserProfile');


		/**
		if validation result is true...
			- first it checks login details are in Customers accounts
			- if it true then creates session of customer and links with customer profile

			-if it's not in customer then it checks login details in admin table
			- if it true then creates session of admin and links with admin profile

			else:
				it returns error message..

		**/

		}else{
			$this->load->model('CustModel');
			$checkCustLog = $this->CustModel->logCust();



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
                $this->load->model('AdminModel');
                $checkAdmnLog_1 = $this->AdminModel->logAdmn1();

				if ($checkAdmnLog_1) {
					# code...
					$admn_det = array(
						'admin_id'=>$checkAdmnLog_1->admin_id,
						'emp_id'=>$checkAdmnLog_1->emp_id,
						'fname'=>$checkAdmnLog_1->admin_fname,
						'lname'=>$checkAdmnLog_1->admin_lname,
						'email'=>$checkAdmnLog_1->email,
						'password'=>$checkAdmnLog_1->password,
						'mstrkry'=>$checkAdmnLog_1->masterkey,
						'loggedIn' => TRUE
					);
					$this->session->set_userdata($admn_det);
					//redirect('CustomerCont/viewProfile');
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
		$this->form_validation->set_rules('mstrk', 'masterkey', 'required');
		if ($this->form_validation->run()==FALSE){
			echo 'validation failed';
			$this->load->view('Loginview');
		}
		else{
			$this->load->model('AdminModel');
			$checkAdmnLog_2 = $this->AdminModel->logAdmn2();

			if ($checkAdmnLog_2) {

				//$this->session->set_userdata($admn_det1);
				redirect('AdminCont/viewUserDet');
			}else{
				redirect('AdminCont/logoutUser');

			}



		}
		//echo 'Admin logged in..';
	}
}

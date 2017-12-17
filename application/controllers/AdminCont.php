<?php 

class AdminCont extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('AdminModel', 'amc');
	}

	public function viewProfile(){
		$this->load->view('Admin/dashboard');
	}
	public function logoutUser(){
		unset(
	        $_SESSION['admin_id'],				
	        $_SESSION['emp_id'],
	        $_SESSION['fname'],
	        $_SESSION['lname'],
	        $_SESSION['email'],
	        $_SESSION['password'],
	        $_SESSION['mstrkey'],
	        $_SESSION['loggedIn']

		);
		redirect('HomeCont/viewLogin');

		
	}
	public function viewUserDet(){
		$this->load->view('Admin/userProfile');
	}

	public function editUserDet(){
		$this->form_validation->set_rules('admn_id', 'Admin id', 'required');
		$this->form_validation->set_rules('empl_id', 'Employee id', 'required');
		
	}

	public function addAdmin(){
		$this->load->view('Admin/addAdmnView');
	}

	public function manageEmp(){
		$dta['p_val'] = $this->amc->getEmpTableData();
		$this->load->view('Admin/manageEmpView', $dta);
	}

	public function viewCustDet(){
		$dta2['p_val'] = $this->amc->getCustTableData();
		$this->load->view('Admin/CustDetView', $dta2);
	}

	

	public function mngFood(){
		$dta3['p_val'] = $this->amc->getFoodTableData();
		$this->load->view('Admin/FoodView', $dta3);
	}

	public function regAdmin(){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('dob', 'Date_of_birth', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[customer.email]|is_unique[system_admin.email]');
		$this->form_validation->set_rules('pwd', 'Password', 'required|min_length[4]');
		$this->form_validation->set_rules('pwd_a', 'Password again', 'required|matches[pwd]');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Admin/addAdmin');

		}else{
			//echo 'validated succesfully';
			$this->load->model('AdminModel');
			$isReg1 = $this->AdminModel->regAdmin1();
			$isReg=FALSE;

			if($isReg1){
				$this->load->model('AdminModel');
				$isReg = $this->AdminModel->regAdmin2();
			}

			if ($isReg) {
				$this->session->set_flashdata('msg','Admin registered succesfully..');
				redirect('AdminCont/addAdmin');
			}else{
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('AdminCont/addAdmin');
			}
		}
	}

	public function addFoods(){
		$this->form_validation->set_rules('fd_nm', 'Food name', 'required|is_unique[food_items.	food_name]');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');
		$this->form_validation->set_rules('itm_price', 'Item price', 'required');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->load->view('Admin/FoodView');
		}
		else{
			$this->load->model('AdminModel');
			$checkInsert = $this->AdminModel->addFood();

			if ($checkInsert) {
				
				//$this->session->set_userdata($admn_det1);
				redirect('AdminCont/mngFood');
			}else{
				redirect('AdminCont/mngFood');

			}
		}
	}

	public function editFoods(){
		$this->form_validation->set_rules('fd_nm', 'Food name', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');
		$this->form_validation->set_rules('itm_price', 'Item price', 'required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('msg','Validated unsuccessfully.. Try again later..');
			redirect('AdminCont/mngFood');
			//$this->load->view('HomeView');

		}else{
			$this->load->model('AdminModel');
			$isReg = $this->AdminModel->updateFood();
			


				if ($isReg==TRUE) {
	                $this->session->set_flashdata('msg','Successfully updated');
					redirect('AdminCont/mngFood');


	            }else{
					$this->session->set_flashdata('msg','Updation was unsuccesful.. Try again later..');
					redirect('AdminCont/mngFood');
				}
			
		}
	}
}
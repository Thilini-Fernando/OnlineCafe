<?php 

class SuperAdminCont extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('AdminModel', 'amc');
	}

	public function viewOrderDetails(){
		$this->load->model('CustModel');
        $data3['o_val'] = $this->CustModel->viewOrder();
		$this->load->view('Super Admin/OrderDetailsView',$data3);
	}

	public function deleteEmp($id){
		$result = $this->amc->deleteEmp($id);
		if ($result) {
			$this->session->set_flashdata('msg','Successfully deleted..');
			redirect('SuperAdminCont/manageEmp');
		}else{
			$this->session->set_flashdata('msg','Deletion failed');
			redirect('SuperAdminCont/manageEmp');
		}
	}

	public function editEmp($id){
		
		$data4['e_val'] = $this->amc->getEmpDet($id);
		$this->load->view('Super Admin/EditEmpView', $data4);
	}

	public function deleteCust($id){
		
		$result = $this->amc->deleteCust($id);
		if ($result) {
			$this->session->set_flashdata('msg','Successfully deleted..');
			redirect('SuperAdminCont/viewCustDet');
		}else{
			$this->session->set_flashdata('msg','Deletion failed');
			redirect('SuperAdminCont/viewCustDet');
		}
	}

	public function viewProfileDet($ourAdmin){
		$this->load->model('AdminModel');
        $data3['u_val'] = $this->AdminModel->getAdminDetail($ourAdmin);
        return $data3;
		
		//$this->load->view('Admin/dashboard');
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
	        $_SESSION['supadmn_loggedIn']

		);
		redirect('HomeCont/viewLogin');

		
	}

	public function viewUserDet(){
		$this->load->model('AdminModel');
        //$data1 = $this->AdminModel->viewProf1();
        $data2 = $this->AdminModel->viewProf2();
        //$this->load->view('Customer/UserProfile', $data);
		$this->load->view('Super Admin/userProfile',$data2);
	}

	public function editUserDet(){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('eml', 'Admin id', 'required|valid_email');
		$this->form_validation->set_rules('cntct', 'Contact', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		
		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->session->set_flashdata('msg','Validation failed');
			redirect('SuperAdminCont/viewUserDet');

		}else{
			//echo 'validated succesfully';
			$this->load->model('AdminModel');
			$isEdited = $this->AdminModel->editAdmin1();
			$isEdited2 = FALSE;

			if($isEdited){
				$isEdited2 = $this->AdminModel->editAdmin2();

				if($isEdited2){
					$this->session->set_flashdata('msg','Edited Succesfully..');
					redirect('SuperAdminCont/viewUserDet');
				}else{
					$this->session->set_flashdata('msg','Something went wrong.. </br> Try Again later..');
					redirect('SuperAdminCont/viewUserDet');
				}
				
			}else{
				$this->session->set_flashdata('msg','Something went wrong.. </br> Try Again later..');
				redirect('SuperAdminCont/viewUserDet');
			}
		}
	}

	public function editEmpCont($id){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('eml', 'Admin id', 'required|valid_email');
		$this->form_validation->set_rules('cntct', 'Contact', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('msg','Validation failed');
			redirect('SuperAdminCont/manageEmp');

		}else{
			$this->load->model('AdminModel');
			$isEdited = $this->AdminModel->editEmp($id);

			if($isEdited){
				$this->session->set_flashdata('msg','Edited Succesfully..');
				redirect('SuperAdminCont/manageEmp');				
			}else{
				$this->session->set_flashdata('msg','Something went wrong.. </br> Try Again later..');
				redirect('SuperAdminCont/manageEmp');
			}
		}
	}

	public function addAdmin(){
		$this->load->view('Super Admin/addAdmnView');
	}

	

	public function manageEmp(){
		$dta['p_val'] = $this->amc->getEmpTableData();
		$this->load->view('Super Admin/manageEmpView', $dta);
	}

	public function viewCustDet(){
		$dta2['p_val'] = $this->amc->getCustTableData();
		$this->load->view('Super Admin/CustDetView', $dta2);
	}

	

	public function mngFood(){
		$dta3['p_val'] = $this->amc->getFoodTableData();
		$this->load->view('Super Admin/FoodView', $dta3);
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
			$this->session->set_flashdata('msg','Validation failed..');
				redirect('SuperAdminCont/addAdmin');

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
				redirect('SuperAdminCont/addAdmin');
			}else{
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('SuperAdminCont/addAdmin');
			}
		}
	}

	public function addFoods(){
		$this->form_validation->set_rules('fd_nm', 'Food name', 'required|is_unique[food_items.	food_name]');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');
		$this->form_validation->set_rules('itm_price', 'Item price', 'required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('msg','Validation failed...');
			redirect('SuperAdminCont/mngFood');
		}
		else{
			$this->load->model('AdminModel');
			$checkInsert = $this->AdminModel->addFood();

			if ($checkInsert) {
				
				$this->session->set_flashdata('msg','Food item added successfuly..');				redirect('SuperAdminCont/mngFood');
			}else{
				$this->session->set_flashdata('msg','Something went wrong.. <br> Try again later..');
				redirect('SuperAdminCont/mngFood');

			}
		}
	}

	public function editFoods(){
		$this->form_validation->set_rules('fd_nm', 'Food name', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required');
		$this->form_validation->set_rules('itm_price', 'Item price', 'required');

		if ($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('msg','Validated unsuccessfully.. Try again later..');
			redirect('SuperAdminCont/mngFood');
			//$this->load->view('HomeView');

		}else{
			$this->load->model('AdminModel');
			$isReg = $this->AdminModel->updateFood();
			


				if ($isReg==TRUE) {
	                $this->session->set_flashdata('msg','Successfully updated');
					redirect('SuperAdminCont/mngFood');


	            }else{
					$this->session->set_flashdata('msg','Updation was unsuccesful.. Try again later..');
					redirect('SuperAdminCont/mngFood');
				}
			
		}
	}

	//addEmployee Controler
	public function addEmployee(){
		$this->load->view('Super Admin/AddEmpView');
	}

	//Employee Registration Controler
	public function regEmp(){
		$this->form_validation->set_rules('fnm', 'First name', 'required');
		$this->form_validation->set_rules('lnm', 'Last name', 'required');
		$this->form_validation->set_rules('addr', 'Address', 'required');
		$this->form_validation->set_rules('dob', 'date of birth', 'required');
		$this->form_validation->set_rules('cntct', 'Contact no', 'required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('eml', 'email', 'required|valid_email|is_unique[employee.email]');

		if ($this->form_validation->run()==FALSE){
			//echo 'validation failed';
			$this->session->set_flashdata('msg','Validation failed..');
			redirect('SuperAdminCont/addEmployee');

		}else{
			//echo 'validated succesfully';
			$this->load->model('AdminModel');
			$isReg1 = $this->AdminModel->regEmp();
			$isReg2=FALSE;
			
			
			if ($isReg1==FALSE) {
				$this->session->set_flashdata('msg','Registration was unsuccesful.. Try again later..');
				redirect('SuperAdminCont/addEmployee');
				# code...
			}
			if($isReg1==TRUE){
				$this->load->model('AdminModel');
				$isReg2 = $this->AdminModel->regDelCrew();
			}

			if ($isReg2==TRUE) {
                $this->session->set_flashdata('msg','Delivery Crew registered succesfully..');
				redirect('SuperAdminCont/addEmployee');


            }else{
				$this->session->set_flashdata('msg','Employee registered succesfully..');
				redirect('SuperAdminCont/addEmployee');
			}
		}
	}
}
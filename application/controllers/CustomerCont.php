<?php 

class CustomerCont extends CI_Controller{

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
    public function viewProfile(){
        $this->load->model('CustModel');
        $data = $this->CustModel->viewProf();
        $this->load->view('Customer/UserProfile', $data);

    }
	public function viewFoodItems()
    {
        $this->load->model('CustModel');
        $data2['f_val'] = $this->CustModel->viewFood();
        $this->load->view("Customer/ViewFood",$data2);

    }
    public function viewOrderDetails()
    {
        $this->load->model('CustModel');
        $data3['o_val'] = $this->CustModel->viewOrder();
        $this->load->view("Customer/OrderDetails",$data3);

    }


    public function addOrder()
    {
        $this->form_validation->set_rules('qty', 'Quantity', 'required');

        if ($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('msg','Try again..');
            redirect('HomeCont/order');

        }else{
            //echo 'validated succesfully';
            $this->load->model('CustModel');
            $isOrder = $this->CustModel->addNewOrder();

            if ($isOrder) {
                $this->session->set_flashdata('msg','Successfully');
                redirect('HomeCont/orderNow');


            }else{
                $this->session->set_flashdata('msg',' Try again ..');
                redirect('HomeCont/order');
            }
        }
    }


    public function orderLater()
    {
        $this->load->view("Customer/OrderLater");

    }
    public function editCust()
    {
        $this->form_validation->set_rules('fname', 'First name', 'required');
        $this->form_validation->set_rules('lname', 'Last name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('contact', 'Contact no', 'required|max_length[10]|min_length[10]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
//        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
//        $this->form_validation->set_rules('pwd_a', 'Password again', 'required|matches[pwd]');
        if ($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('msg','Validation failed.. <br> Try again..');
            redirect('HomeCont/editCust');

        }else{
            //echo 'validated succesfully';
            $this->load->model('CustModel');
            $isUpdate = $this->CustModel->editCustomer();

            if ($isUpdate) {
                $this->session->set_flashdata('msg','edit was succesfull');
                $this->load->model('CustModel');
                $data1=$this->CustModel->viewProf();
                $this->load->view('Customer/UserProfile', $data1);



            }else{
                $this->session->set_flashdata('msg','edit was unsuccesful.. Try again later..');
                redirect('HomeCont/editCust');
            }
        }

    }

}
<?php 

class CustomerCont extends CI_Controller{
	public function viewProfile(){
		$this->load->view('CustProfile');
	}
	public function logoutUser(){
		unset($_SESSION['user_id']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['address']);
		unset($_SESSION['contact']);
		unset($_SESSION['email']);
		unset($_SESSION['loggedIn']);
		redirect('HomeCont/viewLogin');
	}
}
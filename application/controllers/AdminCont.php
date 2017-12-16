<?php 

class AdminCont extends CI_Controller{
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
}
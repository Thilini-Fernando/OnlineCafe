<?php

/**
 *
 */
class EditCustCont extends CI_Controller
{

    function editCust()
    {
        $this->load->model('CustModel');
        $result = $this->CustModel->EditCustomer();
        if ($result == true) {
            $this->session->set_flashdata('msg','Customer profile edited succesfully..');
            redirect('CustomerCont/viewProfile');
        }
        else {
            $this->session->set_flashdata('msg','Unsuccesfully..');
            redirect('CustomerCont/viewProfile');
        }


    }
}

<?php

echo($this->session->userdata('fname').' '.$this->session->userdata('lname')." Customer logged in..");
?>
<a href="<?php echo base_url('index.php/CustomerCont/logoutUser') ?>">logout</a>
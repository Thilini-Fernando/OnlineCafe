
<?php include 'HnF/header.php'?>

<div class="content" style="color:#FFFFFF; background-image:url('https://s3.amazonaws.com/assets.forward.com/images/cropped/screen-shot-2017-10-15-at-22528-pm-1508093841.png');background-size: 1150px 700px;">
    <h3>
        <?php echo ''.$this->session->userdata('fname').' '.$this->session->userdata('lname').' is here..' ?>

    </h3>

    <?php if($this->session->flashdata('msg')){
        echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
    } ?>


    <div class="col-lg-offset-2">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-8")">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Your Profile Details</h4>
                    </div>
                    <div class="content" >

                        <?php echo form_open('CustomerCont/editCust'); ?>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Email"  value="<?= $email?>" name="email">
                                    </div>
                                </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input type="text" class="form-control" placeholder="Contact No"  value="<?= $contact_no?>" name="contact">
                                    </div>
                                </div>
                            </div>

                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" placeholder="Company"  value="<?= $cust_fname?>" name="fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name"  value="<?= $cust_lname?>" name="lname">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" placeholder="Home Address"  value="<?= $address?>" name="address">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                            <div class="clearfix"></div>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
            <div class="col-md-4">


                    </div>
<!--            <div class="card" style="width:200px">-->
<!---->
<!--                <img class="right" src="/assets/Customer_assets/img/prof.jpeg" alt="Card image">-->
<!--                <div class="card-body">-->
<!--                </div>-->
<!--            </div>-->

                </div>
</div>
            </div>

        </div>
    </div>
</div>



</div>
</div>

<?php include 'HnF/footer.php'?>

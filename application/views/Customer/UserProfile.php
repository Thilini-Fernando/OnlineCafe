
<?php include 'HnF/header.php'?>

<div class="content">
    <h3>
        <?php echo ''.$this->session->userdata('fname').' '.$this->session->userdata('lname').' is here..' ?>

    </h3>

    <?php if($this->session->flashdata('msg')){
        echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
    } ?>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Your Profile Details</h4>
                    </div>
                    <div class="content">

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
                <div class="card card-user">
                    <div class="image">
                        <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                    </div>
                    <div class="content">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="assets/img/faces/face-3.jpg" alt="..."/>

                                <h4 class="title">Mike Andrew<br />
                                    <small>michael24</small>
                                </h4>
                            </a>
                        </div>
                        <p class="description text-center"> "Lamborghini Mercy <br>
                            Your chick she so thirsty <br>
                            I'm in that two seat Lambo"
                        </p>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                        <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



</div>
</div>

<?php include 'HnF/footer.php'?>

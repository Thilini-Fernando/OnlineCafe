<?php include 'HnF/header.php' ?>



        <div class="content">

            <?php if($this->session->flashdata('msg')){
                echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
            } ?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Admin Details</h4>
                                
                            </div>
                            <div class="content">
                                <?php echo form_open('AdminCont/editUserDet'); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Admin Id</label>
                                                <input type="text" disabled="true" name="admn_id" class="form-control" value="<?php echo $this->session->userdata('admin_id'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Emp Id</label>
                                                <input type="text" disabled name="empl_id" class="form-control" value="<?= $emp_id ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" name="fnm" class="form-control" placeholder="First name" value="<?= $emp_fname ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" name ="lnm" class="form-control" placeholder="Last rname" value="<?= $emp_lname ?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="eml" class="form-control" placeholder="Email" value="<?= $email ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact no</label>
                                                
                                                <input type="text" name="cntct" class="form-control" placeholder="Contact" maxlength="10" minlength="10" value="<?= $contact_no ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name='addr' class="form-control" placeholder="Home Address" value="<?= $address ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <!--div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                            </div>
                                        </div>
                                    </div-->

                                    <button type="submit" class="btn btn-success btn-fill pull-right">Update Profile</button>
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
                                    <img class="avatar border-gray" src="<?php echo base_url("assets/Admin_assets/img/faces/face-3.jpg"); ?>" alt="..."/>

                                      <h4 class="title"><?php echo ($this->session->userdata('fname')." ".$this->session->userdata('lname')); ?><br />
                                         
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center">System Administrator <br>
                                    .. ServeMe Online Bakers ..
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


<?php include 'HnF/footer.php' ?>
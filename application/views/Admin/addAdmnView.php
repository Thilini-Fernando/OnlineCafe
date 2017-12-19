<?php include 'HnF/header.php' ?>

    <?php if($this->session->flashdata('msg')){
                echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
            } ?>

        <div class="content">
            <div class="container-fluid">
                <div class="container" align="center" style="text-align: left;">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Admin Registration Form</h4>
                                
                            </div>
                            <div class="content">
                                <?php echo form_open('AdminCont/regAdmin'); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" name="fnm" class="form-control" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" name = "lnm" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Date of Birth</label>
                                                <input type="Date" name="dob" class="form-control" placeholder="19XX-XX-XX">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contact no</label>
                                                <input type="text" name="cntct" class="form-control" placeholder="Last Name" maxlength="10" minlength="10">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="addr" type="text" class="form-control" placeholder="Home Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="eml" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>                                        

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" name="pwd" class="form-control" placeholder="password" minlength="4">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password again</label>
                                                <input type="password" name="pwd_a" class="form-control" placeholder="password again" minlength="4">
                                            </div>
                                        </div>
                                    </div>                              
                                    
                                    <button type="submit" class="btn btn-success btn-fill pull-right">Register Admin</button>
                                    <div class="clearfix"></div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>


<?php include 'HnF/footer.php' ?>


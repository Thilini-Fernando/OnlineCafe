<?php include 'HnF/header.php' ?>

	<div class="content">
            <div class="container-fluid">
                <div class="container" align="center" style="text-align: left;">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Employee Form</h4>
                                
                            </div>
                            <div class="content">
                                <?php echo form_open('SuperAdminCont/editEmpCont/'.$e_val->emp_id); ?>
                                    
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>emp_id</label>
                                                <input type="text" name="empl_id"; disabled class="form-control" placeholder="First name" value="<?php echo("$e_val->emp_id"); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="Date" name ="dob" disabled class="form-control" placeholder="Last name" value="<?php echo("$e_val->dob"); ?>">
                                            </div>
                                        </div>
                                        
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">First name</label>
                                                <input type="text" name="fnm" class="form-control" placeholder="eg:- Nimal" value=<?php echo("$e_val->emp_fname") ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Last name</label>
                                                <input type="text" name="lnm" class="form-control" placeholder="eg:- Perera" value=<?php echo("$e_val->emp_lname") ?>>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input name="addr" type="text" class="form-control" placeholder="Home Address" value=<?php echo("$e_val->address") ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Position</label>
                                                <input disabled type="select" name="pstn" class="form-control" placeholder="position" value=<?php echo("$e_val->position") ?>>
                                            </div>
                                        </div>
                                    </div>                                        

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="email" name="eml" class="form-control" placeholder="email" value=<?php echo("$e_val->email") ?>>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact no</label>
                                                <input type="text" name="cntct" class="form-control" placeholder="Contact no" maxlength="10" minlength="10" value=<?php echo("$e_val->contact_no") ?>>
                                            </div>
                                        </div>
                                    </div>                              
                                    
                                    <button type="submit" class="btn btn-success btn-fill pull-right">Edit Employee</button>
                                    <div class="clearfix"></div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

<?php include 'HnF/footer.php' ?>
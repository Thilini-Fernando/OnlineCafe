<?php include 'HnF/header.php' ?>

	<div class="content">
		<?php if($this->session->flashdata('msg')){
            echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
        } ?>
            <div class="container-fluid">
                <div class="container" align="center" style="text-align: left;">
                    <div class="col-lg-10 col-md-10">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Employee Registration Form</h4>
                                
                            </div>
                        <div class="content">
                        	
                        <?php echo form_open('AdminCont/regEmp'); ?>

							<div class="row col-md-12 col-lg-12">

								<div class="form-group col-lg-6">
								    <label>First name</label>
							    	<input type="text" class="form-control" placeholder="eg: Nimal" pattern="^[.A-z ]{1,}$" name ="fnm">
								</div>
								<div class="form-group col-lg-6">
								    <label>Last name</label>
								    <input type="text" class="form-control" placeholder="eg: Perera" pattern="^[.A-z ]{1,}$" name="lnm">
								</div>
							</div>
							<div class="row col-md-12 col-lg-12">
							
								<div class="form-group col-lg-6">
									<label>Address</label>
								    <input type="text" class="form-control" placeholder="address" name="addr">
								</div>
								<div class="form-group col-lg-6">
								    <label>Date of birth</label>
								    <input type="date" class="form-control" min="1967-01-01" placeholder="19XX-xx-xx" name="dob">
								</div>
							</div>
							<div class="row col-md-12 col-lg-12">

								<div class="form-group col-lg-6">
								    <label>Contact no</label>
								    <input type="text" class="form-control" placeholder="07X-XXXXXXX" pattern="^[0]+[0-9]{9}" name="cntct">
								</div>
								
								<div class="form-group col-lg-6">
								    <label>Email address</label>
								    <input type="email" class="form-control" placeholder="__@email.com"  pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="eml">
								</div>
							</div>

								<!--
								<div class="checkbox">
									<label><input type="checkbox" name="dlvry">Selected for delivery crew</label>
								</div>
								-->

								<div class="form-check">
				    				<label class="form-check-label">
				      				<input class="form-check-input" type="checkbox" name="dlvry">
				      				Selected for delivery crew
				    				</label>
				  				</div>
								
										 
								
								<div>
									<button type="submit" class="btn btn-default">Submit Form</button>
								</div>			

								<br>

							</div>		
			
							<?php echo form_close(); ?>	
                        </div>
                    </div>
                </div>
            </div>
    </div>



		

	

	

<?php include 'HnF/footer.php' ?>

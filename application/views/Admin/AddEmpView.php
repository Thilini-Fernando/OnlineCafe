<?php include 'HnF/header.php' ?>

	<div class="container col-lg-12" align="center" style="text-align: center;">
		
		<h3><b>
			Employee Registration
		</b></h3>

		<?php if($this->session->flashdata('msg')){
			echo "<h2>"."<SMALL>".$this->session->flashdata('msg')."</SMALL>"."</h2>";
		} ?>

		<hr>				

		
		<?php echo form_open('AdminCont/regEmp'); ?>

		<!--div class="container"-->
			<div class="container col-lg-12" align="right" style="text-align: left;">
				<div class="row col-lg-12">
					<div class="form-group col-lg-6">
					    <label>First name</label>
				    	<input type="text" class="form-control" placeholder="eg: Nimal" name ="fnm">
					</div>
					<div class="form-group col-lg-6">
					    <label>Last name</label>
					    <input type="text" class="form-control" placeholder="eg: Perera" name="lnm">
					</div>
				</div>
				
				<div class="row col-lg-12">

					<div class="form-group col-lg-6">
						<label>Address</label>
					    <input type="text" class="form-control" placeholder="address" name="addr">
					</div>
					<div class="form-group col-lg-6">
					    <label>Date of birth</label>
					    <input type="date" class="form-control" min="1967-01-01" placeholder="19XX-xx-xx" name="dob">
					</div>
				</div>

				<div class="row col-lg-12">

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
				<div class="col-lg-12">
					<div class="form-check">
	    				<label class="form-check-label">
	      				<input class="form-check-input" type="checkbox" name="dlvry">
	      				Selected for delivery crew
	    				</label>
  					</div>
				
						<br> 
				
					<div class="col-lg-12">
						<button type="submit" class="btn btn-info">Submit Form</button>
					</div>	
				</div>
						

				<br>

			</div>
		<!--/div-->
			
			
		<?php echo form_close(); ?>	

		
		
	</div>

	<br>

<?php include 'HnF/footer.php' ?>

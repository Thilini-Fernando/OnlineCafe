 <?php include 'HnF/header.php' ?>

 	<br>

	<div class="Regcontainer"  style="color: whitesmoke">
		<br>
		<h1><b>
			<center>Customer Registration Form</center>
		</b></h1>

		<?php if($this->session->flashdata('msg')){
			echo "<h2>"."<center>"."<SMALL>".$this->session->flashdata('msg')."</center>"."</SMALL>"."</h2>";
		} ?>	

		<hr>					
		<?php echo form_open('CustomerCont/regCustomer'); ?>
			
			<div class="container col-sm-5 col-sm-offset-3" style="background-color: black ; border-radius: 10px">
				<br>
				<div class="form-group">
				    <label for="exampleInputEmail1"><b>First name/b></label>
			    	<input type="text" class="form-control" id="exampleInputEmail1" placeholder="eg: Nimal" name ="fnm">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1"><b>Last name</b></label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="eg: Perera" name="lnm">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1"><b>Address</b></label>
				    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="address" name="addr">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1"><b>Contact no</b></label>
				    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="07X-XXXXXXX" name="cntct" minlength="10" maxlength="10" min=0110000000>
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1"><b>Email address</b></label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="user@email.com" name="eml">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1"><b>Password</b></label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd" minlength="4">
				</div>
				<div class="form-group">
				    <label for="exampleInputPassword1"><b>Confirm Password</b></label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password again" name="pwd_a" minlength="4">
				</div >			 

				<div> 
					<button type="submit" class="btn btn-success"><b> Submit form </b></button>
				</div>			
				
				<br>
			
			</div>
			
		<?php echo form_close(); ?>	

		<br>
	
	</div>

	<br>

<?php include 'HnF/footer.php' ?>
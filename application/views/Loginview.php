<?php include 'HnF/header.php' ?> 

	<div class="container" >

		<br>

		<center >
			<h1><b>Login Form</b></h1>

		</center>

		<!--//php if($this->session->flashdata('msg2')){
			//echo "<h2>"."<SMALL>".$this->session->flashdata('msg2')."</SMALL>"."</h2>";
		//}--> 

		<hr>
		<?php echo validation_errors(); ?>
		

		<?php echo form_open('HomeCont/logUser'); ?>

			<div class="container" style="background-color: white;">

				<br>

				<div class="container col-sm-6 col-sm-offset-3" style="background-color: lightgrey">

					<br>

					<div class="form-group">
					    <label for="exampleInputEmail1"><b>Email address</b></label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="__@xmail.com" name="eml">
					</div>
					<div class="form-group">
					    <label for="exampleInputPassword1"><b>Password</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
					</div>
					  
					<div>
						<button type="submit" class="btn btn-success"><b>Login</b></button>
					</div>

					<br>

				</div>

				<br>

			</div>

			<br>
		<?php echo form_close(); ?>
	</div>

<?php include 'HnF/footer.php' ?>   

<?php include 'HnF/header.php' ?>

	<br>

	<div class="container" style="color: whitesmoke" >
		<br>
		<center>
			<h1><b>Admin Login Form</b></h1>
			<h2><b>You need to input your pin no..</b></h2>
			<br>
			
		</center>

		<?php if($this->session->flashdata('msg2')){
			echo "<h2>"."<SMALL>".$this->session->flashdata('msg2')."</SMALL>"."</h2>";
		} ?>

		<hr>
		<?php echo validation_errors(); ?>
		


		<?php echo form_open('HomeCont/logAdmin'); ?>

			<div class="container">

				<br>
				<div class="container col-sm-5 col-sm-offset-3" style="background-color: black">

					<br>

					<div class="form-group">
					    <label for="exampleInputPassword1"><b>Master key</b></label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Master key" name="mstrk">
					</div>

					<div align="right"> 
						<button type="submit" class="btn btn-success"><b>Continue..</b></button>
					</div>

					<br> 

				</div>
				<br>
			</div>
			

		<?php echo form_close(); ?>
		<br>
	</div>

	<br>

<?php include 'HnF/footer.php' ?>